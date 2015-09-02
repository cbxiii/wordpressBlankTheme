<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '-' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- 		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png"/> -->

		<!-- Web fonts here -->
		
		<!-- Linked CSS Files -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/normalize/normalize.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/bxslider/jquery.bxslider.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/slick/slick.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/slick/slick-theme.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/semantic/semantic.css">
		
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/cb.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">
		
		<!-- Wordpress headers -->
		<?php wp_head(); ?>
		
		<!-- Linked Javascript files -->
		<script src="<?php bloginfo('template_directory'); ?>/vendor/jquery/jquery-1.10.2.min.js"><\/script>
		<script src="<?php bloginfo('template_directory'); ?>/vendor/jquery/jquery.easing.1.3.js"></script>	
		<script src="<?php bloginfo('template_directory'); ?>/vendor/modernizr/modernizr-2.8.3.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/vendor/bxslider/jquery.bxslider.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/vendor/fitvids/jquery.fitvids.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/vendor/slick/slick.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/vendor/semantic/semantic.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/vendor/fastclick/fastclick.js"></script>

		<script src="<?php bloginfo('template_directory'); ?>/js/mailchimp.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/general.js"></script>	
		<script src="<?php bloginfo('template_directory'); ?>/js/site.js"></script>	
	</head>
	
	<body <?php body_class( $class ); ?>> 