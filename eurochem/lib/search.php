<?php
function list_searcheable_acf(){
  $list_searcheable_acf = array("ms_title", "ms_text", "suc_column_title", "suc_column_text");
  return $list_searcheable_acf;
}


function my_search() {
    $term = strtolower( $_GET['query'] );
    $suggestions = array();
    global $wpdb;
    // explode search expression to get search terms
    $exploded = explode( ' ', $term );
    if( $exploded === FALSE || count( $exploded ) == 0 )
        $exploded = array( 0 => $terms );
    // reset search in order to rebuilt it as we whish
    $where = '';
    
    // get searcheable_acf, a list of advanced custom fields you want to search content in
    $list_searcheable_acf = list_searcheable_acf();
    foreach( $exploded as $tag ) :
        $where .= " 
          AND (
            (wp_posts.post_title LIKE '%$tag%')
            OR (wp_posts.post_content LIKE '%$tag%')
            OR EXISTS (
              SELECT * FROM wp_postmeta
                WHERE post_id = wp_posts.ID
                  AND (";
        foreach ($list_searcheable_acf as $searcheable_acf) :
          if ($searcheable_acf == $list_searcheable_acf[0]):
            $where .= " (meta_key LIKE '%" . $searcheable_acf . "%' AND meta_value LIKE '%$tag%') ";
          else :
            $where .= " OR (meta_key LIKE '%" . $searcheable_acf . "%' AND meta_value LIKE '%$tag%') ";
          endif;
        endforeach;
          $where .= ")
            )
            OR EXISTS (
              SELECT * FROM wp_comments
              WHERE comment_post_ID = wp_posts.ID
                AND comment_content LIKE '%$tag%'
            )
            OR EXISTS (
              SELECT * FROM wp_terms
              INNER JOIN wp_term_taxonomy
                ON wp_term_taxonomy.term_id = wp_terms.term_id
              INNER JOIN wp_term_relationships
                ON wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id
              WHERE (
              taxonomy = 'post_tag'
                OR taxonomy = 'category'              
                OR taxonomy = 'myCustomTax'
              )
                AND object_id = wp_posts.ID
                AND wp_terms.name LIKE '%$tag%'
            )
        )";
    endforeach;

    $myrows = $wpdb->get_results( "
      SELECT * FROM $wpdb->posts WHERE post_status = 'publish' $where");
    //var_dump($myrows);
    foreach ( $myrows as $myrow ) {
      //echo $myrow->post_title;
      if($myrow->post_type === 'page' || $myrow->post_type === 'post'){
        $suggestion = array();
        $suggestion['value'] = $myrow->post_title;
        $suggestion['data'] = esc_url( get_permalink($myrow->ID) );
        $suggestions[] = $suggestion;
      }
      
    }

    $response = json_encode( array("suggestions"=>$suggestions) );
    echo  $response;
    exit();

}

add_action( 'wp_ajax_my_search', 'my_search' );
add_action( 'wp_ajax_nopriv_my_search', 'my_search' );