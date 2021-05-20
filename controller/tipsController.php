<?php


class tipsController
{
    private $view;

    public function __construct() {
        $this->view = new View();
    }//constructor

    public function tips(){
        $this->view->show("tipsView.php");
    }//vistaTips

}