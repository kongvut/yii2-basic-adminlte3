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
    public $sourcePath = '@app/themes/adminlte3/dist';
    public $css = [
        'css/adminlte.min.css',
    ];

    public $js = [
        'js/adminlte.js',
        'plugins/bootstrap/js/bootstrap.bundle.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        //'yii\jui\JuiAsset',
        //'yii\bootstrap\BootstrapAsset',
        'app\themes\adminlte3\assets\FontAwesomeAsset'
    ];
}