wp.domReady( () => {
	// Unregister default quote styles
	wp.blocks.unregisterBlockStyle( 'core/quote', 'default' );
	wp.blocks.unregisterBlockStyle( 'core/quote', 'plain' );
} );
