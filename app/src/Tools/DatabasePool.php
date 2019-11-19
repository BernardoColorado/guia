<?php
/*
* encapsulamiento de singleton en array asociativo para la clase Medoo con capacidad extensible
*/
namespace App\Tools;

use Medoo\Medoo as Medoo;
use Medoo\Raw as Raw;

//aumentamos funcionalidad de medoo
class DatabasePool extends Medoo{

    //pool de instancias singleton
    protected static $instances=[];

    //funcion que devuelve instancias clasificadas
    public static function instanciate(array $instances){

        //obtenemos llave y settings de instancia
        $key=key($instances);
        $settings=current($instances);

        //en caso de no existir la instancia especificada se crea una nueva instancia especifica
        if (!isset(self::$instances[$key])){

            self::$instances[$key] = new self($settings);
     
        }
        //retornamos la instancia pedida
        return self::$instances[$key];

    }

    //funcion para validar passwords
    public function validatePassword(string $table,string $userField,string $passwordField,array $register){

        $line=$this->get($table,[$userField,$passwordField],[$userField=>$register[$userField]]);

        if(!isset($line[$userField])){

            return -1;

        }
        else{

            if(password_verify($register[$passwordField],$line[$passwordField])){

                return 1;

            }else{

                return 0;

            }

        }

    }

    //
    public function exists(string $table,array $register){

        $line=$this->select($table,array_keys($register),$register);

        if(count($line)){
            return true;
        }
        else{
            return false;
        }

    }
    
}


?>