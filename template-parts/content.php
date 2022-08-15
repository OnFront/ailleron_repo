<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ailleron
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-li' ); ?>>

  <div class="entry-li__image">
    <?php the_post_thumbnail( 'large' ); ?>
  </div>

  <div class="entry-li__content">
    <?php
    if ( get_post_type() === 'case_study' ) {
      $categories = get_the_terms( get_the_ID(), 'case_study_cat' );
    } else {
      $categories = get_the_category();
    }
    ?>
    <?php if ( ! empty( $categories ) ) : ?>
      <ul class="badges">
        <?php
        foreach ( $categories as $category ) :
          $category_link = sprintf(
              '<a href="%1$s">%2$s</a>',
              esc_url( get_category_link( $category->term_id ) ),
              esc_html( $category->name )
          );
          ?>
          <li class="badge"><?= $category_link ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <h2 class="entry-li__title">
      <a class="stretched-link" href="<?= get_permalink() ?>"><?= get_the_title() ?></a>
    </h2>

    <?php $details = get_field( 'entry_details' ); ?>

    <?php if ( $details ) : ?>
      <div class="entry-li__details">
        <?php foreach ( $details as $detail ) : ?>
          <div class="entry-detail">
            <div class="entry-detail__title entry-detail__title--sm"><?= $detail['title'] ?></div>
            <div class="entry-detail__description entry-detail__description--sm"><?= $detail['description'] ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if ( get_post_type() === 'post' ) : ?>
      <div class="entry-li__meta">
        <time class="entry-li__date" datetime="<?= get_post_time( 'c', true, get_the_ID() ); ?>"><?= get_the_date( '' ); ?></time>
        <?php /*<span>|</span>
        <span><?= get_the_author() ?></span> */ ?>
      </div>
    <?php endif; ?>


    <div class="entry-li__more">
      <a rel="nofollow" class="link-arrow link-arrow--small link-arrow--light link-arrow--right" href="<?= get_permalink(); ?>">
        <?php _e( 'Czytaj więcej', 'ailleron' ) ?><img loading="lazy" class="link-arrow__arrow"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/svg/arrow.svg" width="24" height="24" alt="">
      </a>
    </div>

  </div>


</article>
