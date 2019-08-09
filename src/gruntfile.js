module.exports = function (grunt) {
        grunt.initConfig({
                pkg: grunt.file.readJSON('package.json'),
                // Tasks
                        sass: {
                                dist: {
                                        options: {
                                                style: 'expanded'
                                        },
                                files: {
                                        '../dist/css/styles.css' : 'scss/styles.scss'
                                }
                        }
                },
                watch: {
                        css: {
                                files: ['scss/**/*.scss'],
                                tasks: ['sass']
                        },
                         js:{
                                files: [],
                                tasks: []
                        }
                }
        })
        // Load Grunt plugins
        grunt.loadNpmTasks('grunt-contrib-sass')
        grunt.loadNpmTasks('grunt-contrib-watch')

        // Register Grunt tasks
        grunt.registerTask('default', ['watch'])

}