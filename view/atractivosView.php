<?php
require_once 'public/header.php';
?>
    <script type="text/javascript" src="public/js/recomendaciones.js"></script>
<div class="containerRow contenedorBody">
    <div class="container">
        <h3 class="text-center"><?php echo $vars['msj'][1][0][1]?></h3>
        <p class="text-center"><?php echo $vars['msj'][1][0][0]?></p>
        <br>
        <select class="form-control text-center select-atractivos" id="select-atractivos" name="select-atractivos" onclick="filtrarAtractivos()">
            <option class="option-atractivos" value="0" selected>Todos</option>
            <option  class="option-atractivos" value="1" >Parques Nacionales</option>
            <option  class="option-atractivos" value="2">Volcán</option>
            <option  class="option-atractivos" value="3">Museo</option>
            <option  class="option-atractivos" value="4">Reserva</option>
            <option  class="option-atractivos" value="5">Playa</option>
        </select>
        <br>
        <br>

        <div class="contenedor-atractivos" style="margin-bottom: 15px">
            <!--Div atractivo-->
            <?php $cantidadRegistros = sizeof($vars['datos'][1])?>
            <input id="cantidadRegistros" type="text" value="<?php echo $cantidadRegistros?>" hidden/>
            <?php $i= 1; $idtipo="id"; $idDiv="div"; $contador = 1;  foreach ($vars['datos'][1]as $dato){ ?>
            <div id="<?php echo $idDiv.$contador?>" name= "<?php echo $idDiv.$contador?>" style="grid-column-start: <?php echo $i?>; grid-column-end: <?php echo $i?>;" class="columnsGrid">
                <div class="miniatura-atractivo">
                    <h3 class="text-center" style="font-size: 2.8em; margin-top: 50px"><?php echo $dato[4]?></h3>
                    <div class="img-atractivo">
                        <img style="margin-bottom: 30px" type="button" src="public/img/<?php echo $dato[5]?>" width="100%" height="100%" data-toggle="modal" onclick="cargarModal(<?php echo $dato[6]?>)" data-target=".bd-example-modal-lg">
                    </div>
                    <input id="<?php echo $contador?>" type="text" value="<?php echo $dato[6]?>" hidden/>
                    <input id="<?php echo $idtipo.$contador?>" type="text" value="<?php echo $dato[3]?>" hidden/>
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

            <!--modal-->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="color: white">
                        <div class="form-field">
                            <h2 id="titulo" style="text-align: center; font-size: 1.8em"></h2>
                        </div>

                        <div class="form-field">
                            <p style="font-size: 1em; text-align: justify;">
                    <span id="descripcion">
                        <!-- descripciondentro del span -->
                    </span>
                            </p>
                        </div>

                        <div class="form-field" style="margin-top: 10px">
                            <p style="font-size: 1em;">
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

<?php
require_once 'public/footer.php';
?>