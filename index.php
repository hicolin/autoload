<?php
/**
 * Created by PhpStorm.
 * User: TC
 * Date: 2019/4/2
 * Time: 10:22
 */

define('ROOT', __DIR__);

require ROOT . '/vendor/Autoload.php';
spl_autoload_register(  'vendor\Autoload::load');

\app\controllers\IndexController::test();