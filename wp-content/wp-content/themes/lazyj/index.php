

<?php get_header(); ?>

<div id="post-box">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div id="single-post">

          <?php

            // $args = array( 'posts_per_page' => 3 );
            
            $lastposts = get_posts(  );
            
            foreach ( $lastposts as $post ) :

              setup_postdata( $post ); 
            ?>
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
            <div class="post-meta">
              <div class="post-categories">
                <?php
                  $taxonomy = 'category';

                  // get the term IDs assigned to post.
                  $post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
                  // separator between links
                  $separator = ' ';

                  if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) {

                    $term_ids = implode( ',' , $post_terms );
                    $terms = wp_list_categories( 'title_li=&style=none&echo=0&taxonomy=' . $taxonomy . '&include=' . $term_ids );
                    $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );

                    // display post categories
                    echo  $terms;
                  }
                  ?>
              </div>
            </div> 
          </div>
          <div class="author-box">
            <div class="row">
              <div class="col-md-3">
                <div class="author-img center">
                  <img src="http://aa.heuristixdev.com/wp-content/uploads/2015/05/member_aa_img.png" alt="" class="image-circle">
                </div>
              </div>
            <div class="col-md-9">
              <div class="author-meta">
                <div class="author">
                  Amanda Adams
                </div>
                <div class="title">
                  Fitness Expert
                </div>
                <div class="description">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam assumenda, placeat ad. Consequatur ipsa asperiores corporis doloremque, dolore nihil blanditiis temporibus provident perspiciatis, iste officia voluptates nulla, ex veritatis harum.
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>   <!-- / post --> 
        <div class="comment-form"> <!-- / comment form -->
         <?php if ( 'open' == $post->comment_status ) : ?>
        
        <div id="respond">
        
          <h3>Comments</h3>
        
        <?php cancel_comment_reply_link(); ?>
        
        <?php if ( get_option( 'comment_registration' ) && !$user_ID ) : ?>
        
          <p>
            You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.
          </p>
        
        <?php else : ?>
        
          <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
          
          <?php if ( $user_ID ) : ?>
          
            <p>
              Logged in as <a href="<?php echo get_option( 'siteurl' ); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Log out of this account">Log out &raquo;</a>
            </p>
          
          <?php else : ?>
          
            <p>
              <input type="text" name="author" id="author" placeholder="Name" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
              <label for="author"> <?php if ( $req ) echo "( required )"; ?></label>
            </p>
          
            <p>
              <input type="text" name="email" id="email" placeholder="E-Mail" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
              <label for="email"> </label>
            </p>
          
            <p>
              <input type="text" name="url" id="url" placeholder="Website" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
              <label for="url"></label>
            </p>
          
          <?php endif; ?>
          
            <p>
              <textarea name="comment" id="comment" cols="100%" rows="10" placeholder="Comment" tabindex="4"></textarea>
            </p>
            
            <p><input name="submit" type="submit" id="submit" tabindex="5"  value="Submit Comment" /></p>
            <?php do_action( 'comment_form', $post->ID ); comment_id_fields(); ?>
            
          </form>
        
        <?php endif; // If registration required and not logged in ?>
        </div>
        
        <?php endif; // If comments are open: delete this and the sky will fall on your head ?>
       </div> <!-- / comment form -->

      <?php endforeach; wp_reset_postdata(); ?>

      <!-- <ol id="comments" class="commentlist">
        <?php
          //Gather comments for a specific page/post 
          $args = (array(
            'post_id' => XXX,
            'status' => 'approve' //Change this to the type of comments to be displayed
          ));

          $comments = get_comments($args);
          foreach($comments as $comment) :
            echo($comment->comment_author . '<br />' . $comment->comment_content);
          endforeach;
        
        ?>
      </ol> -->
          
        </div>
      <div class="col-md-4">
      <!-- ============ newsletter ============ -->
        <section id="newsletter">
          <div class="row">
            <div class="col-md-12">
              <div class="form-box">
                <div class="form-heading">
                  <p>sign up for our free newsletter</p>
                </div>
                <div class="form">
                  <?php echo do_shortcode('[gravityform id=1 title=false description=false tabindex=49]' ); ?>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- ============ get to know ============ -->
        <section id="gettoknow">
          <div class="row">
            <div class="col-md-12">
              <div class="amanda-img" style="background-image: url(http://aa.heuristixdev.com/wp-content/uploads/2015/04/meet_amanda_img.png)">
                <div class="know-button" style="background-image: url(http://aa.heuristixdev.com/wp-content/uploads/2015/04/meet_amanda_bg.png)">
                  <a href="">Meet Amanda Adams</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- ============ Category ============ -->
        <section id="categories">
          <div class="row">
            <div class="cat-box">
              <div class="title">
                Categories
              </div>
              <div class="cats">
                <ul>  <!-- outer list -->
                  <li>
                    <ul>  <!-- inner list -->
                      <li>   
                        Business
                      </li>
                      <li class="cat-number-box-container">
                        <div class="cat-number-box">
                          <div class="cat-number">7</div>
                        </div>
                      </li>
                    </ul>  <!-- /inner list -->
                  </li>
                  <li>
                    <ul>  <!-- inner list -->
                      <li>   
                        Entertainment
                      </li>
                      <li class="cat-number-box-container">
                        <div class="cat-number-box">
                          <div class="cat-number">22</div>
                        </div>
                      </li>
                    </ul>  <!-- /inner list -->
                  </li>
                  <li>
                    <ul>  <!-- inner list -->
                      <li>   
                        Fashion
                      </li>
                      <li class="cat-number-box-container">
                        <div class="cat-number-box">
                          <div class="cat-number">100</div>
                        </div>
                      </li>
                    </ul>  <!-- /inner list -->
                  </li>
                  <li>
                    <ul>  <!-- inner list -->
                      <li>   
                        Health
                      </li>
                      <li class="cat-number-box-container">
                        <div class="cat-number-box">
                          <div class="cat-number">4</div>
                        </div>
                      </li>
                    </ul>  <!-- /inner list -->
                  </li>
                  <li>
                    <ul>  <!-- inner list -->
                      <li>   
                        Lifestyle
                      </li>
                      <li class="cat-number-box-container">
                        <div class="cat-number-box">
                          <div class="cat-number">19</div>
                        </div>
                      </li>
                    </ul>  <!-- /inner list -->
                  </li>
                  <li>
                    <ul>  <!-- inner list -->
                      <li>   
                        Photography
                      </li>
                      <li class="cat-number-box-container">
                        <div class="cat-number-box">
                          <div class="cat-number">40</div>
                        </div>
                      </li>
                    </ul>  <!-- /inner list -->
                  </li>
                  <li>
                    <ul>  <!-- inner list -->
                      <li>   
                        Sport
                      </li>
                      <li class="cat-number-box-container">
                        <div class="cat-number-box">
                          <div class="cat-number">3</div>
                        </div>
                      </li>
                    </ul>  <!-- /inner list -->
                  </li>
                  <li>
                    <ul>  <!-- inner list -->
                      <li>   
                        Technology
                      </li>
                      <li class="cat-number-box-container">
                        <div class="cat-number-box">
                          <div class="cat-number">90</div>
                        </div>
                      </li>
                    </ul>  <!-- /inner list -->
                  </li>
                  <li>
                    <ul>  <!-- inner list -->
                      <li>   
                        Travel
                      </li>
                      <li class="cat-number-box-container">
                        <div class="cat-number-box">
                          <div class="cat-number">2</div>
                        </div>
                      </li>
                    </ul>  <!-- /inner list -->
                  </li>
                </ul>   <!-- /outer list -->
              </div>
            </div>
          </div>
        </section>

        
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
</div>
<!-- ============ programs ============ -->
<section id="single-programs">
  <div class="container">
    <div class="row">
      <div class="title">
        <h2>- programs -</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="featured-product" style="background-image: url(http://aa.heuristixdev.com/wp-content/uploads/2015/04/programs_img.png);">d
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ============ banner ad ============ -->
<section id="banner-ad">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="banner">
          <p>Banner Ad Here (Size is flexible) </p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>