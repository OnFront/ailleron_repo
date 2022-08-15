<?php 
    $image = get_sub_field('benefit_row_image');
    if( !empty( $image ) ): ?>
        <div class="benefits__item-image">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
    <?php endif; ?>

<?php
    if(have_rows('row_benefits_repeat')): ?>
        <ul class="no-list benefits__list">
            <?php
                while(have_rows('row_benefits_repeat')): the_row();
                    get_template_part('template-parts/benefits/benefit-one-item');
                endwhile;
            ?>
        </ul>
    <?php
    endif;