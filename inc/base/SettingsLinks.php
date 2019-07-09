<?php
/**
 * @package ArtismArtwork
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

class SettingsLinks extends BaseController
{
  public function register() 
  {
    add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_links' ) );
  }

  public function settings_links( $links ) 
  {
    $settings_link = '<a href="admin.php?page=artism_artwork">Settings</a>';
    array_push( $links, $settings_link );
    return $links;
  }
}