<?php
/**
 * Title: Navigation overlay
 * Slug: mroya/hidden-navigation-overlay
 * Inserter: no
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"className":"navigation-overlay","layout":{"type":"default"}} -->
<div class="wp-block-group navigation-overlay">
	<!-- wp:group {"className":"is-style-section-1","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
	<div class="wp-block-group is-style-section-1" style="min-height:100vh">
		<!-- wp:group {"align":"full","className":"has-global-padding","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
		<div class="wp-block-group alignfull has-global-padding" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
			<!-- wp:navigation-overlay-close {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"full","className":"has-global-padding","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignfull has-global-padding" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
			<!-- wp:navigation {"ref":411,"showSubmenuIcon":false,"submenuVisibility":"always","overlayMenu":"never","style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"orientation":"vertical","justifyContent":"center"}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"full","className":"has-global-padding","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
		<div class="wp-block-group alignfull has-global-padding" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline">
					<a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Get in Touch', 'Navigation overlay button text', 'mroya' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
