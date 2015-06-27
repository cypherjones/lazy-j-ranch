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
              <a href="<?php bloginfo( 'url' ); ?>">
                Lazy J Ranch
              </a>
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
</html>   arrows: true,
        dots: true,
        speed: 300,
        slidesToShow: 1,
        cssEase: 'ease',
      });
    });
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.5/slick.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.fancybox').fancybox({
          beforeShow: function () {
          //if you already have titles
          //on your fancybox you can append
          if(this.title) {
            //set description to current title
            //this will set what posts
            var description = this.title;
            //add pinterest button for title
            this.title = '<a href="http://pinterest.com/pin/create/button/?url=' +
              encodeURIComponent(document.location.href) +
              '&media=' +
            //put the path to the image you want to share here
            encodeURIComponent(this.href) +
              '&description=' + description + '" class="pin-it-button" count-layout="horizontal">' +
              '<img border="0" src="http://assets.pinterest.com/images/PinExt.png" title="Pin It" align="absmiddle"/></a>'
            //add title information
            + '<span>' + this.title + '</span>';
            //if you don't already have titles
            //you can just make the title the pinterest button
          }
          else {
            //add pinterest button for title
            this.title = '<a href="http://pinterest.com/pin/create/button/?url=' +
              encodeURIComponent(document.location.href) +
              '&media=' +
            //put the path to the image you want to share here
            encodeURIComponent(this.href) +
              '&description=' + description + '" class="pin-it-button" count-layout="horizontal">' +
              '<img border="0" src="http://assets.pinterest.com/images/PinExt.png" title="Pin It" align="absmiddle"/></a>';
          }
        }
        });
    });
    </script>
	</body>
</html>