<?php
require_once $_SERVER["DOCUMENT_ROOT"]."APPCINE/Libs/config.php";

class actor extends ActiveRecord\Model{
    public static $primary_key = "ID";
    public static $has_many = array(array("peliculas"));
}