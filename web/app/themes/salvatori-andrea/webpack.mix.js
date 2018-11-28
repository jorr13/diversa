let mix = require('laravel-mix');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setPublicPath('dist')
   .js('resources/assets/js/app.js', 'js/')
   .extract([
     'babel-polyfill',
     'vue'
   ])
   .sass('resources/assets/styles/app.scss', 'css/')
   .options({
     processCssUrls: false,
     postCss: [ require('tailwindcss')('./tailwind.js') ],
   })
   .purgeCss({
    whitelist: [
      "nav",
      "menu-animado",
      "menuexpandido",
      "border",
      "contenedor-menu",
      "menu-menu-1-container",
      "sage-menu",
      "menu-item-opacity",
      "menu-item",
      "contenedor-papa-imagen-svg",
      "contenedor-svg-menu",
      "contenedor-img-menu",
      " menu-item-opacity",
      "comment",
      "comment-body",
      "comment-meta",
      "comment-author",
      "fn",
      "says",
      "comment-metadata",
      "reply",
      "children",
      "comment-respond",
      "comment-reply-title",
      "comment-form",
      "comment-notes",
      "comment-form-comment",
      "comment-form-author",
      "comment-form-email",
      "comment-form-url",
      "form-submit",
      "a",
      "type-post",  
    ],
    whitelistPatterns: [
      /^search(-.*)?$/,
      /^(.*)-template(-.*)?$/,
      /^(.*)?-?single(-.*)?$/,
      /^postid-(.*)?$/,
      /^attachmentid-(.*)?$/,
      /^attachment(-.*)?$/,
      /^page(-.*)?$/,
      /^(post-type-)?archive(-.*)?$/,
      /^author(-.*)?$/,
      /^category(-.*)?$/,
      /^tag(-.*)?$/,
      /^tax-(.*)?$/,
      /^term-(.*)?$/,
      /^(.*)?-?paged(-.*)?$/
    ]
  })
if (mix.inProduction()) {
  mix.version()
}

// Browser Sync

const app       = 'app';
const resources = 'resources';
const assets    = `${resources}/assets`;
const dist      = 'dist';

mix.browserSync({
  proxy: 'http://diversa.test',
  port: 3000,

  files: [
    `${app}/**/*.php`,
    `${resources}/**/*.php`,
    `${dist}/**/*.css`,
    `${dist}/**/*.js`
  ]
});