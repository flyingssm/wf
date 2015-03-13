module.exports = function(grunt) {
  //Gruntの設定
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    stylus: {
      app: {
        files: [{
          expand: true,
          cwd: 'src/stylus/',
          src: ['**/*.styl', '*.styl'],
          dest: 'public/assets/css',
          ext: '.css'
        }],
      }
    },
    watch: {

      stylus: {
        files: ['src/stylus/*.styl', 'src/stylus/**/*.styl'],
        tasks: 'stylus'
      }
    }
  });
  //defaultタスクの定義
  grunt.registerTask('default', 'Log some stuff.', function() {
    //ログメッセージの出力
    grunt.log.write('Logging some stuff...').ok();
  });


  grunt.loadNpmTasks('grunt-contrib-stylus');

  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['watch']);
};