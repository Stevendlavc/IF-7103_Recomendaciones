<?php
require_once 'public/header.php';
?>
<div class="contenedorBody">
    <div class="jumbotron">
      <div class="container">        
            <?php foreach($vars['datos'] as $key => $value){
                if ($value['pagina']=="Mapa del sitio"){?>
                    <h1><?php echo $value['titulo']?></h1>
                    <p><?php echo $value['descripcion']?></p>
                <?php }
            }
            ?>
        </div>
    </div>
    <div class="containerRow">
        <div class="row rowMapa">
            <?php foreach($vars['datos'] as $key => $value){?>

            <div class="col-sm-4 text-center" style="margin-top: 10px;">
                <a class="tituloMapa" href="index.php"><?php echo $value['pagina']?></a>
                <p class="textMapa"><?php echo $value['descripcion']?></p>
            </div>

            <?php
            }
            ?>
            
        </div>     
        
    </div>
</div>
<?php
require_once 'public/footer.php';
?>

