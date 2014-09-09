<footer class="row">
    <div class="medium-12 large-12 columns">
      
      <div id="top-footer" class="row">
        <div class="medium-3 large-3 columns">
          <img src="/wp-content/themes/html5-facil-v3/img/mini-html5-facil.png" alt="HTML5 Fácil">
          <p class="small-only-text-center">
            <?php bloginfo( 'description' ); ?>
          </p>
        </div>
        <div class="medium-3 large-3 columns show-for-medium-up">
          <h5>Websites Amigos</h5>
          <ul>
            <li><a href="http://www.infranetworking.com/" title="Infranetworking">Infranetworking</a></li>
            <li><a href="http://gespadas.com/" title="Gespadas">Gespadas</a></li>
            <li><a href="http://bytes.mx/" title="Bytes Tecnologías">Bytes Tecnologías</a></li>
            <li><a href="http://www.gogasoft.net/" title="Gogasoft">Gogasoft</a></li>
            <li><a href="http://yuiblog.es/" title="YUIBlog">YUIBlog</a></li>
          </ul>
        </div>
        <div class="medium-3 large-3 columns show-for-medium-up">
          <h5>Siguenos en:</h5>
          <ul>
            <li><a href="http://twitter.com/html5facil" title="Twitter">Twitter</a></li>
            <li><a href="http://facebook.com/html5facil" title="Facebook">Facebook</a></li>
            <li><a href="https://plus.google.com/b/105180743946641874826/" title="Google+">Google+</a></li>
            <li><a href="http://youtube.com/ninjacodetv" title="YouTube">YouTube</a></li>
            <li><a href="http://html5facil.com/feed" title="Feed RSS">Feed RSS</a></li>
          </ul>
        </div>
        <div class="medium-3 large-3 columns">

          <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=HTML5Facil', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
          <h5>Recibe las noticias en tu e-mail:</h5>
          <div class="row collapse">
            <div class="small-10 columns">
              <input type="email" name="email" placeholder="Tu e-mail..." required>
              <input type="hidden" value="HTML5Facil" name="uri"/>      
              <input type="hidden" name="loc" value="es_ES"/>     
            </div>
            <div class="small-2 columns">
              <button type="submit" class="button postfix fi-pencil"></button>
            </div>
          </div>
          </form>
          
          <div class="row">
            <div class="large-12 columns">
              <p>Funcionando gracias a...</p>
              <a href="http://servergrove.com/" title="Server Grove">
                <img src="/wp-content/themes/html5-facil-v3/img/sg.png" alt="Server Grove">
              </a>
            </div>
          </div>

        </div>
      </div>

      <div id="bottom-footer" class="row">
        <div class="medium-4 large-4 columns">
          <small>
            © 2014 HTML5 Fácil. El contenido está licenciado bajo <a href="http://creativecommons.org/licenses/by-sa/2.5/mx/" title="CreativeCommons">CreativeCommons</a>.
          </small>
        </div>
        <div class="medium-1 large-3 columns">
          
        </div>
        <div class="medium-7 large-5 columns hide-for-small-only">
          <ul class="menu inline-list">
            <li><a href="/" title="Inicio"> Inicio</a></li>
            <li><a href="/category/tutoriales" title="Tutoriales"> Tutoriales</a></li>
            <li><a href="http://youtube.com/ninjacodetv" title="¡Envivo!"> ¡En vivo!</a></li>
            <li><a href="/acerca-de" title="Acerca de"> Acerca de</a></li>
            <li><a href="/contacto" title="Contacto"> Contacto</a></li>
          </ul>
        </div>
      </div>

    </div>
  </footer>

  
  <script src="/wp-content/themes/html5-facil-v3/js/vendor/jquery.js"></script>
  <script src="/wp-content/themes/html5-facil-v3/js/foundation.min.js"></script>
  <script src="/wp-content/themes/html5-facil-v3/js/owl-carousel/owl.carousel.js"></script>
  <script src="/wp-content/themes/html5-facil-v3/js/highlight.pack.js"></script>
  <script>
  $(document).ready(function(){
    $("#slider").owlCarousel({
        autoPlay : true,
        stopOnHover : true,
        navigation : true,
        navigationText : ['<button class="tiny fi-arrow-left"></button>','<button class="tiny fi-arrow-right"></button>'],
        afterInit : function(elem){
          var that = this
          that.owlControls.prependTo(elem)
        },
        slideSpeed : 300,
        paginationSpeed : 400,
        pagination: false,
        singleItem:true
   
    });

    $(document).foundation();
    hljs.initHighlightingOnLoad();
  });
  </script>
  <?php wp_footer(); ?>
  
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-16063701-6', 'html5facil.com');
    ga('send', 'pageview');

  </script>
</body>
</html>