module.exports = function( grunt ) {
    //require('jit-grunt')(grunt);
    const mozjpeg = require('imagemin-mozjpeg');

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        
        /*apaga o css concatenado p sobre escrever*/
        clean: ['assets/css/main.css'],

        /*Minifica js*/
        uglify : {
            options : {
                mangle : false
            },
            my_target : {
                files : {
                    'assets/js/plugins/scrool_r_min.js' : ['assets/js/plugins/scrollreveal.min.js'],
                    'assets/js/plugins/owl_min.js' : ['assets/js/plugins/owl.carousel.js'],
                    'assets/js/template/tema_min.js' : ['assets/js/template/js_tema.js'],
                    'assets/js/template/video-gallery_min.js' : ['assets/js/template/video-gallery.js'],
                }//files
            }//my target
        }, // uglify

        /*compilador de less para css*/
        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    "assets/css/estilo_tema.css": "assets/css/estilo_tema.less"
                }
            }//development
        },//less

        /*watch*/
        watch: {
            css: {
                files: 'assets/css/main.css',
                tasks: ['concat_css']
            },
            scripts: {
                files: ['assets/js/template/js_tema.js', 'assets/js/template/video-gallery.js'],
                tasks: ['uglify', 'concat_css'],
                options: {
                  debounceDelay: 250
                }
            },
            less: {   
                files: ['assets/css/UI-Kit/*.less', 'assets/css/pages/*.less', 'assets/css/template/*.less', 'assets/css/estilo_tema.less', 'assets/css/main.css' ],
                tasks: ["less", "concat_css"],
                options: {
                    nospawn: true
                }
            },
        }, //watch

        /*concatena todos os css em um só e todos os js em um só*/
        concat_css: {
            js: {
                /*modernizer, min_less.js é o grid js minificado, e o js do tema*/
                src: [
                    'assets/js/plugins/modernizer.js', 
                    'assets/js/plugins/jquery.js',
                    'assets/js/plugins/popper.js',
                    'assets/js/plugins/bootstrap.js',
                    'assets/js/plugins/lazy_min.js', 
                    'assets/js/plugins/scrool_r_min.js', 
                    'assets/js/plugins/owl_min.js', 
                    'assets/js/template/video-gallery_min.js',
                    'assets/js/template/tema_min.js' 
                ],
                dest: 'assets/js/main.js'
            },

            css: {
                src: [ 
                    'assets/css/plugins/owl.carousel.min.css', 
                    'assets/css/plugins/owl.theme.default.min.css', 
                    'assets/css/plugins/bootstrap.css',                    
                    'assets/css/estilo_tema.css'
                ],
                dest: 'assets/css/main.css'
            },
        },

        /*otimiza imagens*/
        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'assets/base-images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'assets/img/'
                }]
            }
        }//fim otimiza imagens
    });//grunt.initConfig

    // Plugins do Grunt
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-concat-css');

    // Tarefas que serão executadas
    grunt.registerTask( 'default', [ 'imagemin', 'clean', 'uglify', 'less', 'watch', 'concat_css' ] );
};