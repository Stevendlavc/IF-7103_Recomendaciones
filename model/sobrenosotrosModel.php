<?php

class sobrenosotrosModel
{

    protected $db;

    public function __construct()
    {
        require 'libs/SPDO.php';

        $this->db = SPDO::singleton();
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

    public function obtenerEstudiantes()
    {
        $consulta = $this->db->prepare('call sp_obtener_estudiantes');
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

    public function obtenerImagenes($paginas)
    {
        $consulta = $this->db->prepare('call sp_obtener_imagenes("'.$paginas.'")');
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