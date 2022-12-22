let mix = require('laravel-mix');

mix.combine([
    './Resources/Private/JavaScript/Src/main.js',
], './Resources/Public/dist/main.js')
    .sass('./Resources/Private/Scss/app.scss', './Resources/Public/dist');