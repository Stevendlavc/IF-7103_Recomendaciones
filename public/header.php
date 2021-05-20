<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="public/css/estilo.css">

</head>
<body>

<nav>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Inicio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Principal</a></li>
        <li><a href="?controlador=mapa&accion=accionMapa">Mapa del sitio</a></li>
        <li><a href="?controlador=actividades&accion=accionActividades">Actividades</a></li>
        <li><a href="?controlador=atractivos&accion=atractivos">Atractivos</a></li>
        <li><a href="?controlador=recomendaciones&accion=accionFormularioRecomendaciones">Recomendaciones</a></li>
        <li><a href="?controlador=galeria&accion=accionGaleria">Galeria</a></li>
        <li><a href="?controlador=promociones&accion=promociones">Promociones</a></li>
        <li><a href="?controlador=tips&accion=tips">Consejos para viajar</a></li>
        <li><a href="?controlador=sobreNosotros&accion=accionSobreNosotros">Sobre nosotros</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

