<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Museum_Ground
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'museumground' ); ?></a>

      <header id="masthead" class="site-header">
        <div class="container">
          <div class="site-branding">
            <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) :
              ?>
              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php
              else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
              endif;
              $museum_ground_description = get_bloginfo( 'description', 'display' );
              if ( $museum_ground_description || is_customize_preview() ) :
                ?>
                <p class="site-description"><?php echo $museum_ground_description; /* WPCS: xss ok. */ ?></p>
              <?php endif; ?>
            </div><!-- .site-branding -->

            <!-- #site-navigation -->
            <nav class="navbar navbar-default" role="navigation">
              <div class="nav-wrapper">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#mg-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span id="bar1" class="icon-bar"></span>
                  <span id="bar2" class="icon-bar"></span>
                  <span id="bar3" class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse menu-primary" id="mg-navbar-collapse-1">
                  <?php
                  wp_nav_menu( array(
                    'menu'           	=> '',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => '',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'mg-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                  );
                  ?>
                  <div class="menu-overlay"></div>
                </div><!-- navbar-colapse -->
              </div><!-- .row -->
            </nav>
          </div><!-- .container -->
        </header><!-- #masthead -->


        <div id="content" class="site-content">
