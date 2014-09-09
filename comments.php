
  <!-- Commnets -->
  <div class="comments row">
    <div class="medium-12 large-12 columns">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'html5facil'; // required: replace example with your forum shortname
            var disqus_title = '<?php the_title(); ?>';
            var disqus_url = '<?php the_permalink(); ?>';
            var disqus_identifier = 'html5facil-<?php echo $post->ID ?>';

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    

      	<?php endwhile; ?>
      	<?php endif; ?>
    </div>
  </div>
  <!-- End Commnets -->