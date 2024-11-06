<?php
/**
 * Header file for the Iwcone WordPress default theme.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Iwcone
 * @since 1.0.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php  wp_head(); ?>
<meta name="google-site-verification" content="mm_RxP0_cTk6GnqYvfU2D-7M3giLvkA9bsIIqrS9cps" />
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-W8JXVERWGM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-W8JXVERWGM');
</script>
</head>
<body <?php body_class() ?>>
<?php wp_body_open(); ?>
<div class="site-preloader1"></div>
<header class="site-header">
    <div class="site-header__container">
        <div class="site-header__logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo-link">
            <img src="<?php echo carbon_get_theme_option('brandlogo');?>" width="231" height="62" class="site-header__logo-img" /></a>
        </div>
        <div class="main-nav main-nav--one">
<!-- Navigation Trigger -->
<div class="main-nav__trigger">
                <div class="main-nav__trigger-item"></div>
            </div>

<!-- Navigation Content -->
<div class="main-nav__content">
<?php wp_nav_menu(array(
 'menu'=>'' ,
 'container' => 'ul',
 'menu_class'=> 'main-nav__ul',
 'add_a_class'     => 'main-nav__link',
 'theme_location'  => 'primary')
 );
?>
</div>

</div>
<div class="contact-numbers">
    <a href="tel:0484-2626745" class="contact-numbers__item"><img class="contact-numbers__icon" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/telephone-icon.svg" /><?php echo carbon_get_theme_option('mobile'); ?></a>
</div>
    </div>
</header><!-- #site-header -->
<?php
// Output the menu modal.
