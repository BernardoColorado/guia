<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class HomeController extends Controller{
  //
  public function __construct(Container $container){

    //container yn sus dependencias
    $this->container=$container;
    $this->config=$this->container['config'];
    $this->databases['admision-unam']=$this->container['database'](['admision-unam'=>$this->config->database('admision-unam')]);
    $this->modules['capitulo']=$this->container['capitulo']($this->databases['admision-unam']);

  }
  //
  public function index($request,$response,$args){

    echo('cool');

  }

}
