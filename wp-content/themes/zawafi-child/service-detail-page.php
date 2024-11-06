<?php
/**
	* Template Name: Service Detail Page
	* @package WordPress
	* @subpackage zawafi
	* @since 1.0
	* @version 1.0
	*/
get_header();

?>

<div class="site-content service-detail-page" >

<div class="subpage-banner">
<img src="<?php echo carbon_get_the_post_meta('service-detail-page-bannerimage');?>" width="1366" height="625" class="subpage-banner__image" />
<div class="container breadcrumbs-container">
		<div class="breadcrumbs">
				<ul class="breadcrumbs__ul">
					<li class="breadcrumbs__li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__a">Home</a></li>
					<li class="breadcrumbs__li"><a href="services" class="breadcrumbs__a">Services</a></li>
					<li class="breadcrumbs__li"><?php the_title(); ?></li>
				</ul>
		</div>
</div>
</div>

<div class="site-content__section service-detail-page site-content__section--first">
	<div class="container service-detail-page__container">
	<h1 class="h1 service-detail-page__heading"><?php the_title(); ?></h1>
	<div class="service-detail-page__content">
	<div class="service-detail-page__col1">
		<img src="<?php echo carbon_get_the_post_meta('service-detail-page-image');?>" alt="" class="service-detail-page__col1-img" />
	</div>
	<div class="service-detail-page__col2">
			<?php echo carbon_get_the_post_meta('service-detail-page-content'); ?>
	</div>
	</div>
	<div class="service-detail-page__list"><?php echo carbon_get_the_post_meta( 'service-detail-page-lists' ); ?></div>
	<div class="service-detail-page__faq">
	<?php echo carbon_get_the_post_meta( 'faq' ); ?>
	</div>
	</div>
</div>


<div class="site-content__section services-list">
<div class="products-in-home__container container">
<?php
$servicecategories = carbon_get_post_meta( 10, 'servicecategories' ); 
foreach ( $servicecategories as $servicecategory ) {
?>
<a href="<?php echo $servicecategory['servicecategory-link'] ?>"  class="products-in-home__item" >
<span class="products-in-home__name-wrapper">
	<span class="products-in-home__name-text"><?php echo $servicecategory['servicecategory-title'] ?></span>
	</span>
<img src="<?php echo $servicecategory['servicecategory-image'] ?>" width="310" height="130"  class="products-in-home__image" />
</a>	
<?php
}	
?>
</div>
</div>


<?php 
include("enquiry-form.php");
?>

</div>


<?php get_footer(); ?>