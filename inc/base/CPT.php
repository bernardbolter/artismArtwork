<?php
/**
 * @package ArtismArtwork
 */

 namespace Inc\Base;

 class CPT
 {
   public function register() 
   {
      add_action( 'init', array( $this, 'custom_post_type' ) );
   }

   public static function custom_post_type() 
   {
    register_post_type( 'art', ['public' => true, 'label' => 'Art'] );
   }
 }