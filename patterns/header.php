<?php
/**
 * Title: Default header
 * Slug: mroya/header
 * Description: Default header section.
 * Categories: header
 * Template Types: header
 * Post Types: wp_template, wp_template_part
 * Viewport Width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Header', 'Name for the Header pattern', 'mroya' ); ?>"},"className":"header--default is-style-section-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group header--default is-style-section-2">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem"}}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide" style="padding-top:0.75rem;padding-bottom:0.75rem">
		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Site Branding', 'Name for the site branding part', 'mroya' ); ?>"},"className":"site-branding","style":{"spacing":{"blockGap":"1rem"},"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group site-branding">
			<!-- wp:site-logo {"width":44,"shouldSyncIcon":true,"className":"is-style-rounded"} /-->
			<!-- wp:site-title {"level":0} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlay":"navigation-overlay","overlayBackgroundColor":"contrast","overlayTextColor":"base","style":{"layout":{"selfStretch":"fixed","flexSize":"50%"},"css":"line-height: 3rem;"},"layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'mroya' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'mroya' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Articles', 'mroya' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'mroya' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'mroya' ); ?>","url":"#"} /-->
		<!-- /wp:navigation -->

		<!-- wp:buttons {"metadata":{"blockVisibility":{"viewport":{"tablet":false,"mobile":false}}},"layout":{"type":"flex","justifyContent":"right"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button">
				<a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Get in Touch', 'Header button text', 'mroya' ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
