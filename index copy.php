<?php get_header(); ?>

<!-- Tutorials Section -->
  <section id="tutorials-section" class="row collapse">
    <div class="large-12 columns">
      <ul class="example-orbit" data-orbit>
        <?php query_posts('cat=4&showposts=6'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $url_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full'); ?>
        <li style="background: url(<?php echo $url_img[0]; ?>) no-repeat;" itemscope itemtype="http://schema.org/BlogPosting">
          <meta itemprop="image" content="<?php echo $url_img[0]; ?>" />
          <div class="container row">
            <div class="caption small-12 medium-9 large-6 columns">

              <h2 itemprop="name"><?php the_title(); ?></h2>
              <p class="show-for-medium-up" itemprop="description">
                <?php echo excerpt(25); ?>
              </p>
              <p class="show-for-small-only" itemprop="description">
                <?php echo excerpt(15); ?>
              </p>
              <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="button" itemprop="url">Ir al tutorial</a>
              <meta itemprop="description" content="<?php echo excerpt(30); ?>">
            </div>
          </div>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
  </section>
  <!-- End Tutorials Section -->

  <!-- Section Posts -->
  <section id="posts-section" class="content-section row collapse">
    <div class="large-12 columns">

      <!-- Last Tips -->
      <div class="title-section row">
        <div class="small-12 medium-centered large-centered columns">
          <h3 class="text-center">Últimos Tips</h3>
        </div>
      </div>

      <div class="row">
        <div class="medium-6 large-6 columns">
          
          <?php query_posts('cat=5&showposts=4'); ?>
          <?php 
          $i = 1;
          if (have_posts()) : while (have_posts()) : the_post(); 
            if($i%2 != 0){
          ?>
          <article class="post row" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="image large-5 columns">
              <?php $url_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full'); ?>
              <div style="background: url(<?php echo $url_img[0]; ?>) no-repeat;">
                <meta itemprop="image" content="<?php echo $url_img; ?>" />
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="button tiny">Ver</a>
              </div>
            </div>
            <div class="text large-7 columns">
              <h4 itemprop="name"><a href="<?php the_permalink() ?>" itemprop="url"><?php the_title(); ?></a></h4>
              <p itemprop="description">
                <?php echo excerpt(23); ?>
              </p>
              <meta itemprop="description" content="<?php echo excerpt(35); ?>">
            </div>
          </article>
          <?php
            }
            $i++;
          endwhile;
          ?>
          <?php endif; ?>

        </div>
        <div class="medium-6 large-6 columns">

          <?php query_posts('cat=5&showposts=4'); ?>
          <?php 
          $i = 1;
          if (have_posts()) : while (have_posts()) : the_post(); 
            if($i%2 == 0){
          ?>
          <article class="post row" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="image large-5 columns">
              <?php $url_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full'); ?>
              <div style="background: url(<?php echo $url_img[0]; ?>) no-repeat;">
                <meta itemprop="image" content="<?php echo $url_img; ?>" />
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="button tiny">Ver</a>
              </div>
            </div>
            <div class="text large-7 columns">
              <h4 itemprop="name"><a href="<?php the_permalink() ?>" itemprop="url"><?php the_title(); ?></a></h4>
              <p itemprop="description">
                <?php echo excerpt(23); ?>
              </p>
              <meta itemprop="description" content="<?php echo excerpt(35); ?>">
            </div>
          </article>
          <?php
            }
            $i++;
          endwhile;
          ?>
          <?php endif; ?>

        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <a href="/category/tips" class="button small expand" title="Ver Más">Ver más</a>
        </div>
      </div>
      <!-- End Last Tips -->


      <!-- Notices and Information -->
      <div class="title-section row">
        <div class="small-12 medium-6 medium-centered large-centered columns">
          <h3 class="text-center">Noticias e Información</h3>
        </div>
      </div>

      <div class="row">
        <div class="medium-6 large-6 columns">

          <?php query_posts('cat=6,7&showposts=4'); ?>
          <?php 
          $i = 1;
          if (have_posts()) : while (have_posts()) : the_post(); 
            if($i%2 != 0){
          ?>
          <article class="post row" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="image large-5 columns">
              <?php $url_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full'); ?>
              <div style="background: url(<?php echo $url_img[0]; ?>) no-repeat;">
                <meta itemprop="image" content="<?php echo $url_img; ?>" />
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="button tiny">Ver</a>
              </div>
            </div>
            <div class="text large-7 columns">
              <h4 itemprop="name"><a href="<?php the_permalink() ?>" itemprop="url"><?php the_title(); ?></a></h4>
              <p itemprop="description">
                <?php echo excerpt(23); ?>
              </p>
              <meta itemprop="description" content="<?php echo excerpt(35); ?>">
            </div>
          </article>
          <?php
            }
            $i++;
          endwhile;
          ?>
          <?php endif; ?>

        </div>
        <div class="medium-6 large-6 columns">

          <?php query_posts('cat=6,7&showposts=4'); ?>
          <?php 
          $i = 1;
          if (have_posts()) : while (have_posts()) : the_post(); 
            if($i%2 == 0){
          ?>
          <article class="post row" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="image large-5 columns">
              <?php $url_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full'); ?>
              <div style="background: url(<?php echo $url_img[0]; ?>) no-repeat;">
                <meta itemprop="image" content="<?php echo $url_img; ?>" />
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="button tiny">Ver</a>
              </div>
            </div>
            <div class="text large-7 columns">
              <h4 itemprop="name"><a href="<?php the_permalink() ?>" itemprop="url"><?php the_title(); ?></a></h4>
              <p itemprop="description">
                <?php echo excerpt(23); ?>
              </p>
              <meta itemprop="description" content="<?php echo excerpt(35); ?>">
            </div>
          </article>
          <?php
            }
            $i++;
          endwhile;
          ?>
          <?php endif; ?>

        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <a href="/category/noticias,informacion/" class="button small expand" title="Ver más">Ver más</a>
        </div>
      </div>
      <!-- End News and Information -->

    </div>
  </section>
  <!-- End Posts Section -->

<?php get_footer(); ?>  