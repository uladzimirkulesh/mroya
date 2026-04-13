/*-------------------------------------------------------
Setting "border-radius" value for images figure element
-------------------------------------------------------*/

export function setFigureBorderRadius() {
	const imgFigures = document.querySelectorAll( '.wp-block-image, .wp-block-post-featured-image' );

	imgFigures.forEach( ( imgFigure ) => {
		const img = imgFigure.querySelector( 'img' );
		if ( ! img ) return;

		const applyBorderRadius = () => {
			const borderRadius = window.getComputedStyle( img ).borderRadius;
			imgFigure.style.borderRadius = borderRadius;
		};

		if ( img.complete ) {
			applyBorderRadius();
		} else {
			img.addEventListener( 'load', applyBorderRadius );
		}
	} );
}
