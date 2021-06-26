<?php
class galeriaModel{
    public $db;   

    // constructor
    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }

/*Esta funcion extrae cada registro que se encuentra en la tabla seleccionada en la base de datos,
se crea el objeto estilo para luego guardarlo en un array y asi poder utilizarlos de una manera 
mas sencilla.
*/
    public function textos() {
        $informacion=array();
        $arrayTextos=array();
        $consulta = $this->db->prepare('select * from informacion');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        //saco el numero de elementos
        $longitud = count($resultado);             
        //Recorro todos los elementos
        for($i=0; $i<$longitud; $i++){        
        //saco el valor de cada elemento y lo agrego al objeto
            $informacion = 
            ["pagina" => $resultado[$i]["pagina"], 
            "descripcion" => $resultado[$i]["descripcion"], 
            "titulo"=> $resultado[$i]["titulo"], 
            "informacion"=> $resultado[$i]["informacion"],            
            ]; //creacion del objetos con los datos extraidos
            //se guarda cada estilo que se extrajo en el array
            array_push($arrayTextos, $informacion);     
        } //fin for
        return $arrayTextos;
    }//fin estiloAprendizaje


    public function imagenesActividad() {
        $imagenes=array(); 
        $ArrayImagenes=array();       
        $consulta = $this->db->prepare('select nombre, descripcion, imagen1 from atractivo_actividad where tipoActividadAtractivo="Actividad"');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        $longitud = count($resultado);    
        for($i=0; $i<$longitud; $i++){
            $imagenes = 
            ["nombre"=> $resultado[$i]["nombre"],
            "descripcion"=>$resultado[$i]["descripcion"], 
            "imagen1" => $resultado[$i]["imagen1"],                                  
            ]; //creacion del objetos con los datos extraidos         
            array_push($ArrayImagenes,$imagenes);
        }
        return $ArrayImagenes;
    }

    public function imagenesAtractivo() {
        $imagenes=array(); 
        $ArrayImagenes=array();       
        $consulta = $this->db->prepare('select nombre, descripcion, imagen1 from atractivo_actividad where tipoActividadAtractivo="Atractivo"');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        $longitud = count($resultado);    
        for($i=0; $i<$longitud; $i++){
            $imagenes = 
            ["nombre"=> $resultado[$i]["nombre"],
            "descripcion"=>$resultado[$i]["descripcion"], 
            "imagen1" => $resultado[$i]["imagen1"],                                  
            ]; //creacion del objetos con los datos extraidos         
            array_push($ArrayImagenes,$imagenes);
        }
        return $ArrayImagenes;
    }

}//fin clase
?>