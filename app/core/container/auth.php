<?php
/**
 * 
 * Instancias de auntentificacion
 * 
 * Todas las instancias son singleton
 * 
 * La instancias de reglas crea reglas rapidas para validar campos de entrada
 * 
 * La instancia de chequeo valida las reglas en cascada
 * 
 * La instancia usuario es un DAO de tipo singleton que guarda usuarios y valida passwords
 * 
 * Las 3 instancias juntas permiten gestionar sesiones de forma eficiente
 * 
 */
//
$container['validation-check']=function($container){

  return new App\Auth\Validation\Check;

};
//
$container['validation-rules']=function($container){

  return App\Auth\Validation\Rules::instanciate();

};
//
$container['user']=function($container){

  return function($database){

      return new App\Auth\User($database);

  };

};


?>