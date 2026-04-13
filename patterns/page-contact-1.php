<?php
/**
 * Title: Contact page (style 1)
 * Slug: mroya/page-contact-1
 * Categories: mroya_pages
 * Keywords: agency, contact, starter
 * Block Types: core/post-content
 * Post Types: page
 * Description: Agency contact page with contact text, blocks and form.
 * Viewport width: 1440
 */

?>
<!-- wp:group {"tagName":"article","metadata":{"name":"<?php echo esc_html_x( 'Contact page (style 1)', 'Name for the contact page pattern', 'mroya' ); ?>"},"align":"full","className":"page--contact-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull page--contact-1" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"tagName":"header","metadata":{"name":"<?php echo esc_html_x( 'Page header', 'Name for the page header area', 'mroya' ); ?>"},"align":"wide","className":"page__header","layout":{"type":"constrained"}} -->
	<header class="wp-block-group alignwide page__header">
		<!-- wp:heading {"level":1,"align":"wide","className":"is-style-text-display is-style-text-giant"} -->
		<h1 class="wp-block-heading alignwide is-style-text-display is-style-text-giant"><?php echo wp_kses_post( _x( 'Contact<br>Our Studio', 'Contact page title', 'mroya' ) ); ?></h1>
		<!-- /wp:heading -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Page content', 'Name for the page content area', 'mroya' ); ?>"},"align":"wide","className":"page__content","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide page__content">
		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Left column', 'Name for the left column', 'mroya' ); ?>"},"className":"column--left","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between","flexWrap":"wrap"}} -->
		<div class="wp-block-group column--left">
			<!-- wp:paragraph {"className":"page__text","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"x-large"} -->
			<p class="page__text has-contrast-color has-text-color has-link-color has-x-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Whether you’re launching a brand, refining your product, or improving your online presence, we’re here to collaborate. Tell us what you need, and we’ll handle the strategy.', 'Contact page intro text', 'mroya' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Page block', 'Name for the page block area', 'mroya' ); ?>"},"className":"page__block","layout":{"type":"default"}} -->
			<div class="wp-block-group page__block">
				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Contacts block', 'Name for the contacts block', 'mroya' ); ?>"},"className":"block--contacts","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|10"},"border":{"top":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group block--contacts" style="border-top-color:var(--wp--preset--color--contrast-4);border-top-style:solid;border-top-width:1px;padding-top:0.75rem;padding-bottom:var(--wp--preset--spacing--10)">
					<!-- wp:heading {"className":"is-style-text-mono","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
					<h2 class="wp-block-heading is-style-text-mono has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'Contacts', 'Contacts block title', 'mroya' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group" style="font-style:normal;font-weight:500;letter-spacing:-0.01em">
						<!-- wp:paragraph -->
						<p><?php
						printf(
							/* translators: "Contact phone" text. */
							esc_html__( 'Phone: %s', 'mroya' ),
							'<a href="' . esc_url( __( 'tel:44209555014', 'mroya' ) ) . '">+44 209 555 014</a>' )
						?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p><?php
						printf(
							/* translators: "Contact mail" text. */
							esc_html__( 'Email: %s', 'mroya' ),
							'<a href="' . esc_url( __( 'mailto:info@mroya.com', 'mroya' ) ) . '">info@mroya.com</a>' )
						?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Address block', 'Name for the address block', 'mroya' ); ?>"},"className":"block--adress","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|10"},"border":{"top":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group block--adress" style="border-top-color:var(--wp--preset--color--contrast-4);border-top-style:solid;border-top-width:1px;padding-top:0.75rem;padding-bottom:var(--wp--preset--spacing--10)">
					<!-- wp:heading {"className":"is-style-text-mono","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
					<h2 class="wp-block-heading is-style-text-mono has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'Address', 'Address block title', 'mroya' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group" style="font-style:normal;font-weight:500;letter-spacing:-0.01em">
						<!-- wp:paragraph -->
						<p><?php echo wp_kses_post( _x( '2118 Thornridge Cir. Syracuse,<br>Connecticut 35624', 'Address text', 'mroya' ) ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Working hours block', 'Name for the working hours block', 'mroya' ); ?>"},"className":"block--working-hours","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|10"},"border":{"top":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group block--working-hours" style="border-top-color:var(--wp--preset--color--contrast-4);border-top-style:solid;border-top-width:1px;padding-top:0.75rem;padding-bottom:var(--wp--preset--spacing--10)">
					<!-- wp:heading {"className":"is-style-text-mono","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
					<h2 class="wp-block-heading is-style-text-mono has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'Working Hours', 'Working hours block title', 'mroya' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group" style="font-style:normal;font-weight:500;letter-spacing:-0.01em">
						<!-- wp:paragraph -->
						<p><?php echo esc_html_x( 'Mon–Sat: 9am to 5pm', 'Working hours text', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p><?php echo esc_html_x( 'Sunday – Closed', 'Working hours text', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Right column', 'Name for right column', 'mroya' ); ?>"},"className":"column--right","layout":{"type":"default"}} -->
		<div class="wp-block-group column--right">
			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Page block', 'Name for contact page block', 'mroya' ); ?>"},"className":"page__block--contact","style":{"spacing":{"padding":{"left":"2rem","right":"2rem","top":"2rem","bottom":"2rem"}},"border":{"width":"1px","style":"dashed","color":"var:preset|color|contrast-4","radius":"0.25rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group page__block--contact has-border-color" style="border-color:var(--wp--preset--color--contrast-4);border-style:dashed;border-width:1px;border-radius:0.25rem;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
				<!-- wp:heading -->
				<h2 class="wp-block-heading"><?php echo esc_html_x( 'Ask a Question', 'Contact form title', 'mroya' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:shortcode -->
				[contact-form-7 id="2c93d4f" title="Contact form 1"]
				<!-- /wp:shortcode -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</article>
<!-- /wp:group -->
