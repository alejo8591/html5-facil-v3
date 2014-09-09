module.exports = function(grunt){
	grunt.initConfig({
		cssmin: {
  			add_banner: {
    				options: {
      					banner: '/* Theme Name: HTML5 Fácil V3 \n Theme URI: http://html5facil.com \n Description: Template V3 para la el sitio web. \n Author: @jimmylagp \n Author URI: http://html5facil.com \n Version: 3.0 */'
    				},
    				files: {
    					/*
    					 <link rel="stylesheet" href="/wp-content/themes/html5-facil-v3/css/foundation.css" />
  					 <link rel="stylesheet" href="/wp-content/themes/html5-facil-v3/js/owl-carousel/owl.carousel.css">
  					 <link rel="stylesheet" href="/wp-content/themes/html5-facil-v3/js/owl-carousel/owl.theme.css">
  	     				 <link rel="stylesheet" href="/wp-content/themes/html5-facil-v3/icon-fonts/foundation-icons.css">
  				       	 <link rel="stylesheet" href="/wp-content/themes/html5-facil-v3/css/highlight/github.css">
  					 <link rel="stylesheet" href="/wp-content/themes/html5-facil-v3/style.css">
    					*/
      					'css/html5facil.min.css': 
      					[
      						//'/var/www/vhosts/html5facil.com/httpdocs/wp-content/themes/html5-facil-v3/css/normalize.css', 
      						'css/foundation.min.css',
      						'js/owl-carousel/owl.carousel.css',
      						'icon-fonts/foundation-icons.css',
      						'css/highlight/github.css',
      						'css/app.css'
      					]
    				}
  			}
		},
	});
	
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	// Task register
	grunt.registerTask("default", ["cssmin"]);
