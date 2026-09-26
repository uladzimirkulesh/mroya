/*-------------------------------------------------------
Section "Services"
-------------------------------------------------------*/

export function sectionServices() {
	const sections = gsap.utils.toArray( '.section--services' );

	sections.forEach( ( section ) => {
		const servicesList = section.querySelector( '.services-list' );
		const items = servicesList?.querySelectorAll( '.services-list__item' );

		// Let's animate
		servicesList && items.forEach( ( item ) => {
			animateItem( item );
		} );
	} );
}

// Animate item
function animateItem( item ) {
	const separator = item.querySelector( '.wp-block-separator' );

	if ( ! separator ) { return; }

	// Let's animate
	const tl = gsap.timeline( {
		scrollTrigger: {
			trigger: item,
			start: ScrollTrigger.defaults().start,
			toggleActions: 'play none none none',
			once: true,
		}
	} );

	// Initial state of the vertical line
	gsap.set( item, {
		'--services-line-scale': 0,
	} );

	// Horizontal line
	tl.fromTo(
		separator,
		{
			width: 0,
		},
		{
			width: '100%',
			duration: 1.2,
		}
	);

	// Vertical line starts at 50%
	tl.to(
		item,
		{
			'--services-line-scale': 1,
			duration: 0.9,
		},
		'<0.3'
	);

	return () => {
		// Cleanup on media query change
		gsap.set( item, {
			clearProps: '--services-line-scale',
		} );
	};
}
