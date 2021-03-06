<?php

class FrontController {
    static function main(){
        require 'libs/View.php';
        require 'libs/configuration.php';

        if(!empty($_GET['controlador'])){
            $controllerName = $_GET['controlador'].'Controller';
        }else{
            $controllerName = 'DefaultController';
        }
        
        if(!empty($_GET['accion'])){
            $nombreAccion = $_GET['accion'];
        }else{
            $nombreAccion = 'accionDefault';
        }
        
        $rutaController = $config->get('controllerFolder').$controllerName.'.php';
        
        if(is_file($rutaController)){
            require $rutaController;
        }else{
            die('Controlador no encontrado - 404 not found');
        }
        
        if(is_callable(array($controllerName, $nombreAccion))==FALSE){
            trigger_error($controllerName.'-> '.$nombreAccion.' no existe', E_USER_NOTICE);
            return FALSE;
        }
        
        $controller = new $controllerName();//construye un objeto de un tipo x
        $controller->$nombreAccion();//ejecuta la accion que se encuentra dentro de ese objeto x
    }//main
}//fin clase
?>