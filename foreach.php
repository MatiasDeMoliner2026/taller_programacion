<?php

$laptop=["Acer Nitro 5", "Windows 11", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 24GB"];

$frutas=[
    "fresas"=>100,
    "peras"=>30,
    "sandias"=>10,
    "melocotones"=>17,
    "manzanas"=>9
];

foreach($frutas as $clave => $valor){
    echo "Hay ". $valor." ". $clave. " en el inventario". "<br>";    
}