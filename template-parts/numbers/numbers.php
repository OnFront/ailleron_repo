<section class="numbers" id="numbers"> 
    <div class="container">
        <header class="numbers__header">
            <?php text_field_acf( $fieldname = 'numbers_heading' ); ?>
        </header>
        
        <div class="numbers__content">
        <?php
            if(have_rows('numbers_repeat')):
                while(have_rows('numbers_repeat')): the_row();
                    while(have_rows('number_item')): the_row();
                        get_template_part('template-parts/numbers/numbers', 'item'); ?>
                         <div class="separator"></div>
                    <?php
                    endwhile;
                endwhile;
            endif;
        ?>
        </div>
    </div>
</section>