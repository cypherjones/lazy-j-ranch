<?php get_header( ); ?>
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
</div>
<section id="wood-divider" class="divider-background" style="background-image: url('<?php bloginfo('template_directory' ); ?>/img/wood_bar_divider.png')">
</section>
<section id="content">
  <div class="promo-box">
    <div class="container">
      <div class="row front-page-cta-form" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/green_background.png')">
        <div class="col-md-3">
          <div class="connected-box">
            Stay Connected
          </div>
        </div>
        <div class="col-md-8">
          <div class="connected-form">
            <?php echo do_shortcode('[gravityform id=1 title=false description=false index=99]' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer( ); ?>