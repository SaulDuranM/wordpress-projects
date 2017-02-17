<?php 
$dist_path = get_template_directory_uri() . '/dist/'; 

function get_excerpt($content){
	$content = substr($content, 0, 90);
	$content = substr($content, 0, strripos($content, " "));
	$content = trim(preg_replace( '/\s+/', ' ', $content));
	$content = $content.'...';
	return $content;
}
function get_excerpt_sm($content){
	$content = substr($content, 0, 60);
	$content = substr($content, 0, strripos($content, " "));
	$content = trim(preg_replace( '/\s+/', ' ', $content));
	$content = $content.'...';
	return $content;
}
function get_excerpt_b($content){
	$content = substr($content, 0, 300);
	$content = substr($content, 0, strripos($content, " "));
	$content = trim(preg_replace( '/\s+/', ' ', $content));
	$content = $content.'...';
	return $content;
}
function ltype($lmedia) {
	list($dep, $type) = split('[_]', $lmedia);
	$result = '';
	switch ($type) {
		case 'episodes':
			$result = 'episode';
			break;
		case 'clips':
			$result = 'clip';
			break;
		case 'articles':
			$result = 'article';
			break;
		default:
			$result = '';
	}
	return $result;
}
function dtype($depa) {
	$result = '';
	switch ($depa) {
		case 'News':
			$result = 'news';
			break;
		case 'Sports':
			$result = 'sports';
			break;
		case 'Entertainment':
			$result = 'enter';
			break;
		default:
			$result = '';
	}
	return $result;
}
?>