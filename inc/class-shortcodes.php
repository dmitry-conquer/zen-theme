<?php
namespace Theme;
if (!defined('ABSPATH')) {
  exit;
}

class Shortcodes
{
  public static function init()
  {
    add_shortcode('current_year', [self::class, 'current_year_fn']);
  }
  public static function current_year_fn()
  {
    return date('Y');
  }
}