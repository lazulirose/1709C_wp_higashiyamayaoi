var gulp = require("gulp");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var uglify = require("gulp-uglify");
var concat = require('gulp-concat');
var browser = require("browser-sync");
var plumber = require("gulp-plumber");
var img = require('gulp-imagemin');


gulp.task("default",['server'], function() {
    gulp.watch(["js/**/*.js","!js/min/**/*.js"],["js"]);
    gulp.watch("sass/**/*.scss",["sass"]);
    gulp.watch('images/**/*', ["images"]);
});
gulp.task("server", function() {
    browser({
        server: {
            baseDir: "./"
        }
    });
});
gulp.task("js", function() {
    gulp.src(["js/**/*.js","!js/min/**/*.js"])
        .pipe(plumber())
        .pipe(frontnote({
            css: '../css/style.css'
          }))
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest("./css"))    
        .pipe(concat("yaoi.js"))
        .pipe(rename({suffix: ".min"}))
        .pipe(uglify())
        .pipe(gulp.dest("./js"))
        .pipe(browser.reload({stream:true}));
});
 
gulp.task("sass", function() {
    gulp.src("sass/**/*scss")
        .pipe(plumber())
        .pipe(frontnote())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest("./css"))
        .pipe(browser.reload({stream:true}))
});

gulp.task("img", function() {
  return gulp.src("./images/src/*")
    .pipe(plumber({errorHandler: onError}))
    .pipe(imagemin({optimizationLevel: 7, progressive: true}))
    .pipe(gulp.dest("./images/dist"));
});