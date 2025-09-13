<?php
/**
 * ZEN Theme functions and definitions
 *
 * This theme uses a class-based approach for code organization.
 * All functionality is organized into classes located in the /inc/ directory.
 * 
 * IMPORTANT: Avoid adding code directly to this file. Instead:
 * - Add new functionality to existing classes in /inc/
 * - Create new classes in /inc/ for new features
 * - Use the autoloader system for proper class loading
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ZEN_Theme
 */

if (!defined('ABSPATH')) {
	exit;
}

// Define theme constants
define('ZEN_THEME_DIR', get_template_directory());
define('ZEN_THEME_URI', get_template_directory_uri());

// Import theme classes
use \ZEN_THEME\Autoloader;
use \ZEN_THEME\Assets;
use \ZEN_THEME\Setup;
use \ZEN_THEME\Editor;
use \ZEN_THEME\Menu;
use \ZEN_THEME\Shortcodes;

// Load autoloader for class management
require_once ZEN_THEME_DIR . '/inc/Autoloader.php';

// Initialize theme components
Autoloader::register();
Assets::register();
Setup::register();
Editor::register();
Menu::register();
Shortcodes::register();