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
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"align":"wide","className":"page-header--blog","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide page-header--blog">
	<!-- wp:heading {"level":1,"align":"wide","className":"page-header__title","style":{"css":"left: -0.35vw;"}} -->
	<h1 class="wp-block-heading alignwide page-header__title has-custom-css"><?php echo esc_html_x( 'Insights Hub', 'Blog page header title', 'mroya' ); ?></h1>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->
