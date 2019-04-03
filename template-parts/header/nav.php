<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
  <label id="btn-main-nav-toggle" for="menu-toggler">
    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14 fa-3x"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg>
  </label>
  <input type="checkbox" id="menu-toggler" name="menu-toggler">
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
