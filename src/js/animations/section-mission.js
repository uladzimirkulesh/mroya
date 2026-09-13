/*-------------------------------------------------------
Section "Mission"
-------------------------------------------------------*/
export function sectionMission() {
	const sections = gsap.utils.toArray( '.section--mission' );

	sections.forEach( ( section ) => {
		const img = section.querySelector( '.wp-block-cover__image-background' );
		img && gsap.effects.parallax( img, { parent: section } );
	} );
}
