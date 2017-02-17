<?php
/**
 * Template Name: Contacto
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<?php
	$dist_path = get_template_directory_uri() . '/dist/';
	$dist_path_t = get_template_directory_uri();
	?>
	<!-- MENU OVERLAY -->
    <?php get_template_part('templates/menu'); ?>

    <main class="content sections sec-contacto">
     	<!-- MENU -->
       <?php get_template_part('templates/menuoverlay'); ?>
       <!-- HOME FULL -->
       <div class="cortina">
       	<div class="col-xs-12 logo-head"><img src="<?= $dist_path; ?>images/img-avierto-contacto.png"></div>
       	<div class="col-xs-12 bajar-img"><img src="<?= $dist_path; ?>images/bajar.png"></div>
       	<div class="col-xs-12 bajar-txt"> BAJAR </div>
       </div>
       <div class="row contacto-content">
       	<!-- LLÁMANOS -->
       	<div class="col-sm-4 llamanos-container">
       		<div class="info-3-1 title-general-info">Llámanos
       			<img src="<?= $dist_path; ?>images/line-grid.png">
       		</div>
       		<div>
       			<div class="contacto-1">
       				T. 6394 6555<br>
       				M. info@avierto.com.mx<br>
       				Avierto de 9:00 a 24:00 horas
       			</div>
       			<div class="media-logos">
       				<ul>
       					<li><a href="https://www.facebook.com/DeportivoAVIERTO/" target="_blank"><img class="img-responsive" src="<?= $dist_path; ?>images/face-gr.png" alt="Facebook"></a></li>
       					<li><a href="https://twitter.com/aviertofutbol5" target="_blank"><img class="img-responsive" src="<?= $dist_path; ?>images/twit-gr.png" alt="Twitter"></a></li>
       					<li><a href="https://www.instagram.com/aviertomx/" target="_blank"><img class="img-responsive" src="<?= $dist_path; ?>images/inst-gr.png" alt="Instagram"></a></li>
       				</ul>
       			</div>
       		</div>
       	</div>
       	<!-- ESCRÍBENOS -->
       	<div class="col-sm-4 escribenos-container">
       		<div class="info-3-1 title-general-info">
       			Escríbenos
       			<img src="<?= $dist_path; ?>images/line-grid.png">
       		</div>
       		<div class="form-container">
       			<div id="form-main">
       				<div id="form-div">
       					<form action="javascript:void(0);" method="post" class="form" id="formContacto">
       						<p class="name">
                    <input name="name" type="text" class="feedback-input" placeholder="Nombre" id="userName" required/>
                  </p>
       						<p class="email">
                    <input name="email" type="email" class="feedback-input" placeholder="Email" id="userEmail"  required/>
                  </p>
       						<p class="phone">
                    <input name="phone" type="number" class="feedback-input" placeholder="Telefono" id="userPhone" />
                  </p>
       						<p class="text">
                    <textarea name="text" class="feedback-input" placeholder="Mensaje" id="userMesage" required></textarea>
                  </p>
       						<div class="submit">
       							<input type="submit" value="Enviar" id="button-blue"/>
       							<div class="ease"></div>
       						</div>
                  <div id="response" style="margin: 5px auto; color: #269f7d; font-size:14px; text-transform: uppercase; font-weight: 600; display: none; text-align: center;"></div>
       					</form>
       				</div>
       			</div>
       		</div>
       	</div>
       	<!-- VISÍTANOS -->
       	<div class="col-sm-4 mapa-contacto">
       		<div class="info-3-1 title-general-info">
       			Visítanos
       			<img src="<?= $dist_path; ?>images/line-grid.png">
       		</div>
       		<div id="map"></div>
       	</div>
       </div>
    </main>  
    <!-- FOOTER -->
    <?php get_template_part('templates/footercontacto'); ?>  
    <script type="text/javascript">
      


    	function initMap() {
    		var avierto = {lat: 19.405217, lng: -99.182280};
        var centroMapa = {lat: 19.4055, lng: -99.182280};
        var map = new google.maps.Map(document.getElementById('map'), {
          center: centroMapa, 
          zoom: 17,
          scrollwheel: false,
          mapTypeControl: false,
          styles: [{"featureType": "landscape","stylers": [{"hue": "#A7D1BF"},{ "saturation": -27.4},{ "lightness": 9.4},{ "gamma": 1}]},
          {"featureType": "road.highway", "stylers": [{"hue": "#A7D1BF"},{"saturation": 100},{"lightness": 1},{"gamma": 1}]},
          {"featureType": "road.arterial","stylers": [{"hue": "#A7D1BF"},{"saturation": 100},{"lightness": 1},{"gamma": 1}]},
          {"featureType": "road.local","stylers": [{"hue": "#A7D1BF"},{"saturation": -38},{"lightness": 11.2},{"gamma": 1}]},
          {"featureType": "water","stylers": [{"hue": "#00B6FF"},{"saturation": 4.2},{"lightness": -63.4},{"gamma": 1}]},
          {"featureType": "poi","stylers": [{"hue": "#A7D1BF"},{"saturation": 0},{"lightness": 0},{"gamma": 1}]}]
        });
        var contentString = '<div id="content-mapa">'+
        '<h1 id="firstHeading" class="firstHeading">Avierto</h1>'+
        '<div id="bodyContent">'+
        '<p>un lugar especial</p>'+
        '</div>'+
        '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString,
          maxWidth: 200
        });
        var image = '<?= $dist_path; ?>images/avierto-mark.png';
        var marker = new google.maps.Marker({
          position: avierto,
          map: map,
          icon: image,
          title: 'Avierto'
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6dbrlvRdC-ZQFJv-giBFSa3ZnssX3Cx0&signed_in=false&callback=initMap"></script>


<?php endwhile; ?>