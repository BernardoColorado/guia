<?php
//
namespace App\Modules;
//
use App\Primitives\DatabaseConnection as Connection;
use App\Interfaces\TableInterface as TableInterface;
//
class Usuario extends Connection{

  //singleton instance
  protected static $instance;

  public static function instanciate($database){

    if(!self::$instance instanceof self){

      self::$instance = new self($database);

    }

    return self::$instance;

  }

  //singleton 
  public function get($id){

    $result = [];

    return $result;

  }

  public function getBYEmail(){
    
  }

  public function validate(){

    

  }

}
//
?>