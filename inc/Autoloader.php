<?php
namespace Theme;

if (!defined('ABSPATH')) {
  exit;
}


class Autoloader
{
  public static function register()
  {
    spl_autoload_register([self::class, 'autoload']);
  }

  public static function autoload($class)
  {
    if (strpos($class, __NAMESPACE__ . '\\') !== 0)
      return;
    $class_name = str_replace(__NAMESPACE__ . '\\', '', $class);
    $class_name = str_replace('\\', '/', $class_name);
    $file = get_template_directory() . '/inc/' . $class_name . '.php';
    if (file_exists($file)) {
      require_once $file;
    }
  }
}

