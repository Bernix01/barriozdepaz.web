<?php
/**
 * The header template.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
?>

<!DOCTYPE html>

<!--[if lt IE 9]>
<html id="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">


        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <!-- favicon & links -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- stylesheets are enqueued via functions.php -->

    <!-- all other scripts are enqueued via functions.php -->
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/html5shiv.js" type="text/javascript"></script>
    <![endif]-->

    <?php // Lets other plugins and files tie into our theme's <head>:
    wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		<header id="site-header" role="banner" <?php  echo is_front_page() ?  "style=\"background:url('".get_header_image()."'); height: 1000px; max-height: 100%;\"" : "style=\"background:url('".wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )['0']."'); height: 1000px; max-height: 30%;\""?>>

              <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>">
                          </a>
                  </div>

                      <?php
                          wp_nav_menu(array(
                              'menu' => 'primary',
                              'theme_location' => 'primary',
                              'depth' => 2,
                              'container' => 'div',
                              'container_class' => 'collapse navbar-collapse pull-right',
                              'container_id' => 'menu',
                              'menu_class' => 'nav navbar-nav',
                              'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                              'walker' => new wp_bootstrap_navwalker(), )
                          );
                      ?>
                  </div>
              </nav>
              <?php if (is_front_page()) {
                ?>
                <div class="banner">
                <h2><span class="wsite-text wsite-headline">
                <?php bloginfo('name'); ?>
                </span></h2>
                <p>
                <span><font size="4">Nuestra recompensa se encuentra en el esfuerzo y no en el resultado.<br>Un esfuerzo total es una victoria completa.</font></span><br><em><font size="3">- Mahatma Gandhi -</font></em>
                </span></p>
                <a class="btn btn-default" href="/quienes-somos/">
                <span >Conócenos</span>
                </a>
                </div>
                <?php
              }
               ?>

		</header><!-- #branding -->

    	<div id="page">

		<div id="main" class="row">
