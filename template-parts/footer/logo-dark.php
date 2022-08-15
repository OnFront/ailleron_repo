<?php 
    $dark_logo = get_field('logo_dark', 'option');
    $visit_ailleron = get_field('visit_ailleron_link', 'option');
?>
<div class="footer__logo">
    <?php
        if( !empty( $dark_logo ) ): ?>
            <img class="footer__logo-img" src="<?php echo esc_url($dark_logo['url']); ?>" alt="<?php echo esc_attr($dark_logo['alt']); ?>" />
        <?php endif; ?>
    <?php 
        if( $visit_ailleron ): 
            $visit_ailleron_url = $visit_ailleron['url'];
            $visit_ailleron_title = $visit_ailleron['title'];
            $visit_ailleron_target = $visit_ailleron['target'] ? $visit_ailleron['target'] : '_self';
            ?>
            <a class="footer__logo-link" href="<?php echo esc_url( $visit_ailleron_url ); ?>" target="<?php echo esc_attr( $visit_ailleron_target ); ?>"><?php echo esc_html( $visit_ailleron_title ); ?></a>
        <?php endif; ?>

</div>
   