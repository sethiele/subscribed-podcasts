<?php
  add_action( 'admin_menu', 'subpod_admin_menu' );

  function subpod_admin_menu() {
    add_options_page( __('Your Subscribed Podcasts', 'subpod'), __('Subscribed Podcasts', 'subpod'), 'manage_options', 'subpod', 'subpod_admin_output' );
  }

  function subpod_admin_output() {
    if ( !current_user_can( 'manage_options' ) )  {
      wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    ?>
    <div class="wrap">
      <h2><?php _e('Your Subscribed Podcasts Settings', 'subpod'); ?></h2>
      <p>Here is where the form would go if I actually had options.</p>
    </div>

    <?php
  }
?>