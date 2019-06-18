<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<div class="debug">
CONTENT-SINGLE
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
  <header class="entry-header">
    <?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
  </header>
  <?php endif; ?>
  <?php if(get_post_type() != 'film'): ?>
    <h1><?php the_title(); ?></h1>
    <div class="date-holder">
      <?php the_date(); ?>
    </div>
  <?php endif; ?>
  <div class="entry-content">
    <?php
    the_content(
      sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        get_the_title()
      )
    );

    ?>
  </div><!-- .entry-content -->


  <?php if ( ! is_singular( 'attachment' ) ) : ?>
    <?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
  <?php endif; ?>
  <?php if (get_post_type() == 'film'): ?>
    <div class="title-holder"><h1><?php echo get_the_title(); ?></h1></div>
    <div class="desc-holder"><?php echo get_the_excerpt(); ?></div>
  <?php endif; ?>
  
  
</article><!-- #post-<?php the_ID(); ?> -->
