var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var fileinclude = require('gulp-file-include');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var rucksack = require('gulp-rucksack');

var config = {
	srcCss: 'scss/**/*.scss',
	buildCss: '../css'
}

//Run BrowserSync
gulp.task('serve', function () {
	browserSync.init({
		proxy: "localhost:8888/"
	});
	//gulp.watch("dist/*.html").on('change', browserSync.reload);
	gulp.watch("../css/*.css").on('change', browserSync.reload);
});


//Compile Sass - prefix -mini
gulp.task('build-css', function (cb) {
	gulp.src(config.srcCss)

	// output non-minified CSS file
	.pipe(sass({
			outputStyle: 'expanded'
		}).on('error', sass.logError))
		.pipe(rucksack({
			autoprefixer: true
		}))
		.pipe(gulp.dest(config.buildCss))

	// output the minified version
	.pipe(cleanCSS({
			compatibility: 'ie8'
		}))
		.pipe(rename({
			extname: '.min.css'
		}))
		.pipe(gulp.dest(config.buildCss))

	cb()
})

//update
gulp.task('watch', function (cb) {
	gulp.watch(config.srcCss, ['build-css']);
	gulp.watch('bower_components/bootstrap/scss/*scss', ['build-css']);
	
})

gulp.task('default', ['build-css', 'watch', 'serve'])