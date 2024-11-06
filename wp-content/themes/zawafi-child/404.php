<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage zawafi
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<div class="site-content">
	<div class="site-content__section page-404">
	<div class="container">
		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'zawafi' ); ?></p>
		<?php get_search_form(); ?>
	</div><!-- .page-content -->
	</div>
</div>
	<!-- .error-404 -->

<?php
get_footer();
