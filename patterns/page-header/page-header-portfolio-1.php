<?php
/**
 * Title: Portfolio page header (style 1)
 * Slug: mroya/page-header-portfolio-1
 * Description: Header section for portfolio pages.
 * Categories: mroya_page_header
 * Template Types: page-header-portfolio
 * Post Types: wp_template, wp_template_part
 * Viewport Width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Portfolio page header (style 1)', 'Name for the Portfolio page header pattern', 'mroya' ); ?>"},"align":"wide","className":"page-header__inner--portfolio-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide page-header__inner--portfolio-1">
	<!-- wp:heading {"level":1,"align":"wide","className":"is-style-text-giant page-header__title"} -->
	<h1 class="wp-block-heading alignwide is-style-text-giant page-header__title"><?php echo wp_kses_post( _x( 'Digital<br>Aesthetics', 'Portfolio page header title', 'mroya' ) ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"480px","wideSize":"100%","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"page-header__description","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
		<p class="page-header__description has-contrast-2-color has-text-color has-link-color" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'Where ideas evolve into tangible structures of meaning.', 'Portfolio page header text', 'mroya' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
