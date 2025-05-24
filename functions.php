<?php
if (!defined('ABSPATH')) {
	exit;
}

require_once get_template_directory() . '/inc/Autoloader.php';
\Theme\Autoloader::register();

\Theme\Assets::init();
\Theme\Setup::init();
\Theme\Editor::init();
\Theme\Menu::init();
\Theme\Shortcodes::init();