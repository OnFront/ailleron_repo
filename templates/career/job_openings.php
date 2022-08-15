<?php

$populate_by_api = get_sub_field('automatically_populate_with_api');

?>

<section class="job-openings">
    <div class="container container--semi_medium">
        <?php
            if(get_sub_field('heading')): ?>
            <header class="job-openings__header">
                    <h2><?php the_sub_field('heading'); ?></h2>
            </header>
            <?php endif; ?>
   
            <ul class="job-openings__list no-list <?php if($populate_by_api == 'Enable'): echo 'enable-api'; endif; ?> " id="job-openings">
               <?php
                if($populate_by_api == "Disable"):
                    if(have_rows('list_reapeat')):
                        while(have_rows('list_reapeat')): the_row();
                            if(have_rows('position_group')):
                                while(have_rows('position_group')): the_row();
                                    get_template_part('template-parts/job-openings/job-openings', 'item');
                                endwhile;
                            endif;
                        endwhile;
                    endif;
                endif;
                ?>
            </ul>
           
            <div class="job-openings__wrap">
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

                <?php
                if(get_sub_field('enable_link_to_application') == "Enable"):
                    if(get_sub_field('button_subtext')): ?>
                        <p><?php the_sub_field('button_subtext'); ?></p>
                    <?php endif;
                endif;
                ?>
            </div>
    </div>
</section>