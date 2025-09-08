<?php
if (!defined('ABSPATH')) {
	exit;
}

use \ZEN_THEME\Autoloader;
use \ZEN_THEME\Assets;
use \ZEN_THEME\Setup;
use \ZEN_THEME\Editor;
use \ZEN_THEME\Menu;
use \ZEN_THEME\Shortcodes;

define('ZEN_THEME_DIR', get_template_directory());
define('ZEN_THEME_URI', get_template_directory_uri());

require_once ZEN_THEME_DIR . '/inc/Autoloader.php';

Autoloader::register();

Assets::register();
Setup::register();
Editor::register();
Menu::register();
Shortcodes::register();
