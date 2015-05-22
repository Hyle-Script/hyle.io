var gulp = require("gulp");
var gutil = require("gulp-util");
var concat = require("gulp-concat");
var sass = require('gulp-ruby-sass');
var coffee = require("gulp-coffee");
var imagemin = require("gulp-imagemin");
var path = require('path');

gulp.task("sass", function () {
    return sass("resources/assets/scss/")
    .on("error", function (err) {
      console.error("Error!", err.message);
   })
    .pipe(gulp.dest("public/assets/site/css"));
});

gulp.task("images", function() {
  gulp.src("public/assets/site/images/src/*.png")
  .pipe(imagemin())
  .pipe(gulp.dest("public/assets/site/images"))
});

gulp.task("coffee", function() {
  gulp.src("resources/assets/coffee/*.coffee")
  .pipe(coffee().on("error", gutil.log))
  .pipe(concat("all.js"))
  .pipe(gulp.dest("public/assets/site/js"));
  gulp.src("resources/assets/coffee/components/*.coffee")
  .pipe(coffee().on("error", gutil.log))
  .pipe(concat("components.js"))
  .pipe(gulp.dest("public/assets/site/js"))
});


gulp.task("watch", function(){
  gulp.watch("resources/assets/scss/**/*.scss", ["sass"]);
  gulp.watch("resources/assets/coffee/**/*.coffee", ["coffee"]);
});


gulp.task("default", ["coffee", "sass", "watch"]);
