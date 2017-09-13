<?php
/**
  * Plugin Name: AtF Spark by Nedge
  * Plugin URI: http://nilspersson.se/
  * Version: 0.1
  * Author: Nils Persson
  * Author URI: http://nilspersson.se/
  * Description: A simple plugin to enable inline charts powered by the Spark font by After the Flood
  */

// defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class AtF_Spark_Class {
  // Constructor. Called when the plugin is initialised.
  function __construct() {
    function setup_tinymce_plugin() {
      // Check if the logged in WordPress User can edit Posts or Pages
      // If not, don't register our TinyMCE plugin
      if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
        return;
      }

      // Check if the logged in WordPress User has the Visual Editor enabled
      // If not, don't register our TinyMCE plugin
      if ( get_user_option( 'rich_editing' ) !== 'true' ) {
        return;
      }

      // Setup some filters
      add_filter( 'mce_external_plugins', array( &$this, 'add_tinymce_plugin' ) );
      add_filter( 'mce_buttons', array( &$this, 'add_tinymce_toolbar_button' ) );
    }
    if ( is_admin() ) {
      add_action( 'init', array(  $this, 'setup_tinymce_plugin' ) );
    }

    function add_tinymce_plugin( $plugin_array ) {
      $plugin_array['custom_link_class'] = plugin_dir_url( __FILE__ ) . 'tinymce-custom-link-class.js';
      return $plugin_array;
    }

    function add_tinymce_toolbar_button( $buttons ) {
      array_push( $buttons, '|', 'custom_link_class' );
      return $buttons;
    }
  }

}

$atf_spark_class = new AtF_Spark_Class;

?>
