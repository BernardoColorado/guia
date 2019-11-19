<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class CapituloController extends Controller{
  //
  public function __construct(Container $container){

    //container yn sus dependencias
    $this->container=$container;
    $this->config=$this->container['config'];
    $this->databases['admision-unam']=$this->container['database'](['admision-unam'=>$this->config->database('admision-unam')]);
    $this->modules['capitulo']=$this->container['capitulo']($this->databases['admision-unam']);

  }

  public function setMainInstances(){

    

  }
  public function setDatabaseInstances(){
    
  }

  //
  public function subindex($request,$response,$args){

    $index=$this->modules['capitulo']->subindex($args['id']);

    //respuesta con cabeceras http
    $response1 = $response->withJson($index,201);
    $response2 = $response1
    ->withHeader('Access-Control-Allow-Origin', '*')
    ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');

    return $response2;

  }

}
