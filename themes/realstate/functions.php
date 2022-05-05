<?php

function realstate_files()
{
    wp_enqueue_style('realstate_bootstrap_style',get_theme_file_uri('/assets/vendor/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('realstate_bootstrap_icons',get_theme_file_uri('/assets/vendor/bootstrap-icons/bootstrap-icons.css'));
    wp_enqueue_style('realstate_swiper_styles',get_theme_file_uri('/assets/vendor/swiper/swiper-bundle.min.css'));
    wp_enqueue_style('realstate_font_style','https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
    wp_enqueue_style('realstate_main_style',get_theme_file_uri('/assets/css/style.css'));


    wp_enqueue_script('realstate_main_js1',get_theme_file_uri('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'),array(),null,true);
    wp_enqueue_script('realstate_main_js2',get_theme_file_uri('/assets/vendor/swiper/swiper-bundle.min.js'),array(),null,true);
    wp_enqueue_script('realstate_main_js3',get_theme_file_uri('/assets/js/main.js'),array(),null,true);
 
}
add_action('wp_enqueue_scripts','realstate_files');



/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function realstate_features()
{
    register_nav_menu('headerMenuLocation','Top Header Menu Location');
    register_nav_menu('footerMenuLocation1','Footer Menu Location 1');
    register_nav_menu('footerMenuLocation2','Footer Menu Location 2');
    register_nav_menu('footerMenuLocation3','Footer Menu Location 3');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); // Add support for thumbnail images in post/page
    add_image_size('propertiesFrontPage',410,540,true);
    add_image_size('propertiesDeatilsPage',600,800,true);
    add_image_size('testimonialFrontPage',469,325,true);
    add_image_size('testimonialShort',80,80,true);
}
add_action('after_setup_theme','realstate_features');

function add_realstate_widgets()
{
    register_sidebar( array(
		'name'          => 'Footer Address',
		'id'            => 'footer_address_1',
        'description'   => __( 'A widget area located to the footer.' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
add_action('widgets_init','add_realstate_widgets');

function add_more_css_menu_classes($classes, $item, $args) {
    //This filter will add css class in <li> in menu
    //https://stackoverflow.com/questions/14464505/how-to-add-class-in-li-using-wp-nav-menu-in-wordpress
    if($args->theme_location == 'headerMenuLocation') {
        $classes[] = 'nav-item';
    }

    if($args->theme_location == 'footerMenuLocation3') {
        $classes[] = 'list-inline-item';
    }

    if($args->theme_location == 'footerMenuLocation1') {
        $classes[] = 'item-list-a';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_more_css_menu_classes', 1, 3);    


function add_menu_anchor_class( $atts, $item, $args ) {
    /*$class = 'nav-link'; // or something based on $item
    $atts['class'] = $class;
    return $atts; */

    if($args->theme_location == 'headerMenuLocation') {
        $atts['class'] = 'nav-link';
    }

   return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_anchor_class', 10, 3 );

function special_nav_class($classes, $item){
    // Add active class
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function university_adjust_queries($query)
{
    if(!is_admin() && is_post_type_archive('my_property') && $query->is_main_query()){
        $query->set('orderby', 'title');
        $query->set('order' ,'DESC');
        $query->set('posts_per_page' ,3);
        }
}

add_action('pre_get_posts','university_adjust_queries');

