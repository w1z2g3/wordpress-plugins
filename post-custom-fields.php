<?php
/**
 * Plugin Name: Post Custom Fields
 * Description: Add custom fields to post.
 * Plugin URI:  https://github.com/w1z2g3/wordpress-plugins
 * Version:     20181104
 * Author:      Zhigang Wang
 * Author URI:  https://github.com/w1z2g3
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) or die;

register_post_meta(
    '',
    'origin',
    array(
        'description'  => 'The origin of the object.',
        'type'         => 'string',
        'single'       => true,
        'show_in_rest' => true,
    )
);
