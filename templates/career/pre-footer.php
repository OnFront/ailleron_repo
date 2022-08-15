<section class="pre-footer">
    <div class="container container--medium">
        <?php
            if(get_sub_field('heading')): ?>
                <header class="pre-footer__header">
                        <?php the_sub_field('heading'); ?>
                </header>   
            <?php endif; ?>

        <?php
            $link = get_sub_field('cta_button');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="pre-footer__wrap">
                    <a class="button button--white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>
                        <svg class="arrow-right" width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 8.86207H0.362069V11.1379H1.5V8.86207ZM26.3046 10.8046C26.749 10.3602 26.749 9.63975 26.3046 9.19536L19.0629 1.95361C18.6185 1.50922 17.898 1.50922 17.4536 1.95361C17.0092 2.398 17.0092 3.1185 17.4536 3.56289L23.8907 10L17.4536 16.4371C17.0092 16.8815 17.0092 17.602 17.4536 18.0464C17.898 18.4908 18.6185 18.4908 19.0629 18.0464L26.3046 10.8046ZM1.5 11.1379H25.5V8.86207H1.5V11.1379Z" fill="white"/>
                        </svg>
                    </a>
                </div>
 
            <?php endif; ?>
    </div>
</section>