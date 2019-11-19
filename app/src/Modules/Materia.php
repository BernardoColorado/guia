<?php
//
namespace App\Modules;
//
use App\Primitives\DatabaseConnection as Connection;
use App\Interfaces\TableInterface as TableInterface;
//
class Materia extends Connection{

  //singleton instance
  protected static $instance;

  public static function instanciate($database){

    if(!self::$instance instanceof self){

      self::$instance = new self($database);

    }

    return self::$instance;

  }

  //singleton 
  public function index(){

    $result = $this->database->query(
    "SELECT 
    id, 
    materia, 
    COUNT(tema) AS count, 
    img 
    FROM 
    (SELECT 
    materia.id AS id, 
    materia.materia AS materia, 
    materia.img AS img, 
    tema.tema 
    FROM 
    materia 
    INNER JOIN tema 
    ON materia.id = tema.idMateria) 
    AS join1 
    GROUP BY id"
    )->fetchAll(2);

    return $result;

  }

  //
  public function get($id){

    $line=$this->database->get('materia',['id','materia','img'],['id[=]'=>$id]);

    return $line;

  }

}
//
?>