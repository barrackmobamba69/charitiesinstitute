<?php
/**
 * FT Charity NGO Theme Customizer
 *
 * @package ft_charity_ngo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ft_charity_ngo_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$ft_charity_ngo_options = ft_charity_ngo_theme_options();

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'ft_charity_ngo_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'ft_charity_ngo_customize_partial_blogdescription',
			)
		);
	}


    $wp_customize->add_panel(
        'theme_options',
        array(
            'title' => esc_html__('Theme Options', 'ft-charity-ngo'),
            'priority' => 2,
        )
    );



    /* Header Section */
    $wp_customize->add_section(
        'header_section',
        array(
            'title' => esc_html__( 'Header Section','ft-charity-ngo' ),
            'panel'=>'theme_options',
            'capability'=>'edit_theme_options',
        )
    );

	$wp_customize->add_setting('ft_charity_ngo_theme_options[facebook]',
	    array(
	        'type' => 'option',
	        'default' => $ft_charity_ngo_options['facebook'],
	        'sanitize_callback' => 'ft_charity_ngo_sanitize_url',
	    )
	);
	$wp_customize->add_control('ft_charity_ngo_theme_options[facebook]',
	    array(
	        'label' => esc_html__('Facebook Link', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'header_section',
	        'settings' => 'ft_charity_ngo_theme_options[facebook]',
	    )
	);


	$wp_customize->add_setting('ft_charity_ngo_theme_options[twitter]',
	    array(
	        'type' => 'option',
	        'default' => $ft_charity_ngo_options['twitter'],
	        'sanitize_callback' => 'ft_charity_ngo_sanitize_url',
	    )
	);
	$wp_customize->add_control('ft_charity_ngo_theme_options[twitter]',
	    array(
	        'label' => esc_html__('Twitter Link', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'header_section',
	        'settings' => 'ft_charity_ngo_theme_options[twitter]',
	    )
	);


	$wp_customize->add_setting('ft_charity_ngo_theme_options[instagram]',
	    array(
	        'type' => 'option',
	        'default' => $ft_charity_ngo_options['instagram'],
	        'sanitize_callback' => 'ft_charity_ngo_sanitize_url',
	    )
	);
	$wp_customize->add_control('ft_charity_ngo_theme_options[instagram]',
	    array(
	        'label' => esc_html__('Instagram Link', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'header_section',
	        'settings' => 'ft_charity_ngo_theme_options[instagram]',
	    )
	);
    $wp_customize->add_setting('ft_charity_ngo_theme_options[search_show]',
        array(
            'type' => 'option',
            'default'        => true,
            'default' => $ft_charity_ngo_options['search_show'],
            'sanitize_callback' => 'ft_charity_ngo_sanitize_checkbox',
        )
    );

	$wp_customize->add_setting('ft_charity_ngo_theme_options[header_button_txt]',
	    array(
	        'type' => 'option',
	        'default' => $ft_charity_ngo_options['header_button_txt'],
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('ft_charity_ngo_theme_options[header_button_txt]',
	    array(
	        'label' => esc_html__('Button Text', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'header_section',
	        'settings' => 'ft_charity_ngo_theme_options[header_button_txt]',
	    )
	);
	$wp_customize->add_setting('ft_charity_ngo_theme_options[header_button_url]',
	    array(
	        'type' => 'option',
	        'default' => $ft_charity_ngo_options['header_button_url'],
	        'sanitize_callback' => 'ft_charity_ngo_sanitize_url',
	    )
	);
	$wp_customize->add_control('ft_charity_ngo_theme_options[header_button_url]',
	    array(
	        'label' => esc_html__('Button Link', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'header_section',
	        'settings' => 'ft_charity_ngo_theme_options[header_button_url]',
	    )
	);



    /* Banner Section */

    $wp_customize->add_section(
        'banner_section',
        array(
            'title' => esc_html__( 'Banner Section','ft-charity-ngo' ),
            'panel'=>'theme_options',
            'capability'=>'edit_theme_options',
        )
    );




	$wp_customize->add_setting('ft_charity_ngo_theme_options[banner_title]',
	    array(
	        'type' => 'option',
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('banner_title',
	    array(
	        'label' => esc_html__('Title', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'banner_section',
	        'settings' => 'ft_charity_ngo_theme_options[banner_title]',
	    )
	);






	$wp_customize->add_setting('ft_charity_ngo_theme_options[banner_button_txt]',
	    array(
	        'type' => 'option',
	        'default' => $ft_charity_ngo_options['banner_button_txt'],
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('ft_charity_ngo_theme_options[banner_button_txt]',
	    array(
	        'label' => esc_html__('Button Text', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'banner_section',
	        'settings' => 'ft_charity_ngo_theme_options[banner_button_txt]',
	    )
	);
	$wp_customize->add_setting('ft_charity_ngo_theme_options[banner_button_url]',
	    array(
	        'type' => 'option',
	        'default' => $ft_charity_ngo_options['banner_button_url'],
	        'sanitize_callback' => 'ft_charity_ngo_sanitize_url',
	    )
	);
	$wp_customize->add_control('ft_charity_ngo_theme_options[banner_button_url]',
	    array(
	        'label' => esc_html__('Button Link', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'banner_section',
	        'settings' => 'ft_charity_ngo_theme_options[banner_button_url]',
	    )
	);


	$wp_customize->add_setting('ft_charity_ngo_theme_options[banner_bg_image]',
	    array(
	        'type' => 'option',
	        'sanitize_callback' => 'esc_url_raw',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'ft_charity_ngo_theme_options[banner_bg_image]',
	        array(
	            'label' => esc_html__('Add Background Image', 'ft-charity-ngo'),
	            'section' => 'banner_section',
	            'settings' => 'ft_charity_ngo_theme_options[banner_bg_image]',
	        ))
	);



	/* Cause Section*/


    $wp_customize->add_section(
        'cause_section',
        array(
            'title' => esc_html__( 'Cause Section ','ft-charity-ngo' ),
            'panel'=>'theme_options',
            'capability'=>'edit_theme_options',
        )
    );

    $wp_customize->add_setting('ft_charity_ngo_theme_options[cause_show]',
        array(
            'type' => 'option',
            'default'        => true,
            'default' => $ft_charity_ngo_options['cause_show'],
            'sanitize_callback' => 'ft_charity_ngo_sanitize_checkbox',
        )
    );

    $wp_customize->add_control('ft_charity_ngo_theme_options[cause_show]',
        array(
            'label' => esc_html__('Show Cause Section', 'ft-charity-ngo'),
            'type' => 'Checkbox',
            'priority' => 1,
            'section' => 'cause_section',

        )
    );
	$wp_customize->add_setting('ft_charity_ngo_theme_options[cause_title]',
	    array(
	        'default' => $ft_charity_ngo_options['cause_title'],
	        'type' => 'option',
	        'sanitize_callback' => 'sanitize_text_field'
	    )
	);

	$wp_customize->add_control('ft_charity_ngo_theme_options[cause_title]',
	    array(
	        'label' => esc_html__('Cause Section Title', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'cause_section',
	        'settings' => 'ft_charity_ngo_theme_options[cause_title]',
	    )
	);
	$wp_customize->add_setting('ft_charity_ngo_theme_options[cause_desc]',
	    array(
	        'default' => $ft_charity_ngo_options['cause_desc'],
	        'type' => 'option',
	        'sanitize_callback' => 'sanitize_text_field'
	    )
	);

	$wp_customize->add_control('ft_charity_ngo_theme_options[cause_desc]',
	    array(
	        'label' => esc_html__('Cause Section Description', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'cause_section',
	        'settings' => 'ft_charity_ngo_theme_options[cause_desc]',
	    )
	);
	$wp_customize->add_setting('ft_charity_ngo_theme_options[cause_category]', array(
	    'default' => $ft_charity_ngo_options['cause_category'],
	    'type' => 'option',
	    'sanitize_callback' => 'sanitize_text_field',
	    'capability' => 'edit_theme_options',

	));

	$wp_customize->add_control(new ft_charity_ngo_course_Dropdown_Customize_Control(
	    $wp_customize, 'ft_charity_ngo_theme_options[cause_category]',
	    array(
	        'label' => esc_html__('Select Causes Posts Category', 'ft-charity-ngo'),
	        'section' => 'cause_section',
	        'settings' => 'ft_charity_ngo_theme_options[cause_category]',
	    )
	));



	/* About Section*/


    $wp_customize->add_section(
        'callout_section',
        array(
            'title' => esc_html__( 'Callout Section ','ft-charity-ngo' ),
            'panel'=>'theme_options',
            'capability'=>'edit_theme_options',
        )
    );

     function ft_charity_ngo_sanitize_checkbox( $input ) {
        if ( true === $input ) {
            return 1;
         } else {
            return 0;
         }
    }
    $wp_customize->add_setting('ft_charity_ngo_theme_options[callout_show]',
        array(
            'type' => 'option',
            'default'        => true,
            'default' => $ft_charity_ngo_options['callout_show'],
            'sanitize_callback' => 'ft_charity_ngo_sanitize_checkbox',
        )
    );

    $wp_customize->add_control('ft_charity_ngo_theme_options[callout_show]',
        array(
            'label' => esc_html__('Show Callout Section', 'ft-charity-ngo'),
            'type' => 'Checkbox',
            'priority' => 1,
            'section' => 'callout_section',

        )
    );
	$wp_customize->add_setting(
	    'ft_charity_ngo_theme_options[choose_callout_page]',
	    array(
	        'default' => $ft_charity_ngo_options['choose_callout_page'],
	        'type' => 'option',
	        'sanitize_callback' => 'absint',
	        'capability' => 'edit_theme_options'
	    )
	);
	$wp_customize->add_control('choose_callout_page', array(
	    'label' => esc_html__('Choose Callout Page :', 'ft-charity-ngo'),
	    'type' => 'dropdown-pages',
	    'section' => 'callout_section',
	    'settings' => 'ft_charity_ngo_theme_options[choose_callout_page]'
	));

	$wp_customize->add_setting(
	    'ft_charity_ngo_theme_options[choose_callout_page2]',
	    array(
	        'default' => $ft_charity_ngo_options['choose_callout_page2'],
	        'type' => 'option',
	        'sanitize_callback' => 'absint',
	        'capability' => 'edit_theme_options'
	    )
	);
	$wp_customize->add_control('choose_callout_page2', array(
	    'label' => esc_html__('Choose Callout Page 2:', 'ft-charity-ngo'),
	    'type' => 'dropdown-pages',
	    'section' => 'callout_section',
	    'settings' => 'ft_charity_ngo_theme_options[choose_callout_page2]'
	));

	$wp_customize->add_setting(
	    'ft_charity_ngo_theme_options[choose_callout_page3]',
	    array(
	        'default' => $ft_charity_ngo_options['choose_callout_page3'],
	        'type' => 'option',
	        'sanitize_callback' => 'absint',
	        'capability' => 'edit_theme_options'
	    )
	);
	$wp_customize->add_control('choose_callout_page3', array(
	    'label' => esc_html__('Choose Callout Page 3:', 'ft-charity-ngo'),
	    'type' => 'dropdown-pages',
	    'section' => 'callout_section',
	    'settings' => 'ft_charity_ngo_theme_options[choose_callout_page3]'
	));














    /* CTA Section */

    $wp_customize->add_section(
        'cta_section',
        array(
            'title' => esc_html__( 'Call to Action Section','ft-charity-ngo' ),
            'panel'=>'theme_options',
            'capability'=>'edit_theme_options',
        )
    );


    $wp_customize->add_setting('ft_charity_ngo_theme_options[cta_show]',
        array(
            'type' => 'option',
            'default'        => true,
            'default' => $ft_charity_ngo_options['cta_show'],
            'sanitize_callback' => 'ft_charity_ngo_sanitize_checkbox',
        )
    );

    $wp_customize->add_control('ft_charity_ngo_theme_options[cta_show]',
        array(
            'label' => esc_html__('Show CTA Section', 'ft-charity-ngo'),
            'type' => 'Checkbox',
            'priority' => 1,
            'section' => 'cta_section',

        )
    );
	$wp_customize->add_setting('ft_charity_ngo_theme_options[cta_title]',
	    array(
	        'type' => 'option',
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('cta_title',
	    array(
	        'label' => esc_html__('Title', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'cta_section',
	        'settings' => 'ft_charity_ngo_theme_options[cta_title]',
	    )
	);


	$wp_customize->add_setting('ft_charity_ngo_theme_options[cta_button_txt]',
	    array(
	        'type' => 'option',
	        'default' => $ft_charity_ngo_options['cta_button_txt'],
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('ft_charity_ngo_theme_options[cta_button_txt]',
	    array(
	        'label' => esc_html__('CTA Button Text', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'cta_section',
	        'settings' => 'ft_charity_ngo_theme_options[cta_button_txt]',
	    )
	);
	$wp_customize->add_setting('ft_charity_ngo_theme_options[cta_button_url]',
	    array(
	        'type' => 'option',
	        'default' => $ft_charity_ngo_options['cta_button_url'],
	        'sanitize_callback' => 'ft_charity_ngo_sanitize_url',
	    )
	);
	$wp_customize->add_control('ft_charity_ngo_theme_options[cta_button_url]',
	    array(
	        'label' => esc_html__('CTA Button Link', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'cta_section',
	        'settings' => 'ft_charity_ngo_theme_options[cta_button_url]',
	    )
	);

	$wp_customize->add_setting('ft_charity_ngo_theme_options[cta_bg_image]',
	    array(
	        'type' => 'option',
	        'sanitize_callback' => 'esc_url_raw',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'ft_charity_ngo_theme_options[cta_bg_image]',
	        array(
	            'label' => esc_html__('Add Background Image', 'ft-charity-ngo'),
	            'section' => 'cta_section',
	            'settings' => 'ft_charity_ngo_theme_options[cta_bg_image]',
	        ))
	);






    /* aboutpage Section */

    $wp_customize->add_section(
        'aboutsection_section',
        array(
            'title' => esc_html__( 'About Section','ft-charity-ngo' ),
            'panel'=>'theme_options',
            'capability'=>'edit_theme_options',
        )
    );


    $wp_customize->add_setting('ft_charity_ngo_theme_options[aboutsection_show]',
        array(
            'type' => 'option',
            'default'        => true,
            'default' => $ft_charity_ngo_options['aboutsection_show'],
            'sanitize_callback' => 'ft_charity_ngo_sanitize_checkbox',
        )
    );

    $wp_customize->add_control('ft_charity_ngo_theme_options[aboutsection_show]',
        array(
            'label' => esc_html__('Show About Section', 'ft-charity-ngo'),
            'type' => 'Checkbox',
            'priority' => 1,
            'section' => 'aboutsection_section',

        )
    );
	$wp_customize->add_setting('ft_charity_ngo_theme_options[aboutsection_title]',
	    array(
	        'type' => 'option',
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('aboutsection_title',
	    array(
	        'label' => esc_html__('About section title', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'aboutsection_section',
	        'settings' => 'ft_charity_ngo_theme_options[aboutsection_title]',
	    )
	);

	$wp_customize->add_setting('ft_charity_ngo_theme_options[aboutsection_desc]',
	    array(
	        'type' => 'option',
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('aboutsection_desc',
	    array(
	        'label' => esc_html__('About Description', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'aboutsection_section',
	        'settings' => 'ft_charity_ngo_theme_options[aboutsection_desc]',
	    )
	);


	$wp_customize->add_setting('ft_charity_ngo_theme_options[aboutsection_youtube_url]',
	    array(
	        'type' => 'option',
	        'default' => $ft_charity_ngo_options['aboutsection_youtube_url'],
	        'sanitize_callback' => 'ft_charity_ngo_sanitize_url',
	    )
	);
	$wp_customize->add_control('ft_charity_ngo_theme_options[aboutsection_youtube_url]',
	    array(
	        'label' => esc_html__('Video Link', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'aboutsection_section',
	        'settings' => 'ft_charity_ngo_theme_options[aboutsection_youtube_url]',
	    )
	);


	$wp_customize->add_setting('ft_charity_ngo_theme_options[aboutsection_bg_image]',
	    array(
	        'type' => 'option',
	        'sanitize_callback' => 'esc_url_raw',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'ft_charity_ngo_theme_options[aboutsection_bg_image]',
	        array(
	            'label' => esc_html__('Add Image', 'ft-charity-ngo'),
	            'section' => 'aboutsection_section',
	            'settings' => 'ft_charity_ngo_theme_options[aboutsection_bg_image]',
	        ))
	);

	$wp_customize->add_setting('ft_charity_ngo_theme_options[aboutsection_stat1]',
	    array(
	        'type' => 'option',
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('aboutsection_stat1',
	    array(
	        'label' => esc_html__('Stat1', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'aboutsection_section',
	        'settings' => 'ft_charity_ngo_theme_options[aboutsection_stat1]',
	    )
	);
	$wp_customize->add_setting('ft_charity_ngo_theme_options[aboutsection_stat1title]',
	    array(
	        'type' => 'option',
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('aboutsection_stat1title',
	    array(
	        'label' => esc_html__('Stat1 Title', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'aboutsection_section',
	        'settings' => 'ft_charity_ngo_theme_options[aboutsection_stat1title]',
	    )
	);



	$wp_customize->add_setting('ft_charity_ngo_theme_options[aboutsection_stat2]',
	    array(
	        'type' => 'option',
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('aboutsection_stat2',
	    array(
	        'label' => esc_html__('Stat2', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'aboutsection_section',
	        'settings' => 'ft_charity_ngo_theme_options[aboutsection_stat2]',
	    )
	);

	$wp_customize->add_setting('ft_charity_ngo_theme_options[aboutsection_stat2title]',
	    array(
	        'type' => 'option',
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('aboutsection_stat2title',
	    array(
	        'label' => esc_html__('Stat2 Title', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'aboutsection_section',
	        'settings' => 'ft_charity_ngo_theme_options[aboutsection_stat2title]',
	    )
	);

	$wp_customize->add_setting('ft_charity_ngo_theme_options[aboutsection_stat3]',
	    array(
	        'type' => 'option',
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('aboutsection_stat3',
	    array(
	        'label' => esc_html__('Stat3', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'aboutsection_section',
	        'settings' => 'ft_charity_ngo_theme_options[aboutsection_stat3]',
	    )
	);

	$wp_customize->add_setting('ft_charity_ngo_theme_options[aboutsection_stat3title]',
	    array(
	        'type' => 'option',
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('aboutsection_stat3title',
	    array(
	        'label' => esc_html__('Stat2 Title', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'aboutsection_section',
	        'settings' => 'ft_charity_ngo_theme_options[aboutsection_stat3title]',
	    )
	);

    /* Blog Section */

    $wp_customize->add_section(
        'blog_section',
        array(
            'title' => esc_html__( 'Blog Section','ft-charity-ngo' ),
            'panel'=>'theme_options',
            'capability'=>'edit_theme_options',
        )
    );

    $wp_customize->add_setting('ft_charity_ngo_theme_options[blog_show]',
        array(
            'type' => 'option',
            'default'        => true,
            'default' => $ft_charity_ngo_options['blog_show'],
            'sanitize_callback' => 'ft_charity_ngo_sanitize_checkbox',
        )
    );

    $wp_customize->add_control('ft_charity_ngo_theme_options[blog_show]',
        array(
            'label' => esc_html__('Show Blog Section', 'ft-charity-ngo'),
            'type' => 'Checkbox',
            'priority' => 1,
            'section' => 'blog_section',

        )
    );
	$wp_customize->add_setting('ft_charity_ngo_theme_options[blog_title]',
	    array(
	        'capability' => 'edit_theme_options',
	        'default' => $ft_charity_ngo_options['blog_title'],
	        'sanitize_callback' => 'sanitize_text_field',
	        'type' => 'option',
	    )
	);
	$wp_customize->add_control('ft_charity_ngo_theme_options[blog_title]',
	    array(
	        'label' => esc_html__('Section Title', 'ft-charity-ngo'),
	        'priority' => 1,
	        'section' => 'blog_section',
	        'type' => 'text',
	    )
	);

	$wp_customize->add_setting('ft_charity_ngo_theme_options[blog_desc]',
	    array(
	        'default' => $ft_charity_ngo_options['blog_desc'],
	        'type' => 'option',
	        'sanitize_callback' => 'sanitize_text_field'
	    )
	);

	$wp_customize->add_control('ft_charity_ngo_theme_options[blog_desc]',
	    array(
	        'label' => esc_html__('Blog Section Description', 'ft-charity-ngo'),
	        'type' => 'text',
	        'section' => 'blog_section',
	        'settings' => 'ft_charity_ngo_theme_options[blog_desc]',
	    )
	);

	$wp_customize->add_setting('ft_charity_ngo_theme_options[blog_category]', array(
	    'default' => $ft_charity_ngo_options['blog_category'],
	    'type' => 'option',
	    'sanitize_callback' => 'ft_charity_ngo_sanitize_select',
	    'capability' => 'edit_theme_options',

	));

	$wp_customize->add_control(new ft_charity_ngo_Dropdown_Customize_Control(
	    $wp_customize, 'ft_charity_ngo_theme_options[blog_category]',
	    array(
	        'label' => esc_html__('Select Blog Category', 'ft-charity-ngo'),
	        'section' => 'blog_section',
	        'choices' => ft_charity_ngo_get_categories_select(),
	        'settings' => 'ft_charity_ngo_theme_options[blog_category]',
	    )
	));



    /* Blog Section */

    $wp_customize->add_section(
        'prefooter_section',
        array(
            'title' => esc_html__( 'Prefooter Section','ft-charity-ngo' ),
            'panel'=>'theme_options',
            'capability'=>'edit_theme_options',
        )
    );

    $wp_customize->add_setting('ft_charity_ngo_theme_options[show_prefooter]',
        array(
            'type' => 'option',
            'default'        => true,
            'default' => $ft_charity_ngo_options['show_prefooter'],
            'sanitize_callback' => 'ft_charity_ngo_sanitize_checkbox',
        )
    );

    $wp_customize->add_control('ft_charity_ngo_theme_options[show_prefooter]',
        array(
            'label' => esc_html__('Show Prefooter Section', 'ft-charity-ngo'),
            'type' => 'Checkbox',
            'priority' => 1,
            'section' => 'prefooter_section',

        )
    );
}
add_action( 'customize_register', 'ft_charity_ngo_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ft_charity_ngo_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ft_charity_ngo_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ft_charity_ngo_customize_preview_js() {
	wp_enqueue_script( 'ft-charity-ngo-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ft_charity_ngo_customize_preview_js' );
