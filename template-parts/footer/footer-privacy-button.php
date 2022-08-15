<?php
$privacy_button = get_sub_field('link_button');

if( $privacy_button ): 
    $privacy_button_url = $privacy_button['url'];
    $privacy_button_title = $privacy_button['title'];
    $privacy_button_target = $privacy_button['target'] ? $privacy_button['target'] : '_self';
    ?>
    <a class="button button--blueLight" href="<?php echo esc_url( $privacy_button_url ); ?>" target="<?php echo esc_attr( $privacy_button_target ); ?>"><?php echo esc_html( $privacy_button_title ); ?></a>
<?php endif;