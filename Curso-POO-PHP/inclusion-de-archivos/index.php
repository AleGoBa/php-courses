<?php

/*
? Se usa para incluir el código de un archivo en otro archivo
*/
include 'greet.php';

/*
? Hace exactamente lo mismo que el anterior, solo que si encuentra que ya se ha incluido
? el archivo anteriormente, lo manda a llamar una sola vez.
? Si el archivo se incluyó varias veces, daria un error de sintaxis, puesto que el código estaría
? duplicado.
*/

include_once 'greet.php'; // retorna un booleano

/*
? A diferencia de include, este devuelve un error fatal si no se encuentra el archivo, y detiene
? la ejecución del sistema.
*/

require 'greet.php';

/*
? La mezcla perfecta entre require e include_once.
*/

require_once 'greet.php';
