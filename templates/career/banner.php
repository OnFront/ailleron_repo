<?php

// settings

if(have_rows('settings')):
    while(have_rows('settings')): the_row();
            $is_alt_banner = get_sub_field('enable_alt_banner');
    endwhile;
endif;

$bg_image = get_sub_field('background_image');

?>

<section class="banner <?php if($is_alt_banner == 'Yes'): echo 'banner--alt'; endif; ?>" style="background-image: url(<?php echo $bg_image ;?>)">
    <?php if($is_alt_banner == 'No'): ?>
        <svg class="bubble bubble--left" width="73" height="185" viewBox="0 0 73 185" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="-19.25" cy="92.25" r="92.25" fill="url(#paint0_linear_130_3448)"/>
            <defs>
            <linearGradient id="paint0_linear_130_3448" x1="-75.5268" y1="32.5295" x2="16.8433" y2="175.192" gradientUnits="userSpaceOnUse">
            <stop stop-color="#389CC5"/>
            <stop offset="1" stop-color="#844193"/>
            </linearGradient>
            </defs>
        </svg>
        <?php else: ?>
        <svg class="bubble bubble--dark" width="72" height="168" viewBox="0 0 72 168" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="-12" cy="84" r="84" fill="url(#paint0_linear_302_2628)"/>
                <defs>
                <linearGradient id="paint0_linear_302_2628" x1="-63.2439" y1="29.6203" x2="20.8654" y2="159.525" gradientUnits="userSpaceOnUse">
                <stop stop-color="#389CC5"/>
                <stop offset="1" stop-color="#844193"/>
                </linearGradient>
            </defs>
        </svg>
        <?php endif; ?>
    <?php
        if(get_sub_field('text_header')): ?>
            <div class="container container--medium">
                <header class="banner__header">
                    <h2><?php the_sub_field('text_header'); ?></h2>
                </header>
                <svg class="bubbles bubbles--center width="602" height="446" viewBox="0 0 602 446" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="381" cy="225" r="221" fill="url(#paint0_linear_148_1545)" fill-opacity="0.6"/>
                    <circle cx="21.1599" cy="21.1614" r="21.1599" fill="url(#paint1_linear_148_1545)"/>
                    <defs>
                    <linearGradient id="paint0_linear_148_1545" x1="246.18" y1="81.9296" x2="467.467" y2="423.702" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#389CC5"/>
                    <stop offset="1" stop-color="#844193"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_148_1545" x1="8.25139" y1="7.46293" x2="29.4388" y2="40.1864" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#389CC5"/>
                    <stop offset="1" stop-color="#844193"/>
                    </linearGradient>
                    </defs>
                </svg>
            </div>
        <?php else: ?>
            <svg class="bubbles" width="389" height="288" viewBox="0 0 389 288" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="246.028" cy="145.291" r="142.709" fill="url(#paint0_linear_438_4176)"/>
                <circle cx="13.6638" cy="13.6638" r="13.6638" fill="url(#paint1_linear_438_4176)"/>
                <defs>
                <linearGradient id="paint0_linear_438_4176" x1="158.969" y1="52.9045" x2="301.863" y2="273.601" gradientUnits="userSpaceOnUse">
                <stop stop-color="#389CC5"/>
                <stop offset="1" stop-color="#844193"/>
                </linearGradient>
                <linearGradient id="paint1_linear_438_4176" x1="5.32827" y1="4.81818" x2="19.0099" y2="25.9491" gradientUnits="userSpaceOnUse">
                <stop stop-color="#389CC5"/>
                <stop offset="1" stop-color="#844193"/>
                </linearGradient>
                </defs>
            </svg>
            <?php
        endif;
    ?>
</section>