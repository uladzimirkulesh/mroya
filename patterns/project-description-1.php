<?php
/**
 * Title: Project description (style 1)
 * Slug: mroya/project-description-1
 * Description: Project description with title, text and project info.
 * Categories: mroya_portfolio
 * Keywords: portfolio, project
 * Post Types: uk-project
 * Viewport Width: 1440
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Project description (style 1)', 'Name for the project description block', 'mroya' ); ?>"},"align":"wide","className":"project-description project-description--1","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
<div class="wp-block-group alignwide project-description project-description--1">
	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Header', 'Name for the project description header', 'mroya' ); ?>"},"className":"project-description__header","layout":{"type":"default"}} -->
	<div class="wp-block-group project-description__header">
		<!-- wp:heading {"className":"is-style-text-mono","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
		<h2 class="wp-block-heading is-style-text-mono has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'About the project', 'Project description title', 'mroya' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the project description content', 'mroya' ); ?>"},"className":"project-description__content","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group project-description__content">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php echo esc_html_x( 'Proin quis lobortis elit vivamus vestibulum lorem sit amet scelerisque gravida. Nam fermentum consequat suscipit', 'Project description title', 'mroya' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'Aenean eu finibus mauris, eget tempus nisi. Sed faucibus dui vel mattis tempor. Sed semper ligula ut mollis accumsan. Duis vitae turpis congue, suscipit est ac, lacinia velit. Nunc ut massa sagittis, egestas nisl eget, viverra nisl. Duis iaculis dui non est tincidunt, vitae hendrerit erat fermentum. Phasellus tincidunt elit at volutpat feugiat.', 'Project description text', 'mroya' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Information', 'Name for the project information block', 'mroya' ); ?>"},"className":"project-information","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group project-information">
			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item', 'Name for the project information item', 'mroya' ); ?>"},"className":"project-information__item","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
			<div class="wp-block-group project-information__item">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
				<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'Client', 'Project information label', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"}}} -->
				<p style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'Mroya Studio', 'Project client name', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:separator {"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
			<!-- /wp:separator -->

			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item', 'Name for the project information item', 'mroya' ); ?>"},"className":"project-information__item","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
			<div class="wp-block-group project-information__item">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
				<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'Services', 'Project information label', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"}}} -->
				<p style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'Branding, Design', 'Project services list', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:separator {"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
			<!-- /wp:separator -->

			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item', 'Name for the project information item', 'mroya' ); ?>"},"className":"project-information__item","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
			<div class="wp-block-group project-information__item">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
				<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'Year', 'Project information label', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"}}} -->
				<p style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( '2025', 'Project year', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
