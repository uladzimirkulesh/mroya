/*-------------------------------------------------------
Section "Hero (style 3)"
-------------------------------------------------------*/
export function sectionHero3() {
	const sections = gsap.utils.toArray( '.section--hero-3' );

	sections.forEach( ( section ) => {
		const img = section.querySelector( '.wp-block-cover__image-background' );

		img && gsap.effects.parallax( img, {
			yFrom: 0,
			yTo: 5,
			scaleFrom: 1,
			scaleTo: 1.04,
			parent: section,
			start: 'top top',
		} );
	} );
}
