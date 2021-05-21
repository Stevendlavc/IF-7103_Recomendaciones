<?php
require_once 'public/header.php';
?>
<div class="contenedorBody">
    <div class="jumbotron">
      <div class="container text-center">
        <h1 class="text-center">Actividades y
        Atractivos Turísticos</h1>
        <p>Encuentra las mejores opciones para viajar</p>
        </div>
    </div>
    <div class="containerRow container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-crsl" src="public/css/img/manuelAntonio.jpg" alt="Los Angeles">
                            <div class="textCarrousel">Parque Nacional Manuel Antonio</div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-crsl" src="public/css/img/canopy.jpg" alt="Chicago">
                            <div class="textCarrousel">Canopy</div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-crsl" src="public/css/img/chirripo.jpg" alt="Chicago">
                            <div class="textCarrousel">Cerro Chirripo</div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-crsl" src="public/css/img/volcanIrazu.jpg" alt="New York">
                            <div class="textCarrousel">Volcán Irazú</div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-crsl" src="public/css/img/caminata.jpg"  alt="New York">
                            <div class="textCarrousel">Caminatas</div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                <p style="margin-top: 110px;" class="text-center">Los visitantes disfrutarán de hermosas playas tropicales, emocionantes aventuras, maravillas de la naturaleza y una interesante cultura, todos los componentes necesarios para unas vacaciones ideales.</p>
            </div>
        </div>
    </div>

</div>
<?php
require_once 'public/footer.php';
?>
