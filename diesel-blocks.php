<?php
/**
 * Plugin Name:       Diesel Blocks
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       diesel-blocks
 *
 * @package           create-block
 */

add_filter( 'block_categories_all' , function( $categories ) {

  // Adding a new category.
$categories[] = array(
  'slug'  => 'diesel-blocks',
  'title' => 'Diesel Blocks'
);

return $categories;
} );

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_diesel_blocks_block_init() {
	register_block_type( __DIR__ . '/build/accordion' );
}
add_action( 'init', 'create_block_diesel_blocks_block_init' );
