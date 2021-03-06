<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

    // public $basePath = '@webroot';
    public $sourcePath = '@app/themes/gantellela';
    // public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        "fonts/css/font-awesome.min.css",
        "css/animate.min.css",
        "css/custom.css",
        
    ];
    public $js = [
        //"js/jquery.min.js",
        "js/bootstrap.min.js",
        'js/chartjs/chart.min.js',
        "js/progressbar/bootstrap-progressbar.min.js",
        "js/nicescroll/jquery.nicescroll.min.js",
        //daterangepicker
        "js/moment.min2.js",
        "js/datepicker/daterangepicker.js",
        "js/editor/bootstrap-wysiwyg.js",
        "js/icheck/icheck.min.js",
        "http://cdn.ckeditor.com/4.5.3/standard/ckeditor.js",
        "js/custom.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
