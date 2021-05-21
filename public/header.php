<!DOCTYPE html>
<html lang="en">
<head>
  <title>Recomendaciones de actividades y atractivos turísticos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="public/css/estilo.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controlador=mapa&accion=accionMapa">Mapa del sitio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controlador=actividades&accion=accionActividades">Actividades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controlador=atractivos&accion=atractivos">Atractivos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controlador=recomendaciones&accion=accionFormularioRecomendaciones">Recomendaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controlador=galeria&accion=accionGaleria">Galeria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controlador=promociones&accion=promociones">Promociones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controlador=tips&accion=tips">Consejos para viajar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controlador=sobreNosotros&accion=accionSobreNosotros">Sobre nosotros</a>
            </li>
        </ul>
    </div>
</nav>
<iframe src="public/musica/aves_16.mp3" allow="autoplay" style="display:none" id="iframeAudio">
</iframe>
<audio autoplay loop  id="playAudio">
    <source src="public/musica/aves_16.mp3">
</audio>

<script>
    $var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
    if (!isChrome){
        $('#iframeAudio').remove()
    }
    else {
        $('#playAudio').remove() // just to make sure that it will not have 2x audio in the background
    }
</script>


