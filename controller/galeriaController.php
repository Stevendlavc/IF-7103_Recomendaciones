<?php
    class galeriaController{
        
        private $view;
        
        public function __construct() {
            $this->view = new View();
        }//constructor
        
        public function accionGaleria(){         
            require 'model/galeriaModel.php';
            $items= new galeriaModel();
            $datos['datos']=$items->imagenesActividad();
            $datos2['datos2']=$items->imagenesAtractivo();     
            $this->view->show("galeriaView.php",$datos, $datos2);
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