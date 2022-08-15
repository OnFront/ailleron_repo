<?php
$utility_link = get_sub_field('link');

if( $utility_link ): 
    $utility_link_url = $utility_link['url'];
    $utility_link_title = $utility_link['title'];
    $utility_link_target = $utility_link['target'] ? $utility_link['target'] : '_self';
    ?>
    <li><a class="link" href="<?php echo esc_url( $utility_link_url ); ?>" target="<?php echo esc_attr( $utility_link_target ); ?>"><?php echo esc_html( $utility_link_title ); ?></a></li>
<?php endif;