<?php
require_once 'public/header.php';
?>
<html>
    <link rel="stylesheet" type="text/css" href="public/css/PanelDesplegables.css">
    <script type="text/javascript" src="public/js/recomendaciones.js"></script>

</html>

<div class="contenedorBody">
    <div class="jumbotron">
        <div class="container">
            <h1 align="center">Recomendaciones</h1>
        </div>
    </div>


    <div class="containerRow">
        <div>
            <input type="checkbox" class="checkbox" id="check">
            <label class="menu" for="check">|||</label>
            <div class="left-panel">
                <div>
                    <section class="get-in-touch cambiarGetInTouch">
                        <div>
                            <h1 class="title cambiar">Criterios de Búsqueda</h1>
                        </div>

                        <div class="contenedorFormulario cambiaFormulario">
                            <form class="contact-form" method="post" action="?controlador=recomendaciones&accion=accionRecomendaciones">
                                <div class="form-field">
                                    <input type="radio" value="none" id="actividad" name="tipo" onclick="activarActividad()" checked/>
                                    <label for="actividad" class="label">Actividad</label>
                                </div>
                                <div class="form-field">
                                    <input type="radio" value="none" id="atractivo" name="tipo" onclick="activarAtractivo()"/>
                                    <label for="atractivo" class="label">Atractivo</label>
                                </div>

                                <div class="form-field ">
                                    <select class="form-select input-text js-input" name="precio" id="precio">
                                        <option value="1" selected>Bajo</option>
                                        <option value="2">Medio</option>
                                        <option value="3">Alto</option>
                                    </select>
                                    <label class="label" for="precio">Precio</label>
                                </div>

                                <div class="form-field">
                                    <select class="form-select input-text js-input" name="turista" id="turista">
                                        <option value="1" selected>Exploradores </option>
                                        <option value="2">Extremos</option>
                                        <option value="3">Tranquilos</option>
                                        <option value="4">Aventureros</option>
                                    </select>
                                    <label class="label" for="turista">Tipo Turista</label>
                                </div>

                                <div class="form-field " id="divActividad" name="divActividad">
                                    <select class="form-select input-text js-input" name="tipoActividad" id="tipoActividad">
                                        <option value="1" selected>Senderos</option>
                                        <option value="2">Surf</option>
                                        <option value="3">En rios</option>
                                    </select>
                                    <label class="label" for="tipoActividad">Tipo de Actividad</label>
                                </div>

                                <div class="form-field " id="divAtractivo" name="divAtractivo" hidden>
                                    <select class="form-select input-text js-input" name="tipoActractivo" id="tipoAtractivo">
                                        <option value="1" selected>Playa</option>
                                        <option value="2">Montaña</option>
                                        <option value="3">Ciudad</option>
                                        <option value="4">Parques Nacionales</option>
                                    </select>
                                    <label class="label" for="tipoAtractivo">Tipo de Atractivo</label>
                                </div>

                                <div class="form-field">
                                    <select class="form-select input-text js-input" name="provincia" id="provincia">
                                        <option value="1" selected>San Jose</option>
                                        <option value="2">Alajuela</option>
                                        <option value="3">Cartago</option>
                                        <option value="4">Heredia</option>
                                        <option value="5">Guanacaste</option>
                                        <option value="6">Puntarenas</option>
                                        <option value="7">Limon</option>
                                    </select>
                                    <label class="label" for="provincia">Provincia</label>
                                </div>
                                <div class="form-field">
                                    <input class="submit-btn-minimo" type="submit" value="Buscar">
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row contenedor-atractivos">
                <!--modal 1-->
                <div style="grid-column-start: 1; grid-column-end: 1;" class="columnsGrid">
                    <div class="miniatura-atractivo">
                        <h3 class="text-center" style="height: 100px;">Parque Nacional Manuel Antonio</h3>
                        <img style="margin-bottom: 30px" type="button" src="public/css/img/atractivo1.jpg" width="100%" height="100%" data-toggle="modal" data-target=".bd-example-modal-lg">
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
                <div style="grid-column-start: 2; grid-column-end: 2;" class="columnsGrid" >
                        <div class="miniatura-atractivo">
                            <h3 class="text-center" style="height: 100px;"> Volcán Póas</h3>
                            <img style="margin-bottom: 30px" type="button" src="public/css/img/volvanPoas2.jpg" width="100%" height="100%" data-toggle="modal" data-target=".bd-example-modal-2g">
                        </div>
                        <div class="modal fade bd-example-modal-2g" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="color: white">
                                    <div class="form-field" id="titulo">
                                        <h2 style="text-align: center; font-size: 4em">Parque Nacional Manuel Antonio</h2>
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
                <div style="grid-column-start: 3; grid-column-end: 3;" class="columnsGrid">
                        <div class="miniatura-atractivo">
                            <h3 class="text-center" style="height: 100px;">Parque Nacional Marino Ballena</h3>
                            <img style="margin-bottom: 30px" type="button" src="public/css/img/marinoBallena2.jpg" width="100%" height="100%" data-toggle="modal" data-target=".bd-example-modal-3g">
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
                                        <div class="form-field col-sm-6 modelImagen" id="imagen1">
                                            <img src="public/css/img/marioBallena.jpg" width="100%" height="100%">
                                        </div>

                                        <div class="form-field col-sm-6 modelImagen" id="imagen2">
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

                <!--modal 4-->
                <div style="grid-column-start: 1; grid-column-end: 1;" class="columnsGrid">
                    <div class="miniatura-atractivo">
                        <h3 class="text-center" style="height: 100px;">Canopy</h3>
                        <img style="margin-bottom: 30px" type="button" src="public/css/img/canopy.jpg" width="100%" height="100%" data-toggle="modal" data-target=".bd-example-modal-4g">
                    </div>
                    <div class="modal fade bd-example-modal-4g" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" style="color: white">
                                <div class="form-field" id="titulo">
                                    <h2 style="text-align: center; font-size: 4em">Canopy</h2>
                                </div>

                                <div class="form-field" id="descripcion">
                                    <p style="font-size: 1.5em;">
                                    <span>
                                          El canopy es una red de cables, torres y plataformas suspendidas a través de las copas de los árboles. Lo que le convierte en una de las actividades extremas que más se disfrutan, pues es posible mezclar adrenalina con belleza natural. Así que, en Costa Rica abundan  rincones donde puede practicarse, salimos a buscar algunos y les preparamos esta guía. Recuerde que si conoce algún otro nos puede contar. ¡A volar!
                                    </span>
                                    </p>
                                </div>

                                <div class="form-field" style="margin-top: 10px" id="precio">
                                    <p style="font-size: 1.7em;">
                                    <span>
                                        Precio:
                                     </span>
                                        <span>
                                        10.000 colones
                                     </span>
                                    </p>
                                </div>

                                <div class="row">
                                    <div class="form-field col-sm-6 modelImagen" id="imagen1">
                                        <img src="public/css/img/canopy2.jpg" width="100%" height="100%">
                                    </div>

                                    <div class="form-field col-sm-6 modelImagen" id="imagen2">
                                        <img src="public/css/img/canopy.jpg" width="100%" height="100%">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-field col-sm-6 modalVideo" id="video">
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/f45Vh8r4Whk"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>

                                        </iframe>
                                    </div>

                                    <div class="form-field col-sm-6 modalMapa" id="mapa">
                                        <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d846483.8191448189!2d-84.7415201435759!3d9.750980708308408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sCanopy!5e0!3m2!1sen!2scr!4v1621399624030!5m2!1sen!2scr"
                                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--modal 5 -->
                <div style="grid-column-start: 2; grid-column-end: 2;" class="columnsGrid" >
                    <div class="miniatura-atractivo">
                        <h3 class="text-center" style="height: 100px;">Surfing</h3>
                        <img style="margin-bottom: 30px" type="button" src="public/css/img/surfear.jpg" width="100%" height="100%" data-toggle="modal" data-target=".bd-example-modal-5g">
                    </div>
                    <div class="modal fade bd-example-modal-5g" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" style="color: white">
                                <div class="form-field" id="titulo">
                                    <h2 style="text-align: center; font-size: 4em">Surfing</h2>
                                </div>

                                <div class="form-field" id="descripcion">
                                    <p style="font-size: 1.5em;">
                                    <span>
                                        El surf es un deporte acuático que consiste en realizar amplios giros y maniobras aprovechando la fuerza de una ola, sobre una tabla.
                                         <br>
                                        Consiste en mantenerse en equilibrio, deslizandose sobre una tabla, arrastrada por una ola, el mayor tiempo posible y sin caerse al agua dirigiéndola a traves una o varias quillas situadas en la parte trasera de la tabla.
                                     </span>
                                    </p>
                                </div>

                                <div class="form-field" style="margin-top: 10px" id="precio">
                                    <p style="font-size: 1.7em;">
                                    <span>
                                        Precio:
                                     </span>
                                        <span>
                                        15.000 colones
                                     </span>
                                    </p>
                                </div>

                                <div class="row">
                                    <div class="form-field col-sm-6 modelImagen" id="imagen1">
                                        <img src="public/css/img/surfear.jpg" width="100%" height="100%">
                                    </div>

                                    <div class="form-field col-sm-6 modelImagen" id="imagen2">
                                        <img src="public/css/img/surfing2.jpeg" width="100%" height="100%">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-field col-sm-6 modalVideo" id="video">
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/R7ExAwN68Ac"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>

                                        </iframe>
                                    </div>

                                    <div class="form-field col-sm-6 modalMapa" id="mapa">
                                        <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d169823.49624770987!2d-84.05345025022179!3d9.292923796406784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSurfing!5e0!3m2!1sen!2scr!4v1621405374200!5m2!1sen!2scr"
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
</div>
<?php
require_once 'public/footer.php';
?>