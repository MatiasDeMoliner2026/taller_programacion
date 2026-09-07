<?php

$cadena_texto="hola mundo";

/*$ TODO MAYUS*/
$cadena_texto=strtoupper($cadena_texto);

echo $cadena_texto. "<br>";

$cadena_texto2="HOLA MUNDO";

/*$ TODO MINUS*/
$cadena_texto2=strtolower($cadena_texto2);

echo $cadena_texto2. "<br>";

$cadena_texto3="hola mundo";

/*$ 1ER LETRA MAYUS*/
$cadena_texto3=ucfirst($cadena_texto3);

echo $cadena_texto3. "<br>";

$cadena_texto4="hola mundo";

/*$ TODAS LAS 1RAS LETRAS MAYUS*/
$cadena_texto4=ucwords($cadena_texto4);

echo $cadena_texto4;
