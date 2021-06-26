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


}