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
<link rel="stylesheet" href="../../../../../../../css/Estilos_pie_de_pagina.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
<script src="../../../../../../../js/in-view.min.js"></script>
<script src="../../../../../../../js/funcion_tamaño_ventana.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/funciones-panel.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/scripts.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/busca.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/ventana.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/funciones-inicio.js?<?php echo $version; ?>" async="async"></script>
</head>
<body>
  <?php
  include('panel_mvc.php');  
  ?>
  <div class="container" >
    <div class="eleven columns" style="border-color: rgba(61,61, 63,0.5);margin-left: 4.1666%;margin-right: 4.1666%">
      <div class="twelve columns">
        <button id="boton_buscar_franquicia_modal">buscar franquicia</button>
        <button id="boton_buscar_tienda_modal">buscar tienda</button>
            <form id="formulario_agregar_tienda_franquicia" method="post" name="form1">
                <input value="" name="nombre_franquicia" id="entrada_nombre_franquicia" >
                <input type="hidden" value="0" name="id_franquicia" id="id_franquicia_en_administrador_tienda_franquicia" placeholder="id_franquicia">
                <input value="" name="nombre_tienda" id="entrada_nombre_tienda" placeholder="nombre tienda">
                <input type="hidden" value="0" name="id_tienda" id="id_tienda_en_administrador_tienda_franquicia" placeholder="id_tienda">
                <input type="submit" value="enviar">
              </form>
            </div>
          </div>
        </div>
    </div>
    <div class="popup-overlay">
    </div>
    <div id="myModal" class="modal" style="display:none">
    <!-- Modal content -->
      <div class="modal-content">
        <span id="close" >&times;</span>
        <p>Some text in the Modal..</p>
        <input type="text" class="buscador_posicion_inicio" id="boton_informacion_busqueda_franquicia" value="" size="32" />
        <div class="contenido" id="informacion_busqueda_franquicia"></div>
      </div>
    </div>
    <div id="myModal2" class="modal" style="display:none">
    <!-- Modal content -->
      <div class="modal-content">
        <span id="close2" >&times;</span>
        <p>Some text in the Modal..</p>
        <input type="text" class="buscador_posicion_inicio" id="boton_informacion_busqueda_tienda" value="" size="32" />
        <div class="contenido" id="informacion_busqueda_tienda"></div>
      </div>
    </div>

</div>
<?php include('pie_pag.html') ?>
</body>
<script>
var boton_buscar_franquicia_modal=document.getElementById("boton_buscar_franquicia_modal");
var abrir_modal = boton_buscar_franquicia_modal.addEventListener("click", abrir_modal_funcion);
function abrir_modal_funcion(event) {
  document.getElementById("myModal").style.display='block';
}
var boton_close=document.getElementById("close");
var cerrar_modal = boton_close.addEventListener("click", cerrar_modal_funcion);
function cerrar_modal_funcion(event) {
  document.getElementById("myModal").style.display='none';
}
var boton_informacion_busqueda_franquicia=document.getElementById("boton_informacion_busqueda_franquicia");
boton_informacion_busqueda_franquicia.addEventListener('keyup', buscar_franquicia);

function buscar_franquicia(event){
  var boton_informacion_busqueda_franquicia=document.getElementById("boton_informacion_busqueda_franquicia");
  var nombre_franquicia_search=boton_informacion_busqueda_franquicia.value;
  var data = new FormData();
  data.append("nombre_franquicia_search", nombre_franquicia_search);
    fetch('../../../../../../../franquicia_backend/search.php', {
        method: 'POST',
        body: data,
        mode: 'cors',
        cache: 'default' 
    }).then(function(response) {
			  if(response.ok) {
		 		  return response.json();
			  }else {
				  throw "Error en la llamada Ajax";
			  }
		}).then(function(myJson) {
        console.log(myJson);
	      var newMsgContent='';
	      for (i = 0; i < myJson.total ; i++) { 
          newMsgContent+='<table width="100%" style="'; 
          if (i%2==0) {  newMsgContent+='background-color: #fff';
          }else newMsgContent+=' background-color: #ccc; " >';
          newMsgContent+='<tr style="align-items: left;display: flex; justify-content: flex-start;align-content: left;text-align: left;">';
          newMsgContent+='<th scope="col" style="width: 80%">';
          newMsgContent+=myJson.datos_search_franquicia[i].nombre_franquicia;
          newMsgContent+='</th>';
          newMsgContent+='<th scope="col" style="width: 5%">';
          newMsgContent+=myJson.datos_search_franquicia[i].subcategoria;
          newMsgContent+='</th>';
          newMsgContent+='<th scope="col" style="flex-grow: 1">    <button class="elegir_franquicia" id_franquicia="';
          newMsgContent+=myJson.datos_search_franquicia[i].id_franquicia;
          newMsgContent+='" nombre_franquicia="';
          newMsgContent+=myJson.datos_search_franquicia[i].nombre_franquicia;
          newMsgContent+='" >elegir</button></th></tr></table>';
  	    }
	      var content = newMsgContent;
	      $( "#informacion_busqueda_franquicia" ).html( content );
	      var elegir_franquicia = document.getElementsByClassName("elegir_franquicia");
	      for (var i=0; i< elegir_franquicia.length; i++) {
		      elegir_franquicia[i].addEventListener("click",function() {
            document.getElementById("entrada_nombre_franquicia").value=this.attributes.getNamedItem("nombre_franquicia").value;
            document.getElementById("id_franquicia_en_administrador_tienda_franquicia").value=this.attributes.getNamedItem("id_franquicia").value;
    	    });
	      }
		  });
}
var boton_buscar_tienda_modal=document.getElementById("boton_buscar_tienda_modal");
var abrir_modal2 = boton_buscar_tienda_modal.addEventListener("click", abrir_modal_funcion2);
function abrir_modal_funcion2(event) {
  document.getElementById("myModal2").style.display='block';
}
var boton_close2=document.getElementById("close2");
var cerrar_modal2 = boton_close2.addEventListener("click", cerrar_modal_funcion2);
function cerrar_modal_funcion2(event) {
  document.getElementById("myModal2").style.display='none';
}
var boton_informacion_busqueda_tienda=document.getElementById("boton_informacion_busqueda_tienda");
boton_informacion_busqueda_tienda.addEventListener('keyup', buscar_tienda);

function buscar_tienda(event){
  var boton_informacion_busqueda_tienda=document.getElementById("boton_informacion_busqueda_tienda");
  var nombre_tienda_search=boton_informacion_busqueda_tienda.value;
  var data = new FormData();
  data.append("nombre_tienda_search", nombre_tienda_search);
    fetch('../../../../../../../tienda_backend/search.php', {
        method: 'POST',
        body: data,
        mode: 'cors',
        cache: 'default' 
    }).then(function(response) {
			  if(response.ok) {
		 		  return response.json();
			  }else {
				  throw "Error en la llamada Ajax";
			  }
		}).then(function(myJson) {
        console.log(myJson);
	      var newMsgContent='';
	      for (i = 0; i < myJson.total ; i++) { 
          newMsgContent+='<table width="100%" style="'; 
          if (i%2==0) {  newMsgContent+='background-color: #fff';
          }else newMsgContent+=' background-color: #ccc; " >';
          newMsgContent+='<tr style="align-items: left;display: flex; justify-content: flex-start;align-content: left;text-align: left;">';
          newMsgContent+='<th scope="col" style="width: 80%">';
          newMsgContent+=myJson.datos_search_tienda[i].nombre_tienda;
          newMsgContent+='</th>';
          newMsgContent+='<th scope="col" style="width: 5%">';
          newMsgContent+=myJson.datos_search_tienda[i].subcategoria;
          newMsgContent+='</th>';
          newMsgContent+='<th scope="col" style="flex-grow: 1">    <button class="elegir_tienda" id_tienda="';
          newMsgContent+=myJson.datos_search_tienda[i].id_tienda;
          newMsgContent+='" nombre_tienda="';
          newMsgContent+=myJson.datos_search_tienda[i].nombre_tienda;
          newMsgContent+='" >elegir</button></th></tr></table>';
  	    }
	      var content = newMsgContent;
	      $( "#informacion_busqueda_tienda" ).html( content );
	      var elegir_tienda = document.getElementsByClassName("elegir_tienda");
	      for (var i=0; i< elegir_tienda.length; i++) {
		      elegir_tienda[i].addEventListener("click",function() {
            document.getElementById("entrada_nombre_tienda").value=this.attributes.getNamedItem("nombre_tienda").value;
            document.getElementById("id_tienda_en_administrador_tienda_franquicia").value=this.attributes.getNamedItem("id_tienda").value;
    	    });
	      }
		  });
}
var formulario_agregar_tienda_franquicia=document.getElementById("formulario_agregar_tienda_franquicia");
formulario_agregar_tienda_franquicia.addEventListener('submit', envio_formulario_agregar_tienda_franquicia);

function envio_formulario_agregar_tienda_franquicia(event){
  event.preventDefault();
  var formulario_agregar_tienda_franquicia=document.getElementById("formulario_agregar_tienda_franquicia");
  var data = new FormData(formulario_agregar_tienda_franquicia);
    fetch('../../../../../../../franquicia_backend/create_tienda_franquicia.php', {
        method: 'POST',
        body: data,
        mode: 'cors',
        cache: 'default' 
    }).then(function(response) {
			  if(response.ok) {
		 		  return response.json();
			  }else {
				  throw "Error en la llamada Ajax";
			  }
		}).then(function(myJson) {
        console.log(myJson);
        alert('listo');
		  });
}
 
</script>
</html>