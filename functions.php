<?php
/**
 * Mroya functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

if ( ! function_exists( 'mroya_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Mroya 1.0.0
	 *
	 * @return void
	 */
	function mroya_setup() {
		// Remove theme support for the core WordPress patterns.
		remove_theme_support( 'core-block-patterns' );
	}
endif;
add_action( 'after_setup_theme', 'mroya_setup' );

if ( ! function_exists( 'mroya_assets' ) ) :
	/**
	 * Enqueue styles and scripts.
	 *
	 * @since Mroya 2.0.0
	 *
	 * @return void
	 */
	function mroya_assets() {
		$suffix    = SCRIPT_DEBUG ? '' : '.min';
		$src       = 'style' . $suffix . '.css';
		$screenCss = 'assets/css/screen' . $suffix . '.css';
		$screenJs  = 'assets/js/screen' . $suffix . '.js';

		// Enqueue main stylesheet.
		wp_enqueue_style(
			'mroya-style',
			get_parent_theme_file_uri( $src ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_style_add_data(
			'mroya-style',
			'path',
			get_parent_theme_file_path( $src )
		);

		// Enqueue screen stylesheets.
		wp_enqueue_style(
			'mroya-screen',
			get_parent_theme_file_uri( $screenCss ),
			array( 'mroya-style' ),
			wp_get_theme()->get( 'Version' )
		);
		wp_style_add_data(
			'mroya-screen',
			'path',
			get_parent_theme_file_path( $screenCss )
		);

		// Enqueue screen scripts.
		wp_enqueue_script(
			'mroya-screen',
			get_parent_theme_file_uri( $screenJs ),
			array(
				'jquery',
				'wp-i18n'
			),
			wp_get_theme()->get( 'Version' ),
			true
		);
		wp_script_add_data(
			'mroya-screen',
			'path',
			get_parent_theme_file_path( $screenJs )
		);

		wp_set_script_translations( 'mroya-screen', 'mroya' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'mroya_assets' );

if ( ! function_exists( 'mroya_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since Mroya 2.0.0
	 *
	 * @return void
	 */
	function mroya_editor_style() {
		add_editor_style( 'assets/css/editor.css' );
	}
endif;
add_action( 'after_setup_theme', 'mroya_editor_style' );

if ( ! function_exists( 'mroya_editor_assets' ) ) :
	/**
	 * Enqueue scripts in the editors.
	 *
	 * @since Mroya 1.0.0
	 *
	 * @return void
	 */
	function mroya_editor_assets() {
		// Enqueue editor scripts.
		wp_enqueue_script(
			'mroya-editor',
			get_theme_file_uri( 'assets/js/editor.js' ),
			array(
				'wp-blocks',
				'wp-dom-ready',
				'wp-edit-post',
				'wp-i18n'
			),
			wp_get_theme()->get( 'Version' ),
			true
		);

		wp_set_script_translations( 'mroya-editor', 'mroya' );
	}
endif;
add_action( 'enqueue_block_editor_assets', 'mroya_editor_assets' );

if ( ! function_exists( 'mroya_template_part_areas' ) ) :
	/**
	 * Registers template part areas.
	 *
	 * @since Mroya 1.0.0
	 *
	 * @return void
	 */
	function mroya_template_part_areas( array $areas ) {
		$areas[] = array(
			'area'        => 'page-header',
			'area_tag'    => 'header',
			'label'       => esc_html__( 'Page header', 'mroya' ),
			'description' => esc_html__( 'Header area for archive pages.', 'mroya' ),
			'icon'        => 'layout'
		);

		return $areas;
	}
endif;
add_filter( 'default_wp_template_part_areas', 'mroya_template_part_areas' );

if ( ! function_exists( 'mroya_register_block_pattern_categories' ) ) :
	/**
	 * Registers block pattern categories.
	 *
	 * @since Mroya 2.0.0
	 *
	 * @return void
	 */
	function mroya_register_block_pattern_categories() {
		register_block_pattern_category(
			'mroya_page_header',
			array(
				'label'       => esc_html__( 'Page headers', 'mroya' ),
				'description' => esc_html__( 'A collection of archive header patterns.', 'mroya' ),
			)
		);

		register_block_pattern_category(
			'mroya_pages',
			array(
				'label'       => esc_html__( 'Pages', 'mroya' ),
				'description' => esc_html__( 'A collection of full page layouts.', 'mroya' ),
			)
		);

		register_block_pattern_category(
			'mroya_sections_posts',
			array(
				'label'       => esc_html__( 'Sections (Posts)', 'mroya' ),
				'description' => esc_html__( 'A collection of posts section patterns.', 'mroya' ),
			)
		);
	}
endif;
add_action( 'init', 'mroya_register_block_pattern_categories', 9 );

if ( ! function_exists( 'mroya_related_posts' ) ) :
	/**
	 * Filtering the query to display related posts.
	 *
	 * @since Mroya 1.0.0
	 *
	 * @return $query
	 */
	function mroya_related_posts( $query, \WP_Block $block ) {
		$block_context_query = $block->context[ 'query' ];

		if ( isset( $block_context_query[ 'blockName' ] ) &&
			'related-posts' === $block_context_query[ 'blockName' ]
		) {
			$current_post_id = get_the_ID();
			$post_categories = get_the_category( $current_post_id );

			if ( ! empty( $post_categories ) ) {
				$query[ 'category__in' ] = wp_list_pluck( $post_categories, 'term_id' );
			}

			$query[ 'post__not_in' ] = array( $current_post_id );
		}

		return $query;
	}
endif;
add_filter( 'query_loop_block_query_vars', 'mroya_related_posts', 10, 2 );

// Load theme info file.
require get_template_directory() . '/inc/theme-info.php';
