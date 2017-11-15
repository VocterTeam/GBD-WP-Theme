<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta content="" name="description">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
  <header class="header">
    <div class="container-fluid">

      <a href="<?php echo get_site_url(); ?>" class="header__logo">
        <?php echo file_get_contents( get_field('logo_header', 'option') ); ?>
      </a>

      <button class="header__menu-button js-header-menu-button">
        <span class="icon-bar">
          <span class="icon-bar__line icon-bar__line1"></span>
          <span class="icon-bar__line icon-bar__line2"></span>
          <span class="icon-bar__line icon-bar__line3"></span>
        </span>
      </button>

      <?php wp_nav_menu( array(
        'theme_location'  => 'header',
        'fallback_cb'     => '__return_empty_string',
        'container'       => '', 
        'menu_class'      => 'header__menu', 
        'menu_id'         => '', 
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      ) );  ?>

      <div class="header__lang js-lang">
        <div class="header__lang-head"></div>
        <?php echo gbd_switcher_languages(); ?>
      </div>

    </div>
  </header>