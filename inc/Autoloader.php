<?php
namespace ZEN_THEME;

if (!defined('ABSPATH')) {
  exit;
}

final class Autoloader
{
  public static function register()
  {
    spl_autoload_register(function ($class) {
      $prefix = 'ZEN_THEME\\';
      if (strncmp($class, $prefix, strlen($prefix)) !== 0) {
        return;
      }
      $base_path = ZEN_THEME_DIR . '/inc/';
      $parsed_class = substr($class, strlen($prefix));
      $file = $base_path . str_replace('\\', '/', $parsed_class) . '.php';
      if (file_exists($file)) {
        require $file;
      }
    });
  }
}