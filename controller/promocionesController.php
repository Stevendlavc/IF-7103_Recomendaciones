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

}//fin de clase