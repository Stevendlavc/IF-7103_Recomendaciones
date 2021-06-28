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
                   <?php if ($value['pagina']=="Página principal"){?>
                        <a class="tituloMapa" href="index.php"><?php echo $value['pagina']?></a>
                    <?php
                    }
                    else if ($value['pagina']=="Recomendaciones"){?>
                        <a class="tituloMapa" href="?controlador=recomendaciones&accion=accionFormularioRecomendaciones"><?php echo $value['pagina']?></a>
                    <?php
                    }
                    else if ($value['pagina']=="Actividades"){?>
                        <a class="tituloMapa" href="?controlador=actividades&accion=accionActividades"><?php echo $value['pagina']?></a>
                    <?php
                    }
                    else if ($value['pagina']=="Sobre nosotros"){?>
                        <a class="tituloMapa" href="?controlador=sobreNosotros&accion=accionSobreNosotros"><?php echo $value['pagina']?></a>
                    <?php
                    }
                    else if ($value['pagina']=="Galeria"){?>
                        <a class="tituloMapa" href="?controlador=galeria&accion=accionGaleria"><?php echo $value['pagina']?></a>
                    <?php
                    }
                    else if ($value['pagina']=="Mapa del sitio"){?>
                        <a class="tituloMapa" href="?controlador=mapa&accion=accionMapa"><?php echo $value['pagina']?></a>
                    <?php
                    }
                    else if ($value['pagina']=="Promociones"){?>
                        <a class="tituloMapa" href="?controlador=promociones&accion=promociones"><?php echo $value['pagina']?></a>
                    <?php
                    }
                    else if ($value['pagina']=="Consejos para viajar"){?>
                        <a class="tituloMapa" href="?controlador=tips&accion=tips"><?php echo $value['pagina']?></a>
                    <?php
                    }
                    else if ($value['pagina']=="Atractivos"){?>
                        <a class="tituloMapa" href="?controlador=atractivos&accion=atractivos"><?php echo $value['pagina']?></a>
                    <?php
                    }
                    ?>                   
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

