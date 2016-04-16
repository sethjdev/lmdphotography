module.exports = function(grunt) {

  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),
    
    uglify: {
      options: {
        banner: '/*\n <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> \n*/\n'
      },
      build: {
        files: {
          'dist/js/app.min.js': ['src/js/*.js']
        }
      }
    },
    
    less: {
      options : {
        plugins : [ new (require('less-plugin-autoprefix'))({browsers : [ "last 2 versions" ]}) ]
      },
      build: {
        files: {
          'src/css/site.css': ['src/css/site.less']
        }
      }
    },
    
    cssmin: {
      options: {
        banner: '/*\n <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> \n*/\n'
      },
      build: {
        files: {
          'dist/css/site.min.css': 'src/css/*.css'
        }
      }
    },
    
    imagemin: {                          // Task 
        dynamic: {                         // Another target 
            files: [{
                expand: true,                  // Enable dynamic expansion 
                cwd: 'src/',                   // Src matches are relative to this path 
                src: ['**/*.{png,jpg,gif}'],   // Actual patterns to match 
                dest: 'dist/'                  // Destination path prefix 
            }]
        }
    },
    
    watch: {
        files: ['src/css/*.css', 'src/css/*.less', 'src/js/*.js'], 
        tasks: ['less', 'cssmin','uglify'] 
    }
      
  });

  // we can only load these if they are in package.json
  // make sure you have run npm install so app can find these
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  
};