<?php
namespace Theme;

if (!defined('ABSPATH')) {
  exit;
}

class Assets
{
  public static function init()
  {
    add_action('wp_enqueue_scripts', [self::class, 'enqueue_assets']);
  }

  public static function enqueue_assets()
  {
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', [], filemtime(get_template_directory() . '/assets/css/swiper-bundle.min.css') ?: '1.0.0');
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', [], filemtime(get_template_directory() . '/assets/js/swiper-bundle.min.js') ?: '1.0.0', true);

    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', [], filemtime(get_template_directory() . '/assets/css/style.css') ?: '1.0.0');
    wp_enqueue_script('script-js', get_template_directory_uri() . '/assets/js/script.js', [], filemtime(get_template_directory() . '/assets/js/script.js') ?: '1.0.0', true);
  }
}