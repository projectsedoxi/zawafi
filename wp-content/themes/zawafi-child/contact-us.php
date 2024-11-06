<?php
/**
	* Template Name: Contact Us
	* @package WordPress
	* @subpackage KFA
	* @since 1.0
	* @version 1.0
	*/
get_header();

?>

<div class="site-content contact-us" >

<div class="subpage-banner">
<img src="<?php echo carbon_get_the_post_meta('contact-us-bannerimage');?>" width="1366" height="625" class="subpage-banner__image" />
<div class="container breadcrumbs-container">
		<div class="breadcrumbs">
				<ul class="breadcrumbs__ul">
					<li class="breadcrumbs__li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__a">Home</a></li>
					<li class="breadcrumbs__li">Contact Us</li>
				</ul>
		</div>
</div>
</div>

<div class="site-content__section site-content__section--first">
	<div class="container">
	<h1 class="h1" style="padding:0;"><?php the_title(); ?></h1>
	</div>
</div>


<div class="site-content__section site-content__section--contact">
<div class="container">
<div class="contact-blocks">
	<div class="contact-blocks__col1">
		<p class="p"><?php echo carbon_get_theme_option('address'); ?></p>
		
<p class="p"><a class="site-footer__website" href="<?php echo carbon_get_theme_option('website'); ?>" target="_blank"><?php echo carbon_get_theme_option('website'); ?></a>
</p>
	</div>
	<div class="contact-blocks__col2">
	<div class="contact-blocks__numbers">
    <a class="site-footer__email" href="mailto:<?php echo carbon_get_theme_option('email'); ?>"><img class="contact-numbers__icon" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/envelope-icon.svg" /><?php echo carbon_get_theme_option('email'); ?></a>

    <a href="tel:9847409606"  class="contact-blocks__number"><img class="contact-numbers__icon" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/telephone-icon.svg" /><?php echo carbon_get_theme_option('mobile'); ?></a>
</div>
	</div>
</div>



<!-- <div class="contact-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d15711.11140287814!2d76.3353245488674!3d10.11726165598096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d10.1173101!2d76.3289937!4m5!1s0x3b080f2a3a17997f%3A0xdf91fadc0f786b5b!2sthe%20curtain%20shoppe%20aluva!3m2!1d10.109548!2d76.3589875!5e0!3m2!1sen!2sin!4v1647942554219!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div> -->
</div>
</div>



<div class="site-content__section contact-form">
<?php 
include("enquiry-form.php");
?>
</div>



</div>





<?php get_footer(); ?>