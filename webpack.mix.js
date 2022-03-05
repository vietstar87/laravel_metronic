const mix = require('laravel-mix');
const env = require('dotenv-mix')

// Register with Laravel Mix. You can use any name you want
mix.extend('env', env)
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
mix.js('resources/js/app.js', 'public/js').env().sourceMaps();

mix.webpackConfig({
    output: {
        chunkFilename: `js/[name].js?id=[chunkhash]`
    },
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.runtime.esm.js',
            '@': path.resolve(__dirname, 'resources/js/src/')
        }
    }
});
