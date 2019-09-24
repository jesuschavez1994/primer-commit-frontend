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
<link rel="stylesheet" href="../../../../../../../js/leaflet.css">
<link  rel="stylesheet" media="screen" href="../../../../../../../css/style.css?<?php echo $version; ?>">
<link  rel="stylesheet" media="screen" href="../../../../../../../css/estilos_productos_y_servicios_perfil_publico.css?<?php echo $version; ?>">
<link href="../../../../../../../img/IsotipoFounduss-01.png" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="../../../../../../../css/Estilos_pie_de_pagina.css?<?php echo $version; ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
<script src="../../../../../../../js/funcion_tamano_ventana.js?<?php echo $version; ?>" ></script>
<script src="../../../../../../../js/in-view.min.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/scripts.js?<?php echo $version; ?>" async="async"></script>
<script  src="../../../../../../../js/jquery.touchSwipe.min.js"></script>
<script src="../../../../../../../js/leaflet.js"></script>
<script src="../../../../../../../loadCSS-2.0.1/src/loadCSS.js"></script>
<script src="../../../../../../../js/funciones-panel.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones-perfil.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones_perfil_publico.js?<?php echo $version; ?>"></script>
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
include('panel_mvc.php') 
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
            <div id="2latiendaboton" class="grid_8 flex_perfil_paramenu"  style="width: 80.6666667%;position: relative; <?php if(!isset($_GET['id_producto'])){ echo 'display: flex;';}else echo 'display: none;';?>; flex-direction: row;">
                <div class="grid_12" id="grid_12_contenedor_perfil">
                    <div class="grid_6 ajuste_tamaño_img_perfil_publico" id=divdeimagenperfil style="display:flex;justify-content:center;">
                        <div class="demo-content10" <?php  echo 'nivel="'.$nivel.'"'; ?> style="margin-top:10%;margin-bottom:0%;width:66%; ">
                            <img id="imagen_perfil" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="../../../../../../../contactos/contacto<?php echo $id_contacto; ?>/tienda<?php echo $id_tienda; ?>/tiegg_<?php echo $id_tienda; ?>.jpeg?<?php echo $version_imagen_tienda;?>" width="100%"  class="box imagen_sombreada "  onerror="this.src='../../../../../../../img/Iconos_de_error_perfil/Tienda_error_perfil_gg.jpg';"  >
                        </div>
                        <div class="posicionfija_tienda">
                        </div>
                    </div>
                    <div class="grid_6 ajuste_tamaño_sobre_nosotros_perfil_publico" id="sobrenosotros_perfil"  >
                        <div class="grad_2" >
                            <h1 class="h1_nombre_de_la_compañia"> 
                                <?php if ($nivel>=3) {?>  
                                    <img class="img_icono_certficacion" src="../../../../../../../img/Icono_certificacion/icono de certificacion.svg" id="imagen_certificado">
                                <?php }echo $tienda; ?>
                            </h1>
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
                                <p><strong>Correo: &nbsp; </strong><?php echo $correotienda; ?></p>
                                <p><strong>Telefonos: &nbsp; </strong><?php echo $telefono; ?><?php if(isset($cel)){echo '-'.$cel;} ?></p>
                                <p><strong>Dirección: &nbsp; </strong><?php echo $direccion; ?></p>
                            </div>
                        </div>
                        <div class="grid_10 menu_rapido_perfil " id="mySidenavubicacion" style="height: 400px; display: none;">
                        </div>
                        <div class="grid_10 menu_rapido_perfil " id="mySidenavmensajeria"  style="min-height:400px; display: none; border:1px solid #ccc;border-radius:10px;width:75%;">
                            <div id="mySidenavmensajeria_buzon" style="min-height:400px; display: block">
                            </div>
                            <div id="mySidenavmensajeria_mensaje" style="min-height:400px; display: none" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="2micontactoboton" class="grid_12 " style="display:none;width:76.6666667%" >
            </div>
            <div id="2misproductos" class="grid_12 flex_perfil " style="display:none;width:76.6666667%">
            </div>
        </div>
        <div class="clear cl1"></div>
        <input id="botonselecto"  name="selecto" type="hidden" selecto="<?php echo $selec; ?>" value="jolih">
        <input id="entrada_producto_o_servicio" type="hidden" name="producto_o_servicio" value="1" defaultValue="0">
    </div>  
    <div class="grid_12" id="buscador_linea_producto" style="display: flex;height: 60px;    ">
        <div class="nuevo_producto grid_3" style="display: flex;" >
            <p>
                <label>
                    <span class="Estilos_texto_producto_perfil_publico"  id="producto_filtro_dentro_tienda">PRODUCTOS</span>
                    <input type="checkbox" id="filtrado_producto_en_tienda" value="0" style="display:none">
                </label>
                <span style="width:2px;font-size:30px;color:#676767;font-family: 'Montserrat', sans-serif;font-weight: normal;">  | </span> 
                <label>
                    <span class="Estilos_texto_servicio_perfil_publico" id="servicio_filtro_dentro_tienda">SERVICIOS</span>
                        <input type="checkbox" id="filtrado_servicio_en_tienda" value="0" style="display:none">
                </label>
            </p>
        </div>
        <div class="grid_6 estilos_linea_servicios_productos" style="height: 30px; border-bottom: solid;border-width: 0.1px;border-color: #cbcbcb">
        </div>
        <div class=" buscador_dentro_de_tienda grid_2_tienda">
            <fieldset class="estilos_fieldset" >
                <label  class="name">
                    <div  class="contorno_buscador_productos edit estilos_buscador_lupa">
                        <input id="buscamiproducto" class="editar_bucador estilos_texto_busca_el_producto_perfil_publico" name="producto" type="text" value="" id_tienda="<?php echo $id_tienda; ?>" id_contacto="<?php echo $id_contacto; ?>" placeholder="Busca el Producto">
                        <img src="../../../../../../../img/iconos-lupa.png" class="lupa_naranja">
                    </div>
                </label>
            </fieldset>
            <input type="hidden" name="MM_update" value="form99" />
            <input type="hidden" name="max" value="<?php echo $a ?>" />
            <input type="hidden" name="actual" value="<?php echo $actual ?>" />
            <input type="hidden" name="id_producto" value="<?php echo $id_product[$actual]; ?>" />  
        </div>
    </div>
<script>
var data = new FormData();
data.append("id_usuario", <?php echo $_SESSION['MM_id_contacto'];?>);
data.append("id_usuario_conversar", <?php echo $id_contacto;?>);
fetch('../../../../chat_backend/read_conversacion_coincidente_chat.php', {
    method: 'POST',
    body: data,
    mode: 'cors',
	cache: 'default' 
}).then(function(response) {
	return response.json();
}).then(function(myJson) {
    console.log(myJson);
    if(myJson.id_sala_chat>0){
        var data_ventana_chat = new FormData();
        data_ventana_chat.append("idSala", myJson.id_sala_chat);
        data_ventana_chat.append("id_usuario_conversar", <?php echo $id_contacto;?>);
        data_ventana_chat.append("nombre_usuario_conversar", '<?php echo $usuario_publico;?>');
        data_ventana_chat.append("id_producto", <?php echo $id_producto;?>);
        $.ajax({
	        url:"../../../../../../../mensajeria_usuario.php",
	        type: "post",
            dataType: "html",
            data: data_ventana_chat,
            cache: false,
            contentType: false,
            processData: false,
            success:function(data){
                $("#mySidenavmensajeria_buzon").html(data).fadeIn('slow');
            }
        });
    }else{
        var Mensajeria= document.getElementById('Mensajeria');
		Mensajeria.addEventListener("click", iniciar_sala_chat);
		function iniciar_sala_chat() {
			var data_inicar_chat = new FormData();
			data_inicar_chat.append("id_usuario_1", <?php echo $_SESSION['MM_id_contacto'];?>);
			data_inicar_chat.append("id_usuario_2", <?php echo $id_contacto;?>);
			fetch('../../../../chat_backend/create_sala_chat.php', {
				method: 'POST',
				body: data_inicar_chat,
				mode: 'cors',
				cache: 'default' 
			})
			.then(function(response) {
	        return response.json();
            }).then(function(myJsonsalacreada) {
				var data_ventana_chat = new FormData();
                data_ventana_chat.append("idSala", myJsonsalacreada.id_sala_chat);
                data_ventana_chat.append("id_usuario_conversar", <?php echo $id_contacto;?>);
                data_ventana_chat.append("nombre_usuario_conversar", '<?php echo $usuario_publico;?>');
                data_ventana_chat.append("id_producto", <?php echo $id_producto;?>);
                $.ajax({
	                url:"../../../../../../../views/mensajeria_usuario_view.php",
	                type: "post",
                    dataType: "html",
                    data: data_ventana_chat,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success:function(data){
                        $("#mySidenavmensajeria_buzon").html(data).fadeIn('slow');
                    }
                });
			});
		}
    }
});
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
            producto_filtro_dentro_tienda.style.color='rgb(150,150,150)';
        }
        if(filtrado_producto_en_tienda.value==0 && filtrado_servicio_en_tienda.value==0 ){
            producto_or_servicio=0;
        }
        if(filtrado_producto_en_tienda.value==1 && filtrado_servicio_en_tienda.value==0 ){
            producto_or_servicio=1;
        }
        if(filtrado_producto_en_tienda.value==0 && filtrado_servicio_en_tienda.value==1 ){
            producto_or_servicio=2;
        }
        if(filtrado_producto_en_tienda.value==1 && filtrado_servicio_en_tienda.value==1 ){
            producto_or_servicio=0;
        }
        var  producto = document.getElementById('buscamiproducto').value;
        var id_tienda= $('#buscamiproducto').attr('id_tienda');
        var id_contacto= $('#buscamiproducto').attr('id_contacto');
        var tipo = "id_producto";
        $.ajax({
            url:"../../../../../../../busqueda_productos_tienda_perfil_publico.php?id_tienda="+id_tienda+"&producto="+producto+"&id_contacto="+id_contacto+"&producto_o_servicio="+producto_or_servicio+"&buscador_dentro_de_tienda=si",
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
            servicio_filtro_dentro_tienda.style.color='rgb(240,146,0)';
        }else{
            filtrado_servicio_en_tienda.value=0;
            servicio_filtro_dentro_tienda.style.color='rgb(150,150,150)';
        }
        if(filtrado_producto_en_tienda.value==0 && filtrado_servicio_en_tienda.value==0 ){
            producto_or_servicio=0;
        }
        if(filtrado_producto_en_tienda.value==1 && filtrado_servicio_en_tienda.value==0 ){
            producto_or_servicio=1;
        }
        if(filtrado_producto_en_tienda.value==0 && filtrado_servicio_en_tienda.value==1 ){
            producto_or_servicio=2;
        }
        if(filtrado_producto_en_tienda.value==1 && filtrado_servicio_en_tienda.value==1 ){
            producto_or_servicio=0;
        }
        var  producto = document.getElementById('buscamiproducto').value;
        var id_tienda= $('#buscamiproducto').attr('id_tienda');
        var id_contacto= $('#buscamiproducto').attr('id_contacto');
        var tipo = "id_producto";
        $.ajax({
            url:"../../../../../../../busqueda_productos_tienda_perfil_publico.php?id_tienda="+id_tienda+"&producto="+producto+"&id_contacto="+id_contacto+"&producto_o_servicio="+producto_or_servicio+"&buscador_dentro_de_tienda=si",
            beforeSend: function(objeto){
                $("#campoproductosentienda").html("<img src='../../../../../../../img/loader.gif'>");
            },
            success:function(data){
                $("#campoproductosentienda").html(data);
            }
        })
        
    }
    
    $("#campoproductosentienda").load("../../../../../../../busqueda_productos_tienda_perfil_publico.php?id_tienda="+<?php echo $id_tienda ?>+"&producto=&id_contacto="+<?php echo $id_contacto ?>+"&page="+page+"&producto_o_servicio="+producto_or_servicio);

    $('#buscamiproducto').keyup(function(){
        var  producto = document.getElementById('buscamiproducto').value;
        var id_tienda= $('#buscamiproducto').attr('id_tienda');
        var id_contacto= $('#buscamiproducto').attr('id_contacto');
        var tipo = "id_producto";
        $.ajax({
            url:"../../../../../../../busqueda_productos_tienda_perfil_publico.php?id_tienda="+id_tienda+"&producto="+producto+"&id_contacto="+id_contacto+"&producto_o_servicio="+producto_or_servicio+"&buscador_dentro_de_tienda=si",
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
   <div class="modal-content" style="height: 500px;display: flex" >
        <p><span class="close2" id="cerrarventana" >×</span></p>
        <div  style="display: flex; flex-direction: column;justify-content: center;align-items: center; min-height: 440px;">
            <div class="container_12">
                <div id="2nuevoproductos" class="grid_12 " >
                </div>
            </div>
        </div>
    </div>
</div> 
</div>  
<!--=============================pie=================================-->
<?php include('pie_pag.html') ?>
</body>
</html>