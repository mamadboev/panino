<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/owl.carousel.min.css',
        'css/style.css',
        'css/site.css',
        'css/responsive.css',

       // 'layouts/frontend/css/styles.css',
        'layouts/frontend/fonts/icomoon/style.css'
    ];
    public $js = [
        'js/jquery.min.js',
        'js/popper.min.js',
        'js/bootstrap.bundle.min.js',
        'js/owl.carousel.min.js',
        'js/custom.js',
        'js/jquery-3.0.0.min.js',
        'js/jquery.mCustomScrollbar.concat.min.js',

        'layouts/frontend/assets/mail/jqBootstrapValidation.js',
        'layouts/frontend/assets/mail/contact_me.js',
        'layouts/frontend/js/scripts.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
