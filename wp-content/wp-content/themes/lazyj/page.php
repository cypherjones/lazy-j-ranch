<?php 

get_header();

// set some variables
$about = 'about';
$lodging = 'lodging';

// get the slider for all pages


if (is_page( $about )) :
  get_template_part('content/page', 'about' );
elseif (is_page($lodging )) :
  get_template_part('content/page', 'lodging' );
endif;

// get the by cta
get_template_part('content/section', 'buy-cta' );

get_footer(); 

?>