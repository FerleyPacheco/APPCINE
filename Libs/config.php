<?php
//echo $_SERVER["DOCUMENT_ROOT"];

require_once $_SERVER["DOCUMENT_ROOT"]."appcine/Libs/orm/ActiveRecord.php";

ActiveRecord\Config::initialize(function($cfg)
{
   $cfg->set_model_directory($_SERVER["DOCUMENT_ROOT"]."appcine/Libs/orm/ActiveRecord.php");
   $cfg->set_connections(
     array(
       'development' => 'mysql://root:root@localhost/appcine',
       //'test' => 'mysql://username:password@localhost/test_database_name',
       //'production' => 'mysql://username:password@localhost/production_database_name'
     )
   );
});

?>