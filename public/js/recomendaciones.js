/********************************ENTRENAMIENTO*************************************************/
/*Se extraen los registros de la base que fueron guardados previamente y 
se guardan en una variable global para poder utilizarlos
*/
let arrayFrecuencias=[];
let arrayProbabilidades=[];
datos();

/*Funcion en donde obtenemos los datos que se guardaron en el controlador 
para poder ser utilizados en la vista, se guardan en la variable global*/
    function datos() {      
        $.ajax({
            url: '?controlador=recomendaciones&accion=itemsFrecuencias',
            method: 'GET',
            
            success: function(frecuencias) {
                arrayFrecuencias=frecuencias;
                /*metodos para entrenamiento*/
                //probabilidad(arrayFrecuencias);
                //calcularProbabilidad();

            }
        })
    }//fin datos

    /*Funcion donde se calculan las probabilidades con Naive bayes*/
    function probabilidad(arrayFrecuencias){
        var nc=0;
        var m=4;
        var p=0;

        var precio=1/3;
        var turista=1/4;
        var tipoAtractivo=1/5;
        var provincia=1/7;

        var clase1=32;
        var clase2=24;
        var clase3=2;

        var multiplicacion=0;
  
        var Probabilidad=0;

       /*Se recorre el array para poder guardar las frecuencias, el n de cada registro*/
        for(var i=0; i<arrayFrecuencias.length;i++){            
            if(arrayFrecuencias[i].atributo==="precio" && arrayFrecuencias[i].clase==="1"){
                nc=arrayFrecuencias[i].frecuencia;
                p=precio;
                n=clase1;

            }else if(arrayFrecuencias[i].atributo==="precio" && arrayFrecuencias[i].clase==="2"){
                nc=arrayFrecuencias[i].frecuencia;
                p=precio;
                n=clase2;

            }else if(arrayFrecuencias[i].atributo==="precio" && arrayFrecuencias[i].clase==="3"){
                nc=arrayFrecuencias[i].frecuencia;
                p=precio;
                n=clase3;

            } else if(arrayFrecuencias[i].atributo==="tipoturista" && arrayFrecuencias[i].clase==="1"){
                nc=arrayFrecuencias[i].frecuencia;
                p=turista;
                n=clase1;
               
            }else if(arrayFrecuencias[i].atributo==="tipoturista" && arrayFrecuencias[i].clase==="2"){
                nc=arrayFrecuencias[i].frecuencia;
                p=turista;
                n=clase2;

            }else if(arrayFrecuencias[i].atributo==="tipoturista" && arrayFrecuencias[i].clase==="3"){
                nc=arrayFrecuencias[i].frecuencia;
                p=turista;
                n=clase3;               
            
            } else if(arrayFrecuencias[i].atributo==="tipolugar" && arrayFrecuencias[i].clase==="1"){
                nc=arrayFrecuencias[i].frecuencia;
                p=tipoAtractivo;
                n=clase1;
               
            }else if(arrayFrecuencias[i].atributo==="tipolugar" && arrayFrecuencias[i].clase==="2"){
                nc=arrayFrecuencias[i].frecuencia;
                p=tipoAtractivo;
                n=clase2; 

            }else if(arrayFrecuencias[i].atributo==="tipolugar" && arrayFrecuencias[i].clase==="3"){
                nc=arrayFrecuencias[i].frecuencia;
                p=tipoAtractivo;
                n=clase3;              
                                                    
            }else if(arrayFrecuencias[i].atributo==="provincia" && arrayFrecuencias[i].clase==="1"){
                nc=arrayFrecuencias[i].frecuencia;
                p=provincia;
                n=clase1;
               
            }else if(arrayFrecuencias[i].atributo==="provincia" && arrayFrecuencias[i].clase==="2"){
                nc=arrayFrecuencias[i].frecuencia;
                p=provincia;
                n=clase2; 

            }else if(arrayFrecuencias[i].atributo==="provincia" && arrayFrecuencias[i].clase==="3"){
                nc=arrayFrecuencias[i].frecuencia;
                p=provincia;
                n=clase3;  
            }
            /*Se realiza la formula de bayes para sacar las probabilidades de cada atributo de la clase*/
            suma1 =Number(nc)+ Number(m*p);
            suma2= Number(n)+Number(m);  
            Probabilidad=suma1/suma2; 
            /*Se crea un objeto donde se guardara los resultados de las probabilidades para luego guardarlo 
            en un array */
            var probabilidad = new Object();
            probabilidad.atributo = arrayFrecuencias[i].atributo;
            probabilidad.clase = arrayFrecuencias[i].clase;
            probabilidad.probabilidad = Probabilidad;
            probabilidad.valor=arrayFrecuencias[i].valor; 
            arrayProbabilidades.push(probabilidad);
            console.log(probabilidad); 
        }      
        
    }
    

    /*En este metodo se envia el array con las probabilidades*/
    function calcularProbabilidad(){
        $.ajax({
              type: "POST",
              url: '?controlador=recomendaciones&accion=registrarProbabilidades',
              data: {'array': JSON.stringify(arrayProbabilidades)},//capturo array     
              success: function(data){                              
                console.log(data);
            }, 
            error: function(data){
                console.log(data);
            }
        });
    }


function activarActividad() {
    document.getElementById("divActividad").hidden = false;
    document.getElementById("divAtractivo").hidden = true;

}

function activarAtractivo() {
    document.getElementById("divActividad").hidden = true;
    document.getElementById("divAtractivo").hidden = false;
}


function cargarModal(id) {
    var parametros = {
        "id": id
    };
    $.ajax(
        {
            data: parametros,
            url: '?controlador=recomendaciones&accion=obtenerInformacion',
            type: 'post',
            dataType: 'json',
            beforeSend: function () {
            },
            success: function (response) { //en response va el resultado
                var lista = response.info[1][0];
                document.getElementById("titulo").innerText = lista[0];
                document.getElementById("descripcion").innerText = lista[1];
                document.getElementById("costo").innerText = lista[2];
                document.getElementById("imagen1").src = "public/img/"+lista[3];
                document.getElementById("imagen2").src = "public/img/"+lista[4];
                document.getElementById("video").src = "https://www.youtube.com/embed/"+lista[5];
                document.getElementById("mapa").src = lista[6];
            },
            error: function () {
                console.log("Llego");
            }
        }
    );

}

function filtrarActividades() {
        var cantidad = document.getElementById("cantidadRegistros").value;
        var seleccionado = document.getElementById("select-actividades").value;
        var tipoLugar ="";
        var contadorPosicion = 1;
        if (seleccionado === "1") {
            for (var i = 0; i < cantidad; i++) {
                if(contadorPosicion === 4){
                    contadorPosicion = 1;
                }

                nombreInput = "id" + (i + 1)
                tipoLugar = document.getElementById(nombreInput).value;
                nombreDiv = "div" + (i + 1)
                if (tipoLugar === "Mar") {
                    document.getElementById(nombreDiv).hidden = false;
                    document.getElementById(nombreDiv).style.gridColumnStart = contadorPosicion;
                    document.getElementById(nombreDiv).style.gridColumnEnd = contadorPosicion;
                    contadorPosicion++;
                }else{
                    document.getElementById(nombreDiv).hidden = true;
                }
            }

        } else {
            if (seleccionado === "2") {
                for (var i = 0; i < cantidad; i++) {
                    if(contadorPosicion === 4){
                        contadorPosicion = 1;
                    }

                    nombreInput = "id" + (i + 1)
                    tipoLugar = document.getElementById(nombreInput).value;
                    nombreDiv = "div" + (i + 1)
                    if (tipoLugar === "Montaña") {
                        document.getElementById(nombreDiv).hidden = false;
                        document.getElementById(nombreDiv).style.gridColumnStart = contadorPosicion;
                        document.getElementById(nombreDiv).style.gridColumnEnd = contadorPosicion;
                        contadorPosicion++
                    }else{
                        document.getElementById(nombreDiv).hidden = true;
                    }
                }
            } else {
                if (seleccionado === "0") {
                    for (var i = 0; i < cantidad; i++) {
                        if(contadorPosicion === 4){
                            contadorPosicion = 1;
                        }

                        nombreDiv = "div" + (i + 1)
                        document.getElementById(nombreDiv).hidden = false;
                        document.getElementById(nombreDiv).style.gridColumnStart = contadorPosicion;
                        document.getElementById(nombreDiv).style.gridColumnEnd = contadorPosicion;

                        contadorPosicion++
                    }
                }
            }
        }
}

function filtrarAtractivos() {
    var cantidad = document.getElementById("cantidadRegistros").value;
    var seleccionado = document.getElementById("select-atractivos").value;
    var tipoLugar ="";
    var contadorPosicion = 1;
    if (seleccionado === "1") {
        for (var i = 0; i < cantidad; i++) {
            if(contadorPosicion === 4){
                contadorPosicion = 1;
            }

            nombreInput = "id" + (i + 1)
            tipoLugar = document.getElementById(nombreInput).value;
            nombreDiv = "div" + (i + 1)
            if (tipoLugar === "Parque") {
                document.getElementById(nombreDiv).hidden = false;
                document.getElementById(nombreDiv).style.gridColumnStart = contadorPosicion;
                document.getElementById(nombreDiv).style.gridColumnEnd = contadorPosicion;
                contadorPosicion++;
            }else{
                document.getElementById(nombreDiv).hidden = true;
            }
        }

    } else {
        if (seleccionado === "2") {
            for (var i = 0; i < cantidad; i++) {
                if(contadorPosicion === 4){
                    contadorPosicion = 1;
                }

                nombreInput = "id" + (i + 1)
                tipoLugar = document.getElementById(nombreInput).value;
                nombreDiv = "div" + (i + 1)
                if (tipoLugar === "Volcán") {
                    document.getElementById(nombreDiv).hidden = false;
                    document.getElementById(nombreDiv).style.gridColumnStart = contadorPosicion;
                    document.getElementById(nombreDiv).style.gridColumnEnd = contadorPosicion;
                    contadorPosicion++
                }else{
                    document.getElementById(nombreDiv).hidden = true;
                }
            }
        } else {
            if (seleccionado === "3") {
                for (var i = 0; i < cantidad; i++) {
                    if(contadorPosicion === 4){
                        contadorPosicion = 1;
                    }

                    nombreInput = "id" + (i + 1)
                    tipoLugar = document.getElementById(nombreInput).value;
                    nombreDiv = "div" + (i + 1)
                    if (tipoLugar === "Museo") {
                        document.getElementById(nombreDiv).hidden = false;
                        document.getElementById(nombreDiv).style.gridColumnStart = contadorPosicion;
                        document.getElementById(nombreDiv).style.gridColumnEnd = contadorPosicion;
                        contadorPosicion++
                    }else{
                        document.getElementById(nombreDiv).hidden = true;
                    }
                }
            } else {
                if (seleccionado === "4") {
                    for (var i = 0; i < cantidad; i++) {
                        if(contadorPosicion === 4){
                            contadorPosicion = 1;
                        }

                        nombreInput = "id" + (i + 1)
                        tipoLugar = document.getElementById(nombreInput).value;
                        nombreDiv = "div" + (i + 1)
                        if (tipoLugar === "Reserva") {
                            document.getElementById(nombreDiv).hidden = false;
                            document.getElementById(nombreDiv).style.gridColumnStart = contadorPosicion;
                            document.getElementById(nombreDiv).style.gridColumnEnd = contadorPosicion;
                            contadorPosicion++
                        }else{
                            document.getElementById(nombreDiv).hidden = true;
                        }
                    }
                } else {
                    if (seleccionado === "5") {
                        for (var i = 0; i < cantidad; i++) {
                            if(contadorPosicion === 4){
                                contadorPosicion = 1;
                            }

                            nombreInput = "id" + (i + 1)
                            tipoLugar = document.getElementById(nombreInput).value;
                            nombreDiv = "div" + (i + 1)
                            if (tipoLugar === "Playa") {
                                document.getElementById(nombreDiv).hidden = false;
                                document.getElementById(nombreDiv).style.gridColumnStart = contadorPosicion;
                                document.getElementById(nombreDiv).style.gridColumnEnd = contadorPosicion;
                                contadorPosicion++
                            }else{
                                document.getElementById(nombreDiv).hidden = true;
                            }
                        }
                    } else {
                        if (seleccionado === "0") {
                            for (var i = 0; i < cantidad; i++) {
                                if(contadorPosicion === 4){
                                    contadorPosicion = 1;
                                }

                                nombreDiv = "div" + (i + 1)
                                document.getElementById(nombreDiv).hidden = false;
                                document.getElementById(nombreDiv).style.gridColumnStart = contadorPosicion;
                                document.getElementById(nombreDiv).style.gridColumnEnd = contadorPosicion;

                                contadorPosicion++
                            }
                        }
                    }
                }
            }
        }
    }
}