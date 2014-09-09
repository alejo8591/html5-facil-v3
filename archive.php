<?php get_header(); ?>

  <!-- Single Post Section -->
  <section id="single-post" class="content-section row" itemscope itemtype="http://schema.org/BlogPosting">
    <div class="medium-8 large-8 columns">

      <div class="row">
      	<div class="large-12 columns">
      		<?php if (strstr($_GET['cat'],",")) { ?>
            <h3>Articulos</h3>
            <?php } elseif(is_category()) { ?>
            <h3>Categoria: <?php single_cat_title();?></h3>
            <?php } elseif( is_tag() ) { ?>
            <h3>Etiqueta: <?php single_tag_title(); ?></h3>
            <?php } ?>
      	</div>
      </div>
      
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="post-list row" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="image large-5 columns">
          <?php $url_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full'); ?>
          <div class="thumb" style="background: url(<?php echo $url_img[0]; ?>) no-repeat;">
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
      <?php endwhile; ?>
	  <div class="row">
		<div class="small-6 medium-6 large-6 columns">
			<?php previous_posts_link(" Anteriores"); ?>
		</div>
		<div class="small-6 medium-6 large-6 columns">
			<?php next_posts_link(" Siguientes"); ?>
		</div>
	  </div>
	  <?php else : ?>

	    <h2>No se econtro nada.</h2>

	  <?php endif; ?>

    </div>
    
    <?php wp_reset_query(); ?>
    <?php get_sidebar(); ?>
  </section>
  <!-- Single Post Section -->

<?php get_footer(); ?>  