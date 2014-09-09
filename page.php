<?php get_header(); ?>

  <!-- Single Post Section -->
  <section id="single-post" class="content-section row" itemscope itemtype="http://schema.org/BlogPosting">
    <div class="large-8 columns">
      
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

          <div class="row" itemprop="articleBody">
            <div class="large-12 columns">
              <div class="ads-content">
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

              <?php the_content(); ?>

            </div>
            
          </div>
        </div>
      </article>
      <?php endwhile; ?>
      <?php endif; ?>
      
      <?php comments_template(); ?>

    </div>
    
    <?php wp_reset_query(); ?>
    <?php get_sidebar(); ?>
  </section>
  <!-- Single Post Section -->

<?php get_footer(); ?>  