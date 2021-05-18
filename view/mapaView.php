<?php
require_once 'public/header.php';
?>


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
	  		<a class="tituloMapa">Actividades</a>
        	<p>Descripción de la página actividades</p>
	  	</div>
    </div>
    <div class="row rowMapa">
        <div class="col-sm-4 text-center">
        	<a class="tituloMapa">Atractivos</a>
        	<p>Descripción de la página atractivos</p>
        </div>
	  	<div class="col-sm-4 text-center">
	  		<a class="tituloMapa">Recomendaciones</a>
        	<p>Descripción de la página recomendaciones</p>
	  	</div>
	 	<div class="col-sm-4 text-center">
	  		<a class="tituloMapa">Galeria</a>
        	<p>Descripción de la página galeria</p>
	  	</div>
    </div>
    <div class="row rowMapa">
        <div class="col-sm-4 text-center">
        	<a class="tituloMapa">Promociones</a>
        	<p>Descripción de la página promociones</p>
        </div>
	  	<div class="col-sm-4 text-center">
	  		<a class="tituloMapa">Consejos para viajar</a>
        	<p>Descripción de la página consejos para viajar</p>
	  	</div>
	 	<div class="col-sm-4 text-center">
	  		<a class="tituloMapa">Sobre nosotros</a>
        	<p>Descripción de la página sobre nosotros</p>
	  	</div>
    </div>
</div>

<?php
require_once 'public/footer.php';
?>
