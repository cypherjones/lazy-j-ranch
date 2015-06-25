

<?php get_header(); ?>

<section id="post-box">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div id="single-post">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="post"> <!-- post -->
            <div class="title">
              <h1><?php the_title(); ?></h1>
            </div>
            <div class="content">
              <?php the_content(); ?>
            </div>
            <div class="post-meta">
              <div class="post-categories">
                <ul>
                <li>CATEGORY</li>
                <?php
                  $posttags = get_the_tags();
                  $postlink = get_permalink( );
                  $image  = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
                  if ($posttags) {
                    foreach($posttags as $tag) { ?>
                    <li><a href="<?php echo get_tag_link($tag); ?>"><?php echo $tag->name ; ?></a></li>
                    <?php }
                  }
                ?> 
                </ul>
              </div>
            </div>
          </div>
          <div class="author-box">
            <div class="row">
              <div class="social-box">
                <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" data-link="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook." class="js-social-share"><div class="col-xs-3 col-sm-3 col-md-3 facebook-box center">
                  <i class="fa fa-facebook-square" ></i>  <?php //echo $facebook_like_share_count($postlink); ?>
                </div>
                </a>
                <a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>" class="js-social-share">
                  <div class="col-xs-3 col-sm-3 col-md-3 pinterest-box center">
                    <i class="fa fa-pinterest"></i> <?php //echo $pinterest_pins($postlink) ?>
                  </div>
                </a>
                <a href="http://twitter.com/share?original_referer=/&amp;text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Tweet this!" class="js-social-share">
                  <div class="col-xs-3 col-sm-3 col-md-3 twitter-box center">
                    <i class="fa fa-twitter-square"></i> <?php //echo $twitter_tweet_count($postlink) ?>
                  </div>
                </a>
                <a href="mailto:youremail@example.com?subject=I wanted to share this post with you from <?php bloginfo('name'); ?>&amp;body=<?php the_title('','',true); ?>&#32;&#32;<?php the_permalink(); ?>" title="Email to a friend/colleague" target="_top">
                  <div class="col-xs-3 col-sm-3 col-md-3 email-box center">
                      <i class="fa fa-envelope-o"></i> <span>Email</span>                
                  </div>
                </a>
              </div>
            </div>
            <?php 

              $author_id = get_the_author_meta('ID');
              $author_image = get_field('contributor_image', 'user_'. $author_id );
              $bio =  get_the_author_meta('description' );
              $title = get_field('contributor_title', 'user_'. $author_id);

             ?>
            <div class="row">
              <div class="col-xs-12 col-md-3">
                <div class="author-img center">
                  <img src="<?php echo $author_image; ?>" alt="" class="img-circle">
                </div>
              </div>
            <div class="col-xs-12 col-md-9">
              <div class="author-meta">
                <div class="author">
                  <?php the_author( ); ?>
                </div>
                <div class="title">
                  <?php echo $title; ?>
                </div>
                <div class="description">
                  <?php echo $bio;?>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>   <!-- / post --> 
      
      <?php endwhile; endif; wp_reset_postdata(); ?>
        <div class="related-posts">
          <?php get_template_part('section', 'relatedposts' ); ?>
        </div>
        <!-- ============ banner ad ============ -->
        <?php //get_template_part('section','postad' ); ?>
      </div>
      <div class="col-md-4">
      <!-- ============ newsletter ============ -->
        <?php get_template_part('section', 'newsletter' ); ?>
        <!-- ============ get to know ============ -->
        <?php get_template_part('section','gettoknow' ); ?>
        <!-- ============ Top Posts ============ -->
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

<?php get_footer(); ?>