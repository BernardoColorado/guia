<?php
//
namespace App\Modules;
//
use App\Primitives\DatabaseConnection as Connection;
use App\Interfaces\TableInterface as TableInterface;
//
class Tema extends Connection{

  //singleton instance
  protected static $instance;

  public static function instanciate($database){

    if (!self::$instance instanceof self){

      self::$instance = new self($database);

    }

    return self::$instance;
  }

  //
  public function subindex($id){

    $result = $this->database->query(
      "SELECT id, COUNT(capitulo) AS count, tema, indice 
      FROM 
      (SELECT tema.id AS id, 
      tema.indice AS indice, 
      tema.tema AS tema, 
      capitulo.capitulo AS capitulo 
      FROM tema 
      INNER JOIN capitulo 
      ON tema.id = capitulo.idTema 
      WHERE tema.idMateria = $id ) 
      AS join1 
      GROUP BY id")->fetchAll(2);

    return $result;

  }

}

?>