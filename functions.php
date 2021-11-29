<?php
function kuro_register_resources() {
    wp_enqueue_style("carousel", get_stylesheet_directory_uri() . "/carousel.css");
    wp_enqueue_style("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" );
    wp_enqueue_script("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" );
    wp_enqueue_script("jquery", "https://code.jquery.com/jquery-3.2.1.slim.min.js");
    wp_enqueue_style('kuro', get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "kuro_register_resources");

function kuro_register_menu() {
    register_nav_menu("main-menu", "kuro menu");
}
add_action("init","kuro_register_menu");

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

?>