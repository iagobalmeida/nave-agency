<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html><!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		
		<link rel="profile" href="https://gmpg.org/xfn/11">
		
        <title>NAVE Agency</title>
        
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link rel="icon" type="image/x-icon" href="<?=get_template_directory_uri();?>/assets/imgs/favicon.ico">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
      </head>
  <body>
        <video autoplay muted loop class="background-video">
          <source src="<?=get_template_directory_uri();?>/assets/imgs/space-purple.webm" type="video/mp4">
        </video>
          <header>
            <a href="<?=home_url();?>"><img src="<?=get_template_directory_uri();?>/assets/imgs/NAVE-branco.svg"></a>
            
            <a id="headerToggleNav">
              <?= file_get_contents(get_template_directory_uri().'/assets/icons/minus-w.svg'); ?>
            </a>
          </header>
        <main>
