<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<div class="debug">
PAGE
</div>
<main id="content" class="site-content">
  <div class="container constraint">
    <?php if(is_front_page()): ?>
      <script>//console.log('this is the front page...');</script>
      <?php $thumbURL = get_the_post_thumbnail_url(); ?>
      <div class="front-hero">
      <div class="img-holder" style="background-image: url(<?php print $thumbURL; ?>);"></div>
        <div class="text-holder">
          <?php
            /* Start the Loop */
            while ( have_posts() ) :
              the_post();

              get_template_part( 'template-parts/content/content', 'page' );

              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) {
                comments_template();
              }

            endwhile; // End of the loop.
          ?>


        </div>
      </div>
    <?php else: ?>
      <section id="primary" class="content-area">
        <main id="main" class="site-main">

          <?php
            /* Start the Loop */
            while ( have_posts() ) :
              the_post();

              get_template_part( 'template-parts/content/content', 'page' );

              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) {
                comments_template();
              }

            endwhile; // End of the loop.
          ?>

        </main><!-- #main -->
      </section><!-- #primary -->

    <?php endif; ?>
  </div>
</main>




<?php
get_footer();
