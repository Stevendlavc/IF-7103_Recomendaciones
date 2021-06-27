<?php

class recomendacionesModel
{

    protected $db;

    public function __construct()
    {
        require 'libs/SPDO.php';

        $this->db = SPDO::singleton();
    }
    //Obtiene las actividades
    public function obtenerActividades() {
        $consulta = $this->db->prepare('call sp_obtener_Actividades()');
        $consulta->execute();
        $resultado = $consulta->fetchAll(); // convierte el resultado de la consulta a un array entendible para php
        $numero_filas = $consulta->rowCount();
        $consulta->CloseCursor();

        if ($numero_filas == 0) {
            $respuestaModel[0] = "Fallo";
            return $respuestaModel;
        } else {
            $respuestaModel[0] = "Correcto";
            $respuestaModel[1] = $resultado;
            return $respuestaModel;
        }
    }

    //Obtiene los atractivos
    public function obtenerAtractivos() {
        $consulta = $this->db->prepare('call sp_obtener_Atractivos()');
        $consulta->execute();
        $resultado = $consulta->fetchAll(); // convierte el resultado de la consulta a un array entendible para php
        $numero_filas = $consulta->rowCount();
        $consulta->CloseCursor();

        if ($numero_filas == 0) {
            $respuestaModel[0] = "Fallo";
            return $respuestaModel;
        } else {
            $respuestaModel[0] = "Correcto";
            $respuestaModel[1] = $resultado;
            return $respuestaModel;
        }
    }

    //Obtiene la informacion que se muestra en la vista sobre nosotros
    public function obtenerInformacion($pagina)
    {
        $consulta = $this->db->prepare('call sp_obtener_informacion("'.$pagina.'")');
        $consulta->execute();
        $resultado = $consulta->fetchAll(); // convierte el resultado de la consulta a un array entendible para php
        $numero_filas = $consulta->rowCount();
        $consulta->CloseCursor();

        if ($numero_filas == 0) {
            $respuestaModel[0] = "Fallo";
            return $respuestaModel;
        } else {
            $respuestaModel[0] = "Correcto";
            $respuestaModel[1] = $resultado;
            return $respuestaModel;
        }
    }

    //Obtiene la informacion de una actividad
    public function obtenerInformacionActividadAtractivo($id)
    {
        $consulta = $this->db->prepare('call sp_obtener_actividad_atractivo('.$id.')');
        $consulta->execute();
        $resultado = $consulta->fetchAll(); // convierte el resultado de la consulta a un array entendible para php
        $numero_filas = $consulta->rowCount();
        $consulta->CloseCursor();

        if ($numero_filas == 0) {
            $respuestaModel[0] = "Fallo";
            return $respuestaModel;
        } else {
            $respuestaModel[0] = "Correcto";
            $respuestaModel[1] = $resultado;
            return $respuestaModel;
        }
    }


 public function frecuencias(){
        $frecuencias=array();
        $arrayFrecuencias=array();
        $consulta = $this->db->prepare('select * from frecuencias');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        //saco el numero de elementos
        $longitud = count($resultado);   
        //Recorro todos los elementos
        for($i=0; $i<$longitud; $i++){        
        //saco el valor de cada elemento y lo agrego al objeto
            $frecuencias = 
            ["atributo" => $resultado[$i]["atributo"], 
            "valor" => $resultado[$i]["valor"], 
            "clase"=> $resultado[$i]["clase"], 
            "frecuencia"=> $resultado[$i]["frecuencia"],                       
            ]; /*creacion del objetos con los datos extraidos
            se guarda cada red que se extrajo en el array*/
            array_push($arrayFrecuencias, $frecuencias);
        } //fin for 
        return $arrayFrecuencias;
    }//fin frecuenciasRecinto

    /*Esta funcion registra las probabilidades en la tabla de la base de datos*/
    public function registrarProbabilidades($data) {        
        $probabilidad=array();
        $longitud = count($data);
        for($i=0; $i<$longitud; $i++){ 
            $probabilidad = 
                    ["atributo" => $data[$i]["atributo"], 
                    "valor" => $data[$i]["valor"], 
                    "clase"=> $data[$i]["clase"], 
                    "probabilidad"=> $data[$i]["probabilidad"],                       
                    ];

            $atributo=$probabilidad["atributo"];
            $valor=$probabilidad["valor"];
            $clase=$probabilidad["clase"];
            $probabilidad=$probabilidad["probabilidad"];

        $consulta = $this->db->prepare("INSERT INTO probabilidades(atributo, valor, clase, probabilidad) VALUES ('$atributo','$valor','$clase','$probabilidad')");
        $resultado=$consulta->execute();
        var_dump($resultado);

        }   
        $consulta->CloseCursor();     
    }

    public function probabilidades(){
        $consulta = $this->db->prepare('select * from probabilidades');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        
        return $resultado;
    }//fin Probabilidades

/*Esta funcion extrae cada registro que se encuentra en la tabla seleccionada en la base de datos,
se crea el objeto estilo para luego guardarlo en un array y asi poder utilizarlos de una manera 
mas sencilla.
*/
    public function probabilidadesClase(){        
        $consulta = $this->db->prepare('select * from probabilidadclase');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();

        return $resultado;
    }//fin probabilidadesClase

    public function atractivos($clase){        
        $consulta = $this->db->prepare('select nombre, imagen1, id from atractivo_actividad where clase='.$clase);
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();

        return $resultado;
    }//fin probabilidadesClase

}