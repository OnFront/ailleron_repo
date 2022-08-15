<?php
if(have_rows('icons_repeat')):
    while(have_rows('icons_repeat')): the_row(); ?>
        <li class="hero__carousel-item hero__carousel-item--icons">
            <?php 
                $icon = get_sub_field('link_icon');
                if( !empty( $icon ) ): ?>
                    <span class="icon">
                        <img src="<?php echo esc_url($icon['url']); ?>" role="decoration" />
                    </span>
                <?php endif; ?>
            <?php 
                $link = get_sub_field('link');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    ?>
                    <a class="link" href="<?php echo esc_url( $link_url ); ?>" target="_blank"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
        </li>
    <?php 
    endwhile;
endif;

