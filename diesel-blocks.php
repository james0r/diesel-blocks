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

/**
* If you then also specify a filter that will only load the blocks assets when the block is actually used:
*/
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

/**
* Register our custom Diesel category.
*/
add_filter('block_categories_all', function ($categories) {

  // Adding a new category.
  $categories[] = array(
    'slug'  => 'diesel-blocks',
    'title' => 'Diesel Blocks'
  );

  return $categories;
});

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_diesel_blocks_block_init() {
  register_block_type(__DIR__ . '/build/accordion');
  register_block_type(__DIR__ . '/build/accordion-item');
}
add_action('init', 'create_block_diesel_blocks_block_init');
