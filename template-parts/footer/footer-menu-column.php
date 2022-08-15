

<li class="footer__column">
    <?php
        if(get_sub_field('column_name')): ?>
            <div class="footer__column-name">
            <?php 
                $link = get_sub_field('column_name');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="list-group" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
                <button class="footer__column-arrow">
                    <svg  xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'><path fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/></svg>
                </button>
            </div>
        <?php endif; ?>

    <?php
        if(get_sub_field('add_submenu') == 'Yes'):
            if(have_rows('column_links_repeat')): ?>
                <ul class="no-list footer__column-links">
                    <?php
                        while(have_rows('column_links_repeat')): the_row(); ?>
                            <li><?php get_template_part('template-parts/footer/footer-menu', 'link'); ?></li>
                        <?php 
                        endwhile;
                    ?>
                </ul>
                <?php endif;
        endif; ?>
</li>
