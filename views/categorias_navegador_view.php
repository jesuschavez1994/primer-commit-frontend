<!DOCTYPE >
<html >
<head>
<meta  content="text/html; charset=utf-8" />
<title>Founduss Categorias</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
<link rel="stylesheet" href="../../../../../../../css/fou.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton2.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/panel.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/perfil.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/reset.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/inicio.css?<?php echo $version; ?>">
<link  rel="stylesheet" media="screen" href="../../../../../../../css/style.css">
<link rel="stylesheet" href="../../../../../../../css/form.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton.css?<?php echo $version; ?>">
<link href="../../../../../../../img/IsotipoFounduss-01.png" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="../../../../../../../css/Estilos_pie_de_pagina.css?<?php echo $version; ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
<script src="../../../../../../../js/in-view.min.js"></script>
<script src="../../../../../../../js/funcion_tamaño_ventana.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/funciones-panel.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/scripts.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/busca.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/ventana.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/funciones-inicio.js?<?php echo $version; ?>" async="async"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131128364-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131128364-1');
</script>
</head>
<body>
  <?php
  include('panel_mvc.php');  

  ?>
  <div class="container" >
    <div class="eleven columns" style="border-color: rgba(61,61, 63,0.5);margin-left: 4.1666%;margin-right: 4.1666%">
      <div class="three columns subalado">
        <div class="pic1-botoncategoria1" id="botoncategoria<?php echo $id_categoria_navegador; ?>" name="categoria" type="button" value="<?php echo $categoria_navegador; ?>" id_categoria="<?php echo $id_categoria_navegador; ?>" id_subcategoria="<?php echo $id_subcategoria_navegador; ?>" > 
          <p style="font-size: 30px;margin-left: 1%">
            <?php echo $categoria_navegador; ?>
          </p> 
          <img id="todas<?php echo $id_categoria; ?>" class="todas" tipo="todas" actual="5" id_subcategoria="<?php echo $id_subcategoria; ?>" id_categoria="<?php echo $id_categoria; ?>" style="border-radius:4px; display:block;margin-top: 5px;" src="../../../../../../../img/abajo.png" width="30" height="30"  />
        </div>
      </div>
      <div class="twelve columns" style="display: flex">
        <p class="pic1-botonsubcategoriaalado" id="botonaladocate<?php echo $id_categoria; ?>" name="subcategoria" type="button" value=""  id_subcategoria="" abierto="0"  id_categoria=""  actual="5" style="display:block;" >
          <?php echo $subcategoria_navegador; ?>
        </p>
        <div class="nine columns medio" id="raya_categoria_medio<?php echo $id_categoria; ?>" style="display: block;box-sizing: border-box; flex-grow: 8;align-items: center;">
        </div>
        <div style="flex-grow: 0.5;min-height: 20px;">
        </div>
      </div>
    </div>
    <div class="pic1_subcategoriatienda" subcategoria="<?php echo $id_subcategoria; ?>" id="subcategoria<?php echo $id_subcategoria; ?>" categoria="<?php echo $categoria; ?>">
      <div id="loader" class="text-center"> 
        <img src="../../../../../../../img/loader.gif">
      </div>
      <div class="outer_div eleven columns " style="margin-left: 4.1666%;margin-right: 4.1666%">
      </div>
    </div>
  </div>
  <?php 
    $cate=1;
    $a=0;
      require_once("models/subcategorias_model.php");
      $subcat=new subcategorias_model();
      $subcategorias=$subcat->get_subcategorias($id_categoria_navegador);
      if(isset($id_subcategoria)){
        $subselecto=$id_subcategoria;
      }else{
        $id_subcategoria=0;
        $subselecto=0;
      }
      if($cate==1){
        $categoriaclase=1;
      }else{
      $categoriaclase="";
      }
      ?>
      <div class="popup" id="popup<?php echo $id_categoria_navegador; ?>" style="display: none;">
        <div class="content-popup">
          <div class="close">
            <a id="close<?php echo $id_categoria_navegador; ?>" id_categoria="<?php echo $id_categoria_navegador; ?>">
              <span>×</span>
            </a>
          </div>
          <div class="pic1_categoriatitulo"  id="catesubcated<?php echo $id_categoria; ?>" >
            <span><?php echo $categoria_navegador; ?></span>
          </div>
          <div class="pic1_subcategoriatitulo"  id="catesubcate<?php echo $id_categoria; ?>" <?php if($cate>1){?> style="display:block" <?php  }else{ echo'style="display:block"';}?> >
            <?php
            foreach ($subcategorias as $subcategoria){
              $fil = $subcategoria['id_subcategoria'];
              $id_subcategoria = $subcategoria['id_subcategoria'];
              $subselecto=$id_subcategoria;
            ?>
              <div class="four columns">
                <a href="../../../../../../../index_categoria.php?id_categoria=<?php echo $id_categoria_navegador; ?>&id_subcategoria=<?php echo $subcategoria['id_subcategoria']; ?>">
                  <p class="panel_subcategoria" id="botonsubcate<?php echo $subcategoria['id_subcategoria']; ?>" name="subcategoria" type="button" value="<?php echo $subcategoria['subcategoria']; ?>"  id_subcategoria="<?php echo $subcategoria['id_subcategoria']; ?>" abierto="0"  id_categoria="<?php echo $id_categoria_navegador; ?>"  actual="5" subcategorianombre="<?php echo $subcategoria['subcategoria'];?>" >
                    <span class="panel_subcategoria_punto">•</span>
                    <span><?php echo $subcategoria['subcategoria']; ?></span>
                  </p>
                </a>
              </div>
            <?php  
            } 
            ?>
          </div>
        </div>
    </div>
    <div class="popup-overlay">
    </div>
<?php include('pie_pag.html') ?>
</body>
</html>
<script>
$(document).ready(function(){
  load(1);
});
function load(page){
    var parametros = {"action":"ajax","page":page};
    $("#loader").fadeIn('slow');
    $.ajax({
      url:"index_categoria_carga.php?id_categoria=<?php echo $id_categoria_navegador;?>&id_subcategoria=<?php echo $id_subcategoria_navegador;?>&categoria=<?php echo $categoria;?>",
      data: parametros,
       beforeSend: function(objeto){
      $("#loader").html("<img src='../../../../../../../img/loader.gif'>");
      },
      success:function(data){
        $(".outer_div").html(data).fadeIn('slow');
        $("#loader").html("");
        window.scrollTo(0, 0);
      }
    })
  }
  </script>