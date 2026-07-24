<?php
/**
 * Title: Sidebar
 * Slug: mroya/hidden-sidebar
 * Inserter: no
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"className":"sidebar__inner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"top"}} -->
<div class="wp-block-group sidebar__inner">
	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Overlay', 'Name for the sidebar overlay template part', 'mroya' ); ?>"},"className":"sidebar__overlay","style":{"color":{"background":"#000000ba"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group sidebar__overlay has-background" style="background-color:#000000ba"></div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Widgets', 'Name for the sidebar widgets template part', 'mroya' ); ?>"},"className":"sidebar__widgets widgets","style":{"spacing":{"padding":{"top":"2.25rem","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group sidebar__widgets widgets" style="min-height:100%;padding-top:2.25rem;padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)">
		<!-- wp:buttons {"className":"sidebar-close","layout":{"type":"flex","justifyContent":"right"}} -->
		<div class="wp-block-buttons sidebar-close">
			<!-- wp:button {"className":"is-style-close"} -->
			<div class="wp-block-button is-style-close"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Close', 'Sidebar close button text', 'mroya' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:group {"className":"widgets__inner","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group widgets__inner">
			<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'Label', 'mroya' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Type here...', 'Search input field placeholder text', 'mroya' ); ?>","buttonText":"<?php esc_attr_x( 'Search', 'Search button text', 'mroya' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true} /-->

			<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
			<section class="wp-block-group">
				<!-- wp:heading {"fontSize":"x-large"} -->
				<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Categories', 'Widget title', 'mroya' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:categories {"showHierarchy":true,"showPostCounts":true} /-->
			</section>
			<!-- /wp:group -->

			<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
			<section class="wp-block-group">
				<!-- wp:heading {"fontSize":"x-large"} -->
				<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Latest Posts', 'Widget title', 'mroya' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:latest-posts {"postsToShow":3,"displayPostContent":true,"displayPostDate":true,"featuredImageSizeSlug":"large","addLinkToFeaturedImage":true} /-->
			</section>
			<!-- /wp:group -->

			<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
			<section class="wp-block-group">
				<!-- wp:heading {"fontSize":"x-large"} -->
				<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Tags', 'Widget title', 'mroya' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:tag-cloud {"showTagCounts":true,"smallestFontSize":"0.8125rem","largestFontSize":"1.5rem"} /-->
			</section>
			<!-- /wp:group -->

			<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
			<section class="wp-block-group">
				<!-- wp:heading {"fontSize":"x-large"} -->
				<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Latest Comments', 'Widget title', 'mroya' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:latest-comments {"commentsToShow":3} /-->
			</section>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
