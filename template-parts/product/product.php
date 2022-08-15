<section class="product container container--FHDup ">
 
        <div class="col col--content">
            <header class="product__content">
                <?php text_field_acf( $fieldname = 'product_content' )  ?>
                <?php contact_btn_acf($fieldname = 'contact_button'); ?>
            </header>
        </div>

        <div class="col col--image">
            <?php 
            $product_image = get_field('product_image');
            if( !empty( $product_image ) ): ?>
                <img class="product__photo" src="<?php echo esc_url($product_image['url']); ?>" alt="<?php echo esc_attr($product_image['alt']); ?>" />
            <?php endif; ?>
        </div>

</section>