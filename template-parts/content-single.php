<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ailleron
 */

global $post;

$post_type        = get_post_type( $post );
$post_type_object = get_post_type_object( $post_type );

$breadcrumb_prev_name = $post_type === 'post' ? 'Blog' : $post_type_object->labels->name;

if ( $post_type === 'case_study' ) {
  $back_to_url = get_post_type_archive_link( 'case_study' );
} else {
  $back_to_url = get_permalink( get_option( 'page_for_posts' ) );

}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
  <header class="entry__header">
    <div class="container container--big">
      <div class="entry__intro">
        <ul class="breadcrumbs">
          <li class="breadcrumbs__item">
            <a href="<?= esc_url( home_url( '/' ) ); ?>">ailleron</a>
          </li>
          <li class="breadcrumbs__item">
            <a href="<?= $back_to_url ?>"><?= $breadcrumb_prev_name ?></a>
          </li>
        </ul>
        <?php

        if ( get_post_type() === 'case_study' ) {
          $categories = get_the_terms( get_the_ID(), 'case_study_cat' );
        } else {
          $categories = get_the_category();
        }
        ?>
        <div class="entry__center">
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
                <li class="badge badge--big badge--white"><?= $category_link ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <h1 class="entry__title"><?= get_the_title() ?></h1>
          <?php if ( has_excerpt() ) : ?>
            <p class="entry__excerpt"><?= get_the_excerpt(); ?></p>
          <?php endif; ?>
          <?php if ( $post_type !== 'case_study' ) : ?>
            <div class="entry__meta">
              <time class="entry__date" datetime="<?= get_post_time( 'c', true, ); ?>"><?= get_the_date( '' ); ?></time>
              <?php if ( get_field( 'reading_time' ) ) : ?>
                <div class="entry__reading-time"><?= get_field( 'reading_time' ) ?></div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php $details = get_field( 'entry_details' ); ?>

          <?php if ( $details ) : ?>
            <div class="entry__details">
              <?php foreach ( $details as $detail ) : ?>
                <div class="entry-detail">
                  <div class="entry-detail__title"><?= $detail['title'] ?></div>
                  <div class="entry-detail__description"><?= $detail['description'] ?></div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="entry__more">
          <a rel="nofollow" class="link-arrow link-arrow--light link-arrow--bottom" href="#post-main">
            <?php _e( 'Czytaj dalej', 'ailleron' ) ?><img loading="lazy" class="link-arrow__arrow"
                                                               src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/svg/arrow.svg" width="24" height="24" alt="">
          </a>
        </div>

      </div>
      <div class="entry__r">
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="entry__image">
            <?php the_post_thumbnail( 'large' ) ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </header>
  <div id="post-main" class="entry__main">
    <div class="container container--big">
      <div class="entry__sidebar">
        <a rel="nofollow" class="link-arrow link-arrow--light link-arrow--left" href="<?= $back_to_url ?>">
          <img loading="lazy" class="link-arrow__arrow"
               src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/svg/arrow.svg" width="24" height="24" alt="">
          <?= $breadcrumb_prev_name ?>
        </a>
        <?php $tocShow = get_field( 'table_of_contents_show' ); ?>
        <?php $tocLinks = get_field( 'table_of_contents' ); ?>
        <?php if ( isset( $tocShow ) && $tocShow && $tocLinks ) : ?>
          <div class="entry__toc">
            <p><?= __( 'Spis treści', 'ailleron' ) ?>:</p>
            <ul class="toc">
              <?php foreach ( $tocLinks as $tocLink ) : ?>
                <li class="toc__item"><a href="<?= $tocLink['link']['url'] ?>"><?= $tocLink['link']['title'] ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>
        <div class="entry__share">
          <p><?= __( 'Udostępnij swoim znajomym', 'ailleron' ) ?>:</p>
          <ul class="share-links">
            <li class="share-links__item share-links__item--facebook">
              <a rel="nofollow noopener" target="_blank" href="https://www.facebook.com/sharer.php?u=<?= urlencode( get_permalink() ) ?>">
                <svg width="26" height="26" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.188 2.688h-3.094a5.156 5.156 0 00-5.157 5.156v3.093H7.845v4.126h3.093v8.25h4.126v-8.25h3.093l1.032-4.126h-4.125V7.845a1.031 1.031 0 011.03-1.032h3.095V2.688z"
                        fill="#4B3FDB"/>
                </svg>
              </a>
            </li>
            <li class="share-links__item share-links__item--linkedin">
              <a rel="nofollow noopener" target="_blank"
                 href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?= urlencode( get_permalink() ) ?>&amp;title=<?= urlencode( get_the_title() ) ?>">
                <svg width="26" height="26" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.125 8.875a6.187 6.187 0 016.188 6.188v7.218h-4.125v-7.218a2.062 2.062 0 00-4.125 0v7.218h-4.126v-7.218a6.187 6.187 0 016.188-6.188zM6.813 9.906H2.688v12.375h4.124V9.906zM4.75 6.813a2.062 2.062 0 100-4.125 2.062 2.062 0 000 4.124z"
                        fill="#4B3FDB"/>
                </svg>
              </a>
            </li>
            <li class="share-links__item share-links__item--twitter">
              <a rel="nofollow noopener" target="_blank" href="http://twitter.com/share?text=<?= urlencode( get_the_title() ) ?>&amp;url=<?php echo urlencode( get_permalink() ) ?>">
                <svg width="26" height="26" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24.344 3.72a11.241 11.241 0 01-3.238 1.577A4.62 4.62 0 0013 8.391v1.031a10.993 10.993 0 01-9.281-4.671s-4.125 9.28 5.156 13.406a12.004 12.004 0 01-7.219 2.062c9.281 5.157 20.625 0 20.625-11.859a4.64 4.64 0 00-.082-.856 7.962 7.962 0 002.145-3.785z"
                        fill="#4B3FDB"/>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="entry__content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</article>

<?php get_template_part( 'template-parts/partials/related', 'posts' ); ?>

<?php
/**
 * Reusable blocks: Single Post
 */

if ( $post_type === 'case_study' ) {
  $args = array(
      'name'        => 'case-study-pojedynczy-wpis-bloki',
      'post_type'   => 'wp_block',
      'post_status' => 'publish',
      'numberposts' => 1
  );
} else {
  $args = array(
      'name'        => 'blog-pojedynczy-wpis-bloki',
      'post_type'   => 'wp_block',
      'post_status' => 'publish',
      'numberposts' => 1
  );
}
$singlePostAdditionalBlocksTmp = get_posts( $args );
$singlePostAdditionalBlocks = array();

if($singlePostAdditionalBlocksTmp) {
  $singlePostAdditionalBlocksID = apply_filters( 'wpml_object_id', $singlePostAdditionalBlocksTmp[0]->ID, 'wp_block' );
  $singlePostAdditionalBlocks   = get_post( $singlePostAdditionalBlocksID );
}
?>

<?php if ( ! empty( $singlePostAdditionalBlocks ) ) : ?>
  <?php $blocks = parse_blocks( $singlePostAdditionalBlocks->post_content ); ?>
  <?php foreach ( $blocks as $block ) : ?>
    <?php echo render_block( $block ); ?>
  <?php endforeach; ?>
<?php endif; ?>
