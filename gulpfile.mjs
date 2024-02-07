import gulp from 'gulp';
import * as sassLib from 'sass';
import gulpSass from 'gulp-sass';
import sourcemaps from 'gulp-sourcemaps';
import cleanCSS from 'gulp-clean-css';
import terser from 'gulp-terser';
import postcss from 'gulp-postcss';
import autoprefixer from 'autoprefixer';
import tailwindcss from 'tailwindcss';

const sass = gulpSass(sassLib);

// Styles
function styles() {
  return gulp.src('src/sass/main.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
      includePaths: ['node_modules']
    }).on('error', sass.logError))
    .pipe(postcss([
      tailwindcss('tailwind.config.js'),
      autoprefixer(),
    ]))
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('static/css'))
}

// Scripts
function scripts() {
  return gulp.src('src/js/*.js')
    .pipe(terser())
    .pipe(gulp.dest('static/js'));
}

// Watch
function watch() {
  gulp.watch('src/sass/**/*.scss', gulp.series(styles));
  gulp.watch('src/js/*.js', gulp.series(scripts));
  gulp.watch('**/*.{php,js}', gulp.series(styles));
}

export default gulp.series(gulp.parallel(scripts, styles), watch);

export { styles, scripts, watch };
