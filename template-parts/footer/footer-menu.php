<?php
    if(have_rows('footer_menu_repeat', 'options')): ?>
        <ul class="no-list footer__columns">
        <?php 
            while(have_rows('footer_menu_repeat', 'options')): the_row();
                if(have_rows('column')): 
                    while(have_rows('column')): the_row();
                        get_template_part('template-parts/footer/footer-menu', 'column');
                    endwhile;
                endif;
            endwhile;
        ?>
        </ul>
    <?php
    endif;