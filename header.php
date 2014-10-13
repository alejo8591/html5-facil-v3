<!doctype html>
<html class="no-js" lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

  <?php
  setup_postdata( $post );

  $title = get_the_title();
  $link = get_permalink();
  $desc = get_the_excerpt();
  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), full );
  ?>

  <?php if(is_single()): ?>
  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@html5facil" />
  <meta name="twitter:title" content="<?php echo $title; ?>">
  <meta name="twitter:description" content="<?php echo $desc; ?>" />
  <meta name="twitter:url" content="<?php echo $thumb[0]; ?>" />

  <!-- Facebook Cards -->
  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:description" content="<?php echo $desc; ?>" />
  <meta property="og:url" content="<?php echo $link; ?>" />
  <meta property="og:image" content="<?php echo $thumb[0]; ?>" />
  <?php endif; ?>

  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link href='http://fonts.googleapis.com/css?family=Raleway:300,200,600' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="/wp-content/themes/html5-facil-v3/img/favicon.ico" />
	
  <link rel="stylesheet" href="/wp-content/themes/html5-facil-v3/icon-fonts/foundation-icons.min.css">
  <link rel="stylesheet" href="/wp-content/themes/html5-facil-v3/css/app.min.css" /> 

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <script src="/wp-content/themes/html5-facil-v3/js/vendor/modernizr.js"></script>
  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <nav class="top-bar hide-for-large-up" data-topbar data-options="back_text: Atras">
    <ul class="title-area">
      <li class="name">
        <h1><a href="/"><?php bloginfo( 'name' ); ?></a></h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"></a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="has-dropdown">
          <a href="#">Menu</a>
          <ul class="dropdown">
            <li><a href="/" class="fi-home"> Inicio</a></li>
            <li><a href="/tutoriales" class="fi-pencil"> Tutoriales</a></li>
            <li><a href="http://youtube.com/ninjacodetv" class="fi-play-video"> ¡En vivo!</a></li>
            <li><a href="/acerca-de" class="fi-book"> Acerca de</a></li>
            <li><a href="/contacto" class="fi-mail"> Contacto</a></li>
          </ul>
        </li>
        <li class="has-dropdown">
          <a href="#">Categorías</a>
          <ul class="dropdown">
            <li><a href="/tips" title="Tips" itemprop="url">Tips</a></li>
            <li><a href="/noticias" title="Noticias" itemprop="url">Noticias</a></li>
            <li><a href="/informacion" title="Información" itemprop="url">Información</a></li>
            <li><a href="/eventos" title="Eventos" itemprop="url">Eventos</a></li>
            <li><a href="/tutoriales" title="Tutoriales" itemprop="url">Tutoriales</a></li>
          </ul>
        </li>
      </ul>

    </section>
  </nav>

  <header class="row">
    <div class="large-12 columns">

      <div id="top-header" class="row show-for-medium-up">
        <div class="large-12 columns">
          <ul class="social-icons inline-list right">
            <li>
              <a href="#" class="fi-social-twitter">
                &nbsp;<iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/follow_button.html?screen_name=html5facil&amp;lang=es" style="width:230px; height:20px;"></iframe>
              </a>
            </li>
            <li>
              <a href="#" class="fi-social-facebook">
                <iframe src="http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/html5facil&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;font=arial&amp;colorscheme=light" scrolling="no" frameborder="0" allowtransparency="true" style="border:none; overflow:hidden; width:120px; height:20px;"></iframe>
              </a>
            </li>
            <li>
              <a href="#" class="fi-social-google-plus">
                <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background-position: initial initial; background-repeat: initial initial;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1395721501782" name="I0_1395721501782" src="https://apis.google.com/u/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;hl=es-419&amp;origin=http%3A%2F%2Fhtml5facil.com&amp;url=http%3A%2F%2Fhtml5facil.com%2F&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.es.91HJQgNxn6M.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Fz%3Dzcms%2Frs%3DAItRSTPdkXMfuZCnQCIDgK0zT1Cx6Q30vw#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1395721501782&amp;parent=http%3A%2F%2Fhtml5facil.com&amp;pfname=&amp;rpctoken=13686064" data-gapiattached="true" title="+1"></iframe></div>
              </a>
            </li>
            <li class="hide-for-medium-only">
              <a href="#" class="fi-social-youtube">
                <script src="https://apis.google.com/js/platform.js"></script>
                <div class="g-ytsubscribe" data-channel="ninjacodetv" data-layout="default" data-count="undefined"></div>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div id="bottom-header" class="row">
        <div class="medium-5 large-4 columns">
          <h1><a href="/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" itemprop="url"><span itemprop="name"><?php bloginfo( 'name' ); ?></span></a></h1>
          <p itemprop="description"><?php bloginfo( 'description' ); ?></p>
        </div>
        <div class="medium-7 large-8 columns">
          
          <div class="row show-for-large-up">
            <div class="large-12 columns">
              <ul class="menu inline-list right">
                <li><a href="/" class="fi-home"> Inicio</a></li>
                <li><a href="/tutoriales" class="fi-pencil"> Tutoriales</a></li>
                <li><a href="http://youtube.com/ninjacodetv" class="fi-play-video"> ¡En vivo!</a></li>
                <li><a href="/acerca-de" class="fi-book"> Acerca de</a></li>
                <li><a href="/contacto" class="fi-mail"> Contacto</a></li>
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="large-12 columns">
              <form method="get" id="searchform" class="search" action="/buscador/" enctype="multipart/form-data">
                <div class="row collapse">
                  <div class="small-10 medium-8 medium-offset-3 large-5 large-offset-6 columns">
                    <input type="hidden" name="cx" value="partner-pub-7827614471275245:p12oxci9493" />
                    <input type="hidden" name="cof" value="FORID:10" />
                    <input type="hidden" name="ie" value="ISO-8859-1" />
                    <input type="search" name="q" id="s" placeholder="¿Qué buscas?" required>
                  </div>
                  <div class="small-2 medium-1 large-1 columns">
                    <button type="submit" id="searchsubmit" class="button postfix fi-magnifying-glass"></button>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>

    </div>
  </header>