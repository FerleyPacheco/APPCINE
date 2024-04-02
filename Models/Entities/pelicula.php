<?php
require_once $_SERVER["DOCUMENT_ROOT"]."APPCINE/Libs/config.php";

class pelicula extends ActiveRecord\Model{
    public static $primary_key = "ID";
    public static $belong_to = array(array("directore"));
    public static $has_many = array(array("opiniones"), array("funciones"), array("actores_peliculas"));

}