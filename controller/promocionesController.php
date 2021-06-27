<?php


class promocionesController
{
    private $view;

    public function __construct() {
        $this->view = new View();
    }//constructor

    public function promociones(){
        $this->view->show("promosView.php");
    }//vistaPromociones

    public function obtenerPromociones(){
        require 'model/promocionesModel.php';

        //Se instancia el modelo donde se encuentran las funciones que accesan a base de datos
        $model = new promocionesModel();

        //Se extraen los registros de la base de datos
        $datosBD["events"] = $model->obtenerPromociones();


        //Se retorna el resultado en formato json ya que se usó ajax
        echo json_encode($datosBD);
    }
}//fin de clase