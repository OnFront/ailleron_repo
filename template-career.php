<?php
// Template name: Career

get_header('small');

if(have_rows('layout_career')):
    while(have_rows('layout_career')): the_row();
        if( get_row_layout() == 'hero' ):
            get_template_part('templates/career/hero');
        elseif( get_row_layout() == 'values' ):
            get_template_part('templates/career/values');
        elseif( get_row_layout() == 'company_life' ):
            get_template_part('templates/career/company-life');
        elseif( get_row_layout() == 'testimonials' ):
            get_template_part('templates/career/testimonials');
        elseif( get_row_layout() == 'banner' ):
            get_template_part('templates/career/banner');
        elseif( get_row_layout() == 'benefits' ):
            get_template_part('templates/career/benefits');
        elseif( get_row_layout() == 'job_openings' ):
            get_template_part('templates/career/job_openings');
        elseif( get_row_layout() == 'pre-footer' ):
            get_template_part('templates/career/pre-footer');
        endif;
    endwhile;
endif;

get_footer();