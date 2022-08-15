<section class="testimonials">
    <div class="container">
    <?php
        if(get_sub_field('heading')): ?>
            <header class="testimonials__header">
                <h2><?php the_sub_field('heading'); ?></h2>
            </header>
        <?php endif; ?>

        <ul class="no-list testimonials__carousel" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
            <?php
                if(have_rows('testimonials')):
                    while(have_rows('testimonials')): the_row();
                        if(have_rows('testimonial')):
                            while(have_rows('testimonial')): the_row();
                                get_template_part('template-parts/testimonials/testimonial');
                            endwhile;
                        endif;
                    endwhile;
                endif;
            ?>

        </ul>
        <button class="slick-arrow prev-slide">
            <svg width="40" height="35" viewBox="0 0 40 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.2664 21.371L27.8 33.9055H16.7402L0.196777 17.2696L16.7402 0.633625L27.6622 0.702496L15.1742 13.2604L10.5377 17.2696L15.2664 21.371Z" fill="white"/>
            </svg>
        </button>
        <button class="slick-arrow next-slide">
            <svg width="40" height="35" viewBox="0 0 40 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_40_7291)">
                <path d="M24.7336 13.3646L12.2 0.830078L23.2598 0.830078L39.8032 17.466L23.2598 34.102L12.3378 34.0331L24.8258 21.4752L29.4623 17.466L24.7336 13.3646Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_40_7291">
                <rect width="33.4562" height="40" fill="white" transform="translate(40 0.639648) rotate(90)"/>
                </clipPath>
                </defs>
            </svg>
        </button>
        <?php 
            $link = get_sub_field('cta_button');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button button--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>
                    <svg class="arrow-right" width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 8.86207H0.362069V11.1379H1.5V8.86207ZM26.3046 10.8046C26.749 10.3602 26.749 9.63975 26.3046 9.19536L19.0629 1.95361C18.6185 1.50922 17.898 1.50922 17.4536 1.95361C17.0092 2.398 17.0092 3.1185 17.4536 3.56289L23.8907 10L17.4536 16.4371C17.0092 16.8815 17.0092 17.602 17.4536 18.0464C17.898 18.4908 18.6185 18.4908 19.0629 18.0464L26.3046 10.8046ZM1.5 11.1379H25.5V8.86207H1.5V11.1379Z" fill="white"/>
                    </svg>
                </a>
            <?php endif; ?> 
    </div>

</section>