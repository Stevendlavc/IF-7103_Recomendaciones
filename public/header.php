<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Titulo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">

        <!-- CSS -->
        <link rel="stylesheet" href="./public/css/estilo.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Javascript -->
        <script src="./public/js/js_sitio.js" type="text/javascript"></script>
    </head>
    <body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Euclides</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="?controlador=Euclides&accion=detectarEstiloView">Detectar Estilo de Aprendizaje</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controlador=Euclides&accion=adivinarRecintoView">Adivinar Recinto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controlador=Euclides&accion=adivinarSexoView">Adivinar Sexo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controlador=Euclides&accion=adivinarEstiloView">Adivinar Estilo de Aprendizaje</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controlador=Euclides&accion=determinarTipoProfesorView">Tipo de profesor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controlador=Euclides&accion=determinarRedView">Determinar Tipo Red</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>