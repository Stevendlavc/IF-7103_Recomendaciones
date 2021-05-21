<?php
require_once 'public/header.php';
?>
<link rel="stylesheet" type="text/css" href="public/css/PanelDesplegables.css">
<script type="text/javascript" src="public/js/recomendaciones.js"></script>

<div>
    <div class="jumbotron">
        <div class="container">
            <h1 align="center">Recomendaciones</h1>
        </div>
    </div>

    <div class="container-fluid">
        <section class="get-in-touch">
        <div>
                <h1 class="title">Criterios de Búsqueda</h1>
        </div>

        <div class="contenedorFormulario">
                <form class="contact-form row" method="post" action="?controlador=recomendaciones&accion=accionRecomendaciones">
                    <div class="form-field col-sm-6">
                        <input type="radio" value="none" id="actividad" name="tipo" onclick="activarActividad()" checked/>
                        <label for="actividad" class="label">Actividad</label>
                    </div>
                    <div class="form-field col-sm-6">
                        <input type="radio" value="none" id="atractivo" name="tipo" onclick="activarAtractivo()"/>
                        <label for="atractivo" class="label">Atractivo</label>
                    </div>

                    <div class="form-field col-lg-12 ">
                        <select class="form-select input-text js-input" name="precio" id="precio">
                            <option value="1" selected>Bajo</option>
                            <option value="2">Medio</option>
                            <option value="3">Alto</option>
                        </select>
                        <label class="label" for="precio">Precio</label>
                    </div>

                    <div class="form-field col-lg-12 ">
                        <select class="form-select input-text js-input" name="turista" id="turista">
                            <option value="1" selected>Exploradores </option>
                            <option value="2">Extremos</option>
                            <option value="3">Tranquilos</option>
                        </select>
                        <label class="label" for="turista">Tipo Turista</label>
                    </div>

                    <div class="form-field col-lg-12 " id="divActividad" name="divActividad">
                        <select class="form-select input-text js-input" name="tipoActividad" id="tipoActividad">
                            <option value="1" selected>Senderos</option>
                            <option value="2">Surf</option>
                            <option value="3">Canopy</option>
                        </select>
                        <label class="label" for="tipoActividad">Tipo de Actividad</label>
                    </div>

                    <div class="form-field col-lg-12 " id="divAtractivo" name="divAtractivo" hidden>
                        <select class="form-select input-text js-input" name="tipoActractivo" id="tipoAtractivo">
                            <option value="1" selected>Playa</option>
                            <option value="2">Montaña</option>
                            <option value="3">Ciudad</option>
                            <option value="4">Parques Nacionales</option>
                        </select>
                        <label class="label" for="tipoAtractivo">Tipo de Atractivo</label>
                    </div>

                    <div class="form-field col-lg-12 ">
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
                    <div class="form-field col-lg-12">
                        <input class="submit-btn" type="submit" value="Buscar Recomendaciones">
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
<?php
require_once 'public/footer.php';
?>
