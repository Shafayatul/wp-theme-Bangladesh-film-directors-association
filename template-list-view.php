<?php 
/*
Template Name: List View
*/
get_header();
$type = $_GET['type'];
?>   



<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="colored-title center-text">List of <?php echo $type;?></h2>
      <hr>
    </div>    
    <div class="col-xs-12">

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Designation</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

      <?php 
        global $wpdb;
        $table_name = $wpdb->prefix . 'usermeta';
        if($type != "Executive Member"){
          $members = $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE meta_value = '$type' AND meta_key='custom_user_account_type'", OBJECT );
          foreach ($members as $member) {
            $user_id = $member->user_id;
            if(get_user_meta($user_id, 'custom_is_active', true) == 1){
            $all_meta_for_user = get_user_meta( $user_id );
            $user_info = get_userdata( $user_id );        
          ?>

            <tr>
              <td><?php echo $all_meta_for_user['custom_user_name'][0];?></td>
              <td><?php echo $user_info->user_email;?></td>
              <td>
                <?php if(isset($all_meta_for_user['custom_user_designation'][0]) && $all_meta_for_user['custom_user_designation'][0]!=""){ echo $all_meta_for_user['custom_user_designation'][0];} ?>
              </td>
              <td>
                <a class="btn btn-primary btn-xs " href="<?php echo site_url('/user-profile/').'?id='.$user_id;?>">» Read More</a>
              </td>
            </tr>
        <?php
            }
          }          
        }else{
          $members = get_user_meta(1,'custom_executive_serial', true);
          $members = explode(',', $members);
          foreach ($members as $key => $value) {
            $user_id = $value;
            if(get_user_meta($user_id, 'custom_is_active', true) == 1){
            $all_meta_for_user = get_user_meta( $user_id );
            $user_info = get_userdata( $user_id );        
          ?>

            <tr>
              <td><?php echo $all_meta_for_user['custom_user_name'][0];?></td>
              <td><?php echo $user_info->user_email;?></td>
              <td>
                <?php if(isset($all_meta_for_user['custom_user_designation'][0]) && $all_meta_for_user['custom_user_designation'][0]!=""){ echo $all_meta_for_user['custom_user_designation'][0];} ?>
              </td>
              <td>
                <a class="btn btn-primary btn-xs " href="<?php echo site_url('/user-profile/').'?id='.$user_id;?>">» Read More</a>
              </td>
            </tr>
        <?php
            }
          }
        }
        ?>
        </tbody>
      </table>
      </div><!-- /.col-xs-12 -->    
    </div>      <!-- row -->

  </div><!-- /.container -->
<!-- <script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('.url_nav>a').removeClass('active');
    jQuery('.signup').addClass('active');
  });
</script> -->
<?php get_footer();?> 

