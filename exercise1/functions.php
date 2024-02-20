<?php

wp_enqueue_style('style', get_stylesheet_uri());

function register_my_menu()
{
    register_nav_menus(array(
		'theme_location' => 'Top Menu Location'
    ));
}

add_action('init', 'register_my_menu');