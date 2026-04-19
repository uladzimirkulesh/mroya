<?php
/**
 * Title: Default header (fixed)
 * Slug: mroya/header-fixed
 * Description: Default header section (fixed).
 * Categories: header
 * Template Types: header
 * Post Types: wp_template, wp_template_part
 * Viewport Width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Header (default, fixed)', 'Name for the Default header pattern', 'mroya' ); ?>"},"className":"header__inner header--fixed has-global-padding","layout":{"type":"constrained"}} -->
<div class="wp-block-group header__inner header--fixed has-global-padding">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Site Branding', 'Name for the site branding part', 'mroya' ); ?>"},"className":"site-branding","style":{"spacing":{"blockGap":"1rem"},"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group site-branding">
			<!-- wp:site-logo {"width":32,"shouldSyncIcon":true,"className":"is-style-rounded"} /-->
			<!-- wp:site-title {"level":0} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlayBackgroundColor":"contrast","overlayTextColor":"base","style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
