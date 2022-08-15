<?php


?>
<section class="company-life">
    <div class="container container--small">
        <div class="company-life__header">
            <?php
                if(get_sub_field('heading')): ?>
                    <h2 class="company-life__header-title">
                        <?php the_sub_field('heading'); ?>
                    </h2>
                <?php endif ?>
            <?php
                if(get_sub_field('description')):
                    the_sub_field('description');
                endif;
                ?>
        </div>
        <?php 
            // videoSource Function itself may be found in the inc/template-functions.php
            $video_source = videoSource();

            if($video_source):

                $is_video_poster = get_sub_field('video_poster');
                $poster_url =  $is_video_poster ? $is_video_poster['url'] : '' ;
                
                ?>
                <div class="company-life__video">
                    <div class="wrapper">
                        <video poster="<?php echo $poster_url; ?>" class="company-life__video-video stopped" id="ailleron-video">
                            <source src="<?php echo $video_source; ?>">
                        </video>
                    </div>
                    <div class="company-life__video-wrap">
                        <button class="button button--play">
                                <svg class="play-icon" width="47" height="59" viewBox="0 0 47 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.333374 0.436401V58.8001L46.1667 29.6182L0.333374 0.436401Z" fill="white"/>
                                </svg>

                                <svg class="pause-icon d-none" width="87" height="99" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_591_4139)">
                                    <path d="M41.7143 21H21V79H41.7143V21Z" fill="white"/>
                                    <path d="M78.9999 21H58.2856V79H78.9999V21Z" fill="white"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_591_4139">
                                    <rect width="100" height="100.052" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                        </button>
                    </div>
                </div>
        <?php endif; ?>
        <div class="company-life__wrap">
            <?php 
                $external_link = get_sub_field('external_link');
                if( $external_link ): 
                    $external_link_url = $external_link['url'];
                    $external_link_title = $external_link['title'];
                    $external_link_target = $external_link['target'] ? $external_link['target'] : '_self';
                    ?>
                    <a class="external-link" href="<?php echo esc_url( $external_link_url ); ?>" target="<?php echo esc_attr( $external_link_target ); ?>"><?php echo esc_html( $external_link_title ); ?></a>
                <?php endif; ?>

            <?php 
                $cta_button = get_sub_field('cta_button');
                if( $cta_button ): 
                    $cta_button_url = $cta_button['url'];
                    $cta_button_title = $cta_button['title'];
                    $cta_button_target = $cta_button['target'] ? $cta_button['target'] : '_self';
                    ?>
                    <a class="button button--blue" href="<?php echo esc_url( $cta_button_url ); ?>" target="<?php echo esc_attr( $cta_button_target ); ?>">
                    <?php echo esc_html( $cta_button_title ); ?>
                        <svg class="arrow-right" width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 8.86207H0.362069V11.1379H1.5V8.86207ZM26.3046 10.8046C26.749 10.3602 26.749 9.63975 26.3046 9.19536L19.0629 1.95361C18.6185 1.50922 17.898 1.50922 17.4536 1.95361C17.0092 2.398 17.0092 3.1185 17.4536 3.56289L23.8907 10L17.4536 16.4371C17.0092 16.8815 17.0092 17.602 17.4536 18.0464C17.898 18.4908 18.6185 18.4908 19.0629 18.0464L26.3046 10.8046ZM1.5 11.1379H25.5V8.86207H1.5V11.1379Z" fill="white"/>
                        </svg>
                    </a>
                <?php endif; ?>
        </div>
    </div>
</section>