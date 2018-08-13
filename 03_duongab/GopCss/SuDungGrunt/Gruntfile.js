module.exports = function(grunt) {
   grunt.initConfig({
      concat: {
         gopcss: {
             src: [
                 'css/style.css',
                 'css/style1.css',
             ],
             dest: 'css/all.css'
         },
         gopjs: {
             src: [
                  'js/jquery.js',
                  'js/all.js',
              ],
              dest: 'js/all.js'
         },
      },
 cssmin: {
    nencss: {
       src: 'css/all.css',
       dest: 'css/all.min.css'
    },
 },
 uglify: {
     nenjs: {
          src: 'js/all.js',
         dest: 'js/all.min.js',
     }
 }
 });
grunt.loadNpmTasks('grunt-contrib-concat');
grunt.loadNpmTasks('grunt-contrib-cssmin');
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.registerTask('default', ['concat', 'cssmin', 'uglify']);
};