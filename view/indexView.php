<?php
require_once 'public/header.php';
?>


<div class="jumbotron">
  <div class="container text-center">
    <h1 class="text-center">Actividades y 
    Atractivos Turísticos</h1> 
    <p>Encuentra las mejores opciones para viajar</p>  
    </div>
</div>
<div class="containerRow">
    <div class="row">
        <div id="myCarousel" class="carousel slide col-sm-6" data-ride="carousel" style="width: 500px;">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="public/css/img/manuelAntonio.jpg" style="width: 700px;"  alt="Los Angeles">
              <div class="textCarrousel">Parque Nacional Manuel Antonio</div>
            </div>

            <div class="item">
              <img src="public/css/img/canopy.jpg" style="width: 700px;" alt="Chicago">
              <div class="textCarrousel">Canopy</div>
            </div>

            <div class="item">
              <img src="public/css/img/chirripo.jpg" style="width: 700px;" alt="Chicago">
              <div class="textCarrousel">Cerro Chirripo</div>
            </div>

            <div class="item">
              <img src="public/css/img/volcanIrazu.jpg" style="width: 700px;" alt="New York">
              <div class="textCarrousel">Volcán Irazú</div>
            </div>

            <div class="item">
              <img src="public/css/img/caminata.jpg" style="width: 700px;"  alt="New York">
              <div class="textCarrousel">Caminatas</div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="col-sm-6">
            <p style="margin-top: 110px;">Los visitantes disfrutarán de hermosas playas tropicales, emocionantes aventuras, maravillas de la naturaleza y una interesante cultura, todos los componentes necesarios para unas vacaciones ideales.</p>
        </div>
    </div>
</div>



<?php
require_once 'public/footer.php';
?>
