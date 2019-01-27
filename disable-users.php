<?php
/*
Plugin Name:  Disable Users
Plugin URI:   https://example.com/plugins/the-basics/
Description:  Disable user from login into wordpress site.
Version:      0.0.1
Author:       dbhautik
Author URI:   www.dbhautik.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  disuse
Domain Path:  /languages
*/

add_action( 'init', 'initialize_plugin', 10, 1 );

function initialize_plugin(){

  echo "PLugin Initialize";

}