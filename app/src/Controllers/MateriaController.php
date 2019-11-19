<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class MateriaController extends Controller{
  //
  public function __construct(Container $container){
    //container
    $this->container=$container;
    $this->setMainInstances();
    $this->setDatabaseInstances();
    $this->setViewInstances();
    $this->setAuthInstances();
    $this->setModuleInstances();
  }
  //
  protected function setMainInstances(){
    $this->config=$this->container['config'];
    $this->global=$this->config->global();
  }
  //
  protected function setDatabaseInstances(){

    $this->databases['admision-unam']=$this->container['database'](['admision-unam'=>$this->config->database('admision-unam')]);

  }
  //
  protected function setViewInstances(){
  
    $this->view=$this->container['dynamic-views']('../app//src/Views/Dynamic',['cache'=>false]);

  }
  //
  protected function setAuthInstances(){

  }
  //
  protected function setModuleInstances(){
    $this->modules['materia']=$this->container['materia']($this->databases['admision-unam']);
  }
  //
  public function index($request,$response){

    //vector stock
    $index=$this->modules['materia']->index();
    return $this->view->render($response, 'materia.php',['materias'=>$index]);
  }

}

?>