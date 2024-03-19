<?php
if (!function_exists('ft_charity_ngo_theme_options')) :
    function ft_charity_ngo_theme_options()
    {
        $defaults = array(

            //banner section
            'header_button_txt' => '',
            'header_button_url' => '',
            'facebook' => '',
            'search_show' => 1,
            'twitter' => '',
            'instagram' => '',
            'banner_title' => '',
            'banner_button_txt' => '',
            'banner_desc' => '',
            'banner_button_url' => '',
            'banner_bg_image' => '',

            'cause_show' => 0,
            'cause_category' => '',
            'cause_title' => '',
            'cause_desc' => '',
            'callout_show' => 0,

            'about_show' => 0,
            'choose_about_page' => '',
            'choose_about_page2' => '',

            'cta_show' => 0,
            'cta_title' => '',
            'cta_bg_image' => '',
            'cta_button_txt' => '',
            'cta_button_url' => '',

            'choose_callout_page' => '',
            'choose_callout_page2' => '',
            'choose_callout_page3' => '',
            
            

            'aboutsection_show' => 0,
            'aboutsection_message' => '',
            'aboutsection_name' => '',
            'aboutsection_youtube_url' => '',
            'aboutsection_bg_image' => '',
            'aboutsection_stat1' => '',
            'aboutsection_stat2' => '',
            'aboutsection_stat1title' => '',
            'aboutsection_stat2title' => '',

            'course_show' => 0,
            'course_title' => '',
            'course_desc' => '',
            'course_category' => '',

            'blog_show' => 0,
            'blog_title' => '',
            'blog_desc' => '',
            'blog_category' => '',
            'show_prefooter' => 1,


        );

        $options = get_option('ft_charity_ngo_theme_options', $defaults);

        //Parse defaults again - see comments
        $options = wp_parse_args($options, $defaults);

        return $options;
    }
endif;
