<?php


$ft_charity_ngo_options = ft_charity_ngo_theme_options();
$cta_show            = $ft_charity_ngo_options['cta_show'];
$cta_title           = $ft_charity_ngo_options['cta_title'];
$cta_button_txt  = $ft_charity_ngo_options['cta_button_txt'];
$cta_button_url      = $ft_charity_ngo_options['cta_button_url'];
$cta_bg_image           = $ft_charity_ngo_options['cta_bg_image'];
if(!empty($cta_bg_image)){
    $background_style = "style='background-image:url(".esc_url($cta_bg_image).")'";
}
else{
    $background_style = '';
}

if($cta_show) { 
    if (1 == $cta_show):?>
    <div class="section cta-section" <?php echo wp_kses_post($background_style); ?>>
        <div class="container">
            <div class="row">
                <div class="cta-content">
                    
                    <h2 class="cta-title"><?php echo esc_html($cta_title); ?></h2>
                    
                    
                    
                        
                    <?php  if( $cta_button_txt && $cta_button_url):?>
                        <a href="<?php echo esc_url($cta_button_url); ?>" class="btn btn-default"><?php echo esc_html($cta_button_txt); ?></a>
                    <?php endif; ?>

                    </div>
                    
                
            </div>
        </div>
    </div>

        <?php
        
    endif;
}


