<?php
require_once 'public/header.php';
?>

<script type="text/javascript" src="public/js/inicio.js"></script> 

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
                            <img class="img-crsl" src="public/img/<?php echo $vars['datos'][0]['imagen1']?>">
                            <div class="textCarrousel" id="text1"><?php echo $vars['datos'][0]['nombre']?></div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-crsl" src="public/img/<?php echo $vars['datos'][1]['imagen1']?>" >
                            <div class="textCarrousel "id="text2"><?php echo $vars['datos'][1]['nombre']?></div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-crsl" src="public/img/<?php echo $vars['datos'][2]['imagen1']?>" >
                            <div class="textCarrousel" id="text3"><?php echo $vars['datos'][2]['nombre']?></div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-crsl" src="public/img/<?php echo $vars['datos'][3]['imagen1']?>">
                            <div class="textCarrousel" id="text4"><?php echo $vars['datos'][3]['nombre']?></div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-crsl" src="public/img/<?php echo $vars['datos'][4]['imagen1']?>">
                            <div class="textCarrousel" id="text5"><?php echo $vars['datos'][4]['nombre']?></div>
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
                <p style="margin-top: 45px;" class="text-center" id="texto"></p>
                <div class="text-center">
                    <a style="margin-top: 5px;" href="?controlador=recomendaciones&accion=accionFormularioRecomendaciones">
                        <input class="submit-btn btn-inicio" type="button" value="Recomendaciones">
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
require_once 'public/footer.php';
?>
