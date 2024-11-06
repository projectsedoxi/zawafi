<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage zawafi
 * @since Twenty Twenty-One 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'zawafi-columns-overlap',
				'label' => esc_html__( 'Overlap', 'zawafi' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'zawafi-border',
				'label' => esc_html__( 'Borders', 'zawafi' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'zawafi-border',
				'label' => esc_html__( 'Borders', 'zawafi' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'zawafi-border',
				'label' => esc_html__( 'Borders', 'zawafi' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'zawafi-image-frame',
				'label' => esc_html__( 'Frame', 'zawafi' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'zawafi-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'zawafi' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'zawafi-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'zawafi' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'zawafi-border',
				'label' => esc_html__( 'Borders', 'zawafi' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'zawafi-separator-thick',
				'label' => esc_html__( 'Thick', 'zawafi' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'zawafi-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'zawafi' ),
			)
		);
	}
	add_action( 'init', 'twenty_twenty_one_register_block_styles' );
}
