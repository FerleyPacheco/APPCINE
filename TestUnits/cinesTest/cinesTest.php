<?php

require_once $_SERVER["DOCUMENT_ROOT"].'appcine/Models/Entities/cine.php';

$cin = new cine;
$cin->ID = 10;
$cin->NOMBRE = "Cinelan";
$cin->DIRECCION_ID = 01;
$cin->TELEFONO_TELEFONO1 = 100;

$cin->save();

$totalCine = cine::count();
echo "Los registros de cines existentes son: ".$totalCine;