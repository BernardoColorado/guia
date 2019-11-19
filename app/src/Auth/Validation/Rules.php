<?php

namespace App\Auth\Validation;

use Respect\Validation\Validator as Validator;

class Rules{

  protected $rules=[];

  protected static $instance=null;

  public static function instanciate(){

    if (!self::$instance instanceof self){

     self::$instance = new self;
    
    }
    return self::$instance;
  }

  //
  public function __construct(){

    $this->rules=[
      'alpha'=>Validator::noWhitespace()->notEmpty()->alpha(),
      'alphanumeric'=>Validator::noWhitespace()->notEmpty()->alnum(),
      'numeric'=>Validator::noWhitespace()->notEmpty()->numeric(),
      'email'=>Validator::noWhitespace()->notEmpty()->email(),
      'digit'=>Validator::noWhitespace()->notEmpty()->digit(),
      'phrase'=>Validator::notEmpty()->alnum()
    ];

  }

  public function getRules(array $rules){

    //arreglo vacio de reglas
    $_rules=[];

    //creamos arreglo de reglas con nombres
    foreach ($rules as $key => $rule) {
      
      //llave como nombre y valor como regla
      $_rules[$key]=$this->rules[$rule];

    }

    //regresamos arreglo de reglas
    return $_rules;

  }

}

?>