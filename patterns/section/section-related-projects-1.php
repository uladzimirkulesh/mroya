<?php
/**
 * Title: Related projects section (style 1)
 * Slug: mroya/section-related-projects-1
 * Categories: mroya_sections_projects
 * Description: Displays related projects from the portfolio.
 * Keywords: section, related, projects, portfolio
 * Post Types: wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Related Projects (style 1)', 'Name for the Related projects section pattern', 'mroya' ); ?>"},"align":"full","className":"section section--related-projects section--related-projects-1","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--related-projects section--related-projects-1">
	<!-- wp:group {"tagName":"header","metadata":{"name":"<?php echo esc_html_x( 'Header', 'Name for the section header area', 'mroya' ); ?>"},"align":"wide","className":"section__header","style":{"border":{"top":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"1rem"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<header class="wp-block-group alignwide section__header" style="border-top-color:var(--wp--preset--color--contrast-4);border-top-style:solid;border-top-width:1px;padding-top:1rem">
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php echo esc_html_x( 'Related Projects', 'Related projects section title', 'mroya' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-link-5"} -->
			<div class="wp-block-button is-style-link-5">
				<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio/"><?php echo esc_html_x( 'All Projects', 'Related projects section button text', 'mroya' ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya' ); ?>"},"align":"wide","className":"section__content","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:query {"query":{"blockName":"related-projects","perPage":2,"pages":0,"offset":0,"postType":"uk-project","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"0.75rem"}}}} /-->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:post-title {"isLink":true,"style":{"typography":{"letterSpacing":"-0.01em"}},"fontSize":"normal"} /-->

					<!-- wp:post-date {"format":"Y"} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
