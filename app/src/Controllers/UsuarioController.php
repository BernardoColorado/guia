<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class UsuarioController extends Controller{
    
    //mandamos llamar dependencias del container
    public function __construct(Container $container){

        //container yn sus dependencias
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

        //instanciamos DAO especial de usuario
        $this->auth['user']=$this->container['user']($this->databases['admision-unam']);
        //instanciamos la fabrica de reglas para validacion
        $this->auth['rules']=$this->container['validation-rules'];
        //instanciamos checador de reglas
        $this->auth['check']=$this->container['validation-check'];

    }
    //
    protected function setModuleInstances(){

        $this->modules['materia']=$this->container['materia']($this->databases['admision-unam']);

    }

    public function signup($request,$response,$args){

        return $this->view->render($response, 'signup.php',[]);

    }

    public function signin($request,$response,$args){
        
        return $this->view->render($response, 'signin.php',[]);

    }

    public function payment($request,$response,$args){
        
        return $this->view->render($response, 'payment.php',[]);

    }

}

?>