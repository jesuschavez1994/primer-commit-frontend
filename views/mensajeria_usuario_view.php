<?php 
if (!isset($_SESSION)) {
  session_start();
}
if(isset($_POST['idSala'])){
  $idSala=  $_POST['idSala'];
}else{
  $idSala=20;
}
if(isset($_SESSION['MM_id_contacto'])){
  $id_usuario= $_SESSION['MM_id_contacto'];
}else $id_usuario=0;
if(isset($_SESSION['MM_usuario'])){
  $nombre_usuario= $_SESSION['MM_usuario'];
}else $nombre_usuario='';
if(isset($_POST['id_usuario_conversar'])){
  $id_usuario_conversar=  $_POST['id_usuario_conversar'];
}else{
  $id_usuario_conversar=0;
}
if(isset($_POST['tienda'])){
  $tienda=  $_POST['tienda'];
}else{
  $tienda='';
}
if(isset($_POST['nombre_usuario_conversar'])){
  $nombre_usuario_conversar=  $_POST['nombre_usuario_conversar'];
}else{
  $nombre_usuario_conversar='';
}
if(isset($_POST['id_kind_mensaje_chat'])){
  $id_kind_mensaje_chat=  $_POST['id_kind_mensaje_chat'];
}else{
  $id_kind_mensaje_chat=1;
}
if(isset($_POST['id_producto'])){
  $id_producto=  $_POST['id_producto'];
}else{
  $id_producto=0;
}
?>
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
<link rel="stylesheet" href="../../../../../../../css/Estilos_chat.css?<?php echo $version; ?>">
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
<style>
.container_lista_chat{
    border:none;
    background-color: #ffffff;
    border-radius: 0px;
    padding: 5px;
    margin: 0px 0;
    overflow-x: hidden;
    overflow-y: hidden;
    word-wrap: break-word;
}
.container_lista_chat:hover{
    border:none;
    background:rgba(240,146,7,0.49);
    cursor:pointer;
    border-radius: 0px;
    padding: 5px;
    margin: 0px 0;
    overflow-x: hidden;
    overflow-y: hidden;
    word-wrap: break-word;
}
</style>
</head>
<body>

<div class="container_12 contenedor " >
    <div class="twelve columns">
        <div class="four columns estilo_contenedor" style="border-left:none;border-radius: 10px;">
        <div class="div_mis_clientes_chat_empresa" id="id_texto_mis_clientes_chat_empresa">
		    <p class="texto-clientes_chat">
			    Mis clientes
		    </p>
	    </div>
            <ul id="lista_conversaciones_tienda" style="height: 440px; overflow-y:auto;border-left:none;">
            </ul>
        </div>
		<div class="six columns" style=" display:flex;justify-content: center;align-items: center;flex-direction:column">
        	<div id="ventana_conversacion_chat" class="twelve columns ventana_conversacion_chat">
          <div style="width:20%;height:100px;"></div>
        	</div>
    </div>
    </div>
</div>
<script>
var data_ventana_chat = new FormData();
data_ventana_chat.append("idSala", <?php echo $idSala;?>);
data_ventana_chat.append("id_usuario_conversar", <?php echo $id_usuario_conversar;?>);
data_ventana_chat.append("nombre_usuario_conversar", '<?php echo $nombre_usuario_conversar;?>');
data_ventana_chat.append("id_producto", <?php echo $id_producto;?>);
$.ajax({
	url:"../../../../../../../index_prueba_node.php",
	type: "post",
  dataType: "html",
  data: data_ventana_chat,
  cache: false,
  contentType: false,
  processData: false,
  success:function(data){
    $("#ventana_conversacion_chat").html(data).fadeIn('slow');
  }
});

var data = new FormData();
data.append("id_usuario", <?php echo $id_usuario;?>)
data.append("idSala", <?php echo $idSala;?>)
data.append("id_usuario_conversar", <?php echo $id_usuario_conversar;?>)
fetch('../../../../chat_backend/read_lista_conversaciones_chat_por_id_sala.php', {
	method: 'POST',
	body: data,
	mode: 'cors',
	cache: 'default' 
}).then(function(response) {
	return response.json();
}).then(function(myJson) {
	var actualContent = $( "#lista_conversaciones_tienda" ).html();
	var newMsgContent='';
	for (i = 0; i < myJson.total ; i++) { 
		newMsgContent += '<li style="display: flex; align-items: center;" class="container_lista_chat" id_sala="'+myJson.datos_lista_conversaciones_chat[i].id_sala_chat+'"'+' id_usuario_conversando="'+myJson.datos_lista_conversaciones_chat[i].id_usuario_conversando+'"'+' nombre_usuario_conversando="'+myJson.datos_lista_conversaciones_chat[i].nombre_usuario_conversando+'"'+' id_producto="'+myJson.datos_lista_conversaciones_chat[i].id_producto+'"'+' nombre_imagen_producto="'+myJson.datos_lista_conversaciones_chat[i].nombre_imagen_producto+'"'+' versionImagenProducto="'+myJson.datos_lista_conversaciones_chat[i].versionImagenProducto+'"'
    +'> <img  src="../../../../../../../contactos/contacto'+myJson.datos_lista_conversaciones_chat[i].id_usuario_conversando+'/'+myJson.datos_lista_conversaciones_chat[i].nombre_imagen_producto+myJson.datos_lista_conversaciones_chat[i].id_producto+'/'+myJson.datos_lista_conversaciones_chat[i].nombre_imagen_producto+'g1_'+myJson.datos_lista_conversaciones_chat[i].id_producto+'.jpeg?'+myJson.datos_lista_conversaciones_chat[i].versionImagenProducto+'"  onerror="this.src=\'../../../../../../../img/Isotipo Founduss-01.svg\';" style="width: 50px;height: 50px;border-radius: 50%;" > <span style="font-weight: 500;color: rgb(0, 0, 0);font-size:11px;margin-left:7px;">'
    + myJson.datos_lista_conversaciones_chat[i].nombre_usuario_conversando +'</span> <span style="color:#bbb">' +myJson.datos_lista_conversaciones_chat[i].id_usuario_conversando+'<span>'+'</li>';
	}
	var content = newMsgContent + actualContent;
	$( "#lista_conversaciones_tienda" ).html( content );
	console.log(myJson);
	var container_lista_chat = document.getElementsByClassName("container_lista_chat");
	for (var i=0; i< container_lista_chat.length; i++) {
		container_lista_chat[i].addEventListener("click",function() {
			var data_ventana_chat = new FormData();
			data_ventana_chat.append("idSala", this.attributes.getNamedItem("id_sala").value);
			data_ventana_chat.append("id_usuario_conversar",this.attributes.getNamedItem("id_usuario_conversando").value);
			data_ventana_chat.append("nombre_usuario_conversar",this.attributes.getNamedItem("nombre_usuario_conversando").value  );
      data_ventana_chat.append("id_producto",this.attributes.getNamedItem("id_producto").value  );
      data_ventana_chat.append("nombre_imagen_producto",this.attributes.getNamedItem("nombre_imagen_producto").value  );
			$.ajax({
				url:"../../../../../../../index_prueba_node.php",
				type: "post",
    			dataType: "html",
      			data: data_ventana_chat,
     			cache: false,
      			contentType: false,
      			processData: false,
            	success:function(data){
              		$("#ventana_conversacion_chat").html(data).fadeIn('slow');
            	}
			});
    	});
	}
});

</script>
</body>
</html>