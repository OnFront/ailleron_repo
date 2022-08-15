<?php

$bg_image = get_sub_field('slide_background');
$tab_name = get_sub_field('slide_name');
?>

<div class="hero__carousel-slide" data-tab-name="<?php echo $tab_name; ?>">
    <?php
        $bg_image = get_sub_field('slide_background');
        if(!empty($bg_image)): ?>
            <img class="hero__carousel-img" src="<?php echo esc_url($bg_image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        <?php endif; ?>
    <div class="container container--attach__arrows">
        <div class="hero__carousel-content container container--medium">
            <?php 
                if(get_sub_field('heading')): ?>
                    <header class="hero__carousel-header">
                        <h2><?php the_sub_field('heading'); ?></h2>
                    </header>
                <?php endif; ?>            
                
            <?php get_template_part('template-parts/hero/hero', 'slide-content'); ?>
                
            <?php 
                $hero_button = get_sub_field('cta_button');
                if( $hero_button ): 
                    $hero_button_url = $hero_button['url'];
                    $hero_button_title = $hero_button['title'];
                    $hero_button_target = $hero_button['target'] ? $hero_button['target'] : '_self';
                    ?>
                    <a class="button button--white" href="<?php echo esc_url( $hero_button_url ); ?>" target="<?php echo esc_attr( $hero_button_target ); ?>"><?php echo esc_html( $hero_button_title ); ?>
                        <svg class="arrow-right" width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 9.77247H0.362069V12.0483H1.5V9.77247ZM26.3046 11.715C26.749 11.2706 26.749 10.5502 26.3046 10.1058L19.0629 2.86401C18.6185 2.41962 17.898 2.41962 17.4536 2.86401C17.0092 3.3084 17.0092 4.0289 17.4536 4.47329L23.8907 10.9104L17.4536 17.3475C17.0092 17.7919 17.0092 18.5124 17.4536 18.9568C17.898 19.4012 18.6185 19.4012 19.0629 18.9568L26.3046 11.715ZM1.5 12.0483H25.5V9.77247H1.5V12.0483Z" fill="white"/>
                        </svg>
                    </a>
                <?php endif; ?>
        </div>
    </div>
</div>