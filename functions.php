<?php

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1568, 9999 );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
?>