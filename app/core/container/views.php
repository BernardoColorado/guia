<?php

//
$container['static-views']=function($container){

  return function($config){

      return new Slim\Views\PhpRenderer($config);

  };

};
//
$container['dynamic-views']=function($container){

  return function($config){

      $view = new \Slim\Views\Twig($config);

      $router = null;
      $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
      $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

      return $view;
  };

};

?>