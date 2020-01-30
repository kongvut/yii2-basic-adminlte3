<?php
/**
 * Created by PhpStorm.
 * User: ks
 * Date: 24/6/2561
 * Time: 1:54 น.
 */
namespace app\themes\adminlte3\assets;

use yii\web\AssetBundle;

class AdminleAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte';
    public $css = [
        'dist/css/adminlte.min.css',
    ];

    public $js = [
        'dist/js/adminlte.js',
        'plugins/bootstrap/js/bootstrap.min.js'
    ];

    public $publishOptions = [
        "only" => [
            "dist/js/*",
            "dist/css/*",
            "plugins/bootstrap/js/*",
        ],

    ];

    public $depends = [
        'yii\web\YiiAsset',
        //'yii\jui\JuiAsset',
        //'yii\bootstrap\BootstrapAsset',
        'app\themes\adminlte3\assets\FontAwesomeAsset'
    ];
}