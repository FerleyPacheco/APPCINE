<?php

require_once $_SERVER["DOCUMENT_ROOT"].'appcine/Models/Entities/telefono.php';

$tel = new telefono;
$tel->telefono1 = 100;
$tel->telefono2 = 200;

$tel->save();
$total = telefono::count();
echo "Los registros de telefonos existentes son: ".$total;

