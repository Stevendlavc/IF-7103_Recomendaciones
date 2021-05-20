<?php
class actividadesController{

    private $view;

    public function __construct() {
        $this->view = new View();
    }//constructor

    public function accionActividades(){
        $this->view->show("actividadesView.php");
    }//accionActividades
}// fin de clase
?>