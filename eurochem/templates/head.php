<?php $dist_path = get_template_directory_uri(); ?>
<?php //$dist_path = 'http://eurochem.instinctif.com/' ?>
<head>
	<meta content="" name="author">
	<meta content="" name="description">
	<meta content="" name="keywords">
	<meta content="telephone=no" name="format-detection">
	<meta name="robots" content="noodp, noydir">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Tweeter meta tegs-->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@getbem" />

	<!-- This make sence for mobile browsers. It means, that content has been optimized for mobile browsers -->
	<meta name="HandheldFriendly" content="true">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
	<link href="<?php echo $dist_path; ?>/static/css/main.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="<?php echo $dist_path; ?>/data.json"></script>
	<script src="<?php echo $dist_path; ?>/regionpolygone.json"></script>
    <script type="text/javascript" src="<?php echo $dist_path; ?>/static/js/separate-js/markerclustererplus.js"></script>


  	<?php wp_head(); ?>
</head>
