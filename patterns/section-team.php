<?php
/**
 * Title: Team section
 * Slug: mroya/section-team
 * Categories: mroya_sections
 * Description: Displays team members.
 * Keywords: section, team
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--team","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"2.25rem"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--team" style="padding-top:2.25rem;padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"800px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"className":"is-style-text-badge-2"} -->
		<h2 class="wp-block-heading is-style-text-badge-2"><?php echo esc_html_x( 'Our Team', 'Team section title', 'mroya' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"xxx-large"} -->
		<p class="has-xxx-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'We’re a tight-knit crew of designers, developers, and strategists united by a passion for building things that matter.', 'Team section text', 'mroya' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"className":"members-list","style":{"@tablet":{"layout":{"columnCount":2}},"@mobile":{"layout":{"columnCount":1}}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"15rem"}} -->
		<div class="wp-block-group members-list">
			<!-- wp:group {"className":"members-list__item","style":{"border":{"radius":{"topLeft":"0.5rem","topRight":"0.5rem","bottomLeft":"0.5rem","bottomRight":"0.5rem"}},"spacing":{"blockGap":"1.25rem","padding":{"top":"0.75rem","bottom":"0.75rem","left":"0.75rem","right":"0.75rem"}}},"backgroundColor":"accent-2","layout":{"type":"default"}} -->
			<div class="wp-block-group members-list__item has-accent-2-background-color has-background" style="border-top-left-radius:0.5rem;border-top-right-radius:0.5rem;border-bottom-left-radius:0.5rem;border-bottom-right-radius:0.5rem;padding-top:0.75rem;padding-right:0.75rem;padding-bottom:0.75rem;padding-left:0.75rem">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-top-left-radius:0.25rem;border-top-right-radius:0.25rem;border-bottom-left-radius:0.25rem;border-bottom-right-radius:0.25rem;aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
					<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Jason Miller', 'Team member name', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"xx-small"} -->
					<p class="has-contrast-3-color has-text-color has-link-color has-xx-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Founder', 'Team member role', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"members-list__item members-list__item--empty","style":{"border":{"width":"1px","radius":{"topLeft":"0.5rem","topRight":"0.5rem","bottomLeft":"0.5rem","bottomRight":"0.5rem"},"style":"dashed"},"css":"aspect-ratio: 3/4; min-height: 100%; width: 100%;"},"borderColor":"contrast-4","layout":{"type":"default"}} -->
			<div class="wp-block-group members-list__item members-list__item--empty has-border-color has-contrast-4-border-color has-custom-css" style="border-style:dashed;border-width:1px;border-top-left-radius:0.5rem;border-top-right-radius:0.5rem;border-bottom-left-radius:0.5rem;border-bottom-right-radius:0.5rem"></div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"members-list__item","style":{"border":{"radius":{"topLeft":"0.5rem","topRight":"0.5rem","bottomLeft":"0.5rem","bottomRight":"0.5rem"}},"spacing":{"blockGap":"1.25rem","padding":{"top":"0.75rem","bottom":"0.75rem","left":"0.75rem","right":"0.75rem"}}},"backgroundColor":"accent-2","layout":{"type":"default"}} -->
			<div class="wp-block-group members-list__item has-accent-2-background-color has-background" style="border-top-left-radius:0.5rem;border-top-right-radius:0.5rem;border-bottom-left-radius:0.5rem;border-bottom-right-radius:0.5rem;padding-top:0.75rem;padding-right:0.75rem;padding-bottom:0.75rem;padding-left:0.75rem">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-top-left-radius:0.25rem;border-top-right-radius:0.25rem;border-bottom-left-radius:0.25rem;border-bottom-right-radius:0.25rem;aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
					<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Emily Harris', 'Team member name', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"xx-small"} -->
					<p class="has-contrast-3-color has-text-color has-link-color has-xx-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Designer', 'Team member role', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"members-list__item","style":{"border":{"radius":{"topLeft":"0.5rem","topRight":"0.5rem","bottomLeft":"0.5rem","bottomRight":"0.5rem"}},"spacing":{"blockGap":"1.25rem","padding":{"top":"0.75rem","bottom":"0.75rem","left":"0.75rem","right":"0.75rem"}}},"backgroundColor":"accent-2","layout":{"type":"default"}} -->
			<div class="wp-block-group members-list__item has-accent-2-background-color has-background" style="border-top-left-radius:0.5rem;border-top-right-radius:0.5rem;border-bottom-left-radius:0.5rem;border-bottom-right-radius:0.5rem;padding-top:0.75rem;padding-right:0.75rem;padding-bottom:0.75rem;padding-left:0.75rem">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-top-left-radius:0.25rem;border-top-right-radius:0.25rem;border-bottom-left-radius:0.25rem;border-bottom-right-radius:0.25rem;aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
					<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Tyler Brooks', 'Team member name', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"xx-small"} -->
					<p class="has-contrast-3-color has-text-color has-link-color has-xx-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Designer', 'Team member role', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"members-list__item members-list__item--empty","style":{"border":{"width":"1px","radius":{"topLeft":"0.5rem","topRight":"0.5rem","bottomLeft":"0.5rem","bottomRight":"0.5rem"},"style":"dashed"},"css":"aspect-ratio: 3/4; min-height: 100%; width: 100%;"},"borderColor":"contrast-4","layout":{"type":"default"}} -->
			<div class="wp-block-group members-list__item members-list__item--empty has-border-color has-contrast-4-border-color has-custom-css" style="border-style:dashed;border-width:1px;border-top-left-radius:0.5rem;border-top-right-radius:0.5rem;border-bottom-left-radius:0.5rem;border-bottom-right-radius:0.5rem"></div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"members-list__item","style":{"border":{"radius":{"topLeft":"0.5rem","topRight":"0.5rem","bottomLeft":"0.5rem","bottomRight":"0.5rem"}},"spacing":{"blockGap":"1.25rem","padding":{"top":"0.75rem","bottom":"0.75rem","left":"0.75rem","right":"0.75rem"}}},"backgroundColor":"accent-2","layout":{"type":"default"}} -->
			<div class="wp-block-group members-list__item has-accent-2-background-color has-background" style="border-top-left-radius:0.5rem;border-top-right-radius:0.5rem;border-bottom-left-radius:0.5rem;border-bottom-right-radius:0.5rem;padding-top:0.75rem;padding-right:0.75rem;padding-bottom:0.75rem;padding-left:0.75rem">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-top-left-radius:0.25rem;border-top-right-radius:0.25rem;border-bottom-left-radius:0.25rem;border-bottom-right-radius:0.25rem;aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
					<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Lauren Mitchell', 'Team member name', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"xx-small"} -->
					<p class="has-contrast-3-color has-text-color has-link-color has-xx-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Developer', 'Team member role', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"members-list__item members-list__item--empty","style":{"border":{"width":"1px","radius":{"topLeft":"0.5rem","topRight":"0.5rem","bottomLeft":"0.5rem","bottomRight":"0.5rem"},"style":"dashed"},"css":"aspect-ratio: 3/4; min-height: 100%; width: 100%;"},"borderColor":"contrast-4","layout":{"type":"default"}} -->
			<div class="wp-block-group members-list__item members-list__item--empty has-border-color has-contrast-4-border-color has-custom-css" style="border-style:dashed;border-width:1px;border-top-left-radius:0.5rem;border-top-right-radius:0.5rem;border-bottom-left-radius:0.5rem;border-bottom-right-radius:0.5rem"></div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"members-list__item","style":{"border":{"radius":{"topLeft":"0.5rem","topRight":"0.5rem","bottomLeft":"0.5rem","bottomRight":"0.5rem"}},"spacing":{"blockGap":"1.25rem","padding":{"top":"0.75rem","bottom":"0.75rem","left":"0.75rem","right":"0.75rem"}}},"backgroundColor":"accent-2","layout":{"type":"default"}} -->
			<div class="wp-block-group members-list__item has-accent-2-background-color has-background" style="border-top-left-radius:0.5rem;border-top-right-radius:0.5rem;border-bottom-left-radius:0.5rem;border-bottom-right-radius:0.5rem;padding-top:0.75rem;padding-right:0.75rem;padding-bottom:0.75rem;padding-left:0.75rem">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="border-top-left-radius:0.25rem;border-top-right-radius:0.25rem;border-bottom-left-radius:0.25rem;border-bottom-right-radius:0.25rem;aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
					<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Brandon Carter', 'Team member name', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"xx-small"} -->
					<p class="has-contrast-3-color has-text-color has-link-color has-xx-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Developer', 'Team member role', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
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
