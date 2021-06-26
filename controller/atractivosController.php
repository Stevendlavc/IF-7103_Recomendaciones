<?php


class atractivosController
{
    private $view;

    public function __construct() {
        $this->view = new View();
    }//constructor


    public function atractivos(){
        require 'model/recomendacionesModel.php';
        $recomedaciones = new recomendacionesModel();
        $datos = Array();
        $datos['msj'] = $recomedaciones->obtenerInformacion("Atractivos");
        $datos['datos'] =  $recomedaciones->obtenerAtractivos();

        $this->view->show("atractivosView.php", $datos);
    }//vistaAtractivos
}