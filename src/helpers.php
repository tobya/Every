<?php

  if (!function_exists('every')){
    function every($count, $callable){
      \Tobya\Every\Every::Every($count, $callable);
    }
  }