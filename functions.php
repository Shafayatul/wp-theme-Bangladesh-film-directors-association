<?php
/**
* Custom post types
*/
add_action('init', 'create_post_type_faq'); // Add our HTML5 Blank Custom Post Type
function create_post_type_faq()
{
    register_post_type( 'Slider',                         
        array(
            'labels' => array(
                'name' => __( 'Slider' ),
                'singular_name' => __( 'Slider' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New Slider' ),
                'edit_item' => __( 'Edit Slider' ),
                'new_item' => __( 'New Slider' ),
                'view_item' => __( 'View Slider' ),
                'not_found' => __( 'Sorry, we couldn\'t find the Slider you are looking for.' )
                ),
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 6,
            'has_archive' => true,
            'hierarchical' => false, 
            'menu_icon' => 'dashicons-post-status', 
            'taxonomies' => array('Slider_category'),
            'supports' => array( 'title', 'editor', 'thumbnail',  )
        )
    );
    register_post_type( 'Products',                         
        array(
            'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'Products' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New Products' ),
                'edit_item' => __( 'Edit Products' ),
                'new_item' => __( 'New Products' ),
                'view_item' => __( 'View Products' ),
                'not_found' => __( 'Sorry, we couldn\'t find the Products you are looking for.' )
                ),
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'has_archive' => true,
            'hierarchical' => false, 
            'capability_type' => 'post',
            'menu_icon' => 'dashicons-id-alt', 
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' )




        )       
    );    
}



/**
* adding Main menu
*/
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );



/**
* adding Redux option framework
*/
// if(!class_exists('ReduxFramework')){
// 	require_once(dirname(__FILE__).'/ReduxCore/framework.php');
// }
// if(!isset($redux_demo)){
// 	require_once(dirname(__FILE__).'/functions/admin-config.php');
// }



/**
* Feature image
*/

// add feature image
add_theme_support( 'post-thumbnails' ); 
// for miltiple images -2nd
if (class_exists('MultiPostThumbnails')) {
	new MultiPostThumbnails(array(
		'label' => 'Secondary Image',
		'id' => 'secondary-image',
		'post_type' => 'page'
	 ) );
}
// for miltiple images - 3rd
if (class_exists('MultiPostThumbnails')) {
	new MultiPostThumbnails(array(
		'label' => 'third Image',
		'id' => 'third-image',
		'post_type' => 'page'
	 ) );
}

?>
