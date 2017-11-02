<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 02/11/2017
 * Time: 20:40
 */
namespace Bin;

class Console {

  /**
   * @param $message
   * @return string
   * Sens a message in prompt, wait for the user input, and return it.
   */
  public static function scanner ($message){

    echo $message."\n";
    return trim(fgets(STDIN));

  }

  /**
   * @param $cmd
   * @return string
   * return the result of the command
   */
  public static function execute ($cmd){
    return shell_exec($cmd);
  }

}
