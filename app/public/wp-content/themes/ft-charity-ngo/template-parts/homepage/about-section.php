<?php
$ft_charity_ngo_options = ft_charity_ngo_theme_options();
$about_show            = $ft_charity_ngo_options['aboutsection_show'];
$aboutsection_title           = $ft_charity_ngo_options['aboutsection_title'];
$aboutsection_desc           = $ft_charity_ngo_options['aboutsection_desc'];
$about_bg_image  = $ft_charity_ngo_options['aboutsection_bg_image'];
$about_youtube_url      = $ft_charity_ngo_options['aboutsection_youtube_url'];

$stat1           = $ft_charity_ngo_options['aboutsection_stat1'];
$stat2           = $ft_charity_ngo_options['aboutsection_stat2'];
$stat3           = $ft_charity_ngo_options['aboutsection_stat3'];
$stat1title           = $ft_charity_ngo_options['aboutsection_stat1title'];
$stat2title           = $ft_charity_ngo_options['aboutsection_stat2title'];
$stat3title           = $ft_charity_ngo_options['aboutsection_stat3title'];
?>



    <div class="section about-section">
        <div class="container">
            <div class="row">
               
                <div class="col-md-10 col-md-offset-1">
                 
                    
                    <div class="about-wrap">
                        <h2><?php echo esc_html($aboutsection_title); ?></h2>
                        <p><?php echo esc_html($aboutsection_desc); ?></p>
                    </div>

                    <div class="stat-div">
                        <h3><?php echo esc_html($stat1); ?></h3>
                        <p><?php echo esc_html($stat1title); ?></p>
                    </div>

                    <div class="stat-div">
                        <h3><?php echo esc_html($stat2); ?></h3>
                        <p><?php echo esc_html($stat2title); ?></p>
                    </div>
                    <div class="stat-div">
                        <h3><?php echo esc_html($stat3); ?></h3>
                        <p><?php echo esc_html($stat3title); ?></p>
                    </div>
               
                    
                    <!--                    <button class="button"><span>Book Now</span></button>-->
                </div>                   
                
            </div>
                
           
        </div>
    </div>