<?php 
    // grab the slider elements from the front page
  $args = array(
    //Post & Page Parameters
    'post_type'    => 'page',
    'pagename'     => 'home'
  );
  
  query_posts( $args );
  // start the loop
  if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!-- Slider starts here -->
   <div id="main-slider" class="m-slider">
    <?php 
      
      if (have_rows('fp_slider_elements')) : 
        while (have_rows('fp_slider_elements')) : 
          the_row(); 
    ?>

      <section class="slider-background" style="background-image: url('<?php the_sub_field('fp_slider_image') ?>');">
        <div class="main-slider-content-box">
          <div class="main-slider-title">
            <?php the_sub_field('fp_slider_title_text') ?>
          </div>
          <div class="main-slider-cta-box btn">
            <a href="<?php the_sub_field('fp_slider_cta_link') ?>">
              <?php the_sub_field('fp_slider_cta_text') ?> <i class="fa fa-angle-right"></i>
            </a>
          </div>
        </div>
      </section>

    <?php endwhile; endif; ?>
  </div> <!-- / slider -->
  <section id="wood-divider" class="divider-background" style="background-image: url('<?php bloginfo('template_directory' ); ?>/img/wood_bar_divider.png')">
  </section>
<?php endwhile; endif; ?>