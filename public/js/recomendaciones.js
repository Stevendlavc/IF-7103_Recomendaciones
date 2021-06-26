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