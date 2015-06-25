<?php 
global $paged,$wp_query;
get_header(); 
?>

<section id="post-box">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div id="single-post">
        <?php
          $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
          $args = array(
              'paged' => $paged,
              'posts_per_page' => 8,
            );
          
          $wpex_query = new WP_Query( $args );

          

          if (have_posts()) : while (have_posts()) : the_post();

          $title   = get_the_title();
          $author  = get_the_author();
          $content = get_the_content();
          $category = get_the_category( $the_post->ID);
          $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );

          ?>
          <div class="post"> <!-- post -->
            <div class="thumb">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( ); ?>
              </a>
            </div>
            <div class="title">
              <a href="<?php the_permalink(); ?>">
                <h1><?php echo $title; ?></h1>
              </a>
            </div>
            <div class="content">
              <?php echo wp_trim_words($content, 55 ); ?>
              <div class="readon mobile">
                <a href="<?php echo the_permalink(); ?>">Continue Reading <i class="fa fa-long-arrow-right"></i> </a>
              </div>
            </div>
            <div class="row">
              <div class="single-post-meta">
                <div class="col-md-8">
                  <div class="quick-post-meta">
                    <ul>
                      <li class="category">
                        <?php
                        $posttags = get_the_tags();
                        $count=0;
                        if ($posttags) {
                          foreach($posttags as $tag) {
                            $count++;
                            if (1 == $count) {
                              echo $tag->name . ' ';
                            }
                          }
                        }
                      ?>
                      </li>
                      <li class="author">
                        by <?php the_author( ); ?>    
                      </li>
                    </ul>
                  </div>
                  <?php get_template_part('section','social' ); ?>
                </div>
                <div class="col-md-4">
                  <div class="readon">
                    <a href="<?php echo the_permalink(); ?>">Continue Reading <i class="fa fa-long-arrow-right"></i> </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; endif; 
          wp_reset_postdata();?>
          <div class="paging">
            <div id="pagination">
            <?php
              if ( function_exists('wp_bootstrap_pagination') )
                wp_bootstrap_pagination($wpex_query);
            ?>

          </div>
          </div>
        </div>       
      </div>
      <div class="col-md-4">
      <!-- ============ newsletter ============ -->
        <?php get_template_part('section', 'newsletter' ); ?>
        <!-- ============ get to know ============ -->
        <?php get_template_part('section', 'gettoknow' ); ?>
        <!-- ============ Category ============ -->
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
<div class="program desktop">
  <?php get_template_part('ad','program' ); ?>
</div>
<div class="program mobile">
  <?php get_template_part('ad','programmobile' ); ?>
</div>
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