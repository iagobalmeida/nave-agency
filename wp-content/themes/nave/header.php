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
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
		<?php wp_head(); ?>
      </head>
  <body <?php body_class(); ?>>
        <div class="outline"></div>
        <div class="background"></div>
        
        <header>
          <b>NAVE Agency</b>
          <a id="headerToggleNav">MENU</a>
        </header>
        <main>
    		<?php
    		wp_body_open();
    		?>
