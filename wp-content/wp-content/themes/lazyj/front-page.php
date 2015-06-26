<?php get_header( ); ?>
<!-- ============ slider ============ -->
<?php get_template_part('content/section', 'slider' ); ?>
<!-- ============ content ============ -->
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