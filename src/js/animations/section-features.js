/*-------------------------------------------------------
Section "Features"
-------------------------------------------------------*/
export function sectionFeatures() {
	const sections = gsap.utils.toArray( '.section--features' );

	sections.forEach( ( section ) => {
		const cards = section.querySelectorAll( '.featured-list__item' );
		cards?.length && gsap.effects.fadeInUpBatch( cards );
	} );
}
