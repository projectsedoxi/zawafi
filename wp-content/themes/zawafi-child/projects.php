<?php
/**
	* Template Name: Projects
	* @package WordPress
	* @subpackage zawafi
	* @since 1.0
	* @version 1.0
	*/
get_header();

?>

<div class="site-content services" >
<div class="subpage-banner">
<img src="<?php echo carbon_get_the_post_meta('projects-bannerimage');?>" width="1366" height="625" class="subpage-banner__image" />
<div class="container breadcrumbs-container">
		<div class="breadcrumbs">
				<ul class="breadcrumbs__ul">
					<li class="breadcrumbs__li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__a">Home</a></li>
					<li class="breadcrumbs__li">Projects</li>
				</ul>
		</div>
</div>
</div>

<div class="site-content__section site-content__section--first">
<div class="container">
<h1 class="h1"><?php the_title(); ?></h1>
<p class="p"><?php echo carbon_get_the_post_meta( 'projects-content' ); ?>
</p>
</div>
</div>

<div class="site-content__section project-gallery">
<div class="container project-gallery__container">

<div class="project-gallery__wrapper">
<ul class="project-gallery__ul">
  <?php
	$galleryitem = carbon_get_the_post_meta( 'galleryitem' ); 
	foreach( $galleryitem as $galleryitem ) {
	?>
	<li class="project-gallery__li">
		<h2 class="project-gallery__heading"><?php echo $galleryitem['galleryitemtitle'] ?></h2>
		<ul class="project-gallery__sub-ul">
			<?php 
			foreach ( $galleryitem['galleryimage'] as $galleryimage ) {
				?>
				<!-- <li class="project-gallery__sub-li">
				<a href="<?php echo $galleryimage['galleryimg'] ?>" data-lightbox="example-set" data-title="this is the description box" class="project-gallery__link">
					<img src="<?php echo $galleryimage['galleryimg'] ?>" alt="image" class="project-gallery__image" /></a>
				</li> -->
				<li class="project-gallery__sub-li">
				
					<img src="<?php echo $galleryimage['galleryimg'] ?>" alt="image" class="project-gallery__image" />
				</li>
			<?php
			}	
			?>
		</ul>
	</li>
	<?php
	}	
	?>
</ul>	
</div>



</div>
</div>


</div>


<?php get_footer(); ?>