<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '-', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="page" class="hfeed site">

      <header id="masthead" class="site-header">

          <!--  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> -->

        <nav id="site-navigation" class="site-navigation ">
          <div id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/egiis/logo_egiis.jpg" alt="logo"></a></div>
          <button id="responsive-menu-toggle"><?php _e( '', 'voidx' ); ?></button>
          <div id="responsive-menu"><?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_id' => 'menu-header', 'menu_class' => 'menu-inline' ) ); ?></div>
          <?php $my_title = new WP_Query(array('post_type' => 'divers', 'meta_key' => 'id', 'meta_value' => 'btn_switch_language'));?>
            <?php while ($my_title->have_posts()) : $my_title->the_post(); ?>
              <div id="lang"><a href="<?php echo esc_url( site_url() ); the_field('link'); ?>"><?php the_title(); ?></a></div>
              <?php endwhile; ?>
        </nav>
      </header>

    <div id="wrap-main" class="wrap-main">
