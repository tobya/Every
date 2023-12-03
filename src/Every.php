<?php

  namespace Tobya\Every;

class Every {

  protected static self $cache;

  protected $count;

  /**
   * retrieve a single static instance of this class.
   * @return static
   */
    public static function getInstance(): static
    {
        return static::$cache ??= new static;
    }

  /**
   * @param $count
   * @param $callable
   * @return void
   */
    public static function Every(mixed $count , callable $callable){

          $instance = Self::getInstance();
          $instance->count = $instance->count +1;

          if (is_callable($count)){
            $spincount = $count();
          } else {
            $spincount = $count;
          }

          if ($instance->count >= $spincount){
            $instance->count = 0;
            $callable();
          }



    }

  /**
   * Short cut to simply echo out a string on every x iterations
   * @param $count
   * @param $string
   * @return void
   */
    public static function Echo($count, $string){
      Static::Every($count, function () use($string){
        echo $string;
      });
    }


}