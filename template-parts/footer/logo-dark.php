<?php 
    $dark_logo = get_field('logo_dark', 'option');
    $visit_openx = get_field('visit_openx_link', 'option');
?>
<div class="footer__logo">
    <?php
        if( !empty( $dark_logo ) ): ?>
            <img class="footer__logo-img" src="<?php echo esc_url($dark_logo['url']); ?>" alt="<?php echo esc_attr($dark_logo['alt']); ?>" />
        <?php endif; ?>
    <?php 
        if( $visit_openx ): 
            $visit_openx_url = $visit_openx['url'];
            $visit_openx_title = $visit_openx['title'];
            $visit_openx_target = $visit_openx['target'] ? $visit_openx['target'] : '_self';
            ?>
            <a class="footer__logo-link" href="<?php echo esc_url( $visit_openx_url ); ?>" target="<?php echo esc_attr( $visit_openx_target ); ?>"><?php echo esc_html( $visit_openx_title ); ?></a>
        <?php endif; ?>

</div>
   