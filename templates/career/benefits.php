<section class="benefits">
    <div class="container">
    <?php 
        if(get_sub_field('heading')): ?>
            <header class="benefits__header">
                <h2>
                    <?php the_sub_field('heading'); ?>
                </h2>
            </header>
        <?php endif; ?>

        <div class="benefits__wrapper">
            <?php 
                $i = 0;

                if(have_rows('benefits_repeat')):
                    while(have_rows('benefits_repeat')): the_row();
                        if(have_rows('benefit_row')):
                            while(have_rows('benefit_row')): the_row();
                                $i++;
                                if($i % 2 == 0):
                                    get_template_part('template-parts/benefits/benefit-row-alt');
                                else:
                                    get_template_part('template-parts/benefits/benefit-row');
                                endif;
                            endwhile;
                        endif;
                    endwhile;
                endif;
            ?>
        </div>   
    </div>

    <div class="benefits__more">
        <div class="container">
            <div class="button-text">
                <button><span>+</span>View more benefits of working at ailleron</button>
            </div>
            <?php
                if(have_rows('more_benefits_repeat')): ?>
                    <ul class="no-list benefits__more-benefits">
                        <?php 
                            while(have_rows('more_benefits_repeat')): the_row();
                                if(have_rows('more_benefits_row_repeat')): ?>
                                    <div class="benefits__more-row">
                                        <?php while(have_rows('more_benefits_row_repeat')): the_row(); ?>
                                            <li class="benefits__more-item"><?php the_sub_field('one_benefit'); ?></li>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

            <?php 
                $benefits_button = get_sub_field('benefits_button');
                if( $benefits_button ): 
                    $benefits_button_url = $benefits_button['url'];
                    $benefits_button_title = $benefits_button['title'];
                    $benefits_button_target = $benefits_button['target'] ? $benefits_button['target'] : '_self';
                    ?>
                    <a class="button button--blue" href="<?php echo esc_url( $benefits_button_url ); ?>" target="<?php echo esc_attr( $benefits_button_target ); ?>">
                    <?php echo esc_html( $benefits_button_title ); ?>
                        <svg class="arrow-right" width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 8.86207H0.362069V11.1379H1.5V8.86207ZM26.3046 10.8046C26.749 10.3602 26.749 9.63975 26.3046 9.19536L19.0629 1.95361C18.6185 1.50922 17.898 1.50922 17.4536 1.95361C17.0092 2.398 17.0092 3.1185 17.4536 3.56289L23.8907 10L17.4536 16.4371C17.0092 16.8815 17.0092 17.602 17.4536 18.0464C17.898 18.4908 18.6185 18.4908 19.0629 18.0464L26.3046 10.8046ZM1.5 11.1379H25.5V8.86207H1.5V11.1379Z" fill="white"/>
                        </svg>
                    </a>
                <?php endif; ?>
        </div>
    </div>
</section>