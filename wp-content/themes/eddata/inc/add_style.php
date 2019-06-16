<?php
add_action('wp_enqueue_scripts', 'styles');
function styles()
{
  wp_register_style('main', DIST_URL.'/app.css');
  wp_enqueue_style('main');
}