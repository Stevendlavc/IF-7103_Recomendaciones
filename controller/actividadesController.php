<?php
class actividadesController{

    private $view;

    public function __construct() {
        $this->view = new View();
    }//constructor

    public function accionActividades(){
        require 'model/recomendacionesModel.php';
        $recomedaciones = new recomendacionesModel();
        $datos = Array();
        $datos['msj'] = $recomedaciones->obtenerInformacion("Actividades");
        $datos['datos'] =  $recomedaciones->obtenerActividades();

        $this->view->show("actividadesView.php", $datos);
    }//accionActividades
}// fin de clase
?>