<?php
    if(have_rows('single_benefit_group')):
        while(have_rows('single_benefit_group')): the_row(); ?>
        <li class="benefits__one__benefit">
            <div class="benefits__one__benefit-wrap">

            <?php
                $icon = get_sub_field('icon');
                if( !empty( $icon ) ): ?>
                <div class="benefits__one__benefit-icon">
                    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                </div>
                <?php endif; ?>
                
            <?php 
                if(get_sub_field('benefit_text')): ?>
                    <div class="benefits__one__benefit-desc">
                        <h3><?php the_sub_field('benefit_text'); ?></h3>
                    </div>
                <?php endif; ?>
            </div>
        </li>
        <?php
        endwhile;
    endif;