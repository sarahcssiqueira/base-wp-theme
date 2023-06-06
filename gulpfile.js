var gulp = require('gulp'),
sass = require('gulp-dart-sass'),
autoprefixer = require('gulp-autoprefixer'),
uglify = require('gulp-uglify'),
rename = require('gulp-rename'),
concat = require('gulp-concat'),
notify = require('gulp-notify'),
browserSync = require('browser-sync').create(),
cleanCSS = require('gulp-clean-css'),
postcss = require('gulp-postcss'),
assets  = require('postcss-assets');

//Combine & Minify Scripts
gulp.task('scripts', function() {
    return gulp.src(['assets/js/*'])
      .pipe(concat('build/scripts.js'))
      .pipe(gulp.dest('.'))
      .pipe(rename({suffix: '.min'}))
      .pipe(uglify())
      .pipe(gulp.dest('.'))
      .pipe(notify({ message: 'Scripts task complete' }));
});

//Compile & Minify Theme Styles
gulp.task('compile-styles', function() {
    return gulp.src('./style.scss')
      .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
      .pipe(autoprefixer('last 2 versions'))
      .pipe(gulp.dest('.'))
      .pipe(rename({suffix: '.min'}))
      .pipe(cleanCSS('level: 2'))
      .pipe(gulp.dest('.'))
      .pipe(browserSync.stream())
      .pipe(notify({ message: 'Styles task complete' }));
});

//Inline SVGs Referenced in Compiled Stylesheets
gulp.task('process-styles', function () {
    return gulp.src(['./style.css','style.min.css'])
      .pipe(postcss([assets({
        loadPaths: ['assets/images/']
      })]))
      .pipe(gulp.dest('.'));
});


//Run combine-styles, then process-styles on completion
gulp.task('styles', gulp.series('compile-styles', 'process-styles'));

//Start Browsersync session, reload Browsers on change
gulp.task('serve', function() {

    browserSync.init({
        proxy: "http://localhost:8000/"
    });

    //Watch .scss Files & Recompile Theme Styles on Change
    gulp.watch(['./**/*.scss', '!./node_modules/', '!./.git/'], 
    gulp.series('compile-styles', 'process-styles'));

    gulp.watch(['./**/*.*', './**/*.php', '!./node_modules/', '!./.git/', 
    '!./**/*.scss', '!./style.css', '!./style.min.css']).
    on('change', browserSync.reload);

});
