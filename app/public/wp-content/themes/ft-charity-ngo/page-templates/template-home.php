<?php
/**
 *
 * Template Name: Frontpage

 *
 * @package FT Charity NGO
 */

$ft_charity_ngo_options = ft_charity_ngo_theme_options();
$callout_show = $ft_charity_ngo_options['callout_show'];
$blog_show = $ft_charity_ngo_options['blog_show'];
$about_show = $ft_charity_ngo_options['aboutsection_show'];

get_header();


get_template_part('template-parts/homepage/banner', 'section');


if($callout_show == 1)
get_template_part('template-parts/homepage/callout', 'section');

get_template_part('template-parts/homepage/cause', 'section');

if($about_show == 1)
get_template_part('template-parts/homepage/about', 'section');

get_template_part('template-parts/homepage/cta', 'section');







if($blog_show == 1)
get_template_part('template-parts/homepage/blog', 'section');


get_footer();
