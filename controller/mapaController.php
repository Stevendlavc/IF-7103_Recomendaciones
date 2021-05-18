<?php
    class mapaController{
        
        private $view;
        
        public function __construct() {
            $this->view = new View();
        }//constructor
        
        public function accionMapa(){
            $this->view->show("mapaView.php");
        }//accionMapa
    }// fin de clase
?>