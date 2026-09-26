/*-------------------------------------------------------
Section "Keep Reading"
-------------------------------------------------------*/
export function sectionKeepReading() {
	const sections = gsap.utils.toArray( '.section--keep-reading' );

	sections.forEach( ( section ) => {
		const cards = section.querySelectorAll( '.wp-block-post' );
		cards?.length && gsap.effects.fadeInUpBatch( cards );
	} );
}
