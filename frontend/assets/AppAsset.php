<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'materialize/css/materialize.css',
        'materialize/css/flaticon.css',
        'materialize/css/style.css',
    ];
    public $js = [
        'materialize/js/materialize.js',
        'materialize/js/slider.js',
        'materialize/js/hammer.min.js',
        'materialize/js/cards.js',
        'materialize/js/init.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
