<?php
require_once 'public/header.php';
?>

<div class="jumbotron">
  <div class="container">
    <h1>Galeria</h1> 
    <p>Muestra imagenes y la descripción de los atractivos y actividades.</p>   
    </div>
</div>


<div class="containerRow">
    <div class="containerRow">
    <h3 class="text-center">Atractivos</h3>
    <div class="row rowGaleria">
        <div class="col-sm-4 text-center">
            <h4 class="tituloMapa" href="index.php">Nombre del atractivo</h4>
            <img src="public/css/img/manuelAntonio.jpg" onclick="onClick(this)" id="myImg" style="width: 300px;">
            <p>Descripción del atractivo</p>
        </div>
        <div class="col-sm-4 text-center">
            <h4 class="tituloMapa" href="index.php">Nombre del atractivo</h4>
            <img src="public/css/img/chirripo.jpg" id="myImg"  onclick="onClick(this)" style="width: 300px;">
            <p>Descripción del atractivo</p>
        </div>
        <div class="col-sm-4 text-center">
            <h4 class="tituloMapa" href="index.php">Nombre del atractivo</h4>
            <img src="public/css/img/tortuga.jpg" id="myImg" onclick="onClick(this)"style="width: 300px;">
            <p>Descripción del atractivo</p>
        </div>
    </div>
    <div class="row rowGaleria">
        <div class="col-sm-4 text-center">
            <h4 class="tituloMapa" href="index.php">Nombre del atractivo</h4>
            <img src="public/css/img/volcanArenal.jpg" id="myImg" onclick="onClick(this)" style="width: 300px;">
            <p>Descripción del atractivo</p>
        </div>
        <div class="col-sm-4 text-center">
            <h4 class="tituloMapa" href="index.php">Nombre del atractivo</h4>
            <img src="public/css/img/volcanIrazu.jpg" id="myImg" onclick="onClick(this)" style="width: 300px;">
            <p>Descripción del atractivo</p>
        </div>
        <div class="col-sm-4 text-center">
            <h4 class="tituloMapa" href="index.php">Nombre del atractivo</h4>
            <img src="public/css/img/manuelAntonio.jpg" id="myImg" onclick="onClick(this)" style="width: 300px;">
            <p>Descripción del atractivo</p>
        </div>
    </div>
    <h3 class="text-center">Actividades</h3>
    <div class="row rowGaleria">
        <div class="col-sm-4 text-center">
            <h4 class="tituloMapa" href="index.php">Nombre de la actividad</h4>
            <img src="public/css/img/caminata.jpg" id="myImg" onclick="onClick(this)" style="width: 300px;">
            <p>Descripción de la actividad</p>
        </div>
        <div class="col-sm-4 text-center">
            <h4 class="tituloMapa" href="index.php">Nombre de la actividad</h4>
            <img src="public/css/img/canopy.jpg" id="myImg" onclick="onClick(this)" style="width: 300px;">
            <p>Descripción de la actividad</p>
        </div>
        <div class="col-sm-4 text-center">
            <h4 class="tituloMapa" href="index.php">Nombre de la actividad</h4>
            <img src="public/css/img/surfear.jpg" id="myImg" onclick="onClick(this)" style="width: 300px;">
            <p>Descripción de la actividad</p>
        </div>
    </div>
    <div class="row rowGaleria">
        <div class="col-sm-4 text-center">
            <h4 class="tituloMapa" href="index.php">Nombre de la actividad</h4>
            <img src="public/css/img/surfear.jpg" id="myImg" onclick="onClick(this)" style="width: 300px;">
            <p>Descripción de la actividad</p>
        </div>
        <div class="col-sm-4 text-center">
            <h4 class="tituloMapa" href="index.php">Nombre de la actividad</h4>
            <img src="public/css/img/caminata.jpg" id="myImg" onclick="onClick(this)" style="width: 300px;">
            <p>Descripción de la actividad</p>
        </div>
        <div class="col-sm-4 text-center">
            <h4 class="tituloMapa" href="index.php">Nombre de la actividad</h4>
            <img src="public/css/img/canopy.jpg" id="myImg" onclick="onClick(this)" style="width: 300px;">
            <p>Descripción de la actividad</p>
        </div>
    </div>
</div>
</div>


<div id="modal01" class="modal" onclick="this.style.display='none'">
  <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
  <div class="modal-content">
    <img id="img01" style="max-width:100%">
  </div>
</div>


<?php
require_once 'public/footer.php';
?>