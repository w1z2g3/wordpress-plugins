<?php
/**
 * Plugin Name: Post Raw Content
 * Description: Show post raw content in view context of REST API.
 * Plugin URI:  https://github.com/w1z2g3/wordpress-plugins
 * Version:     20181104
 * Author:      Zhigang Wang
 * Author URI:  https://github.com/w1z2g3
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) or die;

add_action( 'rest_api_init', function() {
    $post_content_raw_schema = array(
        'description' => 'Content for the object, as it exists in the database.',
        'type'        => 'string',
        'context'     => array( 'view' ),
    );

    register_rest_field(
        'post',
        'content_raw',
        array(
            'get_callback' => 'show_post_content_raw',
            'schema'       => $post_content_raw_schema,
          )
       );
});

function show_post_content_raw( $object, $field_name, $request ) {
    return get_post( $object['id'] )->post_content;
}
