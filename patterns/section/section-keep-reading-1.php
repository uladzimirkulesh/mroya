<?php
/**
 * Title: Keep reading section (style 1)
 * Slug: mroya/section-keep-reading-1
 * Categories: mroya_sections_posts
 * Description: Displays related articles from the blog.
 * Keywords: section, related, articles, blog
 * Post Types: wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Keep Reading (style 1)', 'Name for the Keep reading section pattern', 'mroya' ); ?>"},"align":"full","className":"section section--keep-reading section--keep-reading-1","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--keep-reading section--keep-reading-1">
	<!-- wp:group {"tagName":"header","metadata":{"name":"<?php echo esc_html_x( 'Header', 'Name for the section header area', 'mroya' ); ?>"},"align":"wide","className":"section__header","style":{"border":{"top":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"1rem"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<header class="wp-block-group alignwide section__header" style="border-top-color:var(--wp--preset--color--contrast-4);border-top-style:solid;border-top-width:1px;padding-top:1rem">
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php echo esc_html_x( 'Keep Reading', 'Keep reading section title', 'mroya' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-link-5"} -->
			<div class="wp-block-button is-style-link-5">
				<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>blog/"><?php echo esc_html_x( 'All Stories', 'Keep reading section button text', 'mroya' ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya' ); ?>"},"align":"wide","className":"section__content","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:query {"query":{"blockName":"related-posts","perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->

				<!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"bottom":"0.5rem"}}}} /-->

				<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0.75rem"}},"typography":{"lineHeight":"1.38889"}},"fontSize":"medium"} /-->

				<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":26,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"},":hover":{"color":{"text":"var:preset|color|contrast-2"}}}},"spacing":{"margin":{"top":"0","bottom":"1rem"}}},"textColor":"contrast-2","fontSize":"small"} /-->

				<!-- wp:post-date {"format":"M j, Y"} /-->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
