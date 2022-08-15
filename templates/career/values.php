<section class="values">
    <div class="container container--medium">
        <?php 
            if(get_sub_field('heading')): ?>
            <header class="values__header header-spacing">
                <h2><?php the_sub_field('heading'); ?></h3>
            </header>
        <?php endif; ?>

        <?php 
            if(have_rows('values_repeat')): ?>
            <ul class="values__list no-list">
                <?php 
                    while(have_rows('values_repeat')): the_row();
                        while(have_rows('value')): the_row();
                            get_template_part('template-parts/values/value-item');
                        endwhile;
                    endwhile; 
                ?>
                <?php
                    $image = get_sub_field('section_image');
                    if( !empty( $image ) ): ?>
                        <div class="values__list-img__wrapper">
                            <img class="values__img values__img--sm" src="<?php echo esc_url($image['url']); ?>" role="decoration" />
                        </div>
                    <?php endif; ?>
            </ul>
            <?php endif; ?>
    </div>
</section>