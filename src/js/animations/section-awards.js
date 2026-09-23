/*-------------------------------------------------------
Section "Awards"
-------------------------------------------------------*/
export function sectionAwards() {
	const sections = gsap.utils.toArray( '.section--awards' );

	sections.forEach( ( section ) => {
		const awardsBlock = section.querySelector( '.awards-list' );
		const awards = awardsBlock?.children;

		if ( ! awards.length ) return;

		// Let's animate
		ScrollTrigger.create( {
			trigger: awardsBlock,
			start: ScrollTrigger.defaults().start,
			toggleActions: 'play none none none',
			onEnter: () => {
				gsap.effects.fadeInUp( awards );
			},
			once: true,
		} );
	} );
}
