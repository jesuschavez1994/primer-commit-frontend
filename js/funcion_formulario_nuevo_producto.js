var contador=0;
$('#boton_submit_nuevo_producto').on('click', function(event) {
  event.preventDefault();
  var nombre_producto=$('#nuproducto').val();
  if (nombre_producto!=null && nombre_producto!='' ) {
    contador=contador+1;
    if (contador<2) {
      
      var id=$('#formulario_nuevo_producto').attr('id');
      var formData = new FormData(document.getElementById(id));
      var checkbox=document.getElementById("myCheck");
      if (checkbox.checked == true){
        formData.append("estatus", 6);
      }else {
        formData.append("estatus", 7);
      }
      fetch('../../../../../../../producto_backend/create.php', {
			  method: 'POST',
			  body: formData,
			  mode: 'cors',
			  cache: 'default' 
		  })
		  .then(function(response) {
			  if(response.ok) {
		 		  return response.json();
			  }else {
				  throw "Error en la llamada Ajax";
			  }
		  })
		  .then(function(myJson) {
		    var formData_despues_crear_producto = new FormData();
        formData_despues_crear_producto.append("id_producto", myJson.id_producto);
        formData_despues_crear_producto.append("id_tienda", myJson.id_tienda);
        formData_despues_crear_producto.append("id_contacto", myJson.id_contacto);
        formData_despues_crear_producto.append("nombre_imagen_producto",  myJson.nombre_imagen_producto);
        $.ajax({
          url: '../../../../../../../views/nuevo_producto.php',
          type: "post",
          dataType: "html",
          data: formData_despues_crear_producto,
          cache: false,
          contentType: false,
          processData: false,
          success: function(data){
            $("#formulario_nuevo_producto2").hide();
            $("#subir_imagenes_producto_nuevo").html(data);
          }
        });
		  });
    }
  }
});
$('#boton_imagenes_nuevo_producto').on('click', function(event) {
  var page=$('#activo_pag').attr('val');
  event.preventDefault();
  var id=$('#formulario_editar_productos').attr('id');
  var id_producto=$('#formulario_editar_productos').attr('id_producto');
  var nombre_imagen_producto=$('#formulario_editar_productos').attr('nombre_imagen_producto');
  var formData = new FormData(document.getElementById(id));
  var checkbox=document.getElementById("myCheck");
  if (checkbox.checked == true){
    formData.append("estatus", 6);
  }else {
    formData.append("estatus", 7);
  }
  $.ajax({
    url: '../../../../../../../producto_backend/update.php',
    type: "post",
    dataType: "html",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function(data){
      location.href="../../../../../../../perfil-usuario/"+id_producto+'~'+nombre_imagen_producto+'/page='+page;
    }
  });
});
$('#eliminar_producto_boton').on('click', function(event) {
  var page=$('#activo_pag').attr('val');
  event.preventDefault();
  var id=$('#formulario_eliminar_productos').attr('id');
  var id_producto=$('#formulario_eliminar_productos').attr('id_producto');
  var nombre_imagen_producto=$('#formulario_eliminar_productos').attr('nombre_imagen_producto');
  var formData = new FormData(document.getElementById(id));
  $.ajax({
    url: '../../../../../../../producto_backend/delete.php',
    type: "post",
    dataType: "html",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function(data){
      location.href="../../../../../../../perfil-usuario"+'?page='+page;
    }
  });
});
$('#no_eliminar_producto_boton').on('click', function(event) {
  var page=$('#activo_pag').attr('val');
  event.preventDefault();
  var id=$('#formulario_editar_productos').attr('id');
  var id_producto=$('#formulario_editar_productos').attr('id_producto');
  var modal_perfil=document.getElementById('myModal');
  modal_perfil.style.display='none';
});


