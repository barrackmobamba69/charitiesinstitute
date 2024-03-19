<?php
$ft_charity_ngo_options = ft_charity_ngo_theme_options();

$cause_show = $ft_charity_ngo_options['cause_show'];
$cause_category = $ft_charity_ngo_options['cause_category'];
$cause_title = $ft_charity_ngo_options['cause_title'];
$cause_desc = $ft_charity_ngo_options['cause_desc'];
$content_length = '300';
if($cause_show) {

    if (1 == $cause_show):
        if ($cause_category == 'none') {
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'order' => 'desc',
                'orderby' => 'menu_order date',

            );
        } else {
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'order' => 'desc',
                'orderby' => 'menu_order date',
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => array( $cause_category ),
                    ),
                ),
            );
        } ?>
        <div class="cause-section section ">
            <div class="container">
                <div class="row">
                    <?php if ($cause_title || $cause_desc): ?>
                        <div class="section-title">
                            <?php
                            if ($cause_desc)
                                echo '<p>' . esc_html($cause_desc) . '</p>';
                            
                            if ($cause_title)
                                echo '<h2>' . esc_html($cause_title) . '</h2>';
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
             </div>
             <div class="container">
                <div class="row"> 
                    <div class="col-md-12"> 
                    <div class="support-content">
                <?php $recent_query = new WP_Query($args);
                    if ($recent_query->have_posts()) :
                    ?>

                        <?php
                        while ($recent_query->have_posts()) : $recent_query->the_post();
                        global $post;
                            $content = get_the_content();
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                                if (!empty($image)) {
                                    $image_style = "style='background-image:url(" . esc_url($image[0]) . ")'";
                                } else {
                                    $image_style = '';
                                }
                                ?>
                            

                            
                                <div class="card-content">
                                    <div class="card-bg-image" <?php echo wp_kses_post($image_style); ?>>
                                    </div>
                                    <div class="content">
                                        <h2 class="title"> <a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h2>
                                        <p><?php echo wp_kses_post(ft_charity_ngo_get_excerpt($recent_query->post->ID, $content_length)); ?></p>

                                         <a href="<?php echo esc_url(get_the_permalink()); ?>" class="btn btn-default"><?php esc_html_e("Read More", "ft-charity-ngo") ?></a>
                                    </div>
                                </div>
                           
                        <?php endwhile;
                        wp_reset_postdata();
                        ?>
                    <?php
                    endif; ?>
                    </div>
                </div>
                </div>
             </div>
        </div>
        <?php
        
    endif;
}



