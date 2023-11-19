import gulp from 'gulp';
const { src, dest, series, watch } = gulp;

import gulpSass from 'gulp-sass';
import autoprefixer from 'gulp-autoprefixer';
import cssMinify from 'gulp-clean-css';
import jsMinify from 'gulp-terser';
import * as sass from 'sass';
const scss = gulpSass(sass);

// Styles
function styles() {
    return src('./src/scss/**/*.scss')
        .pipe(scss())
        .pipe(autoprefixer('last 2 versions'))
        .pipe(cssMinify())
        .pipe(dest('./assets/css/'));
}

// Scripts
function scripts() {
    return src('./src/js/**/*.js')
        .pipe(jsMinify())
        .pipe(dest('./assets/js/'));
}

// Watch Task
function watchTask() {
    watch(
        ['./src/scss/**/*.scss', './src/js/**/*.js'],
        series(styles, scripts)
    );
}

export default series(styles, scripts, watchTask);
