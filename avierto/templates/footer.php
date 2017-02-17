<?php $dist_path = get_template_directory_uri() . '/dist/'; ?>	
<!-- Footer -->
<footer>
	<div class="row <?= $color_bar_1; ?> footer">
		<div class="col-xs-12 footer-logo">
			<img src="<?= $dist_path; ?>images/logo-avierto.png" style="height:33px; width:160px;">
		</div>
		<div class="col-xs-12">
			<ul>
				<?php if( have_rows('menu_secciones_top', 'option') ): 
				while( have_rows('menu_secciones_top', 'option') ): the_row();
				?>
				<li class="footer-list"><a class="folink" href="<?= get_sub_field('menu_link') ?>"><?= get_sub_field('menu_seccion') ?></a></li>
				<?php endwhile; endif; ?>
				<?php if( have_rows('menu_secciones_bottom', 'option') ): 
				while( have_rows('menu_secciones_bottom', 'option') ): the_row();
				?>
				<li class="footer-list"><a class="folink" href="<?= get_sub_field('menu_link') ?>"><?= get_sub_field('menu_seccion') ?></a></li>
				<?php endwhile; endif; ?>
			</ul>
		</div>
		<div class="col-xs-12">
			<a href="https://www.facebook.com/DeportivoAVIERTO/" target="_blank"><img class="footer-s" src="<?= $dist_path; ?>images/face.png"></a>
			<a href="https://twitter.com/aviertofutbol5" target="_blank"><img class="footer-s" src="<?= $dist_path; ?>images/twit.png"></a>
			<a href="https://www.instagram.com/aviertomx/" target="_blank"><img class="footer-s" src="<?= $dist_path; ?>images/inst.png"></a>
		</div>
		<div class="col-xs-12 footer-info">
			6394 - 6555, <a href="mailto:info@avierto.com.mx">info@avierto.com.mx,</a> Cda. de la paz 10, Escandón.
		</div>
		<div class="col-xs-12 copyright <?= $color_bar_2; ?>">
			&copy;2016 Avierto, Derechos Reservados | <a href="http://avierto.com.mx/terminos-y-condiciones/">Términos y condiciones</a> | <a href="http://avierto.com.mx/politica-de-privacidad/">Política de privacidad</a> | Fotos: Fernanda Sánchez Paredes-3A+C-LaChulada | Sitio: <a href="http://somosunachulada.mx">LaChulada</a>
		</div>
		
	</div> <!-- /Footer -->
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73897505-1', 'auto');
  ga('send', 'pageview');

</script>