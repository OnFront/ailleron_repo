<div class="numbers__item">
    <div class="numbers__item-wrap">
        <?php
            if(have_rows('number_field')):
                while(have_rows('number_field')): the_row(); ?>
                        <div class="numbers__item-data">
                            <?php
                            text_sub_field_acf( $fieldname = 'prefix_field' ); ?><span class="number" data-count-to="<?php text_sub_field_acf( $fieldname = 'number' ); ?>">0</span><?php text_sub_field_acf( $fieldname = 'post_number_text' ); ?>
                        </div>
                        <?php
                endwhile;
            endif;
        ?>
        <div class="numbers__item-desc">
            <p><?php text_sub_field_acf( $fieldname = 'number_description' ); ?></p>
        </div>
    </div>
</div>