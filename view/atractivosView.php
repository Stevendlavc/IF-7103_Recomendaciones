<?php
require_once 'public/header.php';
?>

<div class="containerRow contenedorBody">
    <div class="container">
        <h3 class="text-center">Atractivos</h3>
        <p class="text-center">Aquí puedes ver los diferentes atractivos turísticos y filtrarlos para ver solamente los que desee.</p>
        <br>
        <select class="form-control text-center select-atractivos">
            <option class="option-atractivos" value="0" selected>Todos</option>
            <option class="option-atractivos" value="1">Volcanes</option>
            <option class="option-atractivos" value="2">Parques Nacionales</option>
            <option class="option-atractivos" value="3">Hoteles</option>
        </select>
        <br>
        <br>
        <script>
            $( ".select-atractivos" ).change(function() {
                if($( ".select-atractivos" ).val() === "1"){
                    $(".contenedor-atractivos").html('<div style="grid-column-start: 1; grid-column-end: 1;" class="columnsGrid" >\n' +
                        '                <div class="miniatura-atractivo">\n' +
                        '                    <h3 class="text-center" style="height: 100px">Volcán Poás</h3>\n' +
                        '                    <div class="img-atractivo">\n' +
                        '                        <img type="button" src="public/css/img/volvanPoas2.jpg" style="width: 100%; height: 100%" data-toggle="modal" data-target=".bd-example-modal-2g">\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '                <div class="modal fade bd-example-modal-2g" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">\n' +
                        '                    <div class="modal-dialog modal-lg">\n' +
                        '                        <div class="modal-content" style="color: white">\n' +
                        '                            <div class="form-field" id="titulo">\n' +
                        '                                <h2 style="text-align: center; font-size: 4em">Volcán Poás</h2>\n' +
                        '                            </div>\n' +
                        '                            <div class="form-field" id="descripcion">\n' +
                        '                                <p style="font-size: 1.5em;">\n' +
                        '                                    <span>\n' +
                        '                                       A una altitud de 2.708 metros se alza el imponente volcán Poás. El famoso volcán mejor conocido por sus dos lagos de cráteres contrastantes visualmente hermosos.  <br>\n' +
                        '                                        El cráter principal que es de forma circular mide cerca de 1320m, con 320 m de profundidad. Cono Von Frantzius que se ubica a unos 900 metros al norte del cráter activo. Y la laguna azul Botos (actualmente cerrada), antiguo cráter ocupado por una laguna fría de 400 m de diámetro y 14 de profundidad.\n' +
                        '                                    </span>\n' +
                        '                                    </p>\n' +
                        '                            </div>\n' +
                        '\n' +
                        '                            <div class="form-field" style="margin-top: 10px" id="precio">\n' +
                        '                                <p style="font-size: 1.7em;">\n' +
                        '                                    <span>\n' +
                        '                                        Precio:\n' +
                        '                                     </span>\n' +
                        '                                        <span>\n' +
                        '                                        3000 colones\n' +
                        '                                     </span>\n' +
                        '                                    </p>\n' +
                        '                            </div>\n' +
                        '\n' +
                        '                            <div class="row"><div class="form-field col-sm-6 modalImagen" id="imagen1">\n' +
                        '                                <img src="public/css/img/volcanPoas.jpg" width="100%" height="100%">\n' +
                        '                            </div>\n' +
                        '\n' +
                        '                            <div class="form-field col-sm-6 modalImagen" id="imagen2">\n' +
                        '                                <img src="public/css/img/volvanPoas2.jpg" width="100%" height="100%">\n' +
                        '                            </div></div>\n' +
                        '\n' +
                        '                            <div class="row"><div class="form-field col-sm-6 modalVideo" id="video">\n' +
                        '                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Q3LowuntKm8"\n' +
                        '                                        title="YouTube video player" frameborder="0"\n' +
                        '                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
                        '                                        allowfullscreen>\n' +
                        '\n' +
                        '                                </iframe>\n' +
                        '                            </div>\n' +
                        '\n' +
                        '                            <div class="form-field col-sm-6 modalMapa" id="mapa">\n' +
                        '                                <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9895.048711375026!2d-84.23826003672286!3d10.192592376836327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f5262b2601b7%3A0xbc1ce51053de5e3d!2sPo%C3%A1s%20Volcano!5e0!3m2!1sen!2scr!4v1621404398112!5m2!1sen!2scr"\n' +
                        '                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>\n' +
                        '                            </div></div>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '            </div>');
                }else{
                    if($( ".select-atractivos" ).val() === "2"){
                        $(".contenedor-atractivos").html('<div style="grid-column-start: 1; grid-column-end: 1;" class="columnsGrid">\n' +
                            '                <div class="miniatura-atractivo">\n' +
                            '                    <h3 class="text-center" style="height: 100px">Parque Nacional Manuel Antonio</h3>\n' +
                            '                    <div class="img-atractivo">\n' +
                            '                        <img type="button" src="public/css/img/atractivo1.jpg" style="width: 100%; height: 100%;" data-toggle="modal" data-target=".bd-example-modal-lg">\n' +
                            '                    </div>\n' +
                            '                </div>\n' +
                            '                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">\n' +
                            '                    <div class="modal-dialog modal-lg">\n' +
                            '                        <div class="modal-content" style="color: white">\n' +
                            '                            <div class="form-field" id="titulo">\n' +
                            '                                <h2 style="text-align: center; font-size: 4em">Parque Nacional Manuel Antonio</h2>\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="form-field " id="descripcion">\n' +
                            '                                <p style="font-size: 1.5em;">\n' +
                            '                                    <span>\n' +
                            '                                        El Parque Nacional Manuel Antonio en la costa del Pacífico de Costa Rica es uno de los puntos más visitados del país en casi todos los viajes. La foto de las dos playas: Playa Manuel Antonio y Playa Espadilla es quizá una de las fotos más usadas de Costa Rica.\n' +
                            '                                            <br>\n' +
                            '                                        La ciudad del mismo nombre probablemente es hoy uno de los centros turísticos más importantes, debido a la relativamente corta distancia desde San José.\n' +
                            '                                    </span>\n' +
                            '                                </p>\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="form-field" style="margin-top: 10px" id="precio">\n' +
                            '                                <p style="font-size: 1.7em;">\n' +
                            '                                    <span>\n' +
                            '                                        Precio:\n' +
                            '                                     </span>\n' +
                            '                                    <span>\n' +
                            '                                        2000 colones\n' +
                            '                                     </span>\n' +
                            '                                </p>\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="row"><div class="form-field col-sm-6 modalImagen" id="imagen1">\n' +
                            '                                <img src="public/css/img/atractivo1.jpg" width="100%" height="100%">\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="form-field col-sm-6 modalImagen" id="imagen2">\n' +
                            '                                <img src="public/css/img/atractivo2.jpg" width="100%" height="100%">\n' +
                            '                            </div></div>\n' +
                            '\n' +
                            '                            <div class="row"><div class="form-field col-sm-6 modalVideo" id="video">\n' +
                            '                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wvACn9Ysghk"\n' +
                            '                                        title="YouTube video player" frameborder="0"\n' +
                            '                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
                            '                                        allowfullscreen>\n' +
                            '\n' +
                            '                                </iframe>\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="form-field col-sm-6 modalMapa" id="mapa">\n' +
                            '                                <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17673.703985794513!2d-84.14256240887782!3d9.388858342236096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x95e66139ce5c4a86!2sParque%20Nacional%20Manuel%20Antonio!5e0!3m2!1sen!2scr!4v1621396490519!5m2!1sen!2scr"\n' +
                            '                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>\n' +
                            '                            </div></div>\n' +
                            '                        </div>\n' +
                            '                    </div>\n' +
                            '                </div>\n' +
                            '            </div>\n' +
                            '                \n' +
                            '\n' +
                            '            <div style="grid-column-start: 2; grid-column-end: 2;" class="columnsGrid">\n' +
                            '                <div class="miniatura-atractivo">\n' +
                            '                    <h3 class="text-center" style="height: 100px">Parque Nacional Marino Ballena</h3>\n' +
                            '                    <div class="img-atractivo">\n' +
                            '                        <img type="button" src="public/css/img/marinoBallena2.jpg" style="width: 100%; height: 100%;" data-toggle="modal" data-target=".bd-example-modal-3g">\n' +
                            '                    </div>\n' +
                            '                </div>\n' +
                            '                <div class="modal fade bd-example-modal-3g" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">\n' +
                            '                    <div class="modal-dialog modal-lg">\n' +
                            '                        <div class="modal-content" style="color: white">\n' +
                            '                            <div class="form-field" id="titulo">\n' +
                            '                                <h2 style="text-align: center; font-size: 4em">Parque Nacional Marino Ballena</h2>\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="form-field" id="descripcion">\n' +
                            '                                <p style="font-size: 1.5em;">\n' +
                            '                                    <span>\n' +
                            '                                        A unos 120 kilómetros al sur de San José, el Parque Nacional Marino Ballena tiene una ubicación privilegiada en la costa del Pacífico. Fue el primer Parque Nacional Marino que se estableció en Costa Rica en 1989. Aunque el área terrestre sea relativamente pequeña, de solo 170 hectáreas, esto no minimiza las principales atracciones submarinas de Marino Ballena. <br>\n' +
                            '                                        Entre las criaturas marinas que se pueden observar están los elefantes marinos, delfines, ballenas jorobadas, arrecifes de coral, reptiles y un gran número de otras criaturas, así como muchas especies de aves. Estas incluyen fragatas, ibis o pelícanos. La mayoría de ellos anidan en la costa de Isla Ballena. A diferencia del área terrestre, la superficie del agua del Parque Nacional Marino Ballena cubre casi 5,400 hectáreas.\n' +
                            '                                    </span>\n' +
                            '                                </p>\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="form-field" style="margin-top: 10px" id="precio">\n' +
                            '                                <p style="font-size: 1.7em;">\n' +
                            '                                    <span>\n' +
                            '                                        Precio:\n' +
                            '                                    </span>\n' +
                            '                                    <span>\n' +
                            '                                        3500 colones\n' +
                            '                                     </span>\n' +
                            '                                </p>\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="row"><div class="form-field col-sm-6 modalImagen" id="imagen1">\n' +
                            '                                <img src="public/css/img/marioBallena.jpg" width="100%" height="100%">\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="form-field col-sm-6 modalImagen" id="imagen2">\n' +
                            '                                <img src="public/css/img/marinoBallena2.jpg" width="100%" height="100%">\n' +
                            '                            </div></div>\n' +
                            '\n' +
                            '                            <div class="row"><div class="form-field col-sm-6 modalVideo" id="video">\n' +
                            '                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wf_mL-S5TXc"\n' +
                            '                                        title="YouTube video player" frameborder="0"\n' +
                            '                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
                            '                                        allowfullscreen>\n' +
                            '\n' +
                            '                                </iframe>\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="form-field col-sm-6 modalMapa" id="mapa">\n' +
                            '                                <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d828.0671032253663!2d-83.74725665644863!3d9.15681997339252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa15775aed4ed85%3A0xf6425ef4076a9af9!2sParque%20Nacional%20Marino%20Ballena!5e0!3m2!1sen!2scr!4v1621404997271!5m2!1sen!2scr"\n' +
                            '                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>\n' +
                            '                            </div></div>\n' +
                            '                        </div>\n' +
                            '                    </div>\n' +
                            '                </div>\n' +
                            '            </div>');
                    }else{
                        if($( ".select-atractivos" ).val() === "0"){
                            $(".contenedor-atractivos").html('<div style="grid-column-start: 1; grid-column-end: 1;" class="columnsGrid">\n' +
                                '                <div class="miniatura-atractivo">\n' +
                                '                    <h3 class="text-center" style="height: 100px">Parque Nacional Manuel Antonio</h3>\n' +
                                '                    <div class="img-atractivo">\n' +
                                '                        <img type="button" src="public/css/img/atractivo1.jpg" style="width: 100%; height: 100%;" data-toggle="modal" data-target=".bd-example-modal-lg">\n' +
                                '                    </div>\n' +
                                '                </div>\n' +
                                '                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">\n' +
                                '                    <div class="modal-dialog modal-lg">\n' +
                                '                        <div class="modal-content" style="color: white">\n' +
                                '                            <div class="form-field" id="titulo">\n' +
                                '                                <h2 style="text-align: center; font-size: 4em">Parque Nacional Manuel Antonio</h2>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field " id="descripcion">\n' +
                                '                                <p style="font-size: 1.5em;">\n' +
                                '                                    <span>\n' +
                                '                                        El Parque Nacional Manuel Antonio en la costa del Pacífico de Costa Rica es uno de los puntos más visitados del país en casi todos los viajes. La foto de las dos playas: Playa Manuel Antonio y Playa Espadilla es quizá una de las fotos más usadas de Costa Rica.\n' +
                                '                                            <br>\n' +
                                '                                        La ciudad del mismo nombre probablemente es hoy uno de los centros turísticos más importantes, debido a la relativamente corta distancia desde San José.\n' +
                                '                                    </span>\n' +
                                '                                </p>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field" style="margin-top: 10px" id="precio">\n' +
                                '                                <p style="font-size: 1.7em;">\n' +
                                '                                    <span>\n' +
                                '                                        Precio:\n' +
                                '                                     </span>\n' +
                                '                                    <span>\n' +
                                '                                        2000 colones\n' +
                                '                                     </span>\n' +
                                '                                </p>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="row"><div class="form-field col-sm-6 modalImagen" id="imagen1">\n' +
                                '                                <img src="public/css/img/atractivo1.jpg" width="100%" height="100%">\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field col-sm-6 modalImagen" id="imagen2">\n' +
                                '                                <img src="public/css/img/atractivo2.jpg" width="100%" height="100%">\n' +
                                '                            </div></div>\n' +
                                '\n' +
                                '                            <div class="row"><div class="form-field col-sm-6 modalVideo" id="video">\n' +
                                '                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wvACn9Ysghk"\n' +
                                '                                        title="YouTube video player" frameborder="0"\n' +
                                '                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
                                '                                        allowfullscreen>\n' +
                                '\n' +
                                '                                </iframe>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field col-sm-6 modalMapa" id="mapa">\n' +
                                '                                <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17673.703985794513!2d-84.14256240887782!3d9.388858342236096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x95e66139ce5c4a86!2sParque%20Nacional%20Manuel%20Antonio!5e0!3m2!1sen!2scr!4v1621396490519!5m2!1sen!2scr"\n' +
                                '                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>\n' +
                                '                            </div></div>\n' +
                                '                        </div>\n' +
                                '                    </div>\n' +
                                '                </div>\n' +
                                '            </div>\n' +
                                '                \n' +
                                '\n' +
                                '<div style="grid-column-start: 2; grid-column-end: 2;" class="columnsGrid" >\n' +
                                '                <div class="miniatura-atractivo">\n' +
                                '                    <h3 class="text-center" style="height: 100px">Volcán Poás</h3>\n' +
                                '                    <div class="img-atractivo">\n' +
                                '                        <img type="button" src="public/css/img/volvanPoas2.jpg" style="width: 100%; height: 100%" data-toggle="modal" data-target=".bd-example-modal-2g">\n' +
                                '                    </div>\n' +
                                '                </div>\n' +
                                '                <div class="modal fade bd-example-modal-2g" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">\n' +
                                '                    <div class="modal-dialog modal-lg">\n' +
                                '                        <div class="modal-content" style="color: white">\n' +
                                '                            <div class="form-field" id="titulo">\n' +
                                '                                <h2 style="text-align: center; font-size: 4em">Volcán Poás</h2>\n' +
                                '                            </div>\n' +
                                '                            <div class="form-field" id="descripcion">\n' +
                                '                                <p style="font-size: 1.5em;">\n' +
                                '                                    <span>\n' +
                                '                                       A una altitud de 2.708 metros se alza el imponente volcán Poás. El famoso volcán mejor conocido por sus dos lagos de cráteres contrastantes visualmente hermosos.  <br>\n' +
                                '                                        El cráter principal que es de forma circular mide cerca de 1320m, con 320 m de profundidad. Cono Von Frantzius que se ubica a unos 900 metros al norte del cráter activo. Y la laguna azul Botos (actualmente cerrada), antiguo cráter ocupado por una laguna fría de 400 m de diámetro y 14 de profundidad.\n' +
                                '                                    </span>\n' +
                                '                                    </p>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field" style="margin-top: 10px" id="precio">\n' +
                                '                                <p style="font-size: 1.7em;">\n' +
                                '                                    <span>\n' +
                                '                                        Precio:\n' +
                                '                                     </span>\n' +
                                '                                        <span>\n' +
                                '                                        3000 colones\n' +
                                '                                     </span>\n' +
                                '                                    </p>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="row"><div class="form-field col-sm-6 modalImagen" id="imagen1">\n' +
                                '                                <img src="public/css/img/volcanPoas.jpg" width="100%" height="100%">\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field col-sm-6 modalImagen" id="imagen2">\n' +
                                '                                <img src="public/css/img/volvanPoas2.jpg" width="100%" height="100%">\n' +
                                '                            </div></div>\n' +
                                '\n' +
                                '                            <div class="row"><div class="form-field col-sm-6 modalVideo" id="video">\n' +
                                '                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Q3LowuntKm8"\n' +
                                '                                        title="YouTube video player" frameborder="0"\n' +
                                '                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
                                '                                        allowfullscreen>\n' +
                                '\n' +
                                '                                </iframe>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field col-sm-6 modalMapa" id="mapa">\n' +
                                '                                <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9895.048711375026!2d-84.23826003672286!3d10.192592376836327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f5262b2601b7%3A0xbc1ce51053de5e3d!2sPo%C3%A1s%20Volcano!5e0!3m2!1sen!2scr!4v1621404398112!5m2!1sen!2scr"\n' +
                                '                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>\n' +
                                '                            </div></div>\n' +
                                '                        </div>\n' +
                                '                    </div>\n' +
                                '                </div>\n' +
                                '            </div>\n'+
                                '\n'+
                                '            <div style="grid-column-start: 3; grid-column-end: 3;" class="columnsGrid">\n' +
                                '                <div class="miniatura-atractivo">\n' +
                                '                    <h3 class="text-center" style="height: 100px">Parque Nacional Marino Ballena</h3>\n' +
                                '                    <div class="img-atractivo">\n' +
                                '                        <img type="button" src="public/css/img/marinoBallena2.jpg" style="width: 100%; height: 100%;" data-toggle="modal" data-target=".bd-example-modal-3g">\n' +
                                '                    </div>\n' +
                                '                </div>\n' +
                                '                <div class="modal fade bd-example-modal-3g" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">\n' +
                                '                    <div class="modal-dialog modal-lg">\n' +
                                '                        <div class="modal-content" style="color: white">\n' +
                                '                            <div class="form-field" id="titulo">\n' +
                                '                                <h2 style="text-align: center; font-size: 4em">Parque Nacional Marino Ballena</h2>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field" id="descripcion">\n' +
                                '                                <p style="font-size: 1.5em;">\n' +
                                '                                    <span>\n' +
                                '                                        A unos 120 kilómetros al sur de San José, el Parque Nacional Marino Ballena tiene una ubicación privilegiada en la costa del Pacífico. Fue el primer Parque Nacional Marino que se estableció en Costa Rica en 1989. Aunque el área terrestre sea relativamente pequeña, de solo 170 hectáreas, esto no minimiza las principales atracciones submarinas de Marino Ballena. <br>\n' +
                                '                                        Entre las criaturas marinas que se pueden observar están los elefantes marinos, delfines, ballenas jorobadas, arrecifes de coral, reptiles y un gran número de otras criaturas, así como muchas especies de aves. Estas incluyen fragatas, ibis o pelícanos. La mayoría de ellos anidan en la costa de Isla Ballena. A diferencia del área terrestre, la superficie del agua del Parque Nacional Marino Ballena cubre casi 5,400 hectáreas.\n' +
                                '                                    </span>\n' +
                                '                                </p>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field" style="margin-top: 10px" id="precio">\n' +
                                '                                <p style="font-size: 1.7em;">\n' +
                                '                                    <span>\n' +
                                '                                        Precio:\n' +
                                '                                    </span>\n' +
                                '                                    <span>\n' +
                                '                                        3500 colones\n' +
                                '                                     </span>\n' +
                                '                                </p>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="row"><div class="form-field col-sm-6 modalImagen" id="imagen1">\n' +
                                '                                <img src="public/css/img/marioBallena.jpg" width="100%" height="100%">\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field col-sm-6 modalImagen" id="imagen2">\n' +
                                '                                <img src="public/css/img/marinoBallena2.jpg" width="100%" height="100%">\n' +
                                '                            </div></div>\n' +
                                '\n' +
                                '                            <div class="row"><div class="form-field col-sm-6 modalVideo" id="video">\n' +
                                '                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wf_mL-S5TXc"\n' +
                                '                                        title="YouTube video player" frameborder="0"\n' +
                                '                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
                                '                                        allowfullscreen>\n' +
                                '\n' +
                                '                                </iframe>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field col-sm-6 modalMapa" id="mapa">\n' +
                                '                                <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d828.0671032253663!2d-83.74725665644863!3d9.15681997339252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa15775aed4ed85%3A0xf6425ef4076a9af9!2sParque%20Nacional%20Marino%20Ballena!5e0!3m2!1sen!2scr!4v1621404997271!5m2!1sen!2scr"\n' +
                                '                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>\n' +
                                '                            </div></div>\n' +
                                '                        </div>\n' +
                                '                    </div>\n' +
                                '                </div>\n' +
                                '            </div>');
                        }else {
                            $(".contenedor-atractivos").html('<br><br><p style="font-size: 2em; color: darkred;" class="text-center">No hay atractivos disponibles de este tipo en este momento.</p>');
                        }
                    }
                }
            });
        </script>
        <div class="contenedor-atractivos">
            <!--modal 1-->
            <div class="columnsGrid" style="grid-column-start: 1;">
                <div class=" miniatura-atractivo">
                    <h3 class="text-center" style="height: 100px">Parque Nacional Manuel Antonio</h3>
                    <div class="img-atractivo">
                        <img style="margin-bottom: 30px" type="button" src="public/css/img/atractivo1.jpg" width="100%" height="100%" data-toggle="modal" data-target=".bd-example-modal-lg">
                    </div>
                </div>
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="color: white">
                            <div class="form-field" id="titulo">
                                <h2 style="text-align: center; font-size: 4em">Parque Nacional Manuel Antonio</h2>
                            </div>

                            <div class="form-field" id="descripcion">
                                <p style="font-size: 1.5em;">
                                    <span>
                                        El Parque Nacional Manuel Antonio en la costa del Pacífico de Costa Rica es uno de los puntos más visitados del país en casi todos los viajes. La foto de las dos playas: Playa Manuel Antonio y Playa Espadilla es quizá una de las fotos más usadas de Costa Rica.
                                            <br>
                                        La ciudad del mismo nombre probablemente es hoy uno de los centros turísticos más importantes, debido a la relativamente corta distancia desde San José.
                                    </span>
                                </p>
                            </div>

                            <div class="form-field" style="margin-top: 10px" id="precio">
                                <p style="font-size: 1.7em;">
                                    <span>
                                        Precio:
                                     </span>
                                    <span>
                                        2000 colones
                                     </span>
                                </p>
                            </div>

                            <div class="row">
                                <div class="form-field col-sm-6 modalImagen" id="imagen1">
                                    <img src="public/css/img/atractivo1.jpg" width="100%" height="100%">
                                </div>

                                <div class="form-field col-sm-6 modalImagen" id="imagen2">
                                    <img src="public/css/img/atractivo2.jpg" width="100%" height="100%">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-field col-sm-6 modalVideo" id="video">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wvACn9Ysghk"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>

                                    </iframe>
                                </div>

                                <div class="form-field col-sm-6 modalMapa" id="mapa">
                                    <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17673.703985794513!2d-84.14256240887782!3d9.388858342236096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x95e66139ce5c4a86!2sParque%20Nacional%20Manuel%20Antonio!5e0!3m2!1sen!2scr!4v1621396490519!5m2!1sen!2scr"
                                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--modal 2 -->
            <div class="columnsGrid" style="grid-column-start: 2;">
                <div class="miniatura-atractivo">
                    <h3 class="text-center" style="height: 100px">Volcán Poás</h3>
                    <div class="img-atractivo">
                        <img style="margin-bottom: 30px" type="button" src="public/css/img/volvanPoas2.jpg" width="100%" height="100%" data-toggle="modal" data-target=".bd-example-modal-2g">
                    </div>
                </div>
                <div class="modal fade bd-example-modal-2g" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="color: white">
                            <div class="form-field" id="titulo">
                                <h2 style="text-align: center; font-size: 4em">Volcán Póas</h2>
                            </div>

                            <div class="form-field" id="descripcion">
                                <p style="font-size: 1.5em;">
                                    <span>
                                       A una altitud de 2.708 metros se alza el imponente volcán Poás. El famoso volcán mejor conocido por sus dos lagos de cráteres contrastantes visualmente hermosos.  <br>
                                        El cráter principal que es de forma circular mide cerca de 1320m, con 320 m de profundidad. Cono Von Frantzius que se ubica a unos 900 metros al norte del cráter activo. Y la laguna azul Botos (actualmente cerrada), antiguo cráter ocupado por una laguna fría de 400 m de diámetro y 14 de profundidad.
                                    </span>
                                </p>
                            </div>

                            <div class="form-field" style="margin-top: 10px" id="precio">
                                <p style="font-size: 1.7em;">
                                    <span>
                                        Precio:
                                     </span>
                                    <span>
                                        3000 colones
                                     </span>
                                </p>
                            </div>

                            <div class="row">
                                <div class="form-field col-sm-6 modalImagen" id="imagen1">
                                    <img src="public/css/img/volcanPoas.jpg" width="100%" height="100%">
                                </div>

                                <div class="form-field col-sm-6 modalImagen" id="imagen2">
                                    <img src="public/css/img/volvanPoas2.jpg" width="100%" height="100%">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-field col-sm-6 modalVideo" id="video">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Q3LowuntKm8"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>

                                    </iframe>
                                </div>

                                <div class="form-field col-sm-6 modalMapa" id="mapa">
                                    <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9895.048711375026!2d-84.23826003672286!3d10.192592376836327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f5262b2601b7%3A0xbc1ce51053de5e3d!2sPo%C3%A1s%20Volcano!5e0!3m2!1sen!2scr!4v1621404398112!5m2!1sen!2scr"
                                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--modal 3 -->
            <div class="columnsGrid" style="grid-column-start: 3;">
                <div class="miniatura-atractivo">
                    <h3 class="text-center" style="height: 100px">Parque Nacional Marino Ballena</h3>
                    <div class="img-atractivo">
                        <img style="margin-bottom: 30px" type="button" src="public/css/img/marinoBallena2.jpg" width="100%" height="100%" data-toggle="modal" data-target=".bd-example-modal-3g">
                    </div>
                </div>
                <div class="modal fade bd-example-modal-3g" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="color: white">
                            <div class="form-field" id="titulo">
                                <h2 style="text-align: center; font-size: 4em">Parque Nacional Marino Ballena</h2>
                            </div>

                            <div class="form-field" id="descripcion">
                                <p style="font-size: 1.5em;">
                                    <span>
                                      A unos 120 kilómetros al sur de San José, el Parque Nacional Marino Ballena tiene una ubicación privilegiada en la costa del Pacífico. Fue el primer Parque Nacional Marino que se estableció en Costa Rica en 1989. Aunque el área terrestre sea relativamente pequeña, de solo 170 hectáreas, esto no minimiza las principales atracciones submarinas de Marino Ballena. <br>
                                   Entre las criaturas marinas que se pueden observar están los elefantes marinos, delfines, ballenas jorobadas, arrecifes de coral, reptiles y un gran número de otras criaturas, así como muchas especies de aves. Estas incluyen fragatas, ibis o pelícanos. La mayoría de ellos anidan en la costa de Isla Ballena. A diferencia del área terrestre, la superficie del agua del Parque Nacional Marino Ballena cubre casi 5,400 hectáreas.
                                    </span>
                                </p>
                            </div>

                            <div class="form-field" style="margin-top: 10px" id="precio">
                                <p style="font-size: 1.7em;">
                                    <span>
                                        Precio:
                                     </span>
                                    <span>
                                        3500 colones
                                     </span>
                                </p>
                            </div>

                            <div class="row">
                                <div class="form-field col-sm-6 modalImagen" id="imagen1">
                                    <img src="public/css/img/marioBallena.jpg" width="100%" height="100%">
                                </div>

                                <div class="form-field col-sm-6 modalImagen" id="imagen2">
                                    <img src="public/css/img/marinoBallena2.jpg" width="100%" height="100%">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-field col-sm-6 modalVideo" id="video">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wf_mL-S5TXc"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>

                                    </iframe>
                                </div>

                                <div class="form-field col-sm-6 modalMapa" id="mapa">
                                    <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d828.0671032253663!2d-83.74725665644863!3d9.15681997339252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa15775aed4ed85%3A0xf6425ef4076a9af9!2sParque%20Nacional%20Marino%20Ballena!5e0!3m2!1sen!2scr!4v1621404997271!5m2!1sen!2scr"
                                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
require_once 'public/footer.php';
?>
