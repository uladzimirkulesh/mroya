<?php
/**
 * Title: Clients section
 * Slug: mroya/section-clients
 * Categories: mroya_sections
 * Description: Displays clients list.
 * Keywords: section, clients
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--clients","style":{"spacing":{"blockGap":"2.25rem","padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--clients" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
		<!-- /wp:separator -->

		<!-- wp:heading {"fontSize":"large"} -->
		<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'Our Clients', 'Clients section title', 'mroya' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"className":"clients-list","style":{"@mobile":{"layout":{"columnCount":1}},"@tablet":{"layout":{"columnCount":2}}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"12rem"}} -->
		<div class="wp-block-group clients-list">
			<!-- wp:group {"className":"clients-list__item","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}},"css":"aspect-ratio: 1;"},"backgroundColor":"contrast-5","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group clients-list__item has-custom-css has-contrast-5-background-color has-background" style="border-top-left-radius:0.25rem;border-top-right-radius:0.25rem;border-bottom-left-radius:0.25rem;border-bottom-right-radius:0.25rem">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"layout":{"selfStretch":"fixedNoShrink","flexSize":"4rem"}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:1;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"clients-list__item","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}},"css":"aspect-ratio: 1;"},"backgroundColor":"contrast-5","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group clients-list__item has-custom-css has-contrast-5-background-color has-background" style="border-top-left-radius:0.25rem;border-top-right-radius:0.25rem;border-bottom-left-radius:0.25rem;border-bottom-right-radius:0.25rem">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"layout":{"selfStretch":"fixedNoShrink","flexSize":"4rem"}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:1;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"clients-list__item","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}},"css":"aspect-ratio: 1;"},"backgroundColor":"contrast-5","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group clients-list__item has-custom-css has-contrast-5-background-color has-background" style="border-top-left-radius:0.25rem;border-top-right-radius:0.25rem;border-bottom-left-radius:0.25rem;border-bottom-right-radius:0.25rem">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"layout":{"selfStretch":"fixedNoShrink","flexSize":"4rem"}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:1;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"clients-list__item","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}},"css":"aspect-ratio: 1;"},"backgroundColor":"contrast-5","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group clients-list__item has-custom-css has-contrast-5-background-color has-background" style="border-top-left-radius:0.25rem;border-top-right-radius:0.25rem;border-bottom-left-radius:0.25rem;border-bottom-right-radius:0.25rem">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"layout":{"selfStretch":"fixedNoShrink","flexSize":"4rem"}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:1;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"clients-list__item","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}},"css":"aspect-ratio: 1;"},"backgroundColor":"contrast-5","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group clients-list__item has-custom-css has-contrast-5-background-color has-background" style="border-top-left-radius:0.25rem;border-top-right-radius:0.25rem;border-bottom-left-radius:0.25rem;border-bottom-right-radius:0.25rem">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"layout":{"selfStretch":"fixedNoShrink","flexSize":"4rem"}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:1;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"clients-list__item","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}},"css":"aspect-ratio: 1;"},"backgroundColor":"contrast-5","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group clients-list__item has-custom-css has-contrast-5-background-color has-background" style="border-top-left-radius:0.25rem;border-top-right-radius:0.25rem;border-bottom-left-radius:0.25rem;border-bottom-right-radius:0.25rem">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"layout":{"selfStretch":"fixedNoShrink","flexSize":"4rem"}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:1;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"clients-list__item","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}},"css":"aspect-ratio: 1;"},"backgroundColor":"contrast-5","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group clients-list__item has-custom-css has-contrast-5-background-color has-background" style="border-top-left-radius:0.25rem;border-top-right-radius:0.25rem;border-bottom-left-radius:0.25rem;border-bottom-right-radius:0.25rem">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"layout":{"selfStretch":"fixedNoShrink","flexSize":"4rem"}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:1;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"clients-list__item","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}},"css":"aspect-ratio: 1;"},"backgroundColor":"contrast-5","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group clients-list__item has-custom-css has-contrast-5-background-color has-background" style="border-top-left-radius:0.25rem;border-top-right-radius:0.25rem;border-bottom-left-radius:0.25rem;border-bottom-right-radius:0.25rem">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"layout":{"selfStretch":"fixedNoShrink","flexSize":"4rem"}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:1;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
