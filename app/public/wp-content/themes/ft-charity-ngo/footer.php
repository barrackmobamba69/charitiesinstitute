<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ft_charity_ngo
 */

$ft_charity_ngo_options = ft_charity_ngo_theme_options();

$show_prefooter = $ft_charity_ngo_options['show_prefooter'];

?>

<footer id="colophon" class="site-footer">


	<?php if ($show_prefooter== 1){ ?>
	    <section class="footer-sec">
	        <div class="container">
	            <div class="row">
	                <?php if (is_active_sidebar('ft_charity_ngo_footer_1')) : ?>
	                    <div class="col-md-4">
	                        <?php dynamic_sidebar('ft_charity_ngo_footer_1') ?>
	                    </div>
	                    <?php
	                else: ft_charity_ngo_blank_widget();
	                endif; ?>
	                <?php if (is_active_sidebar('ft_charity_ngo_footer_2')) : ?>
	                    <div class="col-md-4">
	                        <?php dynamic_sidebar('ft_charity_ngo_footer_2') ?>
	                    </div>
	                    <?php
	                else: ft_charity_ngo_blank_widget();
	                endif; ?>
	                <?php if (is_active_sidebar('ft_charity_ngo_footer_3')) : ?>
	                    <div class="col-md-4">
	                        <?php dynamic_sidebar('ft_charity_ngo_footer_3') ?>
	                    </div>
	                    <?php
	                else: ft_charity_ngo_blank_widget();
	                endif; ?>
	            </div>
	        </div>
	    </section>
	<?php } ?>

		<div class="site-info">
		<p><?php esc_html_e('Powered By WordPress', 'ft-charity-ngo');
                    esc_html_e(' | ', 'ft-charity-ngo') ?>
                    <span><a target="_blank" rel="nofollow"
                       href="<?php echo esc_url('https://www.flawlessthemes.com/theme/ft-charity-ngo-best-charity-ngo-wordpress-theme-ever/'); ?>"><?php esc_html_e('FT Charity NGO' , 'ft-charity-ngo'); ?></a></span>
                </p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
