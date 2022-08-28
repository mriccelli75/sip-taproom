<?php 
    /**
     * Intro Section
     * @package sip-taproom 
     * @since 1.0
     */
?>
<?php 
   
   $blog_info     = get_bloginfo('name');
   $description   = get_bloginfo('description', 'display');
?>

<!-- ===== INTRO SECTION ====== -->
<section id="home" class="intro-section">
    <div class="container">
      <div class="row align-items-center text-white">
        <div class="col-md-6 intros">
          <h1 class="display-2">
            <span class="display-2--intro"><?php echo esc_html($blog_info); ?></span>
            <span class="display-2--description lh-base"><?php echo esc_html($description); ?></span>
          </h1>
          <img src="images/hops.svg" alt="" class="hop-art">
        </div>
        <!-- START THE CONTENT FOR PHOTO -->
        <div class="col-md-6 intros text-end">
          <div class="intro-box">
            <div class="intro-img-box">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bar_photos/camera_bar_shot.jpg' ); ?>" alt="bar photo" class="img-fluid shadow">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>