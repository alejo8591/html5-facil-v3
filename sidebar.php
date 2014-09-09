<aside id="sidebar" class="medium-4 large-4 columns">
		
	  <?php if(is_single()): ?>
	  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="widget row">
        <div class="author large-12 columns">
          
          <div class="row collapse">
            <div class="medium-12 large-8 columns">
              <span>Escrito por:</span>
              <p class="show-for-medium-only"><br><img src="<?php echo get_avatar_url(get_avatar(get_the_author_meta('ID'), 112)); ?>" itemprop="image"></p>
              <h4 itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><a href="#" title="<?php the_author(); ?>" class="name"><?php the_author(); ?></a></span></h4>
              <ul class="inline-list">
                <li><a href="http://twitter.com/<?php the_author_meta('twitter'); ?>" title="Twitter" class="fi-social-twitter"></a></li>
                <li><a href="http://www.facebook.com/<?php the_author_meta('facebook'); ?>" title="Facebook" class="fi-social-facebook"></a></li>
                <li><a href="http://plus.google.com/<?php the_author_meta('plus'); ?>" title="Google+" rel="author" class="fi-social-google-plus"></a></li>
              </ul>
            </div>
            <div class="show-for-large-up large-4 columns">
              <p><img src="<?php echo get_avatar_url(get_avatar(get_the_author_meta('ID'), 112)); ?>" itemprop="image"></p>
            </div>
          </div>

          <div class="row">
            <div class="large-12 columns">
              <p>
                <?php the_author_meta('description'); ?>
              </p>
            </div>
          </div>

        </div>
      </div>
      	<?php endwhile; ?>
      	<?php endif; ?>
      <?php endif; ?>

      <!-- The most reviewed -->
      <div class="widget row">
        <div class="most-viewed large-12 columns">
          
          <div class="row">
            <div class="large-12 columns">
              <h4>Lo más visto por la comunidad</h4>
              <hr>
            </div>
          </div>

          <?php
          $args = array(
          	  'showposts'=>5,
			  'order' => 'DESC',
			  'orderby' => 'meta_value_num',
			  'meta_key' => 'post_views_count'
			);
		  $the_query = new WP_Query( $args );
          ?>
		  <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="post row" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="large-12 columns">
              <?php $url_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full'); ?>
              <a href="<?php the_permalink() ?>" class="thumb" style="background: url(<?php echo $url_img[0]; ?>) no-repeat;"></a>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <p itemprop="name"><a href="<?php the_permalink() ?>" itemprop="url" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
              <hr>
            </div>
          </div>
	      <?php endwhile; ?>
	      <?php endif; ?>

        </div>
      </div>
      <!-- End The most viewed -->

      <div class="widget show-for-medium-up row" itemscope itemtype="http://schema.org/ItemList">
        <div class="large-12 columns">
          
          <div class="row">
            <div class="large-12 columns">
              <h4 itemprop="name">Categorías</h4>
              <hr>
            </div>
          </div>

          <div class="row">
            <div class="categories large-12 columns">
              <ul>
                <li><a href="/category/tips" title="Tips" itemprop="url">Tips</a></li>
                <li><a href="/category/noticias" title="Noticias" itemprop="url">Noticias</a></li>
                <li><a href="/category/informacion" title="Información" itemprop="url">Información</a></li>
                <li><a href="/category/eventos" title="Eventos" itemprop="url">Eventos</a></li>
                <li><a href="/category/tutoriales" title="Tutoriales" itemprop="url">Tutoriales</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>

    </aside>