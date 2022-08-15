<?php
    if(have_rows('content_layout')): ?>
        <?php
            while(have_rows('content_layout')): the_row(); ?>
      
                <button class="slick-arrow prev-slide prev-slide--hero">
                    <svg width="40" height="35" viewBox="0 0 40 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.2664 21.371L27.8 33.9055H16.7402L0.196777 17.2696L16.7402 0.633625L27.6622 0.702496L15.1742 13.2604L10.5377 17.2696L15.2664 21.371Z" fill="white"/>
                    </svg>
                </button>

                <ul class="no-list hero__carousel-list">
                    <?php 
                        if( get_row_layout() == 'icons' ):
                            get_template_part('template-parts/hero/hero', 'slide-content-icons');
                        elseif( get_row_layout() == 'numbers' ):
                            get_template_part('template-parts/hero/hero', 'slide-content-numbers');
                        endif;
                    ?>
                </ul>

                <button class="slick-arrow next-slide next-slide--hero">
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
          
            <?php endwhile; ?>
    <?php endif;
   
