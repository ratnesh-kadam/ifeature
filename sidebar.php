<?php
/**
 * Sidebar Template
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
?>

<div id="secondary" <?php cyberchimps_filter_sidebar_right_class(); ?>>

	<?php do_action( 'cyberchimps_before_sidebar' ); ?>

	<div id="sidebar">
		<?php if( !dynamic_sidebar( 'sidebar-right' ) ) : ?>

			<div class="widget-container">
				<h3 class="widget-title"><?php esc_html_e( 'Pages', 'ifeature' ); ?></h3>
				<ul>
					<?php wp_list_pages( 'title_li=' ); ?>
				</ul>
			</div>

			<div class="widget-container">
				<h3 class="widget-title"><?php esc_html_e( 'Archives', 'ifeature' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</div>

			<div class="widget-container">
				<h3 class="widget-title"><?php esc_html_e( 'Categories', 'ifeature' ); ?></h3>
				<ul>
					<?php wp_list_categories( 'show_count=1&title_li=' ); ?>
				</ul>
			</div>

			<div class="widget-container">
				<h3 class="widget-title"><?php esc_html_e( 'WordPress', 'ifeature' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="<?php echo esc_url( 'http://wordpress.org/' ); ?>" target="_blank"
					       title="<?php esc_attr_e( 'Powered by WordPress, state-of-the-art semantic personal publishing platform.', 'ifeature' ); ?>"> <?php esc_html_e( 'WordPress', 'ifeature' ); ?></a>
					</li>
					<?php wp_meta(); ?>
				</ul>
			</div>

			<div class="widget-container">
				<h3 class="widget-title"><?php esc_html_e( 'Subscribe', 'ifeature' ); ?></h3>
				<ul>
					<li><a href="<?php bloginfo( 'rss2_url' ); ?>"><?php esc_html_e( 'Entries (RSS)', 'ifeature' ); ?></a></li>
					<li><a href="<?php bloginfo( 'comments_rss2_url' ); ?>"><?php esc_html_e( 'Comments (RSS)', 'ifeature' ); ?></a></li>
				</ul>
			</div>

		<?php endif; ?>
	</div>
	<!-- #sidebar -->

	<?php do_action( 'cyberchimps_after_sidebar' ); ?>

</div><!-- #secondary -->
