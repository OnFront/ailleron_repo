<?php
$post_type        = get_post_type();
$post_type_object = get_post_type_object( $post_type );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'search-item' ); ?>>

  <div class="search-item__header">
    <ul class="badges">
      <li class="badge badge--big badge--purple"><a href="#"><?= $post_type_object->labels->name ?></a></li>
    </ul>
    <h2 class="search-item__title">
      <a class="stretched-link" href="<?= get_permalink() ?>">
        <?php the_title() ?>
      </a>
    </h2>
  </div>

  <?php if ( has_excerpt() ) : ?>
    <div class="search-item__excerpt">
      <?php the_excerpt(); ?>
    </div>
  <?php endif; ?>

</article>
