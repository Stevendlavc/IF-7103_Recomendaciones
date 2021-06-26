<?php
    class recomendacionesController{
        
        private $view;
        
        public function __construct() {
            $this->view = new View();
        }//constructor


        public function accionFormularioRecomendaciones(){
            $this->view->show("formularioRecomendacionesView.php");
        }//accionRecomendaciones


        public function buscarRecomendaciones(){
            require 'model/recomendacionesModel.php';
            $recomedaciones = new recomendacionesModel();

            $tipo = $_POST['tipo'];
            $datos = array();
            if($tipo === '1'){
                $datos['msj'] = $recomedaciones->obtenerInformacion("Recomendaciones");
                $datos['datos'] = $this->accionRecomendacionesActividades($recomedaciones);
            }else{
            }

            $this->view->show("recomendacionesView.php", $datos);
        }

        public function accionRecomendacionesActividades($algoritmos){
            $precio = $_POST['precio'];
            $turista = $_POST['turista'];
            $provincia = $_POST['provincia'];
            $tipoLugar = $_POST['tipoActividad'];
            $arreglo = array($precio, $turista, $provincia,$tipoLugar);

            //llama al metodo obtenerDeterminarRed() para obtener los datos alamcenados
            $datos['bd'] = $algoritmos->obtenerActividades();


            //Verifica que los datos se obtuvieron exitosamente
            if (strcasecmp($datos['bd'][0], "Correcto") == 0) {
               $elementos = $datos['bd'][1];

                //Se recorren los datos almacenados en la base de datos y deacuerdo a sus valores se cambian por numeros
                //Asi se podran usar en el algoritmo que calcula la distancia
                for ($i = 0; $i < sizeof($elementos); $i++) {
                    //precio
                    if ($elementos[$i][0] <= 10000) {
                        $elementos[$i][0] = 1;
                    } elseif ($elementos[$i][0] > 10000 && $elementos[$i][0] <= 50000) {
                        $elementos[$i][0] = 2;
                    } else {
                        $elementos[$i][0] = 3;
                    }

                    //tipo turista
                    if ($elementos[$i][1] === "Explorador") {
                        $elementos[$i][1] = 1;
                    } elseif ($elementos[$i][1] === "Extremo") {
                        $elementos[$i][1] = 2;
                    } elseif ($elementos[$i][1] === "Tranquilo") {
                        $elementos[$i][1] = 3;
                    } else {
                        //aventureros
                        $elementos[$i][1] = 4;
                    }

                    //provincia
                    if ($elementos[$i][2] === "San Jose") {
                        $elementos[$i][2] = 1;
                    } elseif ($elementos[$i][2] === "Alajuela") {
                        $elementos[$i][2] = 2;
                    } elseif ($elementos[$i][2] === "Cartago") {
                        $elementos[$i][2] = 3;
                    } elseif ($elementos[$i][2] === "Heredia") {
                        $elementos[$i][2] = 4;
                    } elseif ($elementos[$i][2] === "Guanacaste") {
                        $elementos[$i][2] = 5;
                    } elseif ($elementos[$i][2] === "Puntarenas") {
                        $elementos[$i][2] = 6;
                    } else {
                        //limon
                        $elementos[$i][2] = 7;
                    }

                    //tipoLugar
                    if ($elementos[$i][3] === "Montaña") {
                        $elementos[$i][3] = 6;
                    } else {
                        //mar
                        $elementos[$i][2] = 7;
                    }

                }
                $respuesta = $this->euclidesTipo($arreglo, $elementos);

                //buscar info con esos nombres
                return $respuesta;
            } else {
                $respuesta= "Ocurrio un error";
                return $respuesta;
            }
        }

        public function euclidesTipo($ingresados, $almacenados) {
            $clase = "";
            $contador = 0;
            $nombres = array();
            $seleccionados = array();
            //Recorro todos los registros que estan almacenados
            foreach ($almacenados as $datos) {
                //se calcula la raiz de la suma total
                $calculoeuclides = $this->algoritmoEuclides($ingresados, $datos);
                //valida si es el primer registro calculado y de ser asi guarda los datos para proximas comparaciones
                if ($contador < 5) {
                    $seleccionados[$contador] = $calculoeuclides;
                    $nombres[$contador] = array($datos[4],$datos[5],$datos[6]);
                    $ordenamiento = $this->algoritmoOrdenamiento($seleccionados,$nombres);
                    $seleccionados =$ordenamiento[0];
                    $nombres =$ordenamiento[1];
                } else {
                    //se valida si la distancia es mayor que el calculo de uclides realizado
                    //Si es mayor entonces esa sustituye la nueva distancia mas cercana
                    for ($i = 0; $i < sizeof($seleccionados); $i++) {
                        if ($seleccionados[$i] > $calculoeuclides) {
                            $tempDistancia = 0;
                            $tempNombre = "";
                            for ($j = $i; $j < sizeof($seleccionados); $j++) {
                                $temporal = $seleccionados[$j];
                                $temporalNombre =$nombres[$j];

                                if($j === $i){
                                    $seleccionados[$j] = $calculoeuclides;
                                    $nombres[$j] = array($datos[4],$datos[5],$datos[6]);
                                }else{
                                    $seleccionados[$j] =  $tempDistancia;
                                    $nombres[$j] = $tempNombre;
                                }
                                $tempDistancia = $temporal;
                                $tempNombre = $temporalNombre;

                            }

                            break;
                        }
                    }
                }
                $calculoeuclides = 0;
                $contador++;
            }
            return $nombres;
        }

        //Realiza la sumatoria de la resta de los datos y luego retorna la raiz de la sumatoria
        public function algoritmoEuclides($ingresados, $datos) {
            $suma = 0;
            //Recorro los datos ingresados y se les restan los atributos de los datos almacenados ubicados en la misma posicion
            //Se eleva a la 2 cada resta realizada
            for ($i = 0; $i < sizeof($ingresados); $i++) {
                $suma = $suma + pow(($ingresados[$i] - floatval($datos[$i])), 2);
            }

            //retorna la raiz de la suma
            return sqrt($suma);
        }

        public function algoritmoOrdenamiento($arreglo, $nombres) {
            $longitud = count($arreglo);
            for ($i = 0; $i < $longitud; $i++) {
                for ($j = 0; $j < $longitud - 1; $j++) {
                    if ($arreglo[$j] > $arreglo[$j + 1]) {
                        $temporal = $arreglo[$j];
                        $temporalnombres = $nombres[$j];

                        $arreglo[$j] = $arreglo[$j + 1];
                        $nombres[$j] = $nombres[$j + 1];

                        $arreglo[$j + 1] = $temporal;
                        $nombres[$j + 1] = $temporalnombres;
                    }
                }
            }
            $datos[0] = $arreglo;
            $datos[1] =$nombres;
            return $datos;
        }

        public function obtenerInformacion(){
            require 'model/recomendacionesModel.php';
            $recomedaciones = new recomendacionesModel();

            $id = $_POST['id'];
            $datos['info'] = $recomedaciones->obtenerInformacionActividadAtractivo($id);

            echo json_encode($datos);
        }

    }// fin de clase
?>