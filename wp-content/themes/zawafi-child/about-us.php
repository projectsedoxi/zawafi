<?php
/**
	* Template Name: About Us
	* @package WordPress
	* @subpackage KFA
	* @since 1.0
	* @version 1.0
	*/
get_header();

?>

<div class="site-content" >

<div class="subpage-banner">
<img src="<?php echo carbon_get_the_post_meta('aboutus-bannerimage');?>" width="1366" height="625" class="subpage-banner__image" />
<div class="container breadcrumbs-container">
		<div class="breadcrumbs">
				<ul class="breadcrumbs__ul">
					<li class="breadcrumbs__li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__a">Home</a></li>
					<li class="breadcrumbs__li">About Us</li>
				</ul>
		</div>
</div>
</div>

<div class="site-content__section site-content__section--first">




	<div class="container">
	<h1 class="h1"><?php the_title(); ?></h1>
	<p class="p"><?php echo carbon_get_the_post_meta( 'aboutus-content' ); ?>
</p>
	</div>
</div>


<?php
$aboutsectionloop = carbon_get_the_post_meta( 'aboutsectionloop' ); 
foreach ( $aboutsectionloop as $aboutsectionloop ) {
?>

<div class="site-content__section about-sections section-loop">
<div class="container section-loop__container">
<aside class="section-loop__image-block">
<img src="<?php echo $aboutsectionloop['aboutsectionloop-image'] ?>" width="500" height="300"  class="about-sections__image" />
</aside>
<article class="section-loop__description-block">
<h2 class="h2 section-loop__description-heading"><?php echo $aboutsectionloop['aboutsectionloop-title'] ?></h2>
<p class="p section-loop__description-paragraph"><?php echo $aboutsectionloop['aboutsectionloop-description'] ?></p>
<div class="btn-wrapper">
<!-- <a href="<?php echo $aboutsectionloop['aboutsectionloop-link'] ?>" class="btn btn--one">More</a> -->
</div>
</article>
</div>
</div>

<?php
}	
?>


</div>


<?php get_footer(); ?>