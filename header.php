<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<!--[if lt IE 9]>
  <script src="/wp-content/themes/africahacktrip/js/html5shiv-printshiv.js"></script>
	<script src="/wp-content/themes/africahacktrip/js/html5shiv.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="/wp-content/themes/africahacktrip/leaflet.css" />
  <!--[if lte IE 8]>
    <link rel="stylesheet" href="/wp-content/themes/africahacktrip/leaflet.ie.css" />
  <![endif]-->
  <script src="/wp-content/themes/africahacktrip/js/bootstrap.min.js"></script>
  <script src="/wp-content/themes/africahacktrip/js/leaflet-src.js"></script>
  <script src="/wp-content/themes/africahacktrip/js/leaflet.label.js"></script>
  <script src="/wp-content/themes/africahacktrip/js/map.js"></script>
<script type="text/javascript">
    $(function() {
    Hackmap.initializeMap();
    if(window.mapCity && window.mapCity != "") {
      Hackmap.moveToCountry(window.mapCity);
    }
    if(window.mapMarkers && window.mapMarkers != "") {
      Hackmap.addMarkers(window.mapMarkers);
    }
    });
  </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="hfeed">
    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".aht-navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">AfricaHackTrip</a>
        </div>
        <nav class="collapse navbar-collapse aht-navbar" role="navigation" style="height:auto">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav pull-right' ) ); ?>
        </nav>
      </div>
    </header>
    

    <div id="bigfatmap"></div>

  
		<div id="main" class="site-main container content">
