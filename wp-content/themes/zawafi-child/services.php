<?php
/**
	* Template Name: Services
	* @package WordPress
	* @subpackage zawafi
	* @since 1.0
	* @version 1.0
	*/
get_header();

?>

<div class="site-content" >

<div class="subpage-banner">
<img src="<?php echo carbon_get_the_post_meta('services-bannerimage');?>" width="1366" height="625" class="subpage-banner__image" />
<div class="breadcrumbs-container">
<div class="breadcrumbs">
				<ul class="breadcrumbs__ul">
					<li class="breadcrumbs__li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__a">Home</a></li>
					<li class="breadcrumbs__li">Services</li>
				</ul>
		</div>
</div>
</div>

<div class="site-content__section site-content__section--first">


<div class="container">
	<h1 class="h1"><?php the_title(); ?></h1>
	<p class="p"><?php echo carbon_get_the_post_meta( 'services-content' ); ?>
	</p>
</div>
</div>

<div class="site-content__section services-list">
<?php
$sectionloop = carbon_get_post_meta( 10, 'sectionloop' ); 
foreach ( $sectionloop as $sectionloop ) {
?>

<div class="site-content__section section-loop">
<div class="container section-loop__container">
<aside class="section-loop__image-block">
<img src="<?php echo $sectionloop['sectionloop-image'] ?>" width="500" height="300"  class="section-loop__image" />
</aside>
<article class="section-loop__description-block">
<h2 class="h2 section-loop__description-heading"><?php echo $sectionloop['sectionloop-title'] ?></h2>
<p class="p section-loop__description-paragraph"><?php echo $sectionloop['sectionloop-description'] ?></p>
<div class="btn-wrapper">
<a href="<?php echo $sectionloop['sectionloop-link'] ?>" class="btn btn1">More</a>
</div>
</article>
</div>
</div>

<?php
}	
?>	
</div>


</div>


<?php get_footer(); ?>