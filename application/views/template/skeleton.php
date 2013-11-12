<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php echo $title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="<?php echo $keywords ?>" />
		<meta name="author" content="<?php echo $author ?>" />
		<meta name="description" content="<?php echo $description ?>" />

		<!-- Twitter Bootstrap -->
		<!-- Via CDN -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
		<!-- Local File 
		<link rel="stylesheet" href="<?php echo base_url(CSS."bootstrap.min.css");?>">
		-->

		<!-- Font Awesome v3.2.1 -> http://fontawesome.io/3.2.1/ -->
		<!-- Via CDN -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
		<!-- Local File 
		<link rel="stylesheet" href="<?php echo base_url(CSS."font-awesome.min.css");?>">
		-->

		<link rel="stylesheet" href="<?php echo base_url(CSS."bootstrap-theme.min.css");?>">
		<link rel="stylesheet" href="<?php echo base_url(CSS."main.css");?>">

		<!-- extra CSS-->
		<?php foreach($css as $c):?>
			<link rel="stylesheet" href="<?php echo base_url(CSS.$c)?>">
		<?php endforeach;?>

		<!-- extra fonts-->
		<?php foreach($fonts as $f):?>
			<link href="http://fonts.googleapis.com/css?family=<?php echo $f?>" rel="stylesheet" type="text/css">
		<?php endforeach;?>
		<script src="<?php echo base_url(JS."libs/modernizr-2.6.2-respond-1.1.0.min.js");?>"></script>
		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="<?php echo base_url(IMAGES.'ico/favicon.ico');?>">
	    <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
	</head>
	<body>
	     <!--[if lt IE 7]>
	     <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
	    <![endif]-->
		<?php echo $body ?>
		<script 
			src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	    <script>window.jQuery || document.write('<script src="<?php echo base_url(JS);?>/jquery-1.10.1.min.js"><\/script>')</script>

	    <!-- Twitter Bootstrap plugins-->
		<!-- Via CDN -->
	    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
	    <!-- Local File
	    <script src="js/vendor/bootstrap.min.js"></script>  
		-->

	    <script src="js/plugins.js"></script>
	    <script src="js/main.js"></script>

	    <script>
	        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	        g.src='//www.google-analytics.com/ga.js';
	        s.parentNode.insertBefore(g,s)}(document,'script'));
	    </script>
</body>
</html>
