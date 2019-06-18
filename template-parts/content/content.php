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
CONTENT
</div>
<?php
  $commentsCount = get_comments_number();
?>
  <div class="constraint">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <?php
        if ( is_sticky() && is_home() && ! is_paged() ) {
          printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'twentynineteen' ) );
        }
        if ( is_singular() ) :
          the_title( '<h1 class="entry-title">', '</h1>' );
        else :
          the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
        endif;
        ?>
      </header><!-- .entry-header -->
      <footer class="entry-footer">
        <?php twentynineteen_entry_footer(); ?>
      </footer><!-- .entry-footer -->

      <?php twentynineteen_post_thumbnail(); ?>

      <div class="entry-content">
        <?php the_excerpt(); ?>
        <?php
        ?>
      </div><!-- .entry-content -->
      <div class="comments-count">
        <?php echo $commentsCount; ?> Comment<?php echo ($commentsCount == 1) ? "" : "s"; ?>
      </div>
    </article><!-- #post-<?php the_ID(); ?> -->
  </div>
