var gulp					= require('gulp');
var sass					= require('gulp-sass');
var autoprefixer	= require('gulp-autoprefixer');
var plumber				= require('gulp-plumber');
var sourcemaps		= require('gulp-sourcemaps');
var browserSync		= require('browser-sync').create();
var compass = require('gulp-compass');
var bulkSass = require('gulp-sass-bulk-import');

// htmlのあるフォルダを指定
gulp.task('browser-sync', function() {
	  	browserSync.init({
		server: {
			baseDir: 'htdocs/'
		}
	});
});

gulp.task('urlsync', function() {
  browserSync.init({
    //サイトのアドレスを指定
    proxy: "http://example.com/"
  });
});

gulp.task("browser-reload", function() {
  browserSync.reload();
});

gulp.task('sass', function(){
	gulp.src('htdocs/common/sass/*.scss')
	.pipe(sourcemaps.init())
	.pipe(plumber())
	.pipe(bulkSass())
	.pipe(sass())
	.pipe(autoprefixer())
	.pipe(sourcemaps.write('../map'))
	.pipe(gulp.dest('htdocs/common/css'))
	.pipe(browserSync.stream());
});

gulp.task('watch', function(){
	gulp.watch('htdocs/common/sass/**/*.scss',['sass']);
	gulp.watch([
		'htdocs/**/*.html',
		'htdocs/common/js/*.js',
		'htdocs/**/*.php',
        'htdocs/**/*.css',
	],['browser-reload']);
});

gulp.task('default', ['browser-sync','watch']);
gulp.task('url', ['urlsync','watch']);