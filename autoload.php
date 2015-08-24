<?php

/**
 * Plugin Name: Digster extensions for Papi
 * Description: Digster extensions for Papi
 * Author: Fredrik Forsmo
 * Author URI: https://forsmo.me
 * Version: 1.0.0
 * Plugin URI: https://github.com/wp-papi/papi-digster-extensions
 */

require_once __DIR__ . '/src/class-papi-extensions.php';

/**
 * Add Papi extensions to Digster.
 *
 * @param  array $extensions
 *
 * @return array
 */
add_action( 'digster/extensions', function( array $extensions ) {
    return array_merge( $extensions, [
        new \Papi\Digster\Extensions
    ] );
} );
