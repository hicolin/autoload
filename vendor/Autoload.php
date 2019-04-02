<?php
/**
 * Created by PhpStorm.
 * User: TC
 * Date: 2019/4/2
 * Time: 10:22
 */

namespace vendor;

class Autoload
{
    public static function load($class)
    {
        $path = str_replace('\\', '/', $class);
        require ROOT. '/' . $path . '.php';
    }
}