<?php

//configuration
require 'libs/Config.php';
$config = Config::singleton();
$config->set('controllerFolder', 'controller/');
$config->set('modelFolder', 'model/');
$config->set('viewFolder', 'view/');

/*$config->set('dbhost', 'localhost');
$config->set('dbname', '');
$config->set('dbuser', 'root');
$config->set('dbpass', 'root');
*/
$config->set('dbhost', "localhost");
$config->set('dbname', 'proyectoexpertos');
$config->set('dbuser', 'eyleenqh');
$config->set('dbpass', "Eyl1234QH-12345");

?>