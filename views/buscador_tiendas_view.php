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
<link rel="stylesheet" href="../../../../../../../css/buscador.css?<?php echo $version; ?>">
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
<style>
/* The container */
.container_checkbox {
  width:60%;
  display: block;
  position: relative;
  padding-left: 17px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 14px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container_checkbox input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark_checkbox {
  position: absolute;
  top: 0;
  left: 0;
  height: 15px;
  width: 15px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container_checkbox:hover input ~ .checkmark_checkbox {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container_checkbox input:checked ~ .checkmark_checkbox {
  background-color: rgb(240,146,0);
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark_checkbox:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container_checkbox input:checked ~ .checkmark_checkbox:after {
  display: block;
}

/* Style the checkmark/indicator */
.container_checkbox .checkmark_checkbox:after {
  left: 5px;
  top: 2px;
  width: 3px;
  height: 6px;
  border: solid white;
  border-width: 0 2px 2px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
</head>
<body>
  <?php
  include('panel_mvc.php');
  ?>
  <div class="container">
    <div class="row" >
      <div class="two columns" id="contenedor_filtro_buscador_tienda"style="display: flex;flex-direction: column; justify-content: center;align-items: center;padding-top:20px" >
        <?php
        include('controllers/totalizador_buscandolatienda.php');
        ?>
      </div>
      <div class="ten columns buscador_tienda_tienda" >
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
    var tienda_buscador_panel="<?php echo $tienda_buscador_panel ?>";
    var estado=<?php echo $id_estado ?>;
    var ciudad=<?php echo $id_ciudad ?>;
    var checkbox_categoria_filtro_buscador = document.getElementsByClassName("checkbox_categoria_filtro_buscador");
    var checkbox_estado_filtro_buscador = document.getElementsByClassName("checkbox_estado_filtro_buscador");
    var arr_id_categoria=[];
    var arr_id_estado=[];
    var boton_aplicar_filtros=document.getElementById("boton_aplicar_filtros");
    arr_id_categoria=[];
    for (var i=0; i< checkbox_categoria_filtro_buscador.length; i++) {
      if (checkbox_categoria_filtro_buscador[i].checked == true){
        arr_id_categoria.push(checkbox_categoria_filtro_buscador[i].getAttributeNode("id_categoria").value);
      }
    }
    arr_id_estado=[];
    for (var i=0; i< checkbox_estado_filtro_buscador.length; i++) {
      if (checkbox_estado_filtro_buscador[i].checked == true){
        arr_id_estado.push(checkbox_estado_filtro_buscador[i].getAttributeNode("id_estado").value);
      }
    }
    var parametros = {
      "action":"ajax",
      "page":page,
      "tienda":tienda_buscador_panel,
      "id_ciudad":ciudad,
      "arr_id_estado":JSON.stringify(arr_id_estado),
      "arr_id_categoria":JSON.stringify(arr_id_categoria)
    };
    $("#loader").fadeIn('slow');
    $.ajax({
      url:"../../../../../../../controllers/buscandolatienda.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#loader").html("<img src='../../../../../../../img/loader.gif'>");
      },
      success:function(data){
        $(".outer_div").html(data).fadeIn('slow');
        $("#loader").html("");
        $('html, body').animate({scrollTop:0});
      }
    });
    $.ajax({
      url:"../../../../../../../controllers/totalizador_buscandolatienda.php",
      data: parametros,
       beforeSend: function(objeto){
      },
      success:function(data){
        
      }
    });
    boton_aplicar_filtros.addEventListener("click",function() {
      arr_id_categoria=[];
      for (var i=0; i< checkbox_categoria_filtro_buscador.length; i++) {
        if (checkbox_categoria_filtro_buscador[i].checked == true){
          arr_id_categoria.push(checkbox_categoria_filtro_buscador[i].getAttributeNode("id_categoria").value);
        } 
      }
      arr_id_estado=[];
      for (var i=0; i< checkbox_estado_filtro_buscador.length; i++) {
        if (checkbox_estado_filtro_buscador[i].checked == true){
          arr_id_estado.push(checkbox_estado_filtro_buscador[i].getAttributeNode("id_estado").value);
        }
      }
      page=1;
      var parametros = {
        "action":"ajax",
        "page":page,
        "tienda":tienda_buscador_panel,
        "id_ciudad":ciudad,
        "arr_id_estado":JSON.stringify(arr_id_estado),
        "arr_id_categoria":JSON.stringify(arr_id_categoria),
      };
      console.log(parametros);
      $.ajax({
        url:"../../../../../../../controllers/buscandolatienda.php",
        data: parametros,
        beforeSend: function(objeto){
          $("#loader").html("<img src='../../../../../../../img/loader.gif'>");
        },
        success:function(data){
          $(".outer_div").html(data).fadeIn('slow');
          $("#loader").html("");
          $('html, body').animate({scrollTop:0});
        }
      });
      $.ajax({
      url:"../../../../../../../controllers/totalizador_buscandolatienda.php",
      data: parametros,
       beforeSend: function(objeto){
      },
      success:function(data){
      }
      });
    });
    for (var i=0; i< checkbox_categoria_filtro_buscador.length; i++) {
      checkbox_categoria_filtro_buscador[i].addEventListener("change",function() {
        arr_id_categoria=[];
        for (var i=0; i< checkbox_categoria_filtro_buscador.length; i++) {
          if (checkbox_categoria_filtro_buscador[i].checked == true){
            arr_id_categoria.push(checkbox_categoria_filtro_buscador[i].getAttributeNode("id_categoria").value);
          }
        }
        page=1
        var parametros = {
          "action":"ajax",
          "page":page,
          "tienda":tienda_buscador_panel,
          "id_ciudad":ciudad,
          "arr_id_estado":JSON.stringify(arr_id_estado),
          "arr_id_categoria":JSON.stringify(arr_id_categoria),
        };
        console.log(parametros);
        $("#loader").fadeIn('slow');
        $.ajax({
          url:"../../../../../../../controllers/buscandolatienda.php",
          data: parametros,
          beforeSend: function(objeto){
            $("#loader").html("<img src='../../../../../../../img/loader.gif'>");
          },
          success:function(data){
            $(".outer_div").html(data).fadeIn('slow');
            $("#loader").html("");
            $('html, body').animate({scrollTop:0});
          }
        });
      }); 
    }
    for (var i=0; i< checkbox_estado_filtro_buscador.length; i++) {
      checkbox_estado_filtro_buscador[i].addEventListener("change",function() {
        arr_id_estado=[];
        for (var i=0; i< checkbox_estado_filtro_buscador.length; i++) {
          if (checkbox_estado_filtro_buscador[i].checked == true){
            arr_id_estado.push(checkbox_estado_filtro_buscador[i].getAttributeNode("id_estado").value);
          }
        }
        page=1
        var parametros = {
          "action":"ajax",
          "page":page,
          "tienda":tienda_buscador_panel,
          "id_ciudad":ciudad,
          "arr_id_estado":JSON.stringify(arr_id_estado),
          "arr_id_categoria":JSON.stringify(arr_id_categoria)
        };
        $("#loader").fadeIn('slow');
        console.log(parametros);
        $.ajax({
          url:"../../../../../../../controllers/buscandolatienda.php",
          data: parametros,
          beforeSend: function(objeto){
            $("#loader").html("<img src='../../../../../../../img/loader.gif'>");
          },
          success:function(data){
            $(".outer_div").html(data).fadeIn('slow');
            $("#loader").html("");
            $('html, body').animate({scrollTop:0});
          }
        });
      });
    }
}
    </script>