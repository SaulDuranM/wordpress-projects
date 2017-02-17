<footer class="content-info">
  <div class="container-fluid">
    <div class="footer-join">
    	<div class="footer-join-title">
    		Become Part of the CitrusTV Team!
    	</div>
    	<div class="footer-join-cta">
    		<a href="<?=get_site_url()?>/join" class="footer-join-cta-a">Join Us</a>
    	</div>
    </div>

    <div class="footer-nav">
    	<div class="row">
    		<div class="col-md-7 col-sm-12 footer-nav-menu">
    			<div class="row">
    				<div class="col-sm-4">
    					<div class="footer-nav-title">News</div>
    					<?wp_nav_menu( array('menu' => 'Footer - News', 'container_class' => 'footer-nav-dep') );?>
    				</div>
    				<div class="col-sm-4">
    					<div class="footer-nav-title">Sports</div>
    					<?wp_nav_menu( array('menu' => 'Footer - Sports', 'container_class' => 'footer-nav-dep') );?>
    				</div>
    				<div class="col-sm-4">
    					<div class="footer-nav-title">Entertainment</div>
    					<?wp_nav_menu( array('menu' => 'Footer - Entertainment', 'container_class' => 'footer-nav-dep') );?>
    				</div>
    			</div>
    		</div>
    		<div class="col-md-5 col-sm-12">
    			<div class="footer-copy">
    				As an entirely student-run television studio, CitrusTV serves the Syracuse University and State University of New York College of Environmental Science and Forestry campus community with high-quality student-produced entertainment, news and sports programming; and provides experiential hands-on learning opportunities for all SU and SUNY-ESF students to work in a comfortable environment with state-of-the-art equipment.
    			</div>
    			<!-- SOCIAL -->
	          	<div class="social">
	            	<a class="social-tt" href="https://twitter.com/citrustv" target="_blank"></a>
	            	<a class="social-fb" href="https://www.facebook.com/citrustv" target="_blank"></a>
	            	<a class="social-yt" href="https://www.youtube.com/citrustv" target="_blank"></a>
	          	</div>
    		</div>
    	</div>
    </div>

    <div class="footer-copyright">
    	<div>Copyright 2016, CitrusTV <a href="mailto:info@citrustv.com">info@citrustv.com</a>  •  (315) 443-2041  •  316 Waverly Ave., Syracuse, NY 13244</div>
        <div><a class="bdgLogo" href="http://breakthroughdesign.com">Design by Syracuse Web Design | Web Design Syracuse</a></div>
    </div>

    <?php //dynamic_sidebar('sidebar-footer'); ?>
  </div>
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-80270533-1', 'auto');
      ga('send', 'pageview');

    </script>

</footer>

