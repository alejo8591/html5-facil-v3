<?php get_header(); ?>

<!-- Single Post Section -->
<section id="single-post" class="content-section row" itemscope itemtype="http://schema.org/BlogPosting">
	<div class="medium-8 large-8 columns">

		<article class="row">
			<div class="large-12 columns">
				<div class="row">
					<div class="large-12 columns">
						<h2 itemprop="name">Resultados para: <?php echo $_GET['q']; ?></h2>
						<hr>
					</div>
				</div>

				<div class="row" itemprop="articleBody">
					<div class="large-12 columns">

						<script>
						  (function() {
						    var cx = 'partner-pub-7827614471275245:p12oxci9493';
						    var gcse = document.createElement('script');
						    gcse.type = 'text/javascript';
						    gcse.async = true;
						    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
						        '//www.google.com/cse/cse.js?cx=' + cx;
						    var s = document.getElementsByTagName('script')[0];
						    s.parentNode.insertBefore(gcse, s);
						  })();
						</script>
						<gcse:searchresults-only></gcse:searchresults-only>
					</div>
				</div>
			</div>
		</article>

		<?php wp_reset_query(); ?>
	</div>
	<?php get_sidebar(); ?>
</section>
<!-- Single Post Section -->

<?php get_footer(); ?>