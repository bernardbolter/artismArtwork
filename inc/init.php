<?php
/**
 * @package ArtismArtwork
 */
namespace Inc;

final class Init
{
  /**
   * Store all the class inside an array
   * @return array full list of classes
   */

  public static function get_services() {
    return array(
      Base\SettingsLinks::class,
      Base\Enqueue::class,
      Pages\Admin::class
    );
  }

  /**
   * Loop through the class, initialize them,
   * and call the register() method if it exists
   * @return
   */

  public static function register_services() {
    foreach ( self::get_services() as $class ) {
      $service = self::instantiate( $class );
      if ( method_exists( $service, 'register' ) ) {
        $service->register();
      }
    }
  }

  /**
   * Initialize the class
   * @param class $class      class from the service array
   * @return class instance   new instance of the class
   */

  private static function instantiate( $class )
  {
    $service = new $class();

    return $service;
  }
}