<li class="testimonials__item">
    <div class="testimonials__item-wrap">
        <?php
            if(get_sub_field('quote')):
               the_sub_field('quote');
            endif;
        ?>
        <div class="testimonials__item-figure">
            <div class="testimonials__item-data">
                <?php
                    if(get_sub_field('testimonial__name')): ?>
                        <p class="testimonials__item-name"><?php the_sub_field('testimonial__name'); ?></p>
                    <?php endif;
                    if(get_sub_field('position')): ?>
                        <p class="testimonials__item-position"><?php the_sub_field('position'); ?></p>
                    <?php endif; ?>
            </div>
            <?php 
                $image = get_sub_field('figure');
                if( !empty( $image ) ): ?>
                    <div class="testimonials__item-photo">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                <?php endif; ?>
        </div>
    </div>
</li>