<?php
/**
 * @package ArtismArtwork
 */

 class ArtismArtworkDeactivate
 {
   public static function deactivate() {
     flush_rewrite_rules();
   }
 }