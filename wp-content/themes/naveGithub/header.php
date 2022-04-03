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

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])) {

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  
  if($nome != '' && $email != '' && $mensagem != '') {
      $to = 'formulario@nave.agency';//get_option('admin_email');
      $subject = "Someone sent a message from ".get_bloginfo('name');
      $headers = 'From: '. $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n";
      $sent = wp_mail($to, $subject, strip_tags($mensagem), $headers);
      $ret = array('result' => ($sent ? 'success' : 'fail'));
      header("Content-Type: application/json");
      echo json_encode($ret);
      exit(200);
  }else {
      $ret = array('result' => 'fail', 'fields' => array('nome' => $nome, 'email' => $email, 'mensagem' => $mensagem));
      header("Content-Type: application/json");
      echo json_encode($ret);
      exit(500);
  }
  die();
}

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
