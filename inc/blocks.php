<?php

namespace openx\Blocks;


function block_category( $categories, $post ) {
  return array_merge(
      array(
          array(
              'slug'  => 'openx',
              'title' => 'openx',
          ),
      ),
      $categories
  );
}

add_filter( 'block_categories', __NAMESPACE__ . '\\block_category', 10, 2 );


function reusable_blocks_admin_menu() {
  add_menu_page( 'Bloki wielokrotnego użytku', 'Bloki wielokrotnego użytku', 'edit_posts', 'edit.php?post_type=wp_block', '', 'dashicons-editor-table', 22 );
}

add_action( 'admin_menu', __NAMESPACE__ . '\\reusable_blocks_admin_menu' );

function enqueue_block_assets() {
  if ( is_admin() ) {
    $handle = 'block-openx-all';
    if ( ! wp_style_is( $handle ) ) {
      $filepath = get_template_directory_uri() . '/assets/dist/css/blocks.css';
      wp_enqueue_style( $handle, $filepath );
    }
  }
}

add_action( 'acf/init', __NAMESPACE__ . '\\my_acf_init_block_types' );
function my_acf_init_block_types() {

  if ( function_exists( 'acf_register_block_type' ) ) {

    acf_register_block_type( array( 
        'icon' => 'book',
        'name'            => 'Hero 1 block',
        'title'           => __( 'Hero 1' ),
        'render_template' => 'template-parts/blocks/hero-1-block.php',
        'category'        => 'openx',
        'mode'            => 'auto',
        'enqueue_assets'  => __NAMESPACE__ . '\\enqueue_block_assets',
        'supports'       => array('anchor' => true),
        'render_callback' => __NAMESPACE__ . '\\acf_block_render_callback',
    ) );
    }
}

function acf_block_render_callback( $block, $content = '', $is_preview = false, $post_id)
{

  $block_id_attr = ' ';

  if( isset( $block['anchor']) && ! empty( trim( $block['anchor'])))
  {
    $block_id_attr = ' id="' . esc_attr( $block['anchor']) . '" ';
  }

  $class_name = '';

  if( isset($block['className']) && ! empty(trim($block['className'])))
  {
    $class_name = ' ' . esc_attr( $block['className']);
  }

  $block_id = $block['id'];

  if( file_exists( get_theme_file_path($block['render_template'])))
  {
    include( get_theme_file_path($block['render_template']));
  }
}