<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Founduss</title>
<link rel="stylesheet" href="../../../../../../../css/fou.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton2.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/panel.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/perfil.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/reset.css?<?php echo $version; ?>">
<link  rel="stylesheet" media="screen" href="../../../../../../../css/style.css?<?php echo $version; ?>">
<link  rel="stylesheet" media="screen" href="../../../../../../../css/inicio.css?<?php echo $version; ?>">
<link  rel="stylesheet" media="screen" href="../../../../../../../css/Estilos_slider_back_and_back.css?<?php echo $version; ?>">
<!--<link  rel="stylesheet" media="screen" href="../../../../../../../Fontello/css/fontello-codes.css?<?php echo $version; ?>">-->
<link href="https://file.myfontastic.com/SQY7bBTxyFP89VqNjUyFL8/icons.css?<?php echo $version; ?>" rel="stylesheet">
<link rel="stylesheet" href="../../../../../../../css/form.css?<?php echo $version; ?>">
<link href="../../../../../../../img/IsotipoFounduss-01.png" rel="icon" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:400i,500" rel="stylesheet">
<link rel="stylesheet" href="../../../../../../../css/Estilos_pie_de_pagina.css?<?php echo $version; ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
<script src="../../../../../../../js/in-view.min.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/scripts.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/funcion_tamano_ventana.js?<?php echo $version; ?>" ></script>
<script src="../../../../../../../js/funciones-panel.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/funciones_pie_pag.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/funciones-inicio.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/ventana.js?<?php echo $version; ?>" async="async"></script>
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
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="../../../../../../../img/Banner1.jpg" class="banner" style="width:100%;height: 1px">
    <div class="text">Caption Text</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="../../../../../../../img/Banner2.2.jpg" class="banner"  style="width:100%;">
    <div class="text">Caption Three</div>
  </div>
  <a class="prev" style="display: none" onclick="plusSlides(-1)">❮</a>
  <a class="next" style="display: none" onclick="plusSlides(1)">❯</a>
</div>
<br>
<div style="text-align:center">
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script>
<div class="row" >
  <div class="twelve columns" >
    <div class="container" >
      <div class="row">
        <div class="twelve columns" style=" width:92%;border-color: rgba(61,61, 63,0.5);margin-left: 4%;margin-right: 4%;" >
          <?php 
          $cate=1;
          $j=0;
          while ($j <= $total_categoria_panel-1){
            $id_categoria = $id_categoria_panel[$j];
            $categoria = $categoria_panel[$j];
          ?>
            <div class="three columns tarjeta1" > 
              <div class="tarjeta2 " id='tarjeta<?php echo $id_categoria;?>' id_categoria='<?php echo $id_categoria;?>'>
                <p class="titulo_card">
                  <span>
                  <?php echo $categoria;?>
                  </span>
                </p>
                <div class="demo-content4" >
                  <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="../../../../../../../img/inicio<?php echo $id_categoria;?>.jpeg" class="tarjeta_inicio">
                </div>
              </div>
            </div>
          <?php 
          $j++; 
          }
          ?>
        </div>
      </div>
    </div>
    <?php 
    $cate=1;
    $a=0;
    while ($a <= $total_categoria_panel-1){
      $id_categoria = $id_categoria_panel[$a];
      $categoria = $categoria_panel[$a];
      require_once("models/subcategorias_model.php");
      $subcat=new subcategorias_model();
      $subcategorias=$subcat->get_subcategorias($id_categoria);
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
      <div class="container" >
        <div class="row">
          <div class="twelve columns" style=" width:96%;border-color: rgba(61,61, 63,0.5);margin-left: 4%">
            <div class="three columns subalado">
              <div class="pic1-botoncategoria<?php echo $categoriaclase; ?>" id="botoncategoria<?php echo $id_categoria; ?>" name="categoria" type="button" value="<?php echo $categoria; ?>" subselecto="<?php echo $subselecto; ?>" <?php if($cate==1){?> abierto="0" <?php }else{?>abierto="0" <?php }?> id_categoria="<?php echo $id_categoria; ?>" id_subcategoria="<?php echo $id_subcategoria; ?>"> 
                <div class="pic1-botoncategoria_estilos_div_categorias">
                  <p class="estilos_texto_categorias">
                    <?php echo $categoria; ?>
                  </p> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="popup" id="popup<?php echo $id_categoria; ?>" style="display: none;">
        <div class="content-popup">
          <div class="close">
            <a id="close<?php echo $id_categoria; ?>" id_categoria="<?php echo $id_categoria; ?>">
              <span>×</span>
            </a>
          </div>
          <div class="pic1_categoriatitulo"  id="catesubcated<?php echo $id_categoria; ?>" >
            <span><?php echo $categoria; ?></span>
          </div>
          <div class="pic1_subcategoriatitulo"  id="catesubcate<?php echo $id_categoria; ?>" <?php if($cate>1){?> style="display:block" <?php  }else{ echo'style="display:block"';}?>>
            <?php
            foreach ($subcategorias as $subcategoria) {
              $fil = $subcategoria['id_subcategoria'];
              $id_subcategoria = $subcategoria['id_subcategoria'];
              $subselecto=$id_subcategoria;
            ?>
              <div class="four columns">
                <a href="../../../../../../../index_categoria.php?id_categoria=<?php echo $id_categoria; ?>&id_subcategoria=<?php echo $subcategoria['id_subcategoria']; ?>">
                  <p class="panel_subcategoria" id="botonsubcate<?php echo $subcategoria['id_subcategoria']; ?>" name="subcategoria" type="button" value="<?php echo $subcategoria['subcategoria']; ?>"  id_subcategoria="<?php echo $subcategoria['id_subcategoria']; ?>" abierto="0"  id_categoria="<?php echo $id_categoria; ?>"  actual="5" subcategorianombre="<?php echo $subcategoria['subcategoria'];?>" >
                    <span class="panel_subcategoria_punto">•</span>
                    <span><?php echo $subcategoria['subcategoria']; ?> (<?php echo $numsubcategorias=$numsubcat->get_numero_tiendas_subcategorias($id_subcategoria); ?>)</span>
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
    <div class="container pic1_subcategoria4" id="categoria<?php echo $id_categoria; ?>" id_categoria="<?php echo $id_categoria; ?>" id_subcategoria="<?php echo $fil; ?>">
      <div class="row" style="display: flex;">
        <div class="pic1_subcategoriaflecha flechasubcategoria izquierda menos" id="subcategoriaflechai<?php echo $id_categoria; ?>" id_categoria="<?php echo $id_categoria; ?>"   tipo="menos" actual="5" actuall=0 id_subcategoria="<?php echo $id_subcategoria; ?>" id_categoria="<?php echo $id_categoria; ?>" style="border-radius:4px; " >
          <div style="width:70%;background:rgb(100, 98, 98);height:100%;border-radius:5px;display:flex;justify-content:center;align-content:center; align-items: center;">
             ❮
          </div>
        </div>
        <div class="pic1_subcategoria3" id="categoriad<?php echo $id_categoria; ?>">
          <div class="pic1_subcategoria" id="categoria<?php echo $id_categoria; ?>" id_categoria="<?php echo $id_categoria; ?>" id_subcategoria="<?php echo $fil; ?>">
            <?php 
            include("buscandotienda2mvc.php"); 
            ?>
          </div>
        </div>
        <div class=" pic1_subcategoriaflecha flechasubcategoria derecha mas" id="subcategoriaflechad<?php echo $id_categoria; ?>" id_categoria="<?php echo $id_categoria; ?>"  id="mas<?php echo $id_categoria; ?>"  tipo="mas" actual="5" actuall=0 id_subcategoria="<?php echo $id_subcategoria; ?>"  >
          <div style="width:70%;background:rgb(100, 98, 98);height:100%;border-radius:5px;display:flex;justify-content:center;align-content:center; align-items: center;">
          ❯
          </div>
        </div>
      </div>
    </div>
    <?php 
    $cate++;
    $a++;
    }
    ?>
  </div>
</div>
<?php include('pie_pag.html') ?>
</body>
</html>