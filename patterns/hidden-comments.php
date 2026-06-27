<?php
/**
 * Title: Hidden comments
 * Slug: mroya/hidden-comments
 * Inserter: no
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:comments {"tagName":"section"} -->
<section class="wp-block-comments">
	<!-- wp:comments-title {"showPostTitle":false} /-->

	<!-- wp:comment-template -->
		<!-- wp:group {"tagName":"article","style":{"border":{"top":{"color":"var:preset|color|contrast-4","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20"},"margin":{"bottom":"var:preset|spacing|20"}}},"className":"comment-body","layout":{"type":"default"}} -->
		<article class="wp-block-group comment-body" style="border-top-color:var(--wp--preset--color--contrast-4);border-top-width:1px;margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--20)">
			<!-- wp:group {"tagName":"footer","style":{"spacing":{"blockGap":"1rem"}},"className":"comment-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<footer class="wp-block-group comment-meta">
				<!-- wp:avatar {"size":48,"style":{"border":{"radius":"50%"}}} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:comment-author-name /-->

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:comment-date {"format":"M j, Y"} /-->
						<!-- wp:comment-edit-link /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</footer>
			<!-- /wp:group -->

			<!-- wp:comment-content {"className":"comment-content"} /-->
			<!-- wp:comment-reply-link {"className":"comment-reply"} /-->
		</article>
		<!-- /wp:group -->
	<!-- /wp:comment-template -->

	<!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:comments-pagination-previous /-->
		<!-- wp:comments-pagination-numbers /-->
		<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->

	<!-- wp:post-comments-form /-->
</section>
<!-- /wp:comments -->
