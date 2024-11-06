<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage zawafi
 * @since Twenty Twenty-One 1.0
 */

?>
<?php echo '<div class="blog-detail-page">'; ?>
<div class="blog-detail-page__banner">
<img class="blog-detail-page__banner-image" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/blog-header-bg.jpg" />
</div>

<?php echo '<div class="blog-detail-page__container container">'; ?>
<div class="container blog-detail-page__breadcrumbs-container">
		<div class="breadcrumbs">
				<ul class="breadcrumbs__ul">
					<li class="breadcrumbs__li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__a">Home</a></li>
					<li class="breadcrumbs__li"><a href="blogs" class="breadcrumbs__a">Blogs</a></li>
					<li class="breadcrumbs__li"><?php the_title(); ?></li>
				</ul>
		</div>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'zawafi' ) . '">',
				'after'    => '</nav>',
				/* translators: %: page number. */
				'pagelink' => esc_html__( 'Page %', 'zawafi' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article>
</div>
<!-- #post-<?php the_ID(); ?> -->
<?php echo '</div>'; ?>
<?php echo '</div>'; ?>