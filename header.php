<?php 

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package sip-taproom
 * @since Bootstrap to WordPress 1.0
 */

// Custom Fields
$alert_bar   =  get_post_meta(18, 'alert_bar', true );





?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sip Taproom : Located in Hartwood Town Center offers a variety of locally brewed beers and hand selected wines.
  </title>
  <meta name="description"
    content="SIP Taproom located in Hartwood Town Center offers a variety of locally brewed beers and hand selected wines.">
  <meta name="author" content="Sip Taproom">

  <meta property="og:title"
    content="SIP Taproom located in Hartwood Town Center offers a variety of locally brewed beers and hand selected wines.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.siptaproom.com">
  <meta property="og:description" content="A simple HTML5 Template for new projects.">


  <?php wp_head() ?>

</head>

<body>
<div class="alert alert-primary fixed-top shadow business-alert alert-dismissible fade show" role="alert">
    <div class="container">
      <p><?php echo $alert_bar; ?></p>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg
          xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-x" viewBox="0 0 16 16">
          <path
            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
        </svg></button>
    </div>
  </div>
  <!-- ===== NAVBAR ====== -->
  <nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed-top shadow menu">
    <div class="container">              

      <a class="navbar-brand" href="#"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand/SIP.jpg' ); ?>"  alt="brand logo" id="brandLogo" class="brand-logo">
        Taproom</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#ourmenu">Menus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-sip">About SiP</a>
          </li>
          <li class="nav-item">
            <a href="#social-media" class="nav-link">Social Media</a>
          </li>
          <li class="nav-item">
            <a href="#contact-us" class="nav-link">Contact Us</a>
          </li>
        </ul>
      </div>
    </div> -->
    <?php 
    
      wp_nav_menu(
        array (
          'theme_location'    => 'primary',
          'depth'             => 3,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'menu_class'        => 'navbar-nav ms-auto mb-2 mb-lg-0',
          'fallback_cb'       => false
        )
      );
    
    ?>
</nav>