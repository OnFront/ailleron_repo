<li class="job-openings__list-item ">
    <?php
        if(get_sub_field('title')): ?>
            <h3 class="job-openings__list-title"> <?php the_sub_field('title'); ?></h3>
        <?php endif; ?>

        <?php 
            $link = get_sub_field('external_link');
            if( $link ): ?>
                <a class="job-openings__list-link" href="<?php echo esc_url( $link ); ?>">Learn More »</a>
            <?php endif; ?>
</li>