const { src, watch, dest, series } = require('gulp');
const sass = require('gulp-sass');
sass.compiler = require('node-sass');
const autoPrefix = require('gulp-autoprefixer');
const babel = require('gulp-babel');



const html  = () => src('src/*.html')
                    .pipe(dest('dist'));


const css = () => src('src/style/*.scss')
                        .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
                        .pipe(autoPrefix("last 2 versions"))
                        .pipe(dest('dist/style/'));


const js = () => src('src/js/*.js')
                        .pipe(babel({presets: ['@babel/env']}))
                        .pipe(dest('dist/js/'));

const plugins = () => src('src/plugins/*')
                    .pipe(dest('dist/plugins/'));

const image = () => src('src/images/*')
                    .pipe(dest('dist/images/'));


exports.default = () => watch('src', series(html,css,js,image,plugins));