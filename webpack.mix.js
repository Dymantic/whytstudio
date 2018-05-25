let mix = require("laravel-mix");
let build = require("./tasks/build.js");
require("laravel-mix-tailwind");
require("laravel-mix-purgecss");

mix.disableSuccessNotifications();
mix.setPublicPath("source/assets/");
mix.webpackConfig({
  plugins: [
    build.jigsaw,
    build.browserSync(),
    build.watch(["source/**/*.md", "source/**/*.php", "source/**/*.scss"])
  ]
});

mix
  .js("source/_assets/js/main.js", "js/main.js")
  .less("source/_assets/less/main.less", "css/main.css")
  .tailwind()
  .purgeCss({
    globs: [path.join(__dirname, "source/**/*.blade.php")],
    whitelistPatternsChildren: [/flickity/]
  })
  .version();
