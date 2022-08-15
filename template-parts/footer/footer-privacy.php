<?php
    if(have_rows('footer_buttons_repeat', 'options')): ?>
    <div class="footer__privacy">
        <?php
            while(have_rows('footer_buttons_repeat', 'options')): the_row();
                get_template_part('template-parts/footer/footer-privacy', 'button');
            endwhile;
        ?>
    </div>
   <?php endif;