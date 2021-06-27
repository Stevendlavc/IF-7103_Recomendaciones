<?php
require_once 'public/header.php';
?>
<style type="text/css">
    
div.gallery {
  border: 1px solid #ccc;
  margin-top: 10px;
  margin-left: 20px;

}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<script type="text/javascript" src="public/js/galeria.js"></script> 

<div class="contenedorBody">
    <div class="jumbotron">
      <div class="container">
        <h1 id="titulo"></h1>
        <p id="descripción"></p>
        </div>
    </div>
<div class="containerRow" >
    <div class="containerRow">
        <h3 class="text-center">Atractivos</h3>
        <div class="row rowGaleria" style="width: 100%">
            <?php foreach($vars2['datos2'] as $key => $value2){?>
            </br>
            <div class="responsive">
                <div class="gallery">                                                               
                    <h4 class="tituloMapa" style="text-align: center;"><?php echo $value2['nombre']?></h4>
                        <img src="public/img/<?php echo $value2['imagen1']?>" alt="<?php echo $value2['nombre']?>" onclick="onClick(this)" width="600" height="500">
                </div> 
            </div> 
            <?php
            }
            ?>
        </div>
    </div>
    <div class="containerRow">
        <h3 class="text-center">Actividades</h3>
        <div class="row rowGaleria" style="width: 100%">
            <?php foreach($vars['datos'] as $key => $value){?>
            </br>
            <div class="responsive">
                <div class="gallery">                                                               
                    <h4 class="tituloMapa" style="text-align: center;" href="index.php"><?php echo $value['nombre']?></h4>
                        <img src="public/img/<?php echo $value['imagen1']?>" alt="<?php echo $value['nombre']?>" onclick="onClick(this)" width="600" height="400">
                </div> 
            </div> 
            <?php
            }
            ?>
        </div>
    </div>
    <div id="modal01" class="modal-galeria" onclick="this.style.display='none'">
      <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
      <div class="modal-img">
        <img id="img01" style="max-width:100%">
      </div>
    </div>
</div>

<?php
require_once 'public/footer.php';
?>