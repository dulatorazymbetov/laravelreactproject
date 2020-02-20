const mix = require('laravel-mix');

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
mix.webpackConfig({
   	resolve: {
       	alias: {
           '@layouts': path.resolve(__dirname, 'resources/js/layout'),
           '@components': path.resolve(__dirname, 'resources/js/components/'),
           '@contexts': path.resolve(__dirname, 'resources/js/context/'),
       	}
   	},
   	output: {
        chunkFilename: 'js/[name].[chunkhash].js',
    },
});
mix.react('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
