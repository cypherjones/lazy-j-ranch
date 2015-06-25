    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <?php    /**
              * Displays a navigation menu
              * @param array $args Arguments
              */
              $args = array(
                'theme_location' => 'left-nav',
                'menu' => '',
                'container' => 'div',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                'depth' => 0,
                'walker' => ''
              );
            
              wp_nav_menu( $args ); ?>
          </div>
          <div class="col-md-4">
            <div class="lazy-j-logo center">
              Lazy J Ranch
            </div>
          </div>
          <div class="col-md-4">
            <?php    /**
              * Displays a navigation menu
              * @param array $args Arguments
              */
              $args = array(
                'theme_location' => 'right-nav',
                'menu' => '',
                'container' => 'div',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                'depth' => 0,
                'walker' => ''
              );
            
              wp_nav_menu( $args ); ?>
          </div>
        </div>
      </div>
    </section>
    <script>
    $(document).ready(function(){
      $('#main-slider').slick({
        arrows: true,
        dots: true,
        speed: 300,
        slidesToShow: 1,
        cssEase: 'ease',
      });
    });
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.5/slick.min.js"></script>
	</body>
</html>