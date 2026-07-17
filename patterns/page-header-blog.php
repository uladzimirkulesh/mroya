<?php
/**
 * Title: Blog page header
 * Slug: mroya/page-header-blog
 * Description: Header section for blog pages.
 * Categories: mroya_page_header
 * Template Types: page-header-blog
 * Post Types: wp_template, wp_template_part
 * Viewport Width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"align":"wide","className":"page-header__inner--blog-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide page-header__inner--blog-1">
	<!-- wp:heading {"level":1,"align":"wide","className":"is-style-text-giant page-header__title"} -->
	<h1 class="wp-block-heading alignwide is-style-text-giant page-header__title"><?php echo wp_kses_post( _x( 'Mind<br>Fragments', 'Blog page header title', 'mroya' ) ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"480px","wideSize":"100%","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"page-header__description","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.015em"}}} -->
		<p class="page-header__description" style="font-style:normal;font-weight:500;letter-spacing:-0.015em"><?php echo esc_html_x( 'Bits of design, code, and everything in between.', 'Blog page header text', 'mroya' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
