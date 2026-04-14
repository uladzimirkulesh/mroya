<?php
/**
 * Builds theme admin page.
 *
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define('MROYA_THEME_URI','https://theme.mroya.eu/');

if ( ! function_exists( 'mroya_admin_page_styles' ) ) {
	/**
	 * Enqueue theme admin page styles.
	 *
	 * @since Mroya 1.0.0
	 *
	 * @return void
	 */
	function mroya_admin_page_styles( $hook ){

		if ( 'appearance_page_mroya-theme' != $hook ) {
			return;
		}

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register admin stylesheets.
		wp_register_style(
			'mroya-theme-admin-page',
			get_template_directory_uri() . '/assets/css/theme-admin-page.css',
			array(),
			$version_string
		);

		// Enqueue admin stylesheets.
		wp_enqueue_style( 'mroya-theme-admin-page' );
	}

}
add_action( 'admin_enqueue_scripts', 'mroya_admin_page_styles');

if ( ! function_exists( 'mroya_create_admin_menu_item' ) ) {
	/**
	 * Adds theme admin menu item.
	 *
	 * @since Mroya 1.0.0
	 *
	 * @return void
	 */
	function mroya_create_admin_menu_item() {
		add_theme_page( 'Mroya Theme', 'Mroya Theme', 'edit_theme_options', 'mroya-theme', 'mroya_theme_admin_page' );
	}

}
add_action( 'admin_menu', 'mroya_create_admin_menu_item' );

if ( ! function_exists( 'mroya_theme_admin_page' ) ) {
	/**
	 * Adds theme admin page.
	 *
	 * @since Mroya 1.0.0
	 *
	 * @return html
	 */
	function mroya_theme_admin_page() {
		?>
		<div class="wrap mroya__wrap">
			<h1><?php echo esc_html_x( 'Mroya Theme', 'Theme admin page title', 'mroya' ); ?></h1>

			<p class="mroya__theme-description"><?php echo esc_html_x( 'Welcome to Mroya, the ultimate WordPress theme crafted specifically for web developers. Whether you\'re showcasing your portfolio, sharing your latest projects, or offering your services, Mroya provides the perfect platform to present your work in a sleek, professional, and engaging manner.', 'Theme admin page text', 'mroya' ); ?></p>

			<p class="mroya__theme-description"><?php echo esc_html_x( 'Mroya is tailored for web developers, featuring a clean and modern design that highlights your technical skills and creativity. The minimalist layout ensures that your work takes center stage.', 'Theme admin page text', 'mroya' ); ?></p>

			<p class="mroya__theme-description"><?php echo esc_html_x( 'Mroya is fully responsive, ensuring your website looks stunning on all devices, from desktops to smartphones. Your portfolio will always shine, no matter where it\'s viewed.', 'Theme admin page text', 'mroya' ); ?></p>

			<p class="mroya__theme-description"><?php echo esc_html_x( 'Get started quickly with pre-built templates for homepages, about pages, services, and contact pages. Each template is designed to provide a seamless user experience and convert visitors into clients.', 'Theme admin page text', 'mroya' ); ?></p>

			<p class="mroya__theme-description"><?php echo esc_html_x( 'Share your knowledge and expertise with Mroya’s elegant blog layouts. Engage your audience with insightful articles, tutorials, and industry news, all presented in a clean and readable format.', 'Theme admin page text', 'mroya' ); ?></p>

			<p class="submit">
				<a href="<?php echo esc_url( MROYA_THEME_URI ); ?>" class="button button-primary" target="_blank"><?php echo esc_html_x( 'Theme Homepage', 'Theme admin page button text', 'mroya' ); ?></a>
			</p>

			<div class="clear"></div>
		</div>
		<?php
	}
}
