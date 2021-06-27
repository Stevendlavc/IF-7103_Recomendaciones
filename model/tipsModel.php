<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 27-Jun-21
 * Time: 2:30 PM
 */

class tipsModel
{
    //Se declara la base de datos
    protected $db;

    //Constructor
    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }

    //Funciones de obtención de datos provenientes de la base de datos
    public function obtenerTips(){
        $consulta = $this->db->prepare('select * from tips');
        $consulta->execute();
        $datos = $consulta->fetchAll();
        $consulta->CloseCursor();

        return $datos;
    }

}