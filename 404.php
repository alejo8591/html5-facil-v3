<?php get_header(); ?>

<!-- Single Post Section -->
<section id="single-post" class="content-section row" itemscope itemtype="http://schema.org/BlogPosting">
	<div class="medium-8 large-8 columns">

		<article class="row">
			<div class="large-12 columns">
				<div class="row">
					<div class="large-12 columns">
						<h2 itemprop="name">Lo que buscabas no existe</h2>
						<hr>
					</div>
				</div>

				<div class="row" itemprop="articleBody">
					<div class="large-12 columns">

						<p>
							El enlace al que deseas acceder no existe, fue eliminado por ser muy viejo ó fue mal escrito, puedes intentar acceder a nuestra portada <strong><a href="/" title="Inicio">aquí</a></strong>.
						</p>
						<p>
							También puedes realizar una búsqueda:
						</p>
						<form method="get" id="searchform" action="/buscador/" enctype="multipart/form-data">
							<div class="row collapse">
								<div class="medium-10 large-10 columns">
									<input type="hidden" name="cx" value="partner-pub-7827614471275245:p12oxci9493" />						
									<input type="hidden" name="cof" value="FORID:10" />						
									<input type="hidden" name="ie" value="ISO-8859-1" />						
									<input type="search" name="q" id="s" placeholder="¿Qué buscas?" required></div>
								<div class="medium-2 large-2 columns">
									<button type="submit" id="searchsubmit" class="button postfix fi-magnifying-glass"></button>
								</div>
							</div>
						</form>
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