<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since precious lite 1.0
	 *
	 * @return void
	 */
	function precious_lite_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'precious-lite-columns-overlap',
				'label' => esc_html__( 'Overlap', 'precious-lite' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'precious-lite-border',
				'label' => esc_html__( 'Borders', 'precious-lite' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'precious-lite-border',
				'label' => esc_html__( 'Borders', 'precious-lite' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'precious-lite-border',
				'label' => esc_html__( 'Borders', 'precious-lite' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'precious-lite-image-frame',
				'label' => esc_html__( 'Frame', 'precious-lite' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'precious-lite-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'precious-lite' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'precious-lite-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'precious-lite' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'precious-lite-border',
				'label' => esc_html__( 'Borders', 'precious-lite' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'precious-lite-separator-thick',
				'label' => esc_html__( 'Thick', 'precious-lite' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'precious-lite-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'precious-lite' ),
			)
		);
	}
	add_action( 'init', 'precious_lite_register_block_styles' );
}
