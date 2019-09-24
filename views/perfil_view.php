<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Founduss Perfil Usuario</title>
<link rel="stylesheet" href="../../../../../../../css/fou.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/perfil.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/form.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton2.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/panel.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/reset.css?<?php echo $version; ?>">
<link href = "https://file.myfontastic.com/SQY7bBTxyFP89VqNjUyFL8/icons.css?<?php echo $version; ?>" rel="stylesheet" >
<link rel="stylesheet" href="../../../../../../../css/Estilos_Editar_imagen.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/Estilos_eliminar_productos.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/Estilos_nuevo_producto_perfil_usuario.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/Estilos_informacion_de_contacto.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/Estilos_productos_y_servicios_perfil_usuario.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../js/leaflet.css"/>
<link  rel="stylesheet" media="screen" href="../../../../../../../css/style.css?<?php echo $version; ?>">
<link  rel="stylesheet" href="../../../../../../../css/font-awesome.css?<?php echo $version; ?>">
<link href="../../../../../../../img/IsotipoFounduss-01.png" rel="icon" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
<link rel="stylesheet" href="../../../../../../../css/Estilos_pie_de_pagina.css?<?php echo $version; ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<script src="../../../../../../../js/jquery-3.3.1.min.js"></script>                       
<script src="../../../../../../../js/funcion_tamano_ventana.js?<?php echo $version; ?>" ></script>
<script src="../../../../../../../js/in-view.min.js"></script>
 <script src="../../../../../../../js/scripts.js?<?php echo $version; ?>" async="async"></script>
<script  src="../../../../../../../js/jquery.touchSwipe.min.js"></script>
<script src="../../../../../../../js/leaflet.js"></script>
<script src="../../../../../../../loadCSS-2.0.1/src/loadCSS.js"></script>
<script src="../../../../../../../js/funciones-panel.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones-perfil.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/busca3.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones_menu_rapido_tienda.js?<?php echo $version; ?>"></script>
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
<div class="container_12 contenedor " style="display:flex;flex-direction:column">
  <div class="menu_sidevar_slider">
    <nav Class="menu_sidevar_slider_nav">
        <ol class="Lista_ordenada_ol_menu_sidevar_slider_nav">
            <li class="estilos_li_menu" id="estilo_li_menu_producto" style="display:none"><span class="Estilos_fuentes_menu_sidevar" id="producto_boton_info_perfil">Producto</span> <div class="gris" id="bloque_producto"></div></li><div class="Separacion_div"></div>
            <li class="estilos_li_menu"><span class="Estilos_fuentes_menu_sidevar" id="Tienda">Tienda</span> <div class="naranjita" id="bloque_tienda"></div></li><div class="Separacion_div"></div>
            <li class="estilos_li_menu"><span class="Estilos_fuentes_menu_sidevar" id="Mensajeria">Mensajeria  </span> <div class="gris" id="bloque_mensajeria">  </div></li><div class="Separacion_div"></div>
            <li class="estilos_li_menu"><span class="Estilos_fuentes_menu_sidevar" id="contactanos" ubicacion="<?php echo $ubicacion;?>" tienda="<?php echo $tienda; ?>">Contáctanos </span> <div class="gris" id="bloque_ponte_contacto"> </div></li><div class="Separacion_div"></div>
        </ol>
    </nav>
  </div>
  <div class="perfil_producto_contenedor container_12">
    <div class="grid_12 flex_perfil emp_box" id='campo_perfil' style="display: flex;justify-content: center;align-items: center;" >
        <div id="2latiendaboton" class="grid_8 flex_perfil_paramenu"  style="width:80.6666667%;position: relative; <?php if(!isset($_GET['id_producto'])){ echo 'display: flex;';}else echo 'display: none;';?>; flex-direction: row;">
            <div class="grid_12" id="grid_12_contenedor_perfil">
                <div class="grid_6 ajuste_tamo_img_usuario" id=divdeimagenperfil style="display:flex;justify-content:center;">
                    <div class="demo-content10" <?php  echo 'nivel="'.$nivel.'"'; ?> style="margin-top:10%;margin-bottom:0%;width:66%; ">
                        <img id="imagen_perfil" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="../../../../../../../contactos/contacto<?php echo $id_contacto; ?>/tienda<?php echo $id_tienda; ?>/tiegg_<?php echo $id_tienda; ?>.jpeg?<?php echo $version_imagen_tienda;?>" width="100%"  class="box imagen_sombreada "  onerror="this.src='../../../../../../../img/Iconos_de_error_perfil/Tienda_error_perfil_gg.jpg';"  >
                    </div>
                    <div class="posicionfija_tienda">
                    </div>
                </div>
                <div class="grid_6 ajuste_tamo_img_usuario" id="sobrenosotros_perfil"  >
                    <div class="grad_2 Espacio_Descripcion_Tienda_perrfil_view.php" >
                        <h1 class="h1_nombre_de_la_compañia"> 
                            <?php if ($nivel>=3) {?>  
                                <img class="img_icono_certficacion" src="../../../../../../../img/Icono_certificacion/icono de certificacion.svg" id="imagen_certificado">
                            <?php }
                            if ($total_tienda_franquicia>0){
                                echo $datos_tienda_franquicia['datos_read_franquicia']['nombre_franquicia'];
                            }else echo $tienda; ?>
                        </h1>
                        <?php 
                        if ($total_tienda_franquicia>0){
                        ?>
                            <h2 class="h2_nombre_de_la_compañia" style="margin-left:40px;height:22px">
                                (<?php echo $tienda;?>).
                            </h2>
                        <?php } ?>
                        <p><br><br></p>
                        <p class="texto_descripcion_de_tienda"><?php echo $descripcion_tienda; ?></p>
                    </div>
                </div>
                <div id='sidenavs' class='grid_4 menu_rapido_perfil' style="box-sizing: border-box;">
                    <div class="grid_10 menu_rapido_perfil " id="mySidenavtienda" style="height: 400px; display: none;">
                        <p style="font-size: 100%;font-weight: bold;line-height: 100%;"><?php echo $tienda; ?><p>
                        <p><br></p>
                        <p><?php echo $descripcion_tienda; ?></p>
                    </div>
                    <div class="grid_10 menu_rapido_perfil estilos_grid_responsive" id="mySidenavcontacto" >
                        <div style="width:100%">
                            <p><span class="texto_ponte_en_contacto"><?php echo $contacto; ?></span></p>
                            <br>
                            <p><strong>Correo:</strong>&nbsp;<?php echo $correo; ?></p>
                            <p><strong>Telefonos:</strong>&nbsp;<?php echo $telefono; ?><?php if(isset($cel)){echo '-'.$cel;} ?></p>
                            <p ><strong>Dirección:</strong>&nbsp;<?php echo $direccion; ?></p>
                        </div>
                    </div>
                    <div class="grid_10 menu_rapido_perfil " id="mySidenavubicacion" style="height: 400px; display: none;">
                    </div>
                    <div class="grid_10 menu_rapido_perfil " id="mySidenavmensajeria"  style="height: 400px;overflow-y:hidden; display: none">
                        <div id="mySidenavmensajeria_buzon" style="height: 400px; display: block">
                            <?php include('buzon_entrada_perfil.php')?>
                        </div>
                        <div id="mySidenavmensajeria_mensaje" style="height:400px;display: none" >
                        </div>
                    </div>
                </div>
            </div>
            <div style=" display:none;height: 450px;margin-top: 50px;width: 1px;background: #CBCBCB;">
            </div>
        </div>
        <div id="2micontactoboton" class="grid_12 " style="display:none;width:76.6666667%" >
        </div>
        <div id="2misproductos" class="grid_12 flex_perfil " style="display:none;width:76.6666667%">
        </div>
    </div>
    <div class="clear cl1"></div>
    <input id="botonselecto"  name="selecto" type="hidden" selecto="<?php echo $selec; ?>" value="jolih" style="background:#F99615:" >
    <input id="entrada_producto_o_servicio" type="hidden" name="producto_o_servicio" value="1" defaultValue="0">
</div>
<div class="grid_12 buscador" id="buscador_linea_producto" style=" ">
   <div class="nuevo_producto grid_3" style="display: flex;" >
        <img src="../../../../../../../img/iconos-mas.png" class="Estilos_icono_mas"  id="nuevoproductos" class="pic1-botontienda1 mySidenav" id_tienda="<?php echo $id_tienda; ?>" id_contacto="<?php echo $id_contacto; ?>" type="button" value="PRODUCTO NUEVO" id_subcategoria="" abierto="1" botonactual="nuevoproductos" nivel="<?php echo $nivel; ?>">
        <p width="100%;">
            <label class="estilos_laber_productos">
                <span class="Estilos_texto_producto_perfirl_usuario" id="producto_filtro_dentro_tienda">PRODUCTOS</span>
                <input type="checkbox" id="filtrado_producto_en_tienda" value="0" style="display:none">
            </label>
            <span class="Estilos_barra_vertical">|</span> 
            <label class="estilos_laber_productos">
                <span class="Estilos_texto_servicio_perfirl_usuario" style="cursor:pointer;" id="servicio_filtro_dentro_tienda">SERVICIOS</span>
                <input type="checkbox" id="filtrado_servicio_en_tienda" value="0" style="display:none">
            </label>
        </p>
    </div>
    <div class="grid_6 estilos_linea_servicios_productos_perfirl_usuario">
    </div>
    <div  class=" buscador_dentro_de_tienda grid_2_tienda">
        <fieldset  class="edit estilos_fieldset_usuario">
            <label style="border-radius:20px;color:#676767;" class="name">
                <div  class="contorno_buscador_productos">
                    <input id="buscamiproducto" class="editar_bucador estilos_texto_Busca_el_producto_usuario" name="producto" type="text" value="" id_tienda="<?php echo $id_tienda; ?>" id_contacto="<?php echo $id_contacto; ?>" placeholder="Busca el Producto">
                    <img src="../../../../../../../img/iconos-lupa.png" class="lupa_naranja">
                </div>
            </label>
      </fieldset>
      <input type="hidden" name="MM_update" value="form99" />    
    </div>
</div>
<script>

// Programacion Java-Script-Menu_sidevar-Nuevo
var sobre_nosotros=document.getElementById('sobrenosotros_perfil');
var contactanos=document.getElementById('contactanos');
var Tienda=document.getElementById('Tienda');
var bloque_ponte_contacto=document.getElementById('bloque_ponte_contacto');
var bloque_tienda=document.getElementById('bloque_tienda');
var bloque_mensajeria=document.getElementById('bloque_mensajeria');
var Bloque_ponte_en_contacto=document.getElementById('mySidenavcontacto');  
var Mensajeria=document.getElementById('Mensajeria');
var Muestra_mensajeria=document.getElementById('mySidenavmensajeria');
var Logo_foto=document.getElementById('divdeimagenperfil');
var grid_12_contenedor_perfil=document.getElementById('grid_12_contenedor_perfil');
var sidenavs=document.getElementById('sidenavs');
var campo_perfil=document.getElementById('campo_perfil');
var la_tienda=document.getElementById('2latiendaboton');
var Mi_ubicacion=document.getElementById('mySidenavubicacion');

// Creando Nodo //
var div_padre=document.getElementById("mySidenavubicacion");
var elemento_div_creado=document.createElement('div');
    elemento_div_creado.setAttribute("id","mapa");
    div_padre.appendChild(elemento_div_creado);
  
    Tienda.addEventListener('click', function(){
    bloque_tienda.style.background=" #f09200";
    bloque_ponte_contacto.style.background='rgb(204, 204, 204)';
    bloque_mensajeria.style.background='rgb(204, 204, 204)';
    sobre_nosotros.style.display='flex';
    Bloque_ponte_en_contacto.style.display='none';
    Muestra_mensajeria.style.display='none';
    sidenavs.style.display='none';
    Logo_foto.style.display='flex';
    grid_12_contenedor_perfil.style.display='block';
  });

    Mensajeria.addEventListener('click', function(){ 
    sidenavs.classList.remove("ancho");
    sidenavs.setAttribute("class","ancho1"); 
    bloque_tienda.style.background='rgb(204, 204, 204)';
    bloque_mensajeria.style.background=" #f09200";
    bloque_ponte_contacto.style.background='rgb(204, 204, 204)';
    Mi_ubicacion.style.display='none';
    Muestra_mensajeria.style.display='block';
    Bloque_ponte_en_contacto.style.display='none';
    sobre_nosotros.style.display='none';
    Logo_foto.style.display='none';
    grid_12_contenedor_perfil.style.display='flex';
    grid_12_contenedor_perfil.style.justifyContent='center';
    sidenavs.style.display='flex';
    sidenavs.style.justifyContent='center';
    });

    contactanos.addEventListener('click', function(){
    bloque_tienda.style.background='rgb(204, 204, 204)';
    bloque_mensajeria.style.background='rgb(204, 204, 204)';
    bloque_ponte_contacto.style.background="#f09200";
    Bloque_ponte_en_contacto.style.display='flex';
    Mi_ubicacion.style.display='block';
    sobre_nosotros.style.display='none';
    Muestra_mensajeria.style.display='none';
    Logo_foto.style.display='none';
    sidenavs.style.display='flex';
    //sidenavs.style.border='solid 2px pink'; //
    sidenavs.classList.remove("grid_4");
    sidenavs.setAttribute("class","ancho");
    var contactanos=$('#contactanos');
    var ubicacion=contactanos.attr('ubicacion');
    var tienda=contactanos.attr('tienda');
    var formData = new FormData();
      formData.append("tienda", tienda);
      formData.append("ubicacion", ubicacion);
      //formData.append(f.attr("name"), $(this)[0].files[0]);
      $.ajax({
        url: '../../../../../../../ubicacion.php',
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
          $('#mySidenavubicacion').html(data);
        }
      });
  });
  //***** */
$(document).ready(function(){
    var page="<?php echo $page ?>";
    var entrada_producto_o_servicio = document.getElementById('entrada_producto_o_servicio');
    var valor_entrada_producto_o_servicio=entrada_producto_o_servicio.value;
    var filtrado_producto_en_tienda = document.getElementById('filtrado_producto_en_tienda');
    filtrado_producto_en_tienda.addEventListener("click",clickenFiltroProducto);
    var filtrado_servicio_en_tienda = document.getElementById('filtrado_servicio_en_tienda');
    filtrado_servicio_en_tienda.addEventListener("click",clickenFiltroServicio);
    var producto_or_servicio=0;
    var producto_filtro_dentro_tienda = document.getElementById('producto_filtro_dentro_tienda');
    var servicio_filtro_dentro_tienda = document.getElementById('servicio_filtro_dentro_tienda');

    function clickenFiltroProducto(){
        if(filtrado_producto_en_tienda.value==0){
            filtrado_producto_en_tienda.value=1;
            producto_filtro_dentro_tienda.style.color='rgb(240,146,0)';
        }else{
            filtrado_producto_en_tienda.value=0;
        }
        if(filtrado_producto_en_tienda.value==0 && filtrado_servicio_en_tienda.value==0 ){
            producto_or_servicio=0;
            producto_filtro_dentro_tienda.style.color='rgb(221,221,221)';
            servicio_filtro_dentro_tienda.style.color='rgb(221,221,221)';
        }
        if(filtrado_producto_en_tienda.value==1 && filtrado_servicio_en_tienda.value==0 ){
            producto_or_servicio=1;
            producto_filtro_dentro_tienda.style.color='rgb(77,77,77)';
            servicio_filtro_dentro_tienda.style.color='rgb(221,221,221)';
        }
        if(filtrado_producto_en_tienda.value==0 && filtrado_servicio_en_tienda.value==1 ){
            producto_or_servicio=2;
            producto_filtro_dentro_tienda.style.color='rgb(221,221,221)';
            servicio_filtro_dentro_tienda.style.color='rgb(77,77,77)';
        }
        if(filtrado_producto_en_tienda.value==1 && filtrado_servicio_en_tienda.value==1 ){
            producto_or_servicio=0;
            producto_filtro_dentro_tienda.style.color='rgb(77,77,77)';
            servicio_filtro_dentro_tienda.style.color='rgb(77,77,77)';
        }
        var  producto = document.getElementById('buscamiproducto').value;
        var id_tienda= $('#buscamiproducto').attr('id_tienda');
        var id_contacto= $('#buscamiproducto').attr('id_contacto');
        var tipo = "id_producto";
        $.ajax({
            url:"../../../../../../../buscandoproductosentiendaeditar.php?id_tienda="+id_tienda+"&producto="+producto+"&id_contacto="+id_contacto+"&producto_o_servicio="+producto_or_servicio+"&buscador_dentro_de_tienda=si",
            beforeSend: function(objeto){
                $("#campoproductosentienda").html("<img src='../../../../../../../img/loader.gif'>");
            },
            success:function(data){
                $("#campoproductosentienda").html(data);
            }
        })
    }
    function clickenFiltroServicio(){
        if(filtrado_servicio_en_tienda.value==0){
            filtrado_servicio_en_tienda.value=1;
        }else{
            filtrado_servicio_en_tienda.value=0;
        }
        if(filtrado_producto_en_tienda.value==0 && filtrado_servicio_en_tienda.value==0 ){
            producto_or_servicio=0;
            producto_filtro_dentro_tienda.style.color='rgb(221,221,221)';
            servicio_filtro_dentro_tienda.style.color='rgb(221,221,221)';
        }
        if(filtrado_producto_en_tienda.value==1 && filtrado_servicio_en_tienda.value==0 ){
            producto_or_servicio=1;
            producto_filtro_dentro_tienda.style.color='rgb(77,77,77)';
            servicio_filtro_dentro_tienda.style.color='rgb(221,221,221)';
        }
        if(filtrado_producto_en_tienda.value==0 && filtrado_servicio_en_tienda.value==1 ){
            producto_or_servicio=2;
            producto_filtro_dentro_tienda.style.color='rgb(221,221,221)';
            servicio_filtro_dentro_tienda.style.color='rgb(77,77,77)';
        }
        if(filtrado_producto_en_tienda.value==1 && filtrado_servicio_en_tienda.value==1 ){
            producto_or_servicio=0;
            producto_filtro_dentro_tienda.style.color='rgb(77,77,77)';
            servicio_filtro_dentro_tienda.style.color='rgb(77,77,77)';
        }
        var  producto = document.getElementById('buscamiproducto').value;
        var id_tienda= $('#buscamiproducto').attr('id_tienda');
        var id_contacto= $('#buscamiproducto').attr('id_contacto');
        var tipo = "id_producto";
        $.ajax({
            url:"../../../../../../../buscandoproductosentiendaeditar.php?id_tienda="+id_tienda+"&producto="+producto+"&id_contacto="+id_contacto+"&producto_o_servicio="+producto_or_servicio+"&buscador_dentro_de_tienda=si",
            beforeSend: function(objeto){
                $("#campoproductosentienda").html("<img src='../../../../../../../img/loader.gif'>");
            },
            success:function(data){
                $("#campoproductosentienda").html(data);
            }
        }) 
    }
    $("#campoproductosentienda").load("../../../../../../../buscandoproductosentiendaeditar.php?id_tienda="+<?php echo $id_tienda ?>+"&producto=&id_contacto="+<?php echo $id_contacto ?>+"&producto_o_servicio="+producto_or_servicio+"&page="+page);
    $('#buscamiproducto').keyup(function(){
        var  producto = $(this).val();
        var id_tienda= $(this).attr('id_tienda');
        var id_contacto= $(this).attr('id_contacto');
        var tipo = "id_producto";
        $.ajax({url:"../../../../../../../buscandoproductosentiendaeditar.php?id_tienda="+id_tienda+"&producto="+producto+"&id_contacto="+id_contacto+"&producto_o_servicio="+producto_or_servicio+"&buscador_dentro_de_tienda=si",
                beforeSend: function(objeto){
                    $("#campoproductosentienda").html("<img src='../../../../../../../img/loader.gif'>");
                },
                success:function(data){
                    $("#campoproductosentienda").html(data);
                }
        })
    });
});

</script>
<div class="grid_12_productos omega" id="campoproductosentienda"> 
    <div class="grid_8 omega">  
        <br />
        <br /> 
        <br /> 
        <br /> 
    </div>
</div>
</div>
<div class="clear"></div>
<div id="1misproductos" class="grid_12" style="">    
</div>
<div id="myModal2" class="modal " style="display: none;">
   <div class="modal-content contenido-nuevo-producto" id="contenido_nuevo_producto"  >
        <p style="z-index:9999;"><span  class="close2" id="cerrarventana" >×</span></p>
        <div class="parrafo-nuevo-producto" id="parrado-producto">
            <div class="container_12">
                <div id="2nuevoproductos" class="grid_12 " >
                </div>
            </div>
        </div>
    </div>
</div> 
</div>  
<script > 



$('.close2').click(function() {
    $("#2nuevoproductos").html('');
    $('#myModal2').css('display', 'none');
});
var modal = document.getElementById('myModal2');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        $("#2nuevoproductos").html('');
    }
}
</script>
<!--=============================pie=================================-->
<?php include('pie_pag.html') ?>
</body>

</html>
