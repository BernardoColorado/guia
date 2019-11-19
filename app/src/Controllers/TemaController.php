<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class TemaController extends Controller{
  //
  public function __construct(Container $container){

    //container yn sus dependencias
    $this->container=$container;
    $this->config=$this->container['config'];
    $this->view=$this->container['dynamic-views']('../app//src/Views/Dynamic',['cache'=>false]);
    $this->databases['admision-unam']=$this->container['database'](['admision-unam'=>$this->config->database('admision-unam')]);
    $this->modules['materia']=$this->container['materia']($this->databases['admision-unam']);
    $this->modules['tema']=$this->container['tema']($this->databases['admision-unam']);

  }
  //
  public function subindex($request,$response,$args){

    $temas=$this->modules['tema']->subindex($args['id']);
    $materia=$this->modules['materia']->get($args['id']);

    return $this->view->render(
      $response, 
      'tema.php',
      [
        'id'=>$materia['id'],
        'materia'=>$materia['materia'],
        'img'=>$materia['img'],
        'temas'=>$temas
      ]
    );

  }

}

?>