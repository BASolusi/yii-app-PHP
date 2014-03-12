<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

defined('YII_DEBUG') or define('YII_DEBUG', false);

require(__DIR__ . '/../vendor/yiisoft/yii/framework/yii.php');
require(__DIR__ . '/../common/helpers/global.php');
require(__DIR__ . '/../vendor/crisu83/yii-consoletools/helpers/ConfigHelper.php');

$config = ConfigHelper::merge(
    array(
        __DIR__ . '/../app/config/main.php',
        __DIR__ . '/../app/config/web.php',
        __DIR__ . '/../app/config/test.php',
        __DIR__ . '/../app/config/main-environment.php',
        __DIR__ . '/../app/config/test-local.php',
    )
);

Yii::createWebApplication($config)->run();