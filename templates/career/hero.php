<section class="hero">
    <div class="hero__carousel" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
        <?php
            if(have_rows('carousel')):
                while(have_rows('carousel')): the_row();
                    if(have_rows('slide')):
                        while(have_rows('slide')): the_row();
                            get_template_part('template-parts/hero/hero', 'slide');
                        endwhile;
                    endif;
                endwhile;
            endif;
        ?>
    </div>
</section>