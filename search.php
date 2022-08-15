<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ProjectPeople
 */

get_header();
?>

  <main id="primary" class="site-main light-bg">
    <div class="container container--big">
      <div class="search__page">
        <?php if ( have_posts() ) : ?>

          <?php get_search_form(); ?>

          <?php

          while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'search' );

          endwhile;

          \openx\Pagination\custom_pagination();


          ?>
        <?php else : ?>
          <?php get_search_form(); ?>
          <div style="margin: 2rem 0"><strong><?= __( 'Nie znaleziono wyników dla szukanej frazy', 'projectPeople' ) ?>.</strong></div>
        <?php endif; ?>
      </div>
    </div>
  </main>

<?php
get_sidebar();
get_footer();
