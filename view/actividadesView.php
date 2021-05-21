<?php
require_once 'public/header.php';
?>

<div class="containerRow contenedorBody">
    <div class="container">
        <h3 class="text-center">Actividades</h3>
        <p class="text-center">Aquí puedes ver las diferentes actividades turísticas y filtrarlas para ver solamente las que desee.</p>
        <br>
        <select class="form-control text-center select-atractivos">
            <option class="option-atractivos"  value="0" selected>Todos</option>
            <option class="option-atractivos" value="1">En el mar</option>
            <option class="option-atractivos" value="2">En montaña</option>
            <option class="option-atractivos" value="3">En la ciudad</option>
        </select>
        <br>
        <br>
        <script>
            $( ".select-atractivos" ).change(function() {
                if($( ".select-atractivos" ).val() === "1"){
                    $(".contenedor-atractivos").html('<div style="grid-column-start: 1; grid-column-end: 1;" class="columnsGrid" >\n' +
                        '                <div>\n' +
                        '                    <div class="miniatura-atractivo"><h3 class="text-center">Surfing</h3>\n' +
                        '                    <div class="img-atractivo">\n' +
                        '                        <img type="button" src="public/css/img/surfear.jpg" style="width: 100%; height: 100%" data-toggle="modal" data-target=".bd-example-modal-2g">\n' +
                        '                    </div></div>\n' +
                        '                </div>\n' +
                        '                <div class="modal fade bd-example-modal-2g" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">\n' +
                        '                    <div class="modal-dialog modal-lg">\n' +
                        '                        <div class="modal-content" style="color: white">\n' +
                        '                            <div class="form-field" id="titulo">\n' +
                        '                                <h2 style="text-align: center; font-size: 4em">Surfing</h2>\n' +
                        '                            </div>\n' +
                        '                            <div class="form-field" id="descripcion">\n' +
                        '                                <p style="font-size: 1.5em;">\n' +
                        '                                    <span>\n' +
                        '                                     El surf es un deporte acuático que consiste en realizar amplios giros y maniobras aprovechando la fuerza de una ola, sobre una tabla.\n' +
                        '                                      <br>\n' +
                        '                                     Consiste en mantenerse en equilibrio, deslizandose sobre una tabla, arrastrada por una ola, el mayor tiempo posible y sin caerse al agua dirigiéndola a traves una o varias quillas situadas en la parte trasera de la tabla.\n' +
                        '                                     </span>\n' +
                        '                                    </p>\n' +
                        '                            </div>\n' +
                        '\n' +
                        '                            <div class="form-field" style="margin-top: 10px" id="precio">\n' +
                        '                                <p style="font-size: 1.7em;">\n' +
                        '                                    <span>\n' +
                        '                                        Precio:\n' +
                        '                                     </span>\n' +
                        '                                        <span>\n' +
                        '                                        15.000 colones\n' +
                        '                                     </span>\n' +
                        '                                    </p>\n' +
                        '                            </div>\n' +
                        '\n' +
                        '                            <div class="row"><div class="form-field col-sm-6 modalImagen" id="imagen1">\n' +
                        '                                <img src="public/css/img/surfear.jpg" width="100%" height="100%">\n' +
                        '                            </div>\n' +
                        '\n' +
                        '                            <div class="form-field col-sm-6 modalImagen" id="imagen2">\n' +
                        '                                <img src="public/css/img/surfing2.jpeg" width="100%" height="100%">\n' +
                        '                            </div></div>\n' +
                        '\n' +
                        '                            <div class="row"><div class="form-field col-sm-6 modalVideo" id="video">\n' +
                        '                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/R7ExAwN68Ac"\n' +
                        '                                        title="YouTube video player" frameborder="0"\n' +
                        '                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
                        '                                        allowfullscreen>\n' +
                        '\n' +
                        '                                </iframe>\n' +
                        '                            </div>\n' +
                        '\n' +
                        '                            <div class="form-field col-sm-6 modalMapa" id="mapa">\n' +
                        '                                <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d169823.49624770987!2d-84.05345025022179!3d9.292923796406784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSurfing!5e0!3m2!1sen!2scr!4v1621405374200!5m2!1sen!2scr"\n' +
                        '                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>\n' +
                        '                            </div></div>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '            </div>');
                }else{
                    if($( ".select-atractivos" ).val() === "2"){
                        $(".contenedor-atractivos").html('<div style="grid-column-start: 1; grid-column-end: 1;" class="columnsGrid">\n' +
                            '                <div>\n' +
                            '                    <div class="miniatura-atractivo"><h3 class="text-center">Canopy</h3>\n' +
                            '                    <div class="img-atractivo">\n' +
                            '                        <img type="button" src="public/css/img/canopy.jpg" style="width: 100%; height: 100%;" data-toggle="modal" data-target=".bd-example-modal-lg">\n' +
                            '                    </div></div>\n' +
                            '                </div>\n' +
                            '                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">\n' +
                            '                    <div class="modal-dialog modal-lg">\n' +
                            '                        <div class="modal-content" style="color: white">\n' +
                            '                            <div class="form-field" id="titulo">\n' +
                            '                                <h2 style="text-align: center; font-size: 4em">Canopy</h2>\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="form-field" id="descripcion">\n' +
                            '                                <p style="font-size: 1.5em;">\n' +
                            '                                    <span>\n' +
                            '                                         El canopy es una red de cables, torres y plataformas suspendidas a través de las copas de los árboles. Lo que le convierte en una de las actividades extremas que más se disfrutan, pues es posible mezclar adrenalina con belleza natural. Así que, en Costa Rica abundan  rincones donde puede practicarse, salimos a buscar algunos y les preparamos esta guía. Recuerde que si conoce algún otro nos puede contar. ¡A volar!\n' +
                            '                                   </span>\n' +
                            '                                </p>\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="form-field " style="margin-top: 10px" id="precio">\n' +
                            '                                <p style="font-size: 1.7em;">\n' +
                            '                                    <span>\n' +
                            '                                        Precio:\n' +
                            '                                     </span>\n' +
                            '                                    <span>\n' +
                            '                                        10.000 colones\n' +
                            '                                     </span>\n' +
                            '                                </p>\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="row"><div class="form-field col-sm-6 modalImagen" id="imagen1">\n' +
                            '                                <img src="public/css/img/canopy2.jpg" width="100%" height="100%">\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="form-field col-sm-6 modalImagen" id="imagen2">\n' +
                            '                                <img src="public/css/img/canopy.jpg" width="100%" height="100%">\n' +
                            '                            </div></div>\n' +
                            '\n' +
                            '                            <div class="row"><div class="form-field col-sm-6 modalVideo" id="video">\n' +
                            '                                <iframe width="100% height="100%" src="https://www.youtube.com/embed/f45Vh8r4Whk"\n' +
                            '                                        title="YouTube video player" frameborder="0"\n' +
                            '                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
                            '                                        allowfullscreen>\n' +
                            '\n' +
                            '                                </iframe>\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="form-field col-sm-6 modalMapa" id="mapa">\n' +
                            '                                <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d846483.8191448189!2d-84.7415201435759!3d9.750980708308408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sCanopy!5e0!3m2!1sen!2scr!4v1621399624030!5m2!1sen!2scr"\n' +
                            '                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>\n' +
                            '                            </div></div>\n' +
                            '                        </div>\n' +
                            '                    </div>\n' +
                            '                </div>\n' +
                            '            </div>\n' +
                            '                \n' +
                            '\n' +
                            '            <div style="grid-column-start: 2; grid-column-end: 2;" class="columnsGrid">\n' +
                            '                <div>\n' +
                            '                    <div class="miniatura-atractivo"><h3 class="text-center">Rafting</h3>\n' +
                            '                    <div class="img-atractivo">\n' +
                            '                        <img type="button" src="public/css/img/rafting.jpg" style="width: 100%; height: 100%;" data-toggle="modal" data-target=".bd-example-modal-3g">\n' +
                            '                    </div></div>\n' +
                            '                </div>\n' +
                            '                <div class="modal fade bd-example-modal-3g" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">\n' +
                            '                    <div class="modal-dialog modal-lg">\n' +
                            '                        <div class="modal-content" style="color: white">\n' +
                            '                            <div class="form-field" id="titulo">\n' +
                            '                                <h2 style="text-align: center; font-size: 4em">Rafting</h2>\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="form-field" id="descripcion">\n' +
                            '                                <p style="font-size: 1.5em;">\n' +
                            '                                    <span>\n' +
                            '                                        El surf es un deporte acuático que consiste en realizar amplios giros y maniobras aprovechando la fuerza de una ola, sobre una tabla.\n' +
                            '                                         <br>\n' +
                            '                                        Consiste en mantenerse en equilibrio, deslizandose sobre una tabla, arrastrada por una ola, el mayor tiempo posible y sin caerse al agua dirigiéndola a traves una o varias quillas situadas en la parte trasera de la tabla.\n' +
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
                            '                                        15.000 colones\n' +
                            '                                     </span>\n' +
                            '                                </p>\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="row"><div class="form-field col-sm-6 modalImagen" id="imagen1">\n' +
                            '                                <img src="public/css/img/rafting.jpg" width="100%" height="100%">\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="form-field col-sm-6 modalImagen" id="imagen2">\n' +
                            '                                <img src="public/css/img/rafting2.jpg" width="100%" height="100%">\n' +
                            '                            </div></div>\n' +
                            '\n' +
                            '                            <div class="row"><div class="form-field col-sm-6 modalVideo" id="video">\n' +
                            '                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/T-ys08EXFt8"\n' +
                            '                                        title="YouTube video player" frameborder="0"\n' +
                            '                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
                            '                                        allowfullscreen>\n' +
                            '\n' +
                            '                                </iframe>\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                            <div class="form-field col-sm-6 modalMapa" id="mapa">\n' +
                            '                                <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d845852.6124993871!2d-84.79592934022878!3d9.997032030827127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srafting!5e0!3m2!1sen!2scr!4v1621461680802!5m2!1sen!2scr"\n' +
                            '                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>\n' +
                            '                            </div></div>\n' +
                            '                        </div>\n' +
                            '                    </div>\n' +
                            '                </div>\n' +
                            '            </div>');
                    }else {
                        if ($(".select-atractivos").val() === "0") {
                            $(".contenedor-atractivos").html('<div style="grid-column-start: 1; grid-column-end: 1;" class="columnsGrid">\n' +
                                '                <div>\n' +
                                '                    <div class="miniatura-atractivo"><h3 class="text-center">Canopy</h3>\n' +
                                '                    <div class="img-atractivo">\n' +
                                '                        <img type="button" src="public/css/img/canopy.jpg" style="width: 100%; height: 100%;" data-toggle="modal" data-target=".bd-example-modal-lg">\n' +
                                '                    </div></div>\n' +
                                '                </div>\n' +
                                '                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">\n' +
                                '                    <div class="modal-dialog modal-lg">\n' +
                                '                        <div class="modal-content" style="color: white">\n' +
                                '                            <div class="form-field" id="titulo">\n' +
                                '                                <h2 style="text-align: center; font-size: 4em">Canopy</h2>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field" id="descripcion">\n' +
                                '                                <p style="font-size: 1.5em;">\n' +
                                '                                    <span>\n' +
                                '                                         El canopy es una red de cables, torres y plataformas suspendidas a través de las copas de los árboles. Lo que le convierte en una de las actividades extremas que más se disfrutan, pues es posible mezclar adrenalina con belleza natural. Así que, en Costa Rica abundan  rincones donde puede practicarse, salimos a buscar algunos y les preparamos esta guía. Recuerde que si conoce algún otro nos puede contar. ¡A volar!\n' +
                                '                                   </span>\n' +
                                '                                </p>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field " style="margin-top: 10px" id="precio">\n' +
                                '                                <p style="font-size: 1.7em;">\n' +
                                '                                    <span>\n' +
                                '                                        Precio:\n' +
                                '                                     </span>\n' +
                                '                                    <span>\n' +
                                '                                        10.000 colones\n' +
                                '                                     </span>\n' +
                                '                                </p>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="row"><div class="form-field col-sm-6 modalImagen" id="imagen1">\n' +
                                '                                <img src="public/css/img/canopy2.jpg" width="100%" height="100%">\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field col-sm-6 modalImagen" id="imagen2">\n' +
                                '                                <img src="public/css/img/canopy.jpg" width="100%" height="100%">\n' +
                                '                            </div></div>\n' +
                                '\n' +
                                '                            <div class="row"><div class="form-field col-sm-6 modalVideo" id="video">\n' +
                                '                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/f45Vh8r4Whk"\n' +
                                '                                        title="YouTube video player" frameborder="0"\n' +
                                '                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
                                '                                        allowfullscreen>\n' +
                                '\n' +
                                '                                </iframe>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field col-sm-6 modalMapa" id="mapa">\n' +
                                '                                <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d846483.8191448189!2d-84.7415201435759!3d9.750980708308408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sCanopy!5e0!3m2!1sen!2scr!4v1621399624030!5m2!1sen!2scr"\n' +
                                '                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>\n' +
                                '                            </div></div>\n' +
                                '                        </div>\n' +
                                '                    </div>\n' +
                                '                </div>\n' +
                                '            </div>\n' +
                                '                \n' +
                                '\n' +
                                '<div style="grid-column-start: 2; grid-column-end: 2;" class="columnsGrid" >\n' +
                                '                <div>\n' +
                                '                    <h3 class="text-center">Surfing</h3>\n' +
                                '                    <div class="miniatura-atractivo"><div class="img-atractivo">\n' +
                                '                        <img type="button" src="public/css/img/surfear.jpg" style="width: 100%; height: 100%" data-toggle="modal" data-target=".bd-example-modal-2g">\n' +
                                '                    </div></div>\n' +
                                '                </div>\n' +
                                '                <div class="modal fade bd-example-modal-2g" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">\n' +
                                '                    <div class="modal-dialog modal-lg">\n' +
                                '                        <div class="modal-content" style="color: white">\n' +
                                '                            <div class="form-field" id="titulo">\n' +
                                '                                <h2 style="text-align: center; font-size: 4em">Surfing</h2>\n' +
                                '                            </div>\n' +
                                '                            <div class="form-field" id="descripcion">\n' +
                                '                                <p style="font-size: 1.5em;">\n' +
                                '                                    <span>\n' +
                                '                                     El surf es un deporte acuático que consiste en realizar amplios giros y maniobras aprovechando la fuerza de una ola, sobre una tabla.\n' +
                                '                                      <br>\n' +
                                '                                     Consiste en mantenerse en equilibrio, deslizandose sobre una tabla, arrastrada por una ola, el mayor tiempo posible y sin caerse al agua dirigiéndola a traves una o varias quillas situadas en la parte trasera de la tabla.\n' +
                                '                                     </span>\n' +
                                '                                    </p>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field" style="margin-top: 10px" id="precio">\n' +
                                '                                <p style="font-size: 1.7em;">\n' +
                                '                                    <span>\n' +
                                '                                        Precio:\n' +
                                '                                     </span>\n' +
                                '                                        <span>\n' +
                                '                                        15.000 colones\n' +
                                '                                     </span>\n' +
                                '                                    </p>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="row"><div class="form-field col-sm-6 modalImagen" id="imagen1">\n' +
                                '                                <img src="public/css/img/surfear.jpg" width="100%" height="100%">\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field col-sm-6 modalImagen" id="imagen2">\n' +
                                '                                <img src="public/css/img/surfing2.jpeg" width="100%" height="100%">\n' +
                                '                            </div></div>\n' +
                                '\n' +
                                '                            <div class="row"><div class="form-field col-sm-6 modalVideo" id="video">\n' +
                                '                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/R7ExAwN68Ac"\n' +
                                '                                        title="YouTube video player" frameborder="0"\n' +
                                '                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
                                '                                        allowfullscreen>\n' +
                                '\n' +
                                '                                </iframe>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field col-sm-6 modalMapa" id="mapa">\n' +
                                '                                <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d169823.49624770987!2d-84.05345025022179!3d9.292923796406784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSurfing!5e0!3m2!1sen!2scr!4v1621405374200!5m2!1sen!2scr"\n' +
                                '                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>\n' +
                                '                            </div></div>\n' +
                                '                        </div>\n' +
                                '                    </div>\n' +
                                '                </div>\n' +
                                '            </div>\n'+
                                '\n'+
                                '            <div style="grid-column-start: 3; grid-column-end: 3;" class="columnsGrid">\n' +
                                '                <div>\n' +
                                '                    <div class="miniatura-atractivo"><h3 class="text-center">Rafting</h3>\n' +
                                '                    <div class="img-atractivo">\n' +
                                '                        <img type="button" src="public/css/img/rafting.jpg" style="width: 100%; height: 100%;" data-toggle="modal" data-target=".bd-example-modal-3g">\n' +
                                '                    </div></div>\n' +
                                '                </div>\n' +
                                '                <div class="modal fade bd-example-modal-3g" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">\n' +
                                '                    <div class="modal-dialog modal-lg">\n' +
                                '                        <div class="modal-content" style="color: white">\n' +
                                '                            <div class="form-field" id="titulo">\n' +
                                '                                <h2 style="text-align: center; font-size: 4em">Rafting</h2>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field" id="descripcion">\n' +
                                '                                <p style="font-size: 1.5em;">\n' +
                                '                                    <span>\n' +
                                '                                        El surf es un deporte acuático que consiste en realizar amplios giros y maniobras aprovechando la fuerza de una ola, sobre una tabla.\n' +
                                '                                         <br>\n' +
                                '                                        Consiste en mantenerse en equilibrio, deslizandose sobre una tabla, arrastrada por una ola, el mayor tiempo posible y sin caerse al agua dirigiéndola a traves una o varias quillas situadas en la parte trasera de la tabla.\n' +
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
                                '                                        15.000 colones\n' +
                                '                                     </span>\n' +
                                '                                </p>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="row"><div class="form-field col-sm-6 modelImagen" id="imagen1">\n' +
                                '                                <img src="public/css/img/rafting.jpg" width="100%" height="100%">\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field col-sm-6 modalImagen" id="imagen2">\n' +
                                '                                <img src="public/css/img/rafting2.jpg" width="100%" height="100%">\n' +
                                '                            </div></div>\n' +
                                '\n' +
                                '                            <div class="row"><div class="form-field col-sm-6 modalVideo" id="video">\n' +
                                '                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/T-ys08EXFt8"\n' +
                                '                                        title="YouTube video player" frameborder="0"\n' +
                                '                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"\n' +
                                '                                        allowfullscreen>\n' +
                                '\n' +
                                '                                </iframe>\n' +
                                '                            </div>\n' +
                                '\n' +
                                '                            <div class="form-field col-sm-6 modalMapa" id="mapa">\n' +
                                '                                <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d845852.6124993871!2d-84.79592934022878!3d9.997032030827127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srafting!5e0!3m2!1sen!2scr!4v1621461680802!5m2!1sen!2scr"\n' +
                                '                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>\n' +
                                '                            </div></div>\n' +
                                '                        </div>\n' +
                                '                    </div>\n' +
                                '                </div>\n' +
                                '            </div>');
                        } else {
                            $(".contenedor-atractivos").html('<br><br><p style="font-size: 2em; color: darkred;" class="text-center">No hay atividades disponibles de este tipo en este momento.</p>');

                        }
                    }
                }
            });
        </script>

        <div class="contenedor-atractivos">
                <!--modal 1-->
                <div style="grid-column-start: 1; grid-column-end: 1;" class="columnsGrid">
                    <div class="miniatura-atractivo">
                            <h3 class="text-center">Canopy</h3>
                            <div class="img-atractivo">
                                <img style="margin-bottom: 30px" type="button" src="public/css/img/canopy.jpg" width="100%" height="100%" data-toggle="modal" data-target=".bd-example-modal-lg">
                            </div>
                    </div>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                <!--modal 2 -->
                <div  style="grid-column-start: 2; grid-column-end: 2;" class="columnsGrid" >
                    <div class="miniatura-atractivo">
                        <h3 class="text-center">Surfing</h3>
                        <div class="img-atractivo">
                            <img style="margin-bottom: 30px" type="button" src="public/css/img/surfear.jpg" width="100%" height="100%" data-toggle="modal" data-target=".bd-example-modal-2g">
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-2g" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                <!--modal 3 -->
                <div  style="grid-column-start: 3; grid-column-end: 3;" class="columnsGrid">
                    <div class="miniatura-atractivo">
                        <h3 class="text-center">Rafting</h3>
                        <div class="img-atractivo">
                            <img style="margin-bottom: 30px" type="button" src="public/css/img/rafting.jpg" width="100%" height="100%" data-toggle="modal" data-target=".bd-example-modal-3g">
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-3g" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" style="color: white">
                                <div class="form-field" id="titulo">
                                    <h2 style="text-align: center; font-size: 4em">Rafting</h2>
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
                                        <img src="public/css/img/rafting.jpg" width="100%" height="100%">
                                    </div>

                                    <div class="form-field col-sm-6 modelImagen" id="imagen2">
                                        <img src="public/css/img/rafting2.jpg" width="100%" height="100%">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-field col-sm-6 modalVideo" id="video">
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/T-ys08EXFt8"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>

                                        </iframe>
                                    </div>

                                    <div class="form-field col-sm-6 modalMapa" id="mapa">
                                        <iframe align="left" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d845852.6124993871!2d-84.79592934022878!3d9.997032030827127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srafting!5e0!3m2!1sen!2scr!4v1621461680802!5m2!1sen!2scr"
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
