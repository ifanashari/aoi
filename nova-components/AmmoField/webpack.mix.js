let mix = require('laravel-mix')

mix.setPublicPath('dist')
    .js('resources/js/field.js', 'js')
    .sass('resources/sass/field.scss', 'css')
    .webpackConfig({
        resolve: {
            alias: {
                '@local': path.resolve(__dirname, 'resources/js'),
                '@nova': path.resolve(__dirname, '../../nova/resources/js')
            },
        },
    });
