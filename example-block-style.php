<?php
/**
 * Plugin Name:       Example Block Style
 * Description:       Example block style tutorial.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       example-block-style
 *
 * @package           create-block
 */

/**
 * Register our custom block style
 *
 * @return void
 */
function wp_dev_register_block_style() {

	wp_enqueue_block_style(
		'core/list',
		array(
			'handle' => 'example-block-style',
			'src'    => plugins_url( 'example-block-style.css', __FILE__ ),
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'  => 'check', // .is-style-check
			'label' => 'Check',
		)
	);
}
add_action( 'init', 'wp_dev_register_block_style' );
