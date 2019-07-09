<?php
/**
 * @package ArtismArtwork
 */
/*
Plugin Name: Artism Artwork
Plugin URI: https://www.artism.org/artism-artwork
Description: A WordPress plugin for Artwork. This plugin creates a unique custom post type for artwork to be used as the backend for headless profolio site.
Version: 1.0.0
Author: Bernard John Bolter IV
Author URI: https://bernardbolter.com
License: GPL v2 or later
Text Domain: artismArtwork
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/


// If this file is called directly, abort!
defined( 'ABSPATH' ) or die( 'Hey, you, get off of my cloud' );

// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__) . '/vendor/autoload.php' ) ) {
  require_once dirname(__FILE__) . '/vendor/autoload.php';
}

// Initialize these classes
use Activate;
use Deactivate;

// Code that runs during plugin activation
function activate_artism_artwork_plugin() {
  Inc\Base\Activate::activate();
}

register_activation_hook(__FILE__, 'activate_artism_artwork_plugin' );

// Code that runs during plugin deactivation
function deactivate_artism_artwork_plugin() {
  Inc\Base\Deactivate::deactivate();
}

register_deactivation_hook(__FILE__, 'deactivate_artism_artwork_plugin' );

// Initialize all the core classes of this plugin
if ( class_exists( 'Inc\\Init' ) ) {
  Inc\Init::register_services();
}