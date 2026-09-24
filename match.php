<?php

$a=7;

$x=10;
$y=9;
$z=7;

$resultado=match($a){
    $x => "Valor igual a X",
    $y => "Valor igual a Y",
    $z => "Valor igual a Z",
    default => "No coincide con ninguna variable"
};

echo $resultado;