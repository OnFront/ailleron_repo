<?php 
$image_logo = get_sub_field('item');
if( !empty( $image_logo ) ): ?>
    <div class="hero__carousel-item">
        <img src="<?php echo esc_url($image_logo['url']); ?>" alt="<?php echo esc_attr($image_logo['alt']); ?>" />
    </div>
<?php endif; ?>