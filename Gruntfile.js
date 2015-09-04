module.exports = function (grunt) {

    // Load plugins
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-compress');
    grunt.loadNpmTasks('grunt-contrib-jshint');

    // Ressources path
    var imagePath = './img/';
    var jsPath = './js/';
    var cssPath = './css/';
    var scssPath = './css/';

    //All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),


        // Compile scss files to css
        sass: {
            dist: {
                options: {
                    style: 'compressed',
                    noCache: true,
                    sourcemap: 'none'
                },
                expand: true,
                cwd: scssPath,
                src: ['all.scss'],
                dest: cssPath,
                ext: '.css'
            },
            dev: {
                options: {
                    style: 'expanded',
                    debugInfo: false,
                    lineNumbers: false,
                    update: true // improve compile speed
                },
                expand: true,
                cwd: scssPath,
                src: ['all.scss'],
                dest: cssPath,
                ext: '.css'
            }
        },

        // Add vendor prefixed styles
        autoprefixer: {
            options: {
                browsers: ['> 1%'],
                map: true
            },
            multiple_files: {
                expand: true,
                cwd: scssPath,
                src: '{,*/}*.css',
                dest: cssPath
            }
        },

        // JS hint
        jshint: {
            files: [jsPath+'/**/*.js', '!'+jsPath+'/vendor/**/*.js'],
            //files: [jsPath+'/base.js', jsPath+'/libs/cnilkies.js', jsPath+'/libs/socialsharing.js', '!'+jsPath+'/vendor/**/*.js'],
            options: {
                jshintrc: '.jshintrc'
            }
        },

        // make a zipfile of static files
        compress: {
            main: {
                options: {
                    archive: 'archive.zip'
                },
                files: [
                    {
                        src: [
                            // add html files if needed
                            cssPath + 'all.css',
                            jsPath + '{,*/}*.js',
                            imagePath + '{,*/}*'
                        ],
                        dest: '/',
                        filter: 'isFile'}
                ]
            }
        },

        // Watch changes
        watch: {
            options: {
                livereload: true // http://feedback.livereload.com/knowledgebase/articles/86242-how-do-i-install-and-use-the-browser-extensions-
            },
            configFiles: {
                files: ['Gruntfile.js']
            },
            markup: {
                files: ['**/*.php'],
                options: {
                    spawn: false
                }
            },
            scripts: {
                files: [jsPath + '**/*.js'],
                options: {
                    spawn: false
                }
            },
            css: {
                files: [scssPath + '**/*.scss'],
                tasks: ['sass:dev','autoprefixer'],
                options: {
                    spawn: false
                }
            }
        }
    });

    // Tasks
    grunt.registerTask('default', ['watch']);
    grunt.registerTask('css', ['sass:dev','autoprefixer']);
    grunt.registerTask('build', ['sass:dist','autoprefixer']);
    grunt.registerTask('zip', ['compress']);
    grunt.registerTask('js', ['jshint']);

};
