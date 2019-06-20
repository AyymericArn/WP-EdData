<?php status_header(200); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Rubik:300,400,500&display=swap" rel="stylesheet"> 
  <?php wp_head(); ?>
</head>
<body>
<div id="app">
  <header>
    <menu-wrapper>
      <?php wp_nav_menu('header'); ?>
    </menu-wrapper>
  </header>