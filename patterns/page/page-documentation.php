<?php
/**
 * Title: Documentation page
 * Slug: mroya/page-documentation
 * Categories: mroya_pages
 * Keywords: documentation, theme
 * Post Types: page
 * Description: Documentation page with sidebar and main content.
 * Viewport width: 1440
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Documentation page', 'Name for the documentation page pattern', 'mroya' ); ?>"},"align":"full","className":"page--documentation","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1200px","justifyContent":"center"}} -->
<div class="wp-block-group alignfull page--documentation" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Container', 'Name for the documentation page container', 'mroya' ); ?>"},"align":"wide","className":"page__container","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide page__container">
		<!-- wp:group {"tagName":"aside","metadata":{"name":"<?php echo esc_html_x( 'Sidebar', 'Name for the documentation sidebar', 'mroya' ); ?>"},"className":"page__sidebar","style":{"spacing":{"padding":{"right":"var:preset|spacing|10"}},"border":{"right":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"},"top":{},"bottom":{},"left":{}}},"layout":{"type":"default"}} -->
		<aside class="wp-block-group page__sidebar" style="border-right-color:var(--wp--preset--color--contrast-4);border-right-style:solid;border-right-width:1px;padding-right:var(--wp--preset--spacing--10)">
			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Page block', 'Name for the sidebar page block', 'mroya' ); ?>"},"className":"page__block","style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group page__block">
				<!-- wp:heading {"style":{"border":{"bottom":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}},"spacing":{"padding":{"bottom":"0.75rem","top":"0.75rem"}}},"fontSize":"x-large"} -->
				<h2 class="wp-block-heading has-x-large-font-size" style="border-bottom-color:var(--wp--preset--color--contrast-4);border-bottom-style:solid;border-bottom-width:1px;padding-top:0.75rem;padding-bottom:0.75rem"><?php echo esc_html_x( 'Navigation', 'Documentation navigation title', 'mroya' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:page-list /-->
			</div>
			<!-- /wp:group -->
		</aside>
		<!-- /wp:group -->

		<!-- wp:group {"tagName":"article","metadata":{"name":"<?php echo esc_html_x( 'Article', 'Name for the documentation article', 'mroya' ); ?>"},"className":"page__article article","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<article class="wp-block-group page__article article">
			<!-- wp:group {"tagName":"header","metadata":{"name":"<?php echo esc_html_x( 'Article header', 'Name for the documentation article header', 'mroya' ); ?>"},"className":"article__header","layout":{"type":"default"}} -->
			<header class="wp-block-group article__header">
				<!-- wp:heading {"level":1,"className":"is-style-default","fontSize":"huge"} -->
				<h1 class="wp-block-heading is-style-default has-huge-font-size"><?php echo esc_html_x( 'Heading', 'Documentation article title', 'mroya' ); ?></h1>
				<!-- /wp:heading -->
			</header>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Article content', 'Name for the documentation article content', 'mroya' ); ?>"},"className":"article__content","layout":{"type":"default"}} -->
			<div class="wp-block-group article__content">
				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'Mauris egestas ante rutrum nibh fringilla fringilla. Pellentesque sodales nulla risus, eu sagittis elit ullamcorper vitae. Sed laoreet pharetra orci. Nam a consectetur ligula. Nunc auctor ante quis velit laoreet, id mattis nibh euismod. Cras maximus purus eu mauris ornare, eu congue orci pellentesque. Mauris tristique mi a dignissim lacinia.', 'Documentation paragraph text', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'Pellentesque a augue aliquet, imperdiet nibh quis, tempor nisl. Integer sit amet tellus ut ipsum posuere egestas id vitae risus. Sed posuere efficitur enim sit amet iaculis. Ut ac cursus mi. Aenean vitae risus congue ligula mollis imperdiet. Vivamus at turpis cursus, scelerisque magna at, fringilla purus. Fusce dui nulla, elementum et justo eget, ultrices faucibus orci. Morbi lacinia et velit sed faucibus. Duis fringilla ac purus sed commodo.', 'Documentation paragraph text', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'Donec sed ante nec metus interdum tempor quis eu odio. Mauris in lectus faucibus, finibus orci at, molestie arcu. Nunc porta odio aliquet accumsan luctus. Aliquam a eleifend est. Fusce venenatis interdum risus quis pharetra. Sed ornare leo in libero consectetur blandit.', 'Documentation paragraph text', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'Proin quis lobortis elit. Vivamus vestibulum lorem sit amet scelerisque gravida. Nam fermentum consequat suscipit. Aenean eu finibus mauris, eget tempus nisi. Sed sit amet mauris dui. Sed faucibus dui vel mattis tempor. Sed semper ligula ut mollis accumsan. Duis vitae turpis congue, suscipit est ac, lacinia velit. Nunc ut massa sagittis, egestas nisl eget, viverra nisl. Duis iaculis dui non est tincidunt, vitae hendrerit erat fermentum. Phasellus tincidunt elit at volutpat feugiat.', 'Documentation paragraph text', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</article>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
