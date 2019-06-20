<?php

define('THEME_PATH', get_template_directory());
define('TEMPLATE_PATH', THEME_PATH . '/templates');

define('THEME_URL', get_template_directory_uri());
define('DIST_URL', THEME_URL . '/dist');
define('ASSETS_URL', THEME_URL . '/assets');

add_theme_support( 'post-thumbnails' ); 

foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
    include_once $file;
}
