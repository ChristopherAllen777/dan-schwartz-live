<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Harris Media Base Theme
 */

get_header('opening');
?>

<header id="masthead" class="site-header" role="banner">
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
<!--       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> -->
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <h1 style="display:none"><?php bloginfo('name'); ?></h1>
            </a>
        <div id="menu-btn"><span>Menu</span></div>
        <div id="menu-wrapper">
          <nav>
          <span id="title">Menu</span>
                    <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
            <div class="top_menu_social">
                <a href="https://www.facebook.com/DanForNevada/"><i class="fa fa-facebook fa-3" aria-hidden="true"></i></a>
                <a href="https://sites.google.com/site/hmwiki/?pli=1"><i class="fa fa-twitter fa-3" aria-hidden="true"></i></a>
            </div>
          </nav>
        </div>
    </div>
    



        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
    </div>
</nav>
</header><!-- #masthead -->

<div id="content" class="site-content">


