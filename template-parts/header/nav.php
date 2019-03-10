<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
  <nav id="site-navigation" class="gitm main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'menu-1',
        'menu_class'     => 'main-menu',
        'items_wrap'     => '<ul>%3$s</ul>',
      )
    );
    ?>
  </nav><!-- #site-navigation -->
<?php endif; ?>
