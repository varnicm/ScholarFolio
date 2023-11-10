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

function my_custom_sidebar() {
    
    register_sidebar(
        array (
            'name' => __( 'Custom Sidebar', 'scholarfolio' ),
            'id' => 'custom-sidebar',
            'description' => __( 'Custom Sidebar Widget Area', 'scholarfolio' ),
            'before_widget' => '<div id="%1$s" class="card mb-3 bg-secondary-subtle card-post widget %2$s"><div class="card-body">',
            'after_widget' => "</div></div>",
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );

function my_custom_footer_widgets() {
    register_sidebar(
        array(
            'name' => __( 'Footer Widget Area', 'scholarfolio' ),
            'id' => 'footer-widget-area',
            'description' => __( 'Widgets added here will appear in the footer.', 'scholarfolio' ),
            'before_widget' => '<div id="%1$s" class="col-md-2 footer-widget %2$s">',
            'after_widget' => '</div>',

        )
    );
}
add_action( 'widgets_init', 'my_custom_footer_widgets' );

function after_footer_widgets() {
    register_sidebar(
        array(
            'name' => __( 'After Footer Widget Area', 'scholarfolio' ),
            'id' => 'after-footer-widget-area',
            'description' => __( 'Widgets added here will appear in the footer.', 'scholarfolio' ),
            'before_widget' => '<div id="%1$s" class="col-md-6 footer-widget2 %2$s">',
            'after_widget' => '</div>',

        )
    );
}
add_action( 'widgets_init', 'after_footer_widgets' );



function bootstrap_breadcrumb() {
    // Do not display on the homepage
    if (is_front_page()) {
        return;
    }

    // Define
    $breadcrumb = '<nav aria-label="breadcrumb"><ol class="breadcrumb">';

    // Home link
    $breadcrumb .= '<li class="breadcrumb-item"><a href="' . home_url() . '">' . esc_html__('Home', 'scholarfolio') . '</a></li>';

    if (is_single()) { // Single Post
        $category = get_the_category();
        if ($category) {
            // We'll just take the first category in this example
            $breadcrumb .= '<li class="breadcrumb-item"><a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a></li>';
        }
        $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';

    } elseif (is_page()) { // Single Page
        // If the page has parents, we need to create the proper breadcrumb trail
        if ($post->post_parent) {
            foreach (array_reverse(get_post_ancestors($post->ID)) as $parentID) {
                $breadcrumb .= '<li class="breadcrumb-item"><a href="' . get_permalink($parentID) . '">' . get_the_title($parentID) . '</a></li>';
            }
        }
        $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';

    } elseif (is_category()) { // Category Archive
        $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">' . single_cat_title('', false) . '</li>';

    } elseif (is_tag()) { // Tag Archive
        $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">' . single_tag_title('', false) . '</li>';

    } // Other elseifs for other archive types like date, author, etc. can be added here

    // Close breadcrumb div
    $breadcrumb .= '</ol></nav>';

    echo $breadcrumb;
}

?>