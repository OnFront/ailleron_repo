<?php
if(have_rows('numbers_repeat')):
    while(have_rows('numbers_repeat')): the_row(); ?>
        <li class="hero__carousel-item hero__carousel-item--numbers">
            <?php 
                $value = get_sub_field('value');
                if($value): ?>
                   <h3><?php echo $value; ?></h3>
                <?php endif; ?>
                
            <?php 
                $value_desc = get_sub_field('value_description');
                if($value_desc): ?>
                    <p><?php echo $value_desc; ?></p>
                <?php endif; ?>
        </li>
    <?php 
    endwhile;
endif;