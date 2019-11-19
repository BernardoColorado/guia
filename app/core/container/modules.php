<?php
$container['tema']=function($container){

  return function($database){

      return App\Modules\Tema::instanciate($database);

  };

};
//
$container['materia']=function($container){

  return function($database){

      return App\Modules\Materia::instanciate($database);

  };

};
//
$container['capitulo']=function($container){

  return function($database){

      return App\Modules\Capitulo::instanciate($database);
      
  };

};
//