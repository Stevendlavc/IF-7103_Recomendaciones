<?php
    class mapaController{
        
        private $view;
        
        public function __construct() {
            $this->view = new View();
        }//constructor
        
        public function accionMapa(){
        	require 'model/infoModel.php';
            $items= new infoModel();
            $datos['datos']=$items->textos();
            $this->view->show("mapaView.php",$datos);
        }//accionMapa


    }// fin de clase
?>