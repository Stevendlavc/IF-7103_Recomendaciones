<?php

//configuration
require 'libs/Config.php';
$config = Config::singleton();
$config->set('controllerFolder', 'controller/');
$config->set('modelFolder', 'model/');
$config->set('viewFolder', 'view/');

$config->set('dbhost', "163.178.107.10:3306");
$config->set('dbname', 'proyectoexpertos');
$config->set('dbuser', 'laboratorios');
$config->set('dbpass', "KmZpo.2796");
/*
$config->set('dbhost', "localhost");
$config->set('dbname', 'proyectoexpertos');
$config->set('dbuser', 'eyleenqh');
$config->set('dbpass', "Eyl1234QH-12345");*/

?>