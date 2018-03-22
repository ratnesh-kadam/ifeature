<?php
/**
 * Footer Template
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v3.0 (or later)
 * @link     https://www.cyberchimps.com/
 */

if( cyberchimps_get_option( 'footer_show_toggle' ) == '1' ) : ?>

	<div id="footer_widgets_wrapper" class="container-full-width">
		<div id="footer_wrapper" class="container">
			<div id="wrapper" class="container-fluid">

				<?php do_action( 'cyberchimps_before_footer_widgets' ); ?>

				<div id="footer-widgets" class="row-fluid">
					<div id="footer-widget-container" class="span12">
						<div class="row-fluid">

							<?php if( !dynamic_sidebar( 'cyberchimps-footer-widgets' ) ) : ?>
						</div>
						
						<?php else : 
								$footer_widget_layout = cyberchimps_get_option('site_footer_option');
								if(isset($footer_widget_layout) && $footer_widget_layout != '')
									$layout = $footer_widget_layout;
								else
									$layout = '';
								
								if ($layout == 'footer-3-col')
								{									
						?>				
								<div class="row-fluid">
								<aside class="widget-container span3">
									<h3 class="widget-title"><?php _e( 'Pages', 'ifeature' ); ?></h3>
									<ul>
										<?php wp_list_pages( 'title_li=' ); ?>
									</ul>
								</aside>

								<aside class="widget-container span3">
									<h3 class="widget-title"><?php _e( 'Archives', 'ifeature' ); ?></h3>
									<ul>
										<?php wp_get_archives( 'type=monthly' ); ?>
									</ul>
								</aside>

								<aside class="widget-container span3">
									<h3 class="widget-title"><?php _e( 'Categories', 'ifeature' ); ?></h3>
									<ul>
										<?php wp_list_categories( 'show_count=1&title_li=' ); ?>
									</ul>
								</aside>
								</div>
								<div class="row-fluid">
								<aside class="widget-container span3">
									<h3 class="widget-title"><?php _e( 'WordPress', 'ifeature' ); ?></h3>
									<ul>
										<?php wp_register(); ?>
										<li><?php wp_loginout(); ?></li>
										<li><a href="<?php echo esc_url( 'http://wordpress.org/' ); ?>" target="_blank"
										       title="<?php esc_attr_e( 'Powered by WordPress, state-of-the-art semantic personal publishing platform.', 'ifeature' ); ?>"> <?php _e( 'WordPress', 'ifeature' ); ?></a>
										</li>
										<?php wp_meta(); ?>
									</ul>
								</aside>
								</div>
							<?php 
							}
							else
							{	
							?>
								<div class="row-fluid">
								<aside class="widget-container span3">
									<h3 class="widget-title"><?php _e( 'Pages', 'ifeature' ); ?></h3>
									<ul>
										<?php wp_list_pages( 'title_li=' ); ?>
									</ul>
								</aside>

								<aside class="widget-container span3">
									<h3 class="widget-title"><?php _e( 'Archives', 'ifeature' ); ?></h3>
									<ul>
										<?php wp_get_archives( 'type=monthly' ); ?>
									</ul>
								</aside>

								<aside class="widget-container span3">
									<h3 class="widget-title"><?php _e( 'Categories', 'ifeature' ); ?></h3>
									<ul>
										<?php wp_list_categories( 'show_count=1&title_li=' ); ?>
									</ul>
								</aside>
								<aside class="widget-container span6">
										<h3 class="widget-title"><?php _e( 'WordPress', 'iribbon' ); ?></h3>
										<ul>
											<?php wp_register(); ?>
											<li><?php wp_loginout(); ?></li>
											<li><a href="<?php echo esc_url( 'http://wordpress.org/' ); ?>" target="_blank"
											       title="<?php esc_attr_e( 'Powered by WordPress, state-of-the-art semantic personal publishing platform.', 'iribbon' ); ?>"> <?php _e( 'WordPress', 'iribbon' ); ?></a>
											</li>
											<?php wp_meta(); ?>
										</ul>
								</aside>
								</div>
								<?php }?>	
							<?php endif; ?>					
						
					</div>
					<!-- #footer-widget-container -->
				</div>
				<!-- #footer-widgets .row-fluid  -->

				<?php do_action( 'cyberchimps_after_footer_widgets' ); ?>

			</div>
			<!-- container fluid -->
		</div>
		<!-- container -->
	</div><!-- container full width -->

<?php endif; ?>

<?php do_action( 'cyberchimps_before_footer_container' ); ?>

<?php do_action( 'cyberchimps_footer' ); ?>

<?php do_action( 'cyberchimps_after_footer_container' ); ?>

<?php do_action( 'cyberchimps_after_wrapper' ); ?>

<?php wp_footer(); ?>

</body>
</html>
