<?php
    class DefaultController{
        
        private $view;
        
        public function __construct() {
            $this->view = new View();
        }//constructor
        
        public function accionDefault(){    
            require 'model/inicioModel.php';
            $items= new inicioModel();
            $datos['datos']=$items->imagenesCarrousel();     
            $this->view->show("indexView.php",$datos);
        }//accionDefault

        public function textos(){
	        require 'model/infoModel.php';
	        $items = new infoModel();
	        $textos=$items->textos();
	        header('Content-Type: application/json');
	        echo json_encode($textos);//convierte el objeto en json
    	}
    }// fin de clase
?>