module.exports = function(grunt) {

    // Configuração das tarefas
    grunt.initConfig({
      cssmin: {
        target: {
          files: [{
            expand: true,
            cwd: 'public/css',
            src: ['*.css'],
            dest: 'dist/css',
            ext: '.min.css'
          }]
        }
      },
      uglify: {
        target: {
          files: [{
            expand: true,
            cwd: 'public/js',
            src: ['*.js'],
            dest: 'dist/js',
            ext: '.min.js'
          }]
        }
      },
      copy: {
        main: {
          files: [
            {
              expand: true,
              cwd: 'public/js',
              src: ['env.js'],
              dest: 'dist/js',
              ext: '.min.js'
            }
          ]
        }
      },
      watch: {
        css: {
          files: ['public/css/*.css'],
          tasks: ['cssmin'],
        },
        js: {
          files: ['public/js/*.js'],
          tasks: ['uglify', 'copy'],
        },
      },
    });
  
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
  
    grunt.registerTask('default', ['cssmin', 'uglify', 'copy']);
  };
  