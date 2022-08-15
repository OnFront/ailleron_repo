<?php

namespace ailleron\Pagination;

function custom_pagination( \WP_Query $wp_query = null, $echo = true ) {

  if ( null === $wp_query ) {
    global $wp_query;
  }

  $pages = paginate_links( [
          'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
          'format'       => '?paged=%#%',
          'current'      => max( 1, get_query_var( 'paged' ) ),
          'total'        => $wp_query->max_num_pages,
          'type'         => 'array',
          'show_all'     => false,
          'end_size'     => 1,
          'mid_size'     => 1,
          'prev_next'    => true,
          'prev_text'    => __( '‹' ),
          'next_text'    => __( '›' ),
          'add_args'     => false,
          'add_fragment' => ''
      ]
  );

  if ( is_array( $pages ) ) {

    $pagination = '<div class="pagination"><ul class="pagination-nav">';

    foreach ( $pages as $page ) {
      $pagination .= '<li class="pagination-nav__item '.(strpos($page, 'current') !== false ? 'pagination-nav__item--active' : '').'"> ' . str_replace( 'page-numbers', 'page-link', $page ) . '</li>';
    }

    $pagination .= '</ul></div>';

    if ( $echo ) {
      echo $pagination;
    } else {
      return $pagination;
    }
  }

  return null;
}