<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 02/11/2017
 * Time: 17:14
 */
require_once ('SplClassLoader.php');
require_once(__DIR__.'/../vendor/autoload.php');

$folders = [

  "App"=>"",
  "Entity"=>"",
  "test"=>"",
  "Vue"=>"",
  "Bin"=>""

];

foreach ($folders as $folder => $path){
  $loader = new SplClassLoader($folder, __DIR__.$path);
  $loader->register();
}
