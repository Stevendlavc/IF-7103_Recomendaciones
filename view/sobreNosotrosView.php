<?php
require_once 'public/header.php';
?>
<div class="contenedorBody">
    <div class="jumbotron">
        <div class="container">
            <h1><?php echo $vars['datos'][0] ?></h1>
        </div>
    </div>
    <div class="containerRow">
        <div class="row" style="margin-top: 2em;">
            <div class="col-sm-12 text-center">
                <div class="">
                    <p><?php echo $vars['datos'][1]?></p>
                    <p><?php echo $vars['datos'][2]?></p>
                </div>
            </div>

            <div class="row rowMapa" style="margin: auto !important; padding-top: 3em; padding-bottom: 3em;">
                <div class="col-sm-4 text-center">
                    <img src="./public/img/<?php echo $vars['datos'][3]?>" class="img-sobreNosotros"  width="100%" height="100%">
                 </div>
                <div class="col-sm-4" style="text-align: justify;">
                    <p><?php echo $vars['datos'][4]?></p>
                </div>
                <div class="col-sm-4 text-center">
                    <img src="./public/img/<?php echo $vars['datos'][5]?>" class="img-sobreNosotros" width="100%" height="100%">
                </div>
            </div>

            <div class="row rowMapa" style="margin: auto !important;">
                <div class="col-sm-4 text-center">
                    <p class="tituloMapa"><?php echo $vars['datos'][6]?></p>
                    <p><?php echo $vars['datos'][7]?></p>
                    <p><?php echo $vars['datos'][8]?></p>
                </div>
                <div class="col-sm-4 text-center">
                    <p class="tituloMapa"><?php echo $vars['datos'][9]?></p>
                    <p><?php echo $vars['datos'][10]?></p>
                    <p><?php echo $vars['datos'][11]?></p>
                </div>
                <div class="col-sm-4 text-center">
                    <p class="tituloMapa"><?php echo $vars['datos'][12]?></p>
                    <p><?php echo $vars['datos'][13]?></p>
                    <p><?php echo $vars['datos'][14]?></p>
                </div>
            </div>

        </div>
    </div>
    <br>
    <br>
</div>
<?php
require_once 'public/footer.php';
?>
