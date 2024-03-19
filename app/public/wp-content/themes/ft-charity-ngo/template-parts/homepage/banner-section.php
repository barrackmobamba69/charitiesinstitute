<?php
$ft_charity_ngo_options = ft_charity_ngo_theme_options();

$banner_title = $ft_charity_ngo_options['banner_title'];
$banner_desc = $ft_charity_ngo_options['banner_desc'];
$banner_button_txt = $ft_charity_ngo_options['banner_button_txt'];
$banner_button_url = $ft_charity_ngo_options['banner_button_url'];
$banner_bg_image = $ft_charity_ngo_options['banner_bg_image'];
if(!empty($banner_bg_image)){
    $background_style = "style='background-image:url(".esc_url($banner_bg_image).")'";
}
else{
    $background_style = '';
}

?>


<div class="hero-section image" <?php echo wp_kses_post($background_style); ?>>
	<div class="container">
			<div class="hero-section-content">
		        <h1><?php echo esc_html($banner_title); ?></h1>
		        <p><?php echo esc_html($banner_desc); ?></p>
		        <?php  if( $banner_button_txt && $banner_button_url):?>
		        <a href="<?php echo esc_url($banner_button_url); ?>" class="btn btn-default"><?php echo esc_html($banner_button_txt); ?></a>
		        <?php endif; ?>
		    </div>
		</div>
	</div>
</div>




