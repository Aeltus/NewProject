<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 02/11/2017
 * Time: 17:14
 */
require_once ('SplClassLoader.php');
require_once(__DIR__.'/../vendor/autoload.php');
$ControllerLoader = new SplClassLoader('App', __DIR__);
$ControllerLoader -> register();
$EntityLoader = new SplClassLoader('Entity', __DIR__);
$EntityLoader -> register();
$TestLoader = new SplClassLoader('test', __DIR__);
$TestLoader -> register();
$ModelLoader = new SplClassLoader('Model', __DIR__);
$ModelLoader -> register();
$VueLoader = new SplClassLoader('Vue', __DIR__);
$VueLoader -> register();
