<?php

$clave="HolaMundo123";

/* echo hash("md5", $clave). "<br>";

foreach(hash_algos() as $algoritmos){
    echo $algoritmos. "   -   ". hash($algoritmos, $clave). "<br>";
}; */

$clave_procesada=password_hash($clave, PASSWORD_BCRYPT, ["cost"=>14]);
$clave_2="141414";
if(password_verify($clave_2, $clave_procesada)){
    echo "Las claves coinciden";
}else{
    echo "Las claves NO coinciden";
};