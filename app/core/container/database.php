<?php
//
$container['database']=function($container){

  return function($config){

      return App\Tools\DatabasePool::instanciate($config);

  };

};
//
?>