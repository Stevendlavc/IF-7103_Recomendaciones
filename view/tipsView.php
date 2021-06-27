<?php
require_once 'public/header.php';
?>

<div class="contenedorBody">
    <div class="container-fluid panel-tips">
        <div class="texto-panel-tips">
            Consejos para viajeros
        </div>
    </div>

    <?php
        $contador = 1;
        foreach ($vars as $tip){
            if (($contador%2) !== 0){
    ?>
                <div class="container-fluid tips" style="width: 75%;">
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <img src="./public/img/<?php echo $tip['imagen']; ?>" class="img-tip">
                        </div>
                        <div class="col-md-8 col-lg-8">
                            <h2 class="titulo-tip"><?php echo $tip['titulo']; ?></h2>
                            <div class="texto-tip">
                                <?php echo $tip['descripcion']; ?>
                            </div>
                        </div>
                    </div>
                </div>
    <?php
                $contador++;
            }else{
    ?>
                <div class="container-fluid tips" style="width: 75%;">
                    <div class="row">
                        <div class="col-md-8 col-lg-8">
                            <h2 class="titulo-tip"><?php echo $tip['titulo']; ?></h2>
                            <div class="texto-tip">
                                <?php echo $tip['descripcion']; ?>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <img src="./public/img/<?php echo $tip['imagen']; ?>" class="img-tip">
                        </div>
                    </div>
                </div>
    <?php
                $contador++;
            }
        }
    ?>
</div>

<?php
require_once 'public/footer.php';
?>
