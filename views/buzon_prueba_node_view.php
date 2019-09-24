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
<style>
.container_lista_chat{
    border: 2px solid #ffffff;
    background-color: #ffffff;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
    overflow-x: hidden;
    overflow-y: hidden;
    word-wrap: break-word;
}
.container_lista_chat:hover{
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
    overflow-x: hidden;
    overflow-y: hidden;
    word-wrap: break-word;
}
</style>
</head>
<body>

<?php 
include('panel_mvc.php');
?>
<div class="container_12 contenedor " >
    <div class="twelve columns">
		<div class="four columns" style="border: 1px solid #dedede;border-radius: 10px;">
        	<ul id="lista_conversaciones_tienda" style="height: 536px; overflow-y:auto;">
        	</ul>
        </div>
		<div class="six columns" style=" display:flex;justify-content: center;align-items: center;flex-direction:column">
        	<div id="ventana_conversacion_chat" class="twelve columns" style="border: 1px solid #dedede;border-radius: 10px;" >
        	</div>
		</div>
    </div>
</div>
<script>
var data = new FormData();
data.append("id_usuario", <?php echo $id_contacto;?>)
fetch('../../../../chat_backend/read_lista_conversaciones_chat.php', {
	method: 'POST',
	body: data,
	mode: 'cors',
	cache: 'default' 
}).then(function(response) {
	return response.json();
}).then(function(myJson) {
	var actualContent = $( "#lista_conversaciones_tienda" ).html()
	var newMsgContent='';
	for (i = 0; i < myJson.total ; i++) { 
		newMsgContent += '<li style="display: flex; align-items: center;" class="container_lista_chat" id_sala="'+myJson.datos_lista_conversaciones_chat[i].id_sala_chat+'"'+' id_usuario_conversando="'+myJson.datos_lista_conversaciones_chat[i].id_usuario_conversando+'"'+' nombre_usuario_conversando="'+myJson.datos_lista_conversaciones_chat[i].nombre_usuario_conversando+'"'+'> <img src="../../../../../../../contactos/contacto'+myJson.datos_lista_conversaciones_chat[i].id_usuario_conversando+'/contactop_'+myJson.datos_lista_conversaciones_chat[i].id_usuario_conversando+'.jpeg" onerror="this.src=\'../../../../../../../img/Isotipo Founduss-01.svg\';" style="width: 50px;height: 50px;border-radius: 50%;" > <span>'+ myJson.datos_lista_conversaciones_chat[i].nombre_usuario_conversando +'</span> <span style="color:#bbb">' +myJson.datos_lista_conversaciones_chat[i].id_usuario_conversando+'</span>'+'</li>';
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

<!--=============================pie=================================-->
<?php include('pie_pag.html') ?>
</body>
</html>