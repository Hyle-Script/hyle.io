var gulp = require("gulp");
var gutil = require("gulp-util");
var compass = require("gulp-compass");
var coffee = require("gulp-coffee");
var imagemin = require("gulp-imagemin");
var path = require('path');

console.log(path.dirname);

gulp.task("compass", function(){
  gulp.src("public/assets/site/stylesheets/scss/*.scss")
    .pipe(compass({
      css: "public/assets/site/stylesheets/css",
      sass: "public/assets/site/stylesheets/scss"
    }))
  .pipe(gulp.dest("public/assets/site/temp"));
});

gulp.task("images", function() {
  gulp.src("public/assets/site/images/src/*.png")
  .pipe(imagemin())
  .pipe(gulp.dest("public/assets/site/images"))
});

gulp.task("coffee", function() {
  gulp.src("public/assets/site/javascripts/coffeescripts/*.coffee")
  .pipe(coffee().on("error", gutil.log))
  .pipe(gulp.dest("public/assets/site/javascripts/js"))
});

gulp.task("watch", function(){
  gulp.watch("public/assets/site/stylesheets/scss/**/*.scss", ["compass"]);
  gulp.watch("public/assets/site/javascripts/coffeescripts/*.coffee", ["js"]);
});


gulp.task("default", ["coffee", "compass"]);
