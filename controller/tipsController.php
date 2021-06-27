<?php


class tipsController
{
    private $view;

    public function __construct() {
        $this->view = new View();
    }//constructor

    public function tips(){
        require 'model/tipsModel.php';

        //Se instancia el modelo donde se encuentran las funciones que accesan a base de datos
        $model = new tipsModel();

        //Se extraen los registros de la base de datos
        $datosBD = $model->obtenerTips();

        $this->view->show("tipsView.php", $datosBD);
    }//vistaTips

}