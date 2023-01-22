<?php

namespace App\Models;

class Admin extends Person //herencia
{
    private $type;
    /*
    ? Método constructor
    */
    public  function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}