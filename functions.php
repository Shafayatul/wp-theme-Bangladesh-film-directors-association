<?php
ob_start();
/**
* Admin panel function
*/

/***********************************************************************************
***
*** Function for View All --Starts--
***
***********************************************************************************/
add_action('admin_menu', 'ct_main_menu');
 
function ct_main_menu(){
        add_menu_page( 'User Activaton', 'User Activaton', 'manage_options', 'ct-user-activation', 'ct_all_member' );
        add_submenu_page(null, "Change Designation", "Change Designation", 'manage_options', "ct-change-designation", "ct_status_designation");
        add_submenu_page(null, "Change Status", "Change Status", 'manage_options', "ct-change-status", "ct_status_change");
}

function ct_status_designation(){


    if(is_super_admin()){
        $message = "";
        if(isset($_POST['submit'])){
            update_user_meta( $_POST['user_id'], 'custom_user_designation', $_POST['custom_user_designation']);
            $message = "Designation successfully updated.";
        }
?>

    <div class="wrap">

        <h2>Select Designation and Press Submit </h2>
        <form action="<?php esc_url( $_SERVER['REQUEST_URI'] );?>" method="post">

            <?php if($message!=""){?>
                <div class="updated notice">
                    <p><?php echo $message;?></p>
                </div>
            <?php } ?>
            <br><br>
              
            <label for="custom_user_designation"  ><div class="text-left">Designation:</div></label>

            <div class="form-group">
                <select class="form-control" id="custom_user_designation" name="custom_user_designation">
                    <option value="President"> President </option>
                    <option value="Vice President"> Vice President </option>
                    <option value="General Secretary"> General Secretary  </option>
                    <option value="Join Secretary General"> Join Secretary General </option>
                    <option value="Finance Secretary"> Finance Secretary   </option>
                    <option value="Organizing Secretary"> Organizing Secretary </option>
                    <option value="Publicity Secretary"> Publicity Secretary  </option>
                    <option value="Executive Member"> Executive Member </option>
                </select>
            </div>
            <input type="hidden" name="user_id" value="<?php echo $_GET['id'];?>">
            <br>
            <button type="submit" name="submit" >Submit</button>
        </form>
    </div>
<?php
    }
}

function ct_status_change(){
    if(is_super_admin()){
        if($_GET["type"]=='active'){
            update_user_meta( $_GET["id"], 'custom_is_active', 1);
        }else{
            update_user_meta( $_GET["id"], 'custom_is_active', 0);
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}



function ct_all_member(){
    $exampleListTable = new Example_List_Table();
            $exampleListTable->prepare_items();
            ?>
                <div class="wrap">
                    <div id="icon-users" class="icon32"></div>
                    <h2>All member</h2>
                    <form method="post">
                        <input type="hidden" name="page" value="example_list_table" />
                        <?php $exampleListTable->search_box('search', 'search_id'); ?>
                    </form>
                    <?php $exampleListTable->display(); ?>
                </div>
            <?php
}

     
    // WP_List_Table is not loaded automatically so we need to load it in our application
    if( ! class_exists( 'WP_List_Table' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
    }
     
    /**
     * Create a new table class that will extend the WP_List_Table
     */
    class Example_List_Table extends WP_List_Table
    {
        /**
         * Prepare the items for the table to process
         *
         * @return Void
         */
    
            
        public function prepare_items()
        {
            $columns = $this->get_columns();
            $hidden = $this->get_hidden_columns();
            $sortable = $this->get_sortable_columns();
     
            $data = $this->table_data();
            usort( $data, array( &$this, 'sort_data' ) );
     
            $perPage = 20;
            $currentPage = $this->get_pagenum();
            $totalItems = count($data);
     
            $this->set_pagination_args( array(
                'total_items' => $totalItems,
                'per_page'    => $perPage
            ) );
     
            $data = array_slice($data,(($currentPage-1)*$perPage),$perPage);
     
            $this->_column_headers = array($columns, $hidden, $sortable);
            $this->items = $data;
        }
     
        /**
         * Override the parent columns method. Defines the columns to use in your listing table
         *
         * @return Array
         */
        public function get_columns()
        {
            $columns = array(
                'ID'      => 'ID',
                'Name'    => 'Name',
                'EMAIL'   => 'EMAIL',
                'ROLE'    => 'ROLE',
                'STATUS'    => 'STATUS',
                'ACTION'  => 'ACTION'
            );
     
            return $columns;
        }
     
        /**
         * Define which columns are hidden
         *
         * @return Array
         */
        public function get_hidden_columns()
        {
            return array();
        }
     
        /**
         * Define the sortable columns
         *
         * @return Array
         */
        public function get_sortable_columns()
        {
            return array('ID' => array('ID', false));
        }
     
        /**
         * Get the table data
         *
         * @return Array
         */
        private function table_data()
        {
            
            
            $data = array();
            global $wpdb;
            $table_name = $wpdb->prefix . 'users';
            if(isset($_POST['s'])){
                $like = $_POST['s'];
                $all_members_array = $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE user_email like '%".$like."%' ", OBJECT );
            }else{
                $all_members_array = $wpdb->get_results( "SELECT * FROM ".$table_name, OBJECT );
            }




            
            foreach($all_members_array as $all_members_detail){

                if(get_user_meta($all_members_detail->ID, 'custom_is_active', true) == 1){
                    $html_btn = '<a href="'.admin_url().'?page=ct-change-status&id='.$all_members_detail->ID.'&type=deactivate" class="button button-primary">Deactivate</a>';
                    $status = 'Active';
                }else{
                    $html_btn = '<a href="'.admin_url().'?page=ct-change-status&id='.$all_members_detail->ID.'&type=active" class="button button-primary">Active</a>';
                    $status = 'Inactive';
                }

                $data[] = array(
                        'ID'          => $all_members_detail->ID,
                        'Name'        => get_user_meta($all_members_detail->ID, 'custom_user_name', true),
                        'EMAIL'        => $all_members_detail->user_email,
                        'ROLE'        => get_user_meta($all_members_detail->ID, 'custom_user_account_type', true),
                        'STATUS'        => $status,
                        'ACTION'      => $html_btn.'
                        &nbsp;<a target="_blank" href="'.admin_url().'?page=ct-change-designation&id='.$all_members_detail->ID.'" class="button button-primary">Designation</a>
                        &nbsp;<a target="_blank" href="'.site_url('/user-profile/').'?id='.$all_members_detail->ID.'" class="button button-primary">Detail</a>'
                        );
            }
            
     
            
     
            return $data;
        }
     
        /**
         * Define what data to show on each column of the table
         *
         * @param  Array $item        Data
         * @param  String $column_name - Current column name
         *
         * @return Mixed
         */
        public function column_default( $item, $column_name )
        {
            switch( $column_name ) {
                case 'ID':
                case 'Name':
                case 'EMAIL':
                case 'ROLE':
                case 'STATUS':
                case 'ACTION':
                    return $item[ $column_name ];
                default:
                    return print_r( $item, true ) ;
            }
        }
     
        /**
         * Allows you to sort the data by the variables set in the $_GET
         *
         * @return Mixed
         */
        private function sort_data( $a, $b )
        {
            // Set defaults
            $orderby = 'ID';
            $order = 'DESC';
     
            // If orderby is set, use this as the sort column
            if(!empty($_GET['orderby']))
            {
                $orderby = $_GET['orderby'];
            }
     
            // If order is set use this as the order
            if(!empty($_GET['order']))
            {
                $order = $_GET['order'];
            }
     
     
            $result = strnatcmp( $a[$orderby], $b[$orderby] );
     
            if($order === 'asc')
            {
                return $result;
            }
     
            return -$result;
        }
    }




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
