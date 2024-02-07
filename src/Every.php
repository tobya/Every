<?php

  namespace Tobya\Every;

class Every {

  protected static self $cache;

  protected $counts ;

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
    public static function Every(mixed $count , callable $callable, $tag = 'default'){

          $instance = Self::getInstance();
          if (isset($instance->count[$tag])){
            $instance->count[$tag] = $instance->count[$tag] +1;
          } else {
            $instance->count[$tag] = 1;
          }

          if (is_callable($count)){
            $spincount = $count();
          } else {
            $spincount = $count;
          }

          if ($instance->count[$tag] >= $spincount){
            $instance->count[$tag] = 0;
            $callable();
          }



    }

    public static function Echo($count, $string, $tag = 'default'){
      Static::Every($count, function () use($string){
        echo $string;
      },$tag);
    }


}
