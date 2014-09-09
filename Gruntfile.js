module.exports = function(grunt){
	grunt.initConfig({
		cssmin: {
  			add_banner: {
    				options: {
      					banner: '/* Theme Name: HTML5 Fácil V3 \n Theme URI: http://html5facil.com \n Description: Template V3 para la el sitio web. \n Author: @jimmylagp \n Author URI: http://html5facil.com \n Version: 3.0 */'
    				},
    				files: {
      					'css/app.css': 
      					[
      						'css/normalize.css', 
      						'css/foundation.min.css',
      						'js/owl-carousel/owl.carousel.css',
      						'js/owl-carousel/owl.theme.css',
      						'icon-fonts/foundation-icons.css',
      						'css/highlight/github.css',
      						'css/app.base.css'
      					],
      					'css/foundation-icon.min.css' : ['css/normalize.css']
    				}
  			}
		},
	});
	
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	// Task register
	grunt.registerTask("default", ["cssmin"]);
}
