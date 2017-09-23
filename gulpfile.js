var gulp = require("gulp");
var scss = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var uglify = require("gulp-uglify");
var plumber = require("gulp-plumber");
var browser = require("browser-sync");
var img = require("gulp-imagemin");
var sourcemaps = require("gulp-sourcemaps");

gulp.task("default", ['server'], function () {
    gulp.watch(["js/**/*.js", "!js/min/**/*.js"], ["js"]);
    gulp.watch("scss/**/*.scss", ["scss"]);
    gulp.watch("img/**/*", ["img"]);
});
gulp.task("server", function () {
    browser({
        server: {
            baseDir: "./"
        }
    });
});
gulp.task("js", function () {
    gulp.src(["js/**/*.js", "!js/min/**/*.js"])
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest("./js/min"));
});
gulp.task("scss", function () {
    gulp.src("scss/**/*scss")
        .pipe(plumber())
        .pipe(scss())
        .pipe(autoprefixer())
        .pipe(sourcemaps.init())
        .pipe(sourcemaps.write('../maps'))
        .pipe(gulp.dest("./css"))
        .pipe(browser.reload({
            stream: true
        }))
});

gulp.task("img", function () {
    gulp.src("img/**/*")
        .pipe(plumber())
        .pipe(img({
            optimizationLevel: 7,
            progressive: true
        }))
        .pipe(gulp.dest("./img/dist"));
});