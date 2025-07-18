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
    if (strpos($class, __NAMESPACE__ . '\\') !== 0) {
      return;
    }
    $class_name = str_replace(__NAMESPACE__ . '\\', '', $class);
    $file_name = 'class-' . strtolower(preg_replace('/([a-z])([A-Z])/', '$1-$2', $class_name)) . '.php';
    $file = get_template_directory() . '/inc/' . $file_name;
    if (file_exists($file)) {
      require_once $file;
    }
  }
}