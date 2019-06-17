<?php

function add_menus() {
    add_theme_support('menus');

    register_nav_menu('header', 'Menu header');
}

add_action('init', 'add_menus');

// function add_last_nav_item($items, $args) {
//     if ($args->menu == 'header_menu') {
//           $homelink = get_search_form();
//           $items = $items;
//           $items .= '<li>'.$homelink.'</li>';
//           return $items;
//     }
//     return $items;
// }
// add_filter( 'wp_nav_menu_items', 'add_last_nav_item', 10, 2 );