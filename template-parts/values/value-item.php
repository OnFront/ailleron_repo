<li class="values__list-item">
    <article>
        <?php 
            $image = get_sub_field('icon');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" role="decoration" />
            <?php endif; ?>
            
        <?php
            if(get_sub_field('value_title')): ?>
                <h3 class="values__list-title"><?php the_sub_field('value_title'); ?></h3>
            <?php endif; ?>

        <?php
            if(get_sub_field('value_description')): ?>
                <p class="values__list-desc"><?php the_sub_field('value_description'); ?></p>
            <?php endif; ?>
    </article>
</li>