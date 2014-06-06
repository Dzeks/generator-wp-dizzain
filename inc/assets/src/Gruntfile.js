module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // Maybe List dependencies inside bower and package config files
    theme: {
      js: [
        'js/<%= pkg.name %>.js',
      ],
      scss: ['scss/<%= pkg.name %>.scss']
    },

    sass: {
      dist: {
        options: {
          includePaths: ['scss']
        },
        files: {
          '<%= pkg.build.css %>/<%= pkg.name %>.css': '<%= <%= pkg.name %>.scss %>',
        }
      },
    },

    concat: {
      dist: {
        files: {
          '<%= pkg.build.js %>/<%= pkg.name %>.js': '<%= theme.js %>'
        }
      }
    },

    watch: {
      grunt: { files: ['Gruntfile.js'] },
      sass: {
        files: ['<%= pkg.src.scss %>/**/*.scss'],
        tasks: ['sass']
      },
      livereload: {
        options: { livereload: true },
        files: ['<%= pkg.build.css %>/<%= pkg.name %>.css'],
      },

    },

  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-newer');

  grunt.registerTask('build:assets', ['sass', 'concat']);
  grunt.registerTask('build', ['build:assets']);
};