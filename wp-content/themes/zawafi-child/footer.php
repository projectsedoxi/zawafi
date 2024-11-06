<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Iwcone
 * @since 1.0.0
 */

?>
<footer id="site-footer" role="contentinfo" class="site-footer">
<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/footer-bg.jpg" alt="" class="site-footer__bg" width="1366" height="500">
 <div class="site-footer__container">
<div class="site-footer__col1">
<img src="<?php echo carbon_get_theme_option('brandlogo');?>" alt="" class="footer-logo" width="179" height="33">
<div class="site-footer__address-email-website">
<?php echo carbon_get_theme_option('address'); ?>
</div>
</div>
<div class="site-footer__col2">
<div class="site-footer__nav main-nav__content">
<?php echo carbon_get_theme_option('footermenus');?>
</div>
<div class="site-footer__contact-numbers contact-numbers">
    <a href="tel:0484-2626745" class="site-footer__contact-number-item contact-numbers__item">
        <img class="contact-numbers__icon" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/envelope-icon.svg" /><?php echo carbon_get_theme_option('email'); ?></a>
    <a href="tel:9847409606" class="site-footer__contact-number-item contact-numbers__item">
        <img class="contact-numbers__icon" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/telephone-icon.svg" /><?php echo carbon_get_theme_option('mobile'); ?></a>
</div>
</div>

</div>
<div class="copyright">Copyright @ <span id="copyright_year"></span>. All Rights Reserved</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
