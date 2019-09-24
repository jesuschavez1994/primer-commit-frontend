<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Founduss Buscador Producto</title>
<link rel="stylesheet" href="../../../../../../../css/fou.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton2.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/perfil.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/form.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/panel.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/reset.css?<?php echo $version; ?>">
<link  rel="stylesheet" media="screen" href="../../../../../../../css/style.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/Estilos_pie_de_pagina.css?<?php echo $version; ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link href="../../../../../../../img/IsotipoFounduss-01.png" rel="icon" type="image/x-icon" />
<script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
<script src="../../../../../../../js/funcion_tamaño_ventana.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones-panel.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/busca3.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/busca.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/ventana.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones-inicio.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/in-view.min.js"></script>
<script src="../../../../../../../js/funciones_pie_pag.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/scripts.js?<?php echo $version; ?>" async="async"></script>
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
  <div class="container">
    <div class="row" >
      <div class="twelve columns buscador_tienda_producto" >
        <div id="campo" style="margin-left:0%;">
          <div id="loader" class="text-center"> 
            <img src="../../../../../../../img/loader.gif">
          </div>
          <div class="outer_div"></div><!-- Datos ajax Final -->
        </div>
      </div>
    </div>
 </div>
<!--=============================pie=================================-->
<?php include('pie_pag.html') ?>
</body>
</html>
<script>
  $(document).ready(function(){
    load(1);
  });

  function load(page){
    var producto_buscador_panel="<?php echo $producto_buscador_panel ?>";
    var estado=<?php echo $id_estado ?>;
    var ciudad=<?php echo $id_ciudad ?>;
    var parametros = {"action":"ajax","page":page};
    $("#loader").fadeIn('slow');
    $.ajax({
      url:"../../../../../../../controllers/buscandoelservicio.php?producto="+producto_buscador_panel+"&id_ciudad="+ciudad+"&id_estado="+estado,
      data: parametros,
       beforeSend: function(objeto){
      $("#loader").html("<img src='../../../../../../../img/loader.gif'>");
      },
      success:function(data){
        $(".outer_div").html(data).fadeIn('slow');
        $("#loader").html("");
        $('html, body').animate({scrollTop:0});
      }
    })
  }  
  </script>