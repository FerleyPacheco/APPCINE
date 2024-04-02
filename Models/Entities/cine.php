<?php
require_once $_SERVER["DOCUMENT_ROOT"]."appcine/Libs/config.php";

class cine extends ActiveRecord\Model{
    public static $primary_key = "ID";
    public static $belong_to = array(array("telefono"),array("direccion"));
      
}