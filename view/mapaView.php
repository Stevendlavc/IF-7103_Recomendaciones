<?php
require_once 'public/header.php';
?>
<div class="contenedorBody">
    <div class="jumbotron">
      <div class="container">
        <h1>Mapa del sitio</h1>
        <p>Muestra como es la estructura del sitio con una descripcion de cada nodo y su link.</p>
        </div>
    </div>
    <div class="containerRow">
        <div class="row rowMapa">
            <div class="col-sm-4 text-center">
                <a class="tituloMapa" href="index.php">Página Principal</a>
                <p>Descripción de la página principal</p>
            </div>
            <div class="col-sm-4 text-center">
                <a class="tituloMapa" href="?controlador=mapa&accion=accionMapa">Mapa del Sitio</a>
                <p>Descripción de la página mapa del sitio</p>
            </div>
            <div class="col-sm-4 text-center">
                <a class="tituloMapa" href="?controlador=actividades&accion=accionActividades">Actividades</a>
                <p>Descripción de la página actividades</p>
            </div>
        </div>
        <div class="row rowMapa">
            <div class="col-sm-4 text-center">
                <a class="tituloMapa" href="?controlador=atractivos&accion=atractivos">Atractivos</a>
                <p>Descripción de la página atractivos</p>
            </div>
            <div class="col-sm-4 text-center">
                <a class="tituloMapa" href="?controlador=recomendaciones&accion=accionFormularioRecomendaciones">Recomendaciones</a>
                <p>Descripción de la página recomendaciones</p>
            </div>
            <div class="col-sm-4 text-center">
                <a class="tituloMapa" href="?controlador=galeria&accion=accionGaleria">Galeria</a>
                <p>Descripción de la página galeria</p>
            </div>
        </div>
        <div class="row rowMapa">
            <div class="col-sm-4 text-center">
                <a class="tituloMapa" href="?controlador=promociones&accion=promociones">Promociones</a>
                <p>Descripción de la página promociones</p>
            </div>
            <div class="col-sm-4 text-center">
                <a class="tituloMapa" href="?controlador=tips&accion=tips">Consejos para viajar</a>
                <p>Descripción de la página consejos para viajar</p>
            </div>
            <div class="col-sm-4 text-center">
                <a class="tituloMapa" href="?controlador=sobreNosotros&accion=accionSobreNosotros">Sobre nosotros</a>
                <p>Descripción de la página sobre nosotros</p>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'public/footer.php';
?>
