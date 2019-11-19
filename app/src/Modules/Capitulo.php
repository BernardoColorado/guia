<?php
//
namespace App\Modules;
//
use App\Primitives\DatabaseConnection as Connection;
use App\Interfaces\TableInterface as TableInterface;
//
class Capitulo extends Connection{

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
    "SELECT id, capitulo, indice, COUNT(slide) AS count 
    FROM 
    (SELECT 
    capitulo.id AS id, 
    capitulo.capitulo AS capitulo, 
    CONCAT(tema.indice,',',capitulo.indice) AS indice, 
    slide.id AS slide 
    FROM capitulo 
    INNER JOIN 
    tema ON capitulo.idTema = tema.id 
    INNER JOIN slide 
    ON capitulo.id = slide.idCapitulo 
    WHERE capitulo.idTema = $id ) AS join1 
    GROUP BY id 
    ORDER BY indice")->fetchAll(2);

    return $result;

  }

}
//
?>