<?php

namespace App\Models;

/*
? Si queremos evitar que una clase sea usada para la herencia, se debe poner la palabra reservada: "final".
? Entonces, todos sus métodos pasan a ser finales.
*/
final class User extends Person {
    public $type;
    public  function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function greet(){
        return "Hola, soy un usuario y mi nombre es: $this->name";
    }
}