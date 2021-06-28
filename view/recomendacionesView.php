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
            <h1 align="center"><?php echo $vars['msj'][1][0][1]?></h1>
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
                            <form class="contact-form" method="post" action="?controlador=recomendaciones&accion=buscarRecomendaciones">
                                <div class="form-field">
                                    <input type="radio" value="1" id="tipo" name="tipo" onclick="activarActividad()" checked/>
                                    <label for="actividad" class="label">Actividad</label>
                                </div>
                                <div class="form-field">
                                    <input type="radio" value="2" id="tipo" name="tipo" onclick="activarAtractivo()"/>
                                    <label for="atractivo" class="label">Atractivo</label>
                                </div>

                                <div class="form-field col-lg-12 ">
                                    <select class="form-select input-text js-input" name="precio" id="precio">
                                        <option value="1" selected>Menor o igual a 10.000</option>
                                        <option value="2">Mayor a 10.000 y menor o igual a 50.000</option>
                                        <option value="3">Mayor a 50.000</option>
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
                                        <option value="6" selected>En la montaña</option>
                                        <option value="7">En el mar</option>
                                    </select>
                                    <label class="label" for="tipoActividad">Lugar de Actividad</label>
                                </div>

                                <div class="form-field " id="divAtractivo" name="divAtractivo" hidden>
                                    <select class="form-select input-text js-input" name="tipoActractivo" id="tipoAtractivo">
                                        <option value="1" selected>Parques Nacionales</option>
                                        <option value="2">Volcán</option>
                                        <option value="3">Museo</option>
                                        <option value="4">Reserva</option>
                                        <option value="5">Playa</option>
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
                <!--modal 1 -->

              <?php $i= 1; $contador = 1;foreach ($vars['datos'] as $dato){ ?>
                <div style="grid-column-start: <?php echo $i?>; grid-column-end: <?php echo $i?>;" class="columnsGrid">
                    <div class="miniatura-atractivo">
                        <h3 class="text-center" style="font-size: 2.8em; margin-top: 50px"><?php echo $dato[0]?></h3>
                        <div class="img-atractivo">
                            <img style="margin-bottom: 30px" type="button" src="public/img/<?php echo $dato[1]?>" width="100%" height="100%" data-toggle="modal" onclick="cargarModal(<?php echo $dato[2]?>)" data-target=".bd-example-modal-lg">
                        </div>
                        <input id="<?php echo $contador?>" type="text" value="<?php echo $dato[2]?>" hidden/>
                    </div>
                   </div>

                <?php if($i < 3){
                        $i++;
                    }else{
                        $i=1;
                    }
                  $contador++;
                }
                ?>
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="color: white">
                            <div class="form-field">
                                <h2 id="titulo" style="text-align: center; font-size: 2.8em"></h2>
                            </div>

                            <div class="form-field">
                                <p style="font-size: 2em; text-align: justify;">
                    <span id="descripcion">
                        <!-- descripciondentro del span -->
                    </span>
                                </p>
                            </div>

                            <div class="form-field" style="margin-top: 10px">
                                <p style="font-size: 2em;">
                    <span>
                        Precio:
                    </span>
                                    <span id="costo">

                    </span>
                                </p>
                            </div>

                            <div class="row">
                                <div class="form-field col-sm-6 modalImagen">
                                    <img id="imagen1" src="" width="100%" height="100%">
                                </div>

                                <div class="form-field col-sm-6 modalImagen" >
                                    <img id="imagen2" src="" width="100%" height="100%">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-field col-sm-6 modalVideo">
                                    <iframe id="video" width="100%" height="100%" src=""
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>

                                    </iframe>
                                </div>

                                <div class="form-field col-sm-6 modalMapa" >
                                    <iframe id="mapa" align="left" src=""
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