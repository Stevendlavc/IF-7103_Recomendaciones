<?php
class sobreNosotrosController{

    private $view;

    public function __construct() {
        $this->view = new View();
    }//constructor

    public function accionSobreNosotros(){
        require "model/sobrenosotrosModel.php";

        $sobrenosotros = new sobrenosotrosModel();
        $informacion = $sobrenosotros->obtenerInformacion("Sobre nosotros");
        $imagenes = $sobrenosotros->obtenerImagenes("Sobre nosotros");
        $estudiantes = $sobrenosotros->obtenerEstudiantes();

        $info = explode(";",$informacion[1][0][2]);

        $datos['datos'] = array($informacion[1][0][1],$info[0],$info[1],$imagenes[1][0][0],$info[2],$imagenes[1][1][0],$estudiantes[1][0][0],$estudiantes[1][0][1],$estudiantes[1][0][2],$estudiantes[1][1][0],$estudiantes[1][1][1],$estudiantes[1][1][2],$estudiantes[1][2][0],$estudiantes[1][2][1],$estudiantes[1][2][2]);

        $this->view->show("sobreNosotrosView.php",$datos);
    }//accionSobrenostros
}// fin de clase
?>