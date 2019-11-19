<?php
//
namespace App\Auth;
//
use App\Primitives\DatabaseConnection as Connection;
//
class User extends Connection{

  //singleton instance
  protected static $instance;

  public static function instanciate($database){

    if(!self::$instance instanceof self){

      self::$instance = new self($database);

    }

    return self::$instance;

  }

  //singleton 
  public function get(string $id){

    $result = [];

    return $result;

  }

  public function getBYEmail(string $email){
    
  }

  public function validate(){

    

  }

}
//
?>