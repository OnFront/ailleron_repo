<section class="hero">
    <div class="container">
        <div class="hero__wrap" style="background: url('<?php the_field('background_image'); ?>') center center no-repeat;">
            <div class="hero__content">
                <?php text_field_acf( $fieldname = 'title_and_description' ) ?>
                <?php button_arrow_down( $fieldname = 'scroll_to' ) ?>
            </div>
        </div>
        <?php get_template_part('template-parts/hero/hero', 'slider'); ?>
    </div>
</section>