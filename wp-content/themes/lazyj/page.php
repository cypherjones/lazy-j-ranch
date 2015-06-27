<?php get_header(); ?>
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="welcome">
            <h1>
              Welcome to the Lazy J
            </h1>
          </div>
          <div class="welcome content">
            
          </div>
        </div>
        <div class="col-md-3">
          
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>rt('content/page', 'lodging' );

elseif (is_page( $gallery )) :

  // get the slider for all pages
  get_template_part('content/section', 'slider' );

  get_template_part('content/page', 'gallery' );

elseif (is_page( )) :

  // get the slider for all pages
  get_template_part('content/section', 'slider' ); ?>

  <!-- page content here -->
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section id="about" class="content">
    <div class="container">
      <div class="row">
      <!-- left column -->
        <div class="col-md-8">
          <!-- left column title -->
          <div class="row">
            <div class="col-md-12">
              <div class="main-heading">
                <h1>
                  Welcome to the Lazy J
                </h1>
              </div>
            </div>
          </div>
          <!-- left column content -->
          <div class="row">
            <div class="main-content">
              <div class="col-md-12">
                <?php the_content( ); ?>
              </div>
            </div>
          </div>
        </div>
        <!-- right column -->
        <div class="col-md-4">
          <div class="sub-content-right">
            <div class="row">
              <div class="col-md-12">
                <div class="sub-content-title">
                  <h3>
                    NON DIGNISSIM PORTA
                  </h3>
                </div>
                <div class="sub-content-copy">
                  <p>
                    Donec facilisis tortor ut augue lacinia, at viverra est semper. Sed sapien metus, scelerisque nec pharetra id, tempor a tortor. Pellentesque non dignissim neque. Ut porta viverra est, ut dignissim elit elementum ut.
                  </p>
                </div>
                <div class="stay-connected">
                  <div class="stay-connected-title text-center">
                    <h3>
                      Stay Connected
                    </h3>
                  </div>
                  <div class="stay-connected-form text-center">
                    <?php echo do_shortcode('[gravityform id=1 title=false description=false index=109]' ); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="faqs">
                  <h4>
                    LAZY J RANCH FAQ’S
                  </h4>
                  <ul>
                    <li>
                      Q: Donec facilisis tortor ut augue lacinia, at viverra est semper?
                    </li>
                    <li>
                      A: Donec facilisis tortor ut augue lacinia, at viverra est semper?
                    </li>
                    <li>
                      Q: Donec facilisis tortor ut augue lacinia, at viverra est semper?
                    </li>
                    <li>
                      A: Donec facilisis tortor ut augue lacinia, at viverra est semper?
                    </li>
                    <li>
                      Q: Donec facilisis tortor ut augue lacinia, at viverra est semper?
                    </li>
                    <li>
                      A: Donec facilisis tortor ut augue lacinia, at viverra est semper?
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php 

  endwhile; endif;  

  endif;

// get the by cta
get_template_part('content/section', 'buy-cta' );

get_footer(); 

?>