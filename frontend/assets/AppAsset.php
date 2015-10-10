<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		"css/bootstrap.min.css",
		"css/font-awesome.min.css",
		"css/animate.css",
		"css/owl.carousel.css",
		"css/owl.theme.css",
		"css/prettyPhoto.css",
		"css/flexslider.css",
		"css/red.css",
		"css/custom.css",
		"css/responsive.css",
		"css/jquery.fancybox.css?v=2.1.5",
		'http://fonts.googleapis.com/css?family=Lato:400,300',
		'http://fonts.googleapis.com/css?family=Raleway:400,300,500',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
