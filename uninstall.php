<?php

/**
 * Trigger this file on PLugin uninstall
 * 
 * @package ArtismArtwork
 */

 if( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
   die;
 }

// Clear database stored data
 $art = get_posts( array( 'post_types' => 'art', 'numberposts' => -1 ) );

 foreach( $art as $artwork ) {
   wp_delete_post( $artwork->ID, true );
 }

//Access the database via SQL

//  global $wpdb;

//  $wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'art'" );
//  $wpdp->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT if FROM wp_posts)");
//  $wpdp->query( "DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)" );