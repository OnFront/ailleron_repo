<div class="hero__carousel">
    <?php
        if(have_rows('carousel_repeat')):
            while(have_rows('carousel_repeat')): the_row();
                get_template_part('template-parts/hero/hero', 'slider-item');
            endwhile;
        endif;
    ?>
</div>