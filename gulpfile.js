var gulp = require("gulp");
var scss = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var uglify = require("gulp-uglify");

var concat = require('gulp-concat');
var browser = require("browser-sync");
var plumber = require("gulp-plumber");
var img = require('gulp-imagemin');


gulp.task("default",['server'], function() {
    gulp.watch(["js/**/*.js","!js/min/**/*.js"],["js"]);
    gulp.watch("scss/**/*.scss",["scss"]);
    gulp.watch("images/**/*", ["images"]);
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
 
gulp.task("scss", function() {
    gulp.src("scss/**/*scss")
        .pipe(plumber())
        .pipe(scss())
        .pipe(autoprefixer())
        .pipe(frontnote())
        .pipe(gulp.dest("./css"))
        .pipe(browser.reload({stream:true}))
});

gulp.task("img", function() {
  return gulp.src("./images/src/*")
    .pipe(plumber({errorHandler: onError}))
    .pipe(imagemin({optimizationLevel: 7, progressive: true}))
    .pipe(gulp.dest("./images/dist"));
});