<?php get_header(); ?>

  <!-- Single Post Section -->
  <section id="single-post" class="content-section row" itemscope itemtype="http://schema.org/BlogPosting">
    <div class="medium-8 large-8 columns">
      
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="row">
        <div class="large-12 columns">

          <div class="row">
            <div class="large-12 columns">
              <h2 itemprop="name"><?php the_title(); ?></h2>
              <meta itemprop="description" content="<?php echo excerpt(23); ?>">
              <hr>
            </div>
          </div>

          <div class="row">
            <div class="large-12 columns">
              <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-via="html5facil" data-lang="es">Twittear</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
              <iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;font=arial&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:100px; height:20px;"></iframe>
              <!-- Añade esta etiqueta donde quieras colocar el botón +1 -->
              <g:plusone size="medium" href="<?php the_permalink(); ?>"></g:plusone>
            </div>
          </div>

          <div class="row">
            <div class="large-12 columns">
              <p>
                <strong>

                  <span class="fi-calendar">&nbsp;</span>
                  Publicado hace <time datetime="<?php the_time('Y-m-d'); ?>" itemprop="datePublished">
                  <?php
                  //$time_difference = current_time('timestamp') - get_the_time('U');
                  
                  the_time();
                  /*if($time_difference <86400) {
                    the_time();
                  }else {
                    the_date();
                  }*/
                  ?>
                  </time>
                </strong> | 
                <span class="fi-price-tag">&nbsp;</span><span itemprop="keywords"><?php the_tags( 'Etiquetas: ', ', ', ''); ?></span></p>
              </p>
            </div>
          </div>

          <div class="row" itemprop="articleBody">
            <div class="large-12 columns">

              <?php if( stristr($_SERVER['HTTP_REFERER'], "http://html5facil.com") == false && !empty( $_SERVER['HTTP_REFERER'] ) ){ ?>
              <div class="ads-content show-for-large-up">
                <script type="text/javascript"><!--
                google_ad_client = "pub-7827614471275245";
                /* Html5 Facil1 */
                google_ad_slot = "0819534183";
                google_ad_width = 300;
                google_ad_height = 250;
                //-->
                </script>
                <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
              </div>
              <?php } ?>

              <?php the_content(); ?>
              
              <?php if( stristr($_SERVER['HTTP_REFERER'], "http://html5facil.com") == false && !empty( $_SERVER['HTTP_REFERER'] ) ){ ?>
              <div class="ads-content show-for-large-up">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- HTML5 Fácil 2 -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:728px;height:90px"
                     data-ad-client="ca-pub-7827614471275245"
                     data-ad-slot="5370341186"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
              </div>
              <?php } ?>

            </div>
            
          </div>
        </div>
      </article>
      <?php endwhile; ?>
      <?php endif; ?>

      <div id="recommend" class="show-for-medium-up row">
        <div class="large-12 columns">

          <div class="row">
            <div class="large-12 columns">
              <hr>
              <h3>Te recomendamos:</h3>
            </div>
          </div>
          <?php
          $cats = get_the_category( $post->ID );
          if ($cats) {
            $first_cat = $cats[0]->cat_ID;;

            $args = array(
              '$first_cat' => get_the_tag_list(),
              'post__not_in' => array($post->ID),
              'showposts' => 4,
              'caller_get_posts' => 1
            );

            $my_query = new WP_Query($args);
          ?>
          <div class="posts row">
            <?php
            if( $my_query->have_posts() ) {
              $i = 1;
              while ($my_query->have_posts()) : $my_query->the_post();
                if($i%2 != 0){
            ?>
            <div class="medium-6 large-6 columns" itemscope itemtype="http://schema.org/BlogPosting">

              <div class="row">
                <div class="large-4 columns">
                   <?php $url_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full'); ?>
                  <a href="#" class="thumb" style="background: url(<?php echo $url_img[0]; ?>) no-repeat;"></a>
                </div>
                <div class="large-8 columns">
                  <p itemprop="name"><a href="<?php the_permalink() ?>" itemprop="url" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
                  <meta itemprop="description" content="<?php echo excerpt(23); ?>">
                </div>
              </div>
            
            </div>
            <?php
                }
                $i++;
              endwhile;
            }
            ?>
          </div>

          <div class="posts row">
            <?php wp_reset_query(); ?>
            <?php
            if( $my_query->have_posts() ) {
              $i = 1;
              while ($my_query->have_posts()) : $my_query->the_post();
                if($i%2 == 0){
            ?>
            <div class="medium-6 large-6 columns" itemscope itemtype="http://schema.org/BlogPosting">

              <div class="row">
                <div class="large-4 columns">
                   <?php $url_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full'); ?>
                  <a href="#" class="thumb" style="background: url(<?php echo $url_img[0]; ?>) no-repeat;"></a>
                </div>
                <div class="large-8 columns">
                  <p itemprop="name"><a href="<?php the_permalink() ?>" itemprop="url" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
                  <meta itemprop="description" content="<?php echo excerpt(23); ?>">
                </div>
              </div>
            
            </div>
            <?php
                }
                $i++;
              endwhile;
            }
            ?>
          </div>
          <?php
          }
          ?>

        </div>
      </div>
      
      <?php comments_template(); ?>

    </div>
    
    <?php wp_reset_query(); ?>
    <?php get_sidebar(); ?>
  </section>
  <!-- Single Post Section -->
  
<?php get_footer(); ?>  