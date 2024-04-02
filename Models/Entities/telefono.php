<?php

require_once $_SERVER["DOCUMENT_ROOT"].'appcine/Libs/config.php';

class telefono extends ActiveRecord\Model {
    public static $primary_key = "telefono1";
    public static $belong_to = array(array("cine"));
}


