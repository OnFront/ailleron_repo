<?php
function display_year() {
    $year = date("Y");
    echo $year;
}
?> 

<div class="footer__lower">
    <div class="wrap">
    <?php
        if(have_rows('links_repeat', 'options')): ?>
                <ul class="no-list footer__utility">
                    <?php
                        while(have_rows('links_repeat', 'options')): the_row();
                            get_template_part('template-parts/footer/footer-utility', 'link');
                        endwhile;
                    ?>
                </ul><!-- footer utility -->
        <?php endif; ?>
        <small>Copyright © <?php display_year(); ?> OpenX. All rights reserved.</small>
</div><!-- footer lower -->