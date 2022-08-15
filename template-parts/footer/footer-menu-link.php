<?php
$column_link = get_sub_field('column_link');

if( $column_link ): 
    $column_link_url = $column_link['url'];
    $column_link_title = $column_link['title'];
    $column_link_target = $column_link['target'] ? $column_link['target'] : '_self';
    ?>
    <a class="footer__column-link" href="<?php echo esc_url( $column_link_url ); ?>" target="<?php echo esc_attr( $column_link_target ); ?>"><?php echo esc_html( $column_link_title ); ?></a>
<?php endif;