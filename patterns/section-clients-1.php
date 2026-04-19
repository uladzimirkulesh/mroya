<?php
/**
 * Title: Clients section (style 1)
 * Slug: mroya/section-clients-1
 * Categories: mroya_sections_clients
 * Description: Displays a grid of clients with icons.
 * Keywords: section, clients
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Clients (style 1)', 'Name for the Clients section pattern', 'mroya' ); ?>"},"align":"full","className":"is-style-section-contrast section section--clients-1","style":{"spacing":{"padding":{"top":"2rem","bottom":"var:preset|spacing|20"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-style-section-contrast section section--clients-1" id="section-clients-1" style="margin-top:0;padding-top:2rem;padding-bottom:var(--wp--preset--spacing--20)">
	<!-- wp:group {"tagName":"header","metadata":{"name":"<?php echo esc_html_x( 'Header', 'Name for the section header area', 'mroya' ); ?>"},"align":"wide","className":"section__header","layout":{"type":"default"}} -->
	<header class="wp-block-group alignwide section__header">
		<!-- wp:heading {"className":"is-style-text-mono"} -->
		<h2 class="wp-block-heading is-style-text-mono"><?php echo esc_html_x( '[ Our Clients ]', 'Clients section title', 'mroya' ); ?></h2>
		<!-- /wp:heading -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya' ); ?>"},"align":"wide","className":"section__content","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Row 1', 'Name for the row area', 'mroya' ); ?>"},"align":"wide","className":"row--1","layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group alignwide row--1">
			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Clients list 1', 'Name for the clients list area', 'mroya' ); ?>"},"align":"wide","className":"clients-list clients-list--1","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group alignwide clients-list clients-list--1">
				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Client', 'Name for the client area', 'mroya' ); ?>"},"className":"clients-list__item","style":{"border":{"radius":"0.25rem","width":"1px","style":"solid"}},"borderColor":"contrast-4","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group clients-list__item has-border-color has-contrast-4-border-color" style="border-style:solid;border-width:1px;border-radius:0.25rem">
					<!-- wp:image {"lightbox":{"enabled":false},"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"0px"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border">
						<a href="#" target="_blank" rel="noreferrer noopener">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-radius:0px;aspect-ratio:1;object-fit:cover;width:64px"/>
						</a>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Client', 'Name for the client area', 'mroya' ); ?>"},"className":"clients-list__item","style":{"border":{"radius":"0.25rem","width":"1px","style":"solid"}},"borderColor":"contrast-4","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group clients-list__item has-border-color has-contrast-4-border-color" style="border-style:solid;border-width:1px;border-radius:0.25rem">
					<!-- wp:image {"lightbox":{"enabled":false},"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"0px"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border">
						<a href="#" target="_blank" rel="noreferrer noopener">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-radius:0px;aspect-ratio:1;object-fit:cover;width:64px"/>
						</a>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Client', 'Name for the client area', 'mroya' ); ?>"},"className":"clients-list__item","style":{"border":{"radius":"0.25rem","width":"1px","style":"solid"}},"borderColor":"contrast-4","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group clients-list__item has-border-color has-contrast-4-border-color" style="border-style:solid;border-width:1px;border-radius:0.25rem">
					<!-- wp:image {"lightbox":{"enabled":false},"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"0px"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border">
						<a href="#" target="_blank" rel="noreferrer noopener">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-radius:0px;aspect-ratio:1;object-fit:cover;width:64px"/>
						</a>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Client', 'Name for the client area', 'mroya' ); ?>"},"className":"clients-list__item","style":{"border":{"radius":"0.25rem","width":"1px","style":"solid"}},"borderColor":"contrast-4","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group clients-list__item has-border-color has-contrast-4-border-color" style="border-style:solid;border-width:1px;border-radius:0.25rem">
					<!-- wp:image {"lightbox":{"enabled":false},"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"0px"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border">
						<a href="#" target="_blank" rel="noreferrer noopener">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-radius:0px;aspect-ratio:1;object-fit:cover;width:64px"/>
						</a>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Client', 'Name for the client area', 'mroya' ); ?>"},"className":"clients-list__item","style":{"border":{"radius":"0.25rem","width":"1px","style":"solid"}},"borderColor":"contrast-4","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group clients-list__item has-border-color has-contrast-4-border-color" style="border-style:solid;border-width:1px;border-radius:0.25rem">
					<!-- wp:image {"lightbox":{"enabled":false},"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"0px"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border">
						<a href="#" target="_blank" rel="noreferrer noopener">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-radius:0px;aspect-ratio:1;object-fit:cover;width:64px"/>
						</a>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Row 2', 'Name for the row area', 'mroya' ); ?>"},"align":"wide","className":"row--2","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
		<div class="wp-block-group alignwide row--2">
			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Clients list 2', 'Name for the clients list area', 'mroya' ); ?>"},"align":"wide","className":"clients-list clients-list--2","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group alignwide clients-list clients-list--2">
				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Client', 'Name for the client area', 'mroya' ); ?>"},"className":"clients-list__item","style":{"border":{"radius":"0.25rem","width":"1px","style":"solid"}},"borderColor":"contrast-4","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group clients-list__item has-border-color has-contrast-4-border-color" style="border-style:solid;border-width:1px;border-radius:0.25rem">
					<!-- wp:image {"lightbox":{"enabled":false},"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"0px"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border">
						<a href="#" target="_blank" rel="noreferrer noopener">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-radius:0px;aspect-ratio:1;object-fit:cover;width:64px"/>
						</a>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Client', 'Name for the client area', 'mroya' ); ?>"},"className":"clients-list__item","style":{"border":{"radius":"0.25rem","width":"1px","style":"solid"}},"borderColor":"contrast-4","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group clients-list__item has-border-color has-contrast-4-border-color" style="border-style:solid;border-width:1px;border-radius:0.25rem">
					<!-- wp:image {"lightbox":{"enabled":false},"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"0px"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border">
						<a href="#" target="_blank" rel="noreferrer noopener">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-radius:0px;aspect-ratio:1;object-fit:cover;width:64px"/>
						</a>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Client', 'Name for the client area', 'mroya' ); ?>"},"className":"clients-list__item","style":{"border":{"radius":"0.25rem","width":"1px","style":"solid"}},"borderColor":"contrast-4","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group clients-list__item has-border-color has-contrast-4-border-color" style="border-style:solid;border-width:1px;border-radius:0.25rem">
					<!-- wp:image {"lightbox":{"enabled":false},"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"0px"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border">
						<a href="#" target="_blank" rel="noreferrer noopener">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-radius:0px;aspect-ratio:1;object-fit:cover;width:64px"/>
						</a>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Client', 'Name for the client area', 'mroya' ); ?>"},"className":"clients-list__item","style":{"border":{"radius":"0.25rem","width":"1px","style":"solid"}},"borderColor":"contrast-4","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group clients-list__item has-border-color has-contrast-4-border-color" style="border-style:solid;border-width:1px;border-radius:0.25rem">
					<!-- wp:image {"lightbox":{"enabled":false},"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"0px"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border">
						<a href="#" target="_blank" rel="noreferrer noopener">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-radius:0px;aspect-ratio:1;object-fit:cover;width:64px"/>
						</a>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Client', 'Name for the client area', 'mroya' ); ?>"},"className":"clients-list__item","style":{"border":{"radius":"0.25rem","width":"1px","style":"solid"}},"borderColor":"contrast-4","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group clients-list__item has-border-color has-contrast-4-border-color" style="border-style:solid;border-width:1px;border-radius:0.25rem">
					<!-- wp:image {"lightbox":{"enabled":false},"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"0px"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border">
						<a href="#" target="_blank" rel="noreferrer noopener">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-radius:0px;aspect-ratio:1;object-fit:cover;width:64px"/>
						</a>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
