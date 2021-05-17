<?php
    class galeriaController{
        
        private $view;
        
        public function __construct() {
            $this->view = new View();
        }//constructor
        
        public function accionGaleria(){
            $this->view->show("galeriaView.php");
        }//accionMapa
    }// fin de clase
?>