<?php
require_once $_SERVER["DOCUMENT_ROOT"]."APPCINE/Libs/config.php";

class sala extends ActiveRecord\Model{
    public static $primary_key = "ID";
    public static $belong_to = array(array("cine"));
    public static $has_many = array(array("funciones"));
    
}