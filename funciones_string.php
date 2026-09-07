<?php

$cadena_texto="Hola mundo que onda";

/* CUANTAS LETRAS TIENE LA VARIABLE*/

$longitud=strlen($cadena_texto);
echo $cadena_texto. " tiene ". $longitud. " letras <br>";

/*CUENTA LAS PALABRAS DE LA VARIABLE*/

$palabras=str_word_count($cadena_texto);
echo $cadena_texto. " tiene ". $palabras. " palabras <br>";
