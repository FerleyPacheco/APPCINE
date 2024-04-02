<?php
require_once $_SERVER["DOCUMENT_ROOT"]."APPCINE/Libs/config.php";

class direccion extends ActiveRecord\Model{
    public static $primary_key = 'ID';
    public static $table_name = 'direcciones'; //Para especificar la tabla donde guardara los datos
    public static $belong_to = array(array("cine"));
}