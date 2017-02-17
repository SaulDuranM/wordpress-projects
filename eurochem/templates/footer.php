	<? $dist_path = get_template_directory_uri() . '/dist/'; ?>
	<? $dist_path_t = get_template_directory_uri(); ?>
	<footer >
	  <!--<div class="container">
	    <?php dynamic_sidebar('sidebar-footer'); ?>
	  </div>-->
	  <div class="footer clearfix">
	  	<div class="footnav">
	  		<ul class="clearfix">
	  			<li><a href="#">Cookies Policy</a></li>
				<li><a href="#">Glossary</a></li>
				<li><a href="#">Terms of use</a></li>
				<li><a href="#">Accessibility</a></li>
				<li>Follow us:</li>
			</ul>
		</div>
		<div class="share-w">
			<ul class="clearfix">
				<li>
					<a href="#">
						<svg role="img" title="share-fb" class="icon">
							<use xlink:href="<? echo $dist_path; ?>images/general/svgdefs.svg#icon-share-tw2"/>
						</svg>
					</a>
				</li>
				<li>
					<a href="#">
						<svg role="img" title="share-fb" class="icon">
							<use xlink:href="<? echo $dist_path; ?>images/general/svgdefs.svg#icon-share-fb2"/>
						</svg>
					</a>
				</li>
				<li>
					<a href="#">
						<svg role="img" title="share-fb" class="icon">
							<use xlink:href="<? echo $dist_path; ?>images/general/svgdefs.svg#icon-share-this2"/>
						</svg>
					</a>
				</li>
				<li>
					<a href="#">
						<svg role="img" title="share-fb" class="icon">
							<use xlink:href="<? echo $dist_path; ?>images/general/svgdefs.svg#icon-share-in2"/>
						</svg>
					</a>
				</li>
			</ul>
		</div>
		<div class="copyright">
			<p>© Copyright 2014</p>
		</div>
	</div>


	</footer>
</div>

 <!-- Main scripts. You can replace it, but I recommend you to leave it here     -->
<script type="text/javascript" src="<? echo $dist_path_t; ?>/static/js/main.js"></script>

<script type="text/javascript" src="<? echo $dist_path_t; ?>/static/js/separate-js/jquery.fancybox-media.js"></script>
<script type="text/javascript" src="<? echo $dist_path_t; ?>/static/js/separate-js/verge.min.js"></script>
<script type="text/javascript" src="<? echo $dist_path_t; ?>/static/js/separate-js/start.js"></script>
<script type="text/javascript" src="<? echo $dist_path_t; ?>/static/js/vendor/jquery.autocomplete.js"></script>

<!-- ICS -->
<script type="text/javascript" src="<? echo $dist_path_t; ?>/static/js/ics/ics.deps.min.js"></script>

<?php $searchurl = admin_url( 'admin-ajax.php' );?>
<script type="text/javascript">
(function( $ ) {
  $(function() {
    //setTimeout(function(){
    console.log("autocomplete") 
    var url = "<?=$searchurl;?>?action=my_search";
      $('#s').autocomplete({
          serviceUrl: url,
          appendTo: $('.searchdrop__results'),
          showNoSuggestionNotice: true,
          minChars: 3,
          onHide: function (container) {
          	$('.searchdrop__results').height(60);
          },
          onSelect: function (suggestion) {
          	location.pathname = suggestion.data;
          	//alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
          },
          onSearchComplete: function (query, suggestions) {
          	console.log($('.searchdrop__results').height());
          	var h = 60 + (suggestions.length * 40);
          	$('.searchdrop__results').height(h);
          	if(suggestions.length < 1){
          		$('.searchdrop__results').height(60);
          	}
          }
      });
      console.log("autocomplete")
    //}, 4000);
  });

})( jQuery );

</script>



<!--<script type="text/javascript" src="http://dev.somosunachulada.mx/artificial/eurochem/scripts/start.js"></script>-->