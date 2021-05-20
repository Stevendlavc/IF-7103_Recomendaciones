<?php


class atractivosController
{
    private $view;

    public function __construct() {
        $this->view = new View();
    }//constructor

    public function atractivos(){
        $this->view->show("atractivosView.php");
    }//vistaAtractivos
}