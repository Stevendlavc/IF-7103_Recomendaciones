<?php
    class recomendacionesController{
        
        private $view;
        
        public function __construct() {
            $this->view = new View();
        }//constructor
        
        public function accionRecomendaciones(){
            $this->view->show("recomendacionesView.php");
        }//accionRecomendaciones

        public function accionFormularioRecomendaciones(){
            $this->view->show("formularioRecomendacionesView.php");
        }//accionRecomendaciones

    }// fin de clase
?>