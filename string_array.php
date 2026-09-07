<?php

$fecha1="2021/11/29";
$fecha2="2000-11-30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

/*MUESTRA LO QUE SE PONE DENTRO DEL ()*/
$array_fecha=explode("-", $fecha2);

echo $array_fecha[0];

$fecha1="2021/11/29";
$fecha2="2000-11-30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

/*MUESTRA LO QUE SE PONE DENTRO DEL ()*/
$array_num=explode(" ", $numeros, 3);

echo $array_num[1];