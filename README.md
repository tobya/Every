# Every

A very simple Laravel package that will execute a closure every x times it is called.

### Installation

Install with composer 

> composer require tobya/every

### Usage

use in a loop to execute every x times

````
 foreach( $BigList as $item){
    if (DoACheck()){
      DoSomethign();
    }
    \Tobya\Every\Every::Every(20, function(){
        echo 'checked 20';
      });
  }
````

if you just want to echo you can simply use the echo function


````
 foreach( $BigList as $item){
    if (DoACheck()){
      DoSomethign();
    }
    \Tobya\Every\Every::Echo(20, 'checked 20');
      
  }
````

if you wish to use multiple Every calls in a request you can give each one a tag so that they do not get mixed up.


````
 foreach( $BigList as $item){
    if (DoACheck()){
      DoSomethign();
    }
    \Tobya\Every\Every::Every(20, function(){
                          echo 'checked 20';
                       },
                       'BiglistCheck');
  }
````
