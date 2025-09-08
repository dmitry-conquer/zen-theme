<?php
namespace ZEN_THEME;

if (!defined('ABSPATH')) {
  exit;
}

define('ASSETS_VERSION', '1.0.0');

class Assets
{
  public static function register()
  {
    add_action('wp_enqueue_scripts', [self::class, 'enqueue_assets']);
  }

  public static function enqueue_assets()
  {
    // wp_enqueue_style('swiper-css', ZEN_THEME_URI . '/assets/css/swiper-bundle.min.css', [], filemtime( ZEN_THEME_DIR . '/assets/css/swiper-bundle.min.css') ?: '1.0.0');
    // wp_enqueue_script('swiper-js', ZEN_THEME_URI . '/assets/js/swiper-bundle.min.js', [], filemtime( ZEN_THEME_DIR . '/assets/js/swiper-bundle.min.js') ?: '1.0.0', true);

    wp_enqueue_style('style-css', ZEN_THEME_URI . '/assets/css/style.css', [], filemtime(ZEN_THEME_DIR . '/assets/css/style.css') ?: ASSETS_VERSION);
    wp_enqueue_script('script-js', ZEN_THEME_URI . '/assets/js/script.js', [], filemtime(ZEN_THEME_DIR . '/assets/js/script.js') ?: ASSETS_VERSION, true);
  }
}