<?php
/**
 * @package ArtismArtwork
 */

 namespace Inc\Base;

 use \Inc\Base\BaseController;

 class Enqueue extends BaseController
 {
   public function register() 
    {
      add_action( 'admin_enqueue_scripts', array( $this, 'enqueue') );
    }

   public static function enqueue()
    {
      wp_enqueue_style( 'artismArtworkStyle', $this->plugin_url . '/assets/artismArtworkStyles.css' );
      wp_enqueue_script( 'artismArtworkStyle', $this->plugin_url . '/assets/artismArtworkScripts.js' );  
    }
 }