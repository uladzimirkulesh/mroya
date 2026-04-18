<?php
/**
 * Builds theme info page.
 *
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define('MROYA_THEME_URI','https://mroya.eu/portfolio/mroya');
define('MROYA_THEME_URI_DEMOS','https://mroya.eu/portfolio/mroya/#demos');
define('MROYA_THEME_URI_PURCHASE','https://mroya.eu/portfolio/mroya/#purchase');
define('MROYA_THEME_URI_SUPPORT','https://mroya.eu/portfolio/mroya/#support');

if ( ! function_exists( 'mroya_theme_info_styles' ) ) {
	/**
	 * Enqueue theme info styles.
	 *
	 * @since Mroya 1.0.0
	 *
	 * @return void
	 */
	function mroya_theme_info_styles( $hook ){

		if ( 'appearance_page_mroya-theme-info' != $hook ) {
			return;
		}

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register admin stylesheets.
		wp_register_style(
			'mroya-theme-info',
			get_template_directory_uri() . '/assets/css/theme-info.css',
			array(),
			$version_string
		);

		// Enqueue admin stylesheets.
		wp_enqueue_style( 'mroya-theme-info' );
	}

}
add_action( 'admin_enqueue_scripts', 'mroya_theme_info_styles');

if ( ! function_exists( 'mroya_create_admin_menu_item' ) ) {
	/**
	 * Adds theme admin menu item.
	 *
	 * @since Mroya 1.0.0
	 *
	 * @return void
	 */
	function mroya_create_admin_menu_item() {
		add_theme_page( 'Mroya Theme Info', 'Mroya Theme Info', 'edit_theme_options', 'mroya-theme-info', 'mroya_theme_info_page' );
	}

}
add_action( 'admin_menu', 'mroya_create_admin_menu_item' );

if ( ! function_exists( 'mroya_theme_info_page' ) ) {
	/**
	 * Adds theme info page.
	 *
	 * @since Mroya 1.0.0
	 *
	 * @return html
	 */
	function mroya_theme_info_page() {
		?>
		<div class="wrap mroya__wrap">
			<h1><?php echo esc_html_x( 'Theme Information', 'Theme info page title', 'mroya' ); ?></h1>

			<div class="columns">
				<div class="column column--left">
					<h2><?php echo esc_html_x( 'Mroya Free', 'Theme info column left title', 'mroya' ); ?></h2>

					<p class="theme-description"><?php echo esc_html_x( 'Mroya is a modern, versatile WordPress block theme designed for web designers, developers and agencies. The theme features are tailored to each audience and a rich library of reusable block patterns, allowing you to craft unique layouts effortlessly. Fully responsive, accessible, and performance-optimized, Mroya empowers you to build stunning, professional websites with ease.', 'Theme info page text', 'mroya' ); ?></p>

					<h3><?php echo esc_html_x( 'Theme Features', 'Theme info column left title', 'mroya' ); ?></h3>

					<ul>
						<li><?php echo esc_html_x( 'Clean and minimal design.', 'Theme info page text', 'mroya' ); ?></li>
						<li><?php echo esc_html_x( 'Full Site Editing (FSE).', 'Theme info page text', 'mroya' ); ?></li>
						<li><?php echo esc_html_x( 'Carefully crafted block patterns.', 'Theme info page text', 'mroya' ); ?></li>
						<li><?php echo esc_html_x( 'Responsive and accessible layout.', 'Theme info page text', 'mroya' ); ?></li>
						<li><?php echo esc_html_x( 'Optimized for performance.', 'Theme info page text', 'mroya' ); ?></li>
					</ul>

					<p class="theme-description"><?php echo esc_html_x( 'Start building with Mroya — completely free!', 'Theme info page text', 'mroya' ); ?></p>

					<p class="submit">
						<a href="<?php echo esc_url( MROYA_THEME_URI ); ?>" class="button button-primary" target="_blank"><?php echo esc_html_x( 'Theme Homepage', 'Theme info page button text', 'mroya' ); ?></a>

						<a href="<?php echo esc_url( MROYA_THEME_URI_DEMOS ); ?>" class="button" target="_blank"><?php echo esc_html_x( 'Prebuild Demos', 'Theme info page button text', 'mroya' ); ?></a>
					</p>
				</div>

				<div class="column column--right">
					<h2><?php echo esc_html_x( 'Mroya Premium Plugin', 'Theme info column right title', 'mroya' ); ?></h2>

					<p class="theme-description"><?php echo esc_html_x( 'Mroya Premium Plugin unlocks the full potential of the theme with smooth, professional animations powered by GSAP and advanced UI enhancements.', 'Theme info page text', 'mroya' ); ?></p>

					<h3><?php echo esc_html_x( 'Plugin Features', 'Theme info column left title', 'mroya' ); ?></h3>

					<ul>
						<li><?php echo esc_html_x( 'Advanced GSAP-powered animations.', 'Theme info page text', 'mroya' ); ?></li>
						<li><?php echo esc_html_x( 'Scroll-based and interactive effects.', 'Theme info page text', 'mroya' ); ?></li>
						<li><?php echo esc_html_x( 'Enhanced UI components and transitions.', 'Theme info page text', 'mroya' ); ?></li>
						<li><?php echo esc_html_x( 'Continuous updates and new features.', 'Theme info page text', 'mroya' ); ?></li>
						<li><?php echo esc_html_x( 'Priority email support.', 'Theme info page text', 'mroya' ); ?></li>
					</ul>

					<p class="theme-description"><?php echo esc_html_x( 'Upgrade to Premium and make your website unforgettable!', 'Theme info page text', 'mroya' ); ?></p>

					<p class="submit">
						<a href="<?php echo esc_url( MROYA_THEME_URI_PURCHASE ); ?>" class="button button-primary" target="_blank"><?php echo esc_html_x( 'Purchase Now', 'Theme info page button text', 'mroya' ); ?></a>

						<a href="<?php echo esc_url( MROYA_THEME_URI_SUPPORT ); ?>" class="button" target="_blank"><?php echo esc_html_x( 'Support', 'Theme info page button text', 'mroya' ); ?></a>
					</p>
				</div>
			</div>

			<div class="clear"></div>
		</div>
		<?php
	}
}
