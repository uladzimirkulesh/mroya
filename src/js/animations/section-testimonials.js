/*-------------------------------------------------------
Section "Testimonials"
-------------------------------------------------------*/
export function sectionTestimonials() {
	const sections = gsap.utils.toArray( '.section--testimonials' );

	sections.forEach( ( section ) => {
		const cards = section.querySelectorAll( '.testimonials-list__item' );
		cards?.length && gsap.effects.fadeInUpBatch( cards );
	} );
}
