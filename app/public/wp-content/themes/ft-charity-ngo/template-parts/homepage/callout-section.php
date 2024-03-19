<?php


$ft_charity_ngo_options = ft_charity_ngo_theme_options();


$callout_show = $ft_charity_ngo_options['callout_show'];
$choose_callout_page = $ft_charity_ngo_options['choose_callout_page'];

$choose_callout_page2 = $ft_charity_ngo_options['choose_callout_page2'];

$choose_callout_page3 = $ft_charity_ngo_options['choose_callout_page3'];

$content_length = '120';


?>
<div class="banner-callout-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            <?php if (!empty($choose_callout_page)):
                $intro_pages_arg1 = array(
                    'post_type' => 'page',
                    'posts_per_page' => 1,
                    'post_status' => 'publish',
                    'page_id' => $choose_callout_page);


                $callout_page1 = new WP_Query($intro_pages_arg1);

                if ($callout_page1->have_posts()): 
                     while ($callout_page1->have_posts()):
                        $callout_page1->the_post();
                        $image_style = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
                <div class="banner-callout">
                    <div class="callout-title">
                        <h2><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h2>
                    </div>
                   
                     <p><?php echo wp_kses_post(ft_charity_ngo_get_excerpt($callout_page1->post->ID, $content_length)); ?></p>
                </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                endif;
                ?>

            </div>

        <div class="col-md-4">

            <?php if (!empty($choose_callout_page2)):
                $intro_pages_arg2 = array(
                    'post_type' => 'page',
                    'posts_per_page' => 1,
                    'post_status' => 'publish',
                    'page_id' => $choose_callout_page2);


                $callout_page2 = new WP_Query($intro_pages_arg2);

                if ($callout_page2->have_posts()): 
                     while ($callout_page2->have_posts()):
                        $callout_page2->the_post();
                        $image_style = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
                <div class="banner-callout">
                    <div class="callout-title">
                        <h2><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    
                    <p><?php echo wp_kses_post(ft_charity_ngo_get_excerpt($callout_page2->post->ID, $content_length)); ?></p>
                </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                endif;
                ?>

           
        </div>
        <div class="col-md-4">

            <?php if (!empty($choose_callout_page3)):
                $intro_pages_arg3 = array(
                    'post_type' => 'page',
                    'posts_per_page' => 1,
                    'post_status' => 'publish',
                    'page_id' => $choose_callout_page3);


                $callout_page3 = new WP_Query($intro_pages_arg3);

                if ($callout_page3->have_posts()): 
                     while ($callout_page3->have_posts()):
                        $callout_page3->the_post();
                        $image_style = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
                <div class="banner-callout">
                    <div class="callout-title">
                        <h2><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    
                    <p><?php echo wp_kses_post(ft_charity_ngo_get_excerpt($callout_page3->post->ID, $content_length)); ?></p>
                </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                endif;
                ?>

            </div>
        </div>
    </div>
</div>


