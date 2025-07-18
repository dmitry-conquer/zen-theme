<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body id="home" <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="wrapper">

    <?php get_template_part('template-parts/header/header-default'); ?>