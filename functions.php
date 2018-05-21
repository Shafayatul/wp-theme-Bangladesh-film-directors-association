<?php
/**
* Custom post types
*/
add_action('init', 'create_post_type_faq'); // Add our HTML5 Blank Custom Post Type
function create_post_type_faq()
{

    register_post_type( 'Journal',                         
        array(
            'labels' => array(
                'name' => __( 'Journal' ),
                'singular_name' => __( 'Journal' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New Journal' ),
                'edit_item' => __( 'Edit Journal' ),
                'new_item' => __( 'New Journal' ),
                'view_item' => __( 'View Journal' ),
                'not_found' => __( 'Sorry, we couldn\'t find the Journal you are looking for.' )
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
    register_post_type( 'Events',                         
        array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Events' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New Events' ),
                'edit_item' => __( 'Edit Events' ),
                'new_item' => __( 'New Events' ),
                'view_item' => __( 'View Events' ),
                'not_found' => __( 'Sorry, we couldn\'t find the Events you are looking for.' )
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
    register_post_type( 'News',                         
        array(
            'labels' => array(
                'name' => __( 'News' ),
                'singular_name' => __( 'News' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New News' ),
                'edit_item' => __( 'Edit News' ),
                'new_item' => __( 'New News' ),
                'view_item' => __( 'View News' ),
                'not_found' => __( 'Sorry, we couldn\'t find the News you are looking for.' )
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
    register_post_type( 'Notice',                         
        array(
            'labels' => array(
                'name' => __( 'Notice' ),
                'singular_name' => __( 'Notice' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New Notice' ),
                'edit_item' => __( 'Edit Notice' ),
                'new_item' => __( 'New Notice' ),
                'view_item' => __( 'View Notice' ),
                'not_found' => __( 'Sorry, we couldn\'t find the Notice you are looking for.' )
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





/**
* Login only with Email
*/
add_filter('authenticate', function($user, $email, $password){

    //Check for empty fields
    if(empty($email) || empty ($password)){        
        //create new error object and add errors to it.
        $error = new WP_Error();

        if(empty($email)){ //No email
            $error->add('empty_username', __('<strong>ERROR</strong>: Email field is empty.'));
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //Invalid Email
            $error->add('invalid_username', __('<strong>ERROR</strong>: Email is invalid.'));
        }

        if(empty($password)){ //No password
            $error->add('empty_password', __('<strong>ERROR</strong>: Password field is empty.'));
        }

        return $error;
    }

    //Check if user exists in WordPress database
    $user = get_user_by('email', $email);

    //bad email
    if(!$user){
        $error = new WP_Error();
        $error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
        return $error;
    }
    else{ //check password
        if(!wp_check_password($password, $user->user_pass, $user->ID)){ //bad password
            $error = new WP_Error();
            $error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
            return $error;
        }else{
            return $user; //passed
        }
    }
}, 20, 3);

remove_filter('authenticate', 'wp_authenticate_username_password', 20);


//hide top bar
add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}
?>
