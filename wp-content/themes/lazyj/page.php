

<?php get_header(); ?>

<section id="post-box">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div id="single-post">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="post-thumb">
            <img src="http://aa.heuristixdev.com/wp-content/uploads/2015/04/latest_post_img.png" alt="">
            <!-- <img src="<?php the_field('featured_image') ?>" alt=""> -->
          </div>
          <div class="post"> <!-- post -->
            <div class="title">
              <h1><?php the_title(); ?></h1>
            </div>
            <div class="content">
              <?php the_content(); ?>
            </div>
          </div>
        </div>   <!-- / post -->
        <?php endwhile; endif; ?>    
      </div>
      <div class="col-md-4">
      <!-- ============ newsletter ============ -->
        <?php get_template_part('section', 'newsletter' ); ?>
        <!-- ============ get to know ============ -->
         <?php get_template_part('section', 'gettoknow' ); ?>
        <!-- ============ top posts ============ -->
        <?php get_template_part('section', 'toppost' ); ?>
        <!-- ============ advertise with us ============ -->
        <section id="advert-with-us">
          <div class="row">
            <div class="col-md-12">
              <div class="advert-img">
                <img src="http://aa.heuristixdev.com/wp-content/uploads/2015/04/300x600-Ad.png" alt="">
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>
<!-- ============ programs ============ -->

<!-- ============ banner ad ============ -->
<!-- <section id="banner-ad">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="banner">
          <p>Banner Ad Here (Size is flexible) </p>
        </div>
      </div>
    </div>
  </div>
</section> -->
<?php get_footer(); ?>