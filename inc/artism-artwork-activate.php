<?php
/**
 * @package ArtismArtwork
 */

 class ArtismArtworkActivate
 {
   public static function activate() {
     echo 'TEST';
     flush_rewrite_rules();
   }
 }