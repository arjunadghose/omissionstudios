<?php
/* function os_wp_enqueue_style( $handle, $src = '', $deps = array(), $ver = false, $media = 'all' ) {
    _wp_scripts_maybe_doing_it_wrong( __FUNCTION__ );
 
    $wp_styles = wp_styles();
 
    if ( $src ) {
        $_handle = explode('?', $handle);
        $wp_styles->add( $_handle[0], $src, $deps, $ver, $media );
    }
    $wp_styles->enqueue( $handle );
}
add_action('wp_enqueue_scripts', 'os_wp_enqueue_style'); */

function os_script_enqueue() {
	wp_enqueue_style('os_yui-styles', get_template_directory_uri() . '/css/reset-fonts-grids.css', array(), '1.0.0', 'all');
	wp_enqueue_style('os_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style('os_bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style('os_customstyle', get_template_directory_uri() . '/css/os.css', array(), '1.0.0', 'all');
	wp_enqueue_style('os_custom_desktopstyle', get_template_directory_uri() . '/css/os-desktop.css', array(), '1.0.0', 'screen and (min-width: 767px)');
	//The last argument for wp_enqueue_script is a boolean value indicating whether we want the js outputted in the footer:
	wp_enqueue_script('os_jquery', get_template_directory_uri() . '/js/jquery-3.2.0.min.js', array(), '3.2.0', true);
	wp_enqueue_script('os_bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);
	wp_enqueue_script('os_customjs', get_template_directory_uri() . '/js/os.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'os_script_enqueue');

function os_theme_setup() {
	add_theme_support('menus');
	//A custom menu gives you the ability to call that menu whereever you want:
	//To register a nav menu, you have to specify two values. The first argument is the location and is the unique name, which has to be treated as a slug. The second argument is a description:
	register_nav_menu('primary', 'Primary header navigation');
	register_nav_menu('footer', 'Footer navigation');
}
add_action('init', 'os_theme_setup'); //You could also hook this action to 'after_setup_theme' if you just had add_theme_support('menus') in your function that you are hooking.

/*
	*************
	Theme support functions
	*************
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));
add_theme_support('custom-logo');

// Widget Locations
function os_init_widgets($id) {
	register_sidebar(array(
		'name' => 'Frontpage Column1',
		'id' => 'column1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
	register_sidebar(array(
		'name' => 'Frontpage Column2',
		'id' => 'column2',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
	register_sidebar(array(
		'name' => 'Frontpage Column3',
		'id' => 'column3',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
	register_sidebar(array(
		'name' => 'Contact Form',
		'id' => 'contact-form',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="block side-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}
add_action('widgets_init', 'os_init_widgets');

// Excerpt Length
function os_set_excerpt_length() {
	return 54;
}
add_filter('excerpt_length', 'os_set_excerpt_length');

/* Add the data-toggle='modal and the data-target='#id' to the link tag: 
function os_menu_add_class( $atts, $item, $args ) {
    $data_toggle = 'modal'; // or something based on $item
	$data_target = '#websiteUnderConstruction';
    $atts['data-toggle'] = $data_toggle;
	$atts['data-target'] = $data_target;
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'os_menu_add_class', 10, 3 );*/

