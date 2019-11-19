<?php
//
namespace App\Modules;
//
use App\Primitives\DatabaseConnection as Connection;
//
class Slide extends Connection{

  //singleton instance
  protected static $instance;

  public static function instanciate($database){

    if(!self::$instance instanceof self){
      self::$instance = new self($database);
    }
    return self::$instance;
  }

  //singleton 
  public function subindex($id){

    $result = $this->database->query(
    "SELECT id AS id, parte AS parte, indice AS indice FROM parte ")->fetchAll(2);

    return $result;

  }

}
//
?>