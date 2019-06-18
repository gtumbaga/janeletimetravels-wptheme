<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<footer id="master-footer" class="constraint">
  <div class="footer-text">
    <?php wp_footer(); ?>
    &copy; 2019 JaneleTimeTravels. All Rights Reserved. Site by <a href="https://omga.be" target="_blank">Gabe Tumbaga</a>.
    <?php //get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
    <?php
    if ( function_exists( 'the_privacy_policy_link' ) ) {
      the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
    }
    ?>
  </div>
</footer>



</body>
</html>
