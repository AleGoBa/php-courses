<?php

namespace App\Models;

use App\Interfaces\Greet;

class Person implements Greet
{
    protected $name; //encapsulación
    protected $age;

    /*
    ? Aplicando polimorfismo, sobreescribiendo la case padre "greet()".
    */
    public function greet()
    {
        return "Hola, soy $this->name";
    }

    /*
   ? En caso de que no queramos que se sobre escriba el método, en las subclases,
   ? basta con agregar "final" al inicio del método.
   */

    final public function getAge(){
        return "Mi edad es: $this->age";
    }
}