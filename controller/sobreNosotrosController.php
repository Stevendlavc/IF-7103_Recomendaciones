<?php
class sobreNosotrosController{

    private $view;

    public function __construct() {
        $this->view = new View();
    }//constructor

    public function accionSobreNosotros(){
        $this->view->show("sobreNosotrosView.php");
    }//accionActividades
}// fin de clase
?>