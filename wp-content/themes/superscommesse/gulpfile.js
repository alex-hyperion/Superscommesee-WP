var gulp = require('gulp'),
    watch = require('gulp-watch'),
    autoprefixer = require('gulp-autoprefixer'),
    iconfont = require('gulp-iconfont'),
    iconfontCss = require('gulp-iconfont-css'),
    jshint = require('gulp-jshint'),
    stylish = require('jshint-stylish'),
    sass = require('gulp-sass'),
    rename = require('gulp-rename'),
    minifyCss = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    concat = require('gulp-concat'),
    plumber = require('gulp-plumber'),
    concatCss = require('gulp-concat-css'),
    pug = require('gulp-pug'),
    sourcemaps = require('gulp-sourcemaps'),
    notify = require("gulp-notify");

// собираем html
// Jade
// gulp.task('jade', function(done){
//  gulp.src('app/*.jade')
//   .pipe(jade({pretty: true}))
//   .pipe(gulp.dest('./dist/'));
//   done();
// });
// Pug
gulp.task('pug', function(done){
 gulp.src('src/*.pug')
  .pipe(pug({pretty: true}))
  .pipe(gulp.dest('./assets/'));
  done();
});

gulp.task('sass-dist', function (done) {
  return gulp.src('src/sass/**/*.scss')
    .pipe(gulp.dest('assets/sass/'));
  done();
});

gulp.task('sass', function (done) {
  return gulp.src('src/sass/**/*.scss')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass())
    .on("error", notify.onError(function(error) {
        return "Something happened: " + error.message;
    }))
    .pipe(autoprefixer({
        browsers: ['last 10 versions'],
        cascade: false
    }))
    .pipe(gulp.dest('assets/css/'))
    .pipe(minifyCss())
    .pipe(sourcemaps.write())
    .pipe(rename({suffix: '.min',}))
    .pipe(gulp.dest('assets/css/'));
  done();
});
var fontName = 'Icons';
gulp.task('iconfont', function(done){
  gulp.src(['src/icons/*.svg'])
    .pipe(iconfontCss({
      fontName: fontName,
      path: 'src/sass/templates/_icons.scss',
      targetPath: '../../sass/_icons.scss',
      fontPath: 'fonts/'
    }))
    .pipe(iconfont({
      fontName: fontName,
      formats: ['ttf', 'eot', 'woff', 'woff2', 'svg'],
      normalize:true,
      fontHeight: 1001,
      centerHorizontally: true
    }))
    .pipe(gulp.dest('src/css/fonts/'));
  done();
});

gulp.task('fonts', function(done) {
  return gulp.src('src/css/fonts/**/*')
    .pipe(gulp.dest('assets/css/fonts'));
  done();
});

gulp.task('css', function(done){
  return gulp.src('app/css/*.css')
    .pipe(concatCss('all-plugins.css'))
    .pipe(minifyCss())
    .pipe(gulp.dest('assets/css'));
  done();
});

// собираем картинки
gulp.task('images', function(done){
  return gulp.src('src/images/**/*.*')
    .pipe(imagemin())
    .pipe(gulp.dest('assets/images'));
  done();
});

// проверяем js на наличие ошибок
gulp.task('jshint', function(done){
  return gulp.src('src/js/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter(stylish));
done();
});

// собираем js плагины
gulp.task('concat', function(dove) {
  return gulp.src(['src/js/jquery/*.js','src/js/lib/*.js'])
    .pipe(uglify())
    .pipe(concat('all-plugins.js'))
    .pipe(rename('all-plugins.min.js'))
    .pipe(gulp.dest('assets/js/'));
  done();
});


gulp.task('js',function(done){                
  gulp.src('src/js/main.js')
    .pipe(plumber())
    .pipe(gulp.dest('assets/js/'))
    .pipe(uglify()) 
    .pipe(rename('main.min.js'))
    .pipe(gulp.dest('assets/js/'));
  done();
});


gulp.task('watch', function(done) {
  gulp.watch('src/*.pug', gulp.series('pug'));
  gulp.watch('src/icons/*.svg', gulp.series('iconfont','fonts','sass'));
  gulp.watch('src/sass/*.scss', gulp.series('sass-dist','fonts','sass'));
  gulp.watch('src/css/**/*.css', gulp.series('css'));
  gulp.watch('src/js/**/*.js',  gulp.series('jshint', 'concat', 'js'));
  done();
});

gulp.task('default', gulp.series('pug','iconfont','sass-dist','sass','css','fonts','jshint','concat','js','images', 'watch', function(done) {
  done();
}));

