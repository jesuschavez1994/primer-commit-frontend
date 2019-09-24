document.addEventListener("DOMContentLoaded", function(event) { 
  $(function(){
	  $('.pic1-botontienda1').click(function(){
		  var abierto= $(this).attr('abierto');
		  var botonselecto= $("#botonselecto").attr('selecto');
		  var botonactual= $(this).attr('botonactual');
		  var categoria = $(this).val();
		  var id_categoria=$(this).attr('id_categoria');
		  var id_subcategoria=$(this).attr('id_subcategoria');
		  var categoriaselecta=$(this).attr('categoriaselecta');
		  var subselecto=$(this).attr('subselecto');
		  var ubicacion=$(this).attr('ubicacion');
      var tienda=$(this).attr('tienda');
		  switch(botonactual) {
        case "latiendaboton":
				$("#botonselecto").attr("selecto", botonactual);
				$("#mySidenavcontacto").css('display', 'none');
				$("#mySidenavubicacion").css('display', 'none');
				$("#mySidenavtienda").css('display', 'block');
				$("#mySidenavmensajeria").css('display', 'none');	
        break;
        case "miperfilboton":
        $("#botonselecto").attr("selecto", botonactual);
				$("#mySidenavcontacto").css('display', 'none');
				$("#mySidenavubicacion").css('display', 'block');
				$("#mySidenavtienda").css('display', 'none');
				$("#mySidenavmensajeria").css('display', 'none');
        break;
        case "micontactoboton":
        $("#botonselecto").attr("selecto", botonactual);	
				$("#mySidenavcontacto").css('display', 'block');
				$("#mySidenavubicacion").css('display', 'none');
				$("#mySidenavtienda").css('display', 'none');
				$("#mySidenavmensajeria").css('display', 'none');
        break;
		    case "misproductos":
        var mySidenavmensajeria_mensaje= document.querySelectorAll("#mySidenavmensajeria_mensaje");
        var mySidenavmensajeria_buzon=document.querySelectorAll("#mySidenavmensajeria_buzon");
        mySidenavmensajeria_mensaje[0].style.display = "none";
        mySidenavmensajeria_buzon[0].style.display = "block";
        $("#botonselecto").attr("selecto", botonactual);
				$("#mySidenavcontacto").css('display', 'none');
				$("#mySidenavubicacion").css('display', 'none');
				$("#mySidenavtienda").css('display', 'none');
				$("#mySidenavmensajeria").css('display', 'block');
        break;
      } 
	  });
  });
  $('#latiendaboton_vertienda').click(function(){
    var eltop=anchoventana()+300;
    if (anchoventana()>1024) {
      var posicion_menu_rapido=0;
    }else{  
      var posicion_menu_rapido=eltop;
    }
    $("#2latiendaboton").css('display', 'block');
    $("#2micontactoboton").css('display', 'none');
    $('#2misproductos').css('display', 'none');
    $("#latiendaboton").css('display', 'none');
    $('#latiendaboton').animate({top: posicion_menu_rapido+230+'px',width:'50px',height:'50px'});
    $('#micontactoboton').animate({top: posicion_menu_rapido+30+'px',width:'70px',height:'70px'});
    $('#miperfilboton').animate({top: posicion_menu_rapido+110+'px',width:'50px',height:'50px'});
    $('#misproductos').animate({top: posicion_menu_rapido+170+'px',width:'50px',height:'50px'});
    $('#latiendatexto').animate({top: posicion_menu_rapido+45+'px'});
    $('#micontactotexto').animate({top: posicion_menu_rapido+45+'px'});
    $('#miperfiltexto').animate({top: posicion_menu_rapido+45+'px'});
    $('#misproductostexto').animate({top: posicion_menu_rapido+45+'px'});
    $('#latiendatexto').fadeOut("slow");
    $('#micontactotexto').fadeIn("slow");
    $('#miperfiltexto').fadeOut("slow");
    $('#misproductostexto').fadeOut("slow");
    $("#mySidenavcontacto").css('display', 'block');
	  $("#mySidenavubicacion").css('display', 'none');
	  $("#mySidenavtienda").css('display', 'none');
	  $("#mySidenavmensajeria").css('display', 'none');
	  $("#2latiendaboton").css('display', 'block');           
    $("#2micontactoboton").css('display', 'none');
    $('#2misproductos').css('display', 'none');
    $("#latiendaboton").css('display', 'none');
  });
  $('.editar_productos_perfil2').click(function(){
    var id_producto = $(this).attr('id_producto');
    var tipo = "editor";
    var id_tienda = $(this).attr('id_tienda');
    var id_contacto = $(this).attr('id_contacto');
    var botonselecto= $("#botonselecto").attr('selecto');
    var botonactual= $(this).attr('botonactual');
    $("#botonselecto").attr("selecto", botonactual);
    $("#1"+botonselecto).css('display', 'none');
    $("#2"+botonselecto).css('display', 'none');
    $("#1"+botonactual).css('display', 'flex');
    $("#2"+botonactual).css('display', 'flex');
    $("#buscaproductos").css('display', 'flex');
    $("#2latiendaboton").css('display', 'none');
    $("#2micontactoboton").css('display', 'none');
    $("#latiendaboton").css('display', 'block');
    $("#2misproductos").attr('class', 'grid_8 alpha');
    $("#2misproductos").load("../../../../../../../buscandoproductoimgeditar.php?tipo="+tipo+"&id_producto="+id_producto+"&id_contacto="+id_contacto+"&id_tienda="+id_tienda);
  });
  $('.texto_boton_imagen4').click(function(){
    var id_producto = $(this).attr('id_producto');
    var tipo = "editor";
    var id_tienda = $(this).attr('id_tienda');
    var id_contacto = $(this).attr('id_contacto');
    var botonselecto= $("#botonselecto").attr('selecto');
    var botonactual= $(this).attr('botonactual');
    $("#botonselecto").attr("selecto", botonactual);
    $("#1"+botonselecto).css('display', 'none');
    $("#2"+botonselecto).css('display', 'none');
    $("#1"+botonactual).css('display', 'flex');
    $("#2"+botonactual).css('display', 'flex');
    $("#buscaproductos").css('display', 'flex');
    $("#2latiendaboton").css('display', 'none');
    $("#2micontactoboton").css('display', 'none');
    $("#latiendaboton").css('display', 'block');
    $("#2misproductos").attr('class', 'grid_8 alpha');
    $("#1misproductos").load("../../../../../../../buscandoproductoeditar.php?tipo="+tipo+"&id_producto="+id_producto+"&id_contacto="+id_contacto+"&id_tienda="+id_tienda);
    $("#2misproductos").load("../../../../../../../buscandoproductoimgeditar.php?tipo="+tipo+"&id_producto="+id_producto+"&id_contacto="+id_contacto+"&id_tienda="+id_tienda);
  });
  $('#nuevoproductos').on('click' , function() {
    var id_tienda=$(this).attr('id_tienda')
    var id_contacto=$(this).attr('id_contacto');
    var nivel=$(this).attr('nivel');
    $('#myModal2').css('display', 'flex');
    $.ajax({
      url: '../../../../../../../formulario_nuevo_producto.php?id_tienda='+id_tienda+'&id_contacto='+id_contacto,
      type: "post",
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
      success: function(data){     
        $("#2nuevoproductos").html(data);
      }
    });
  });
  $('.mensajes').on('click' , function() {
    var id_tienda=$(this).attr('id_tienda')
    var id_correo=$(this).attr('id_correo');
    var data = new FormData();
    data.append("id_tienda", id_tienda);
    data.append("id_correo", id_correo);
    fetch('../mostrar_correo_perfil.php', {
      method: 'POST',
      body: data,
      mode: 'cors',
      cache: 'default' 
    })
    .then(function(response) {
      if(response.ok) {
        return response.text().then(function(text) {
          document.getElementById("mySidenavmensajeria_mensaje").innerHTML = text;
          var mySidenavmensajeria_mensaje= document.querySelectorAll("#mySidenavmensajeria_mensaje");
          var mySidenavmensajeria_buzon=document.querySelectorAll("#mySidenavmensajeria_buzon");
          mySidenavmensajeria_mensaje[0].style.display = "block";
          mySidenavmensajeria_buzon[0].style.display = "none";
          window.scrollTo(0, 0);
          document.getElementById("mySidenavmensajeria_mensaje").scrollTo(0, 0);
          document.getElementById("mySidenavmensajeria_buzon").scrollTo(0, 0);
          document.getElementById("mySidenavmensajeria").scrollTo(0, 0);
        });
      }else{
        throw "Error en la llamada Ajax";
      }
    })
    .then(function(texto) {
      console.log(texto);
    })
    .catch(function(err) {
      console.log(err);
    });
  });
  $('#mensajes_leidos').on('click' , function() {
    var id_tienda=$(this).attr('id_tienda')
    var id_correo=$(this).attr('id_correo');
    var data = new FormData();
    data.append("id_tienda", id_tienda);
    data.append("id_correo", id_correo);
    fetch('../mostrar_correo_perfil.php', {
      method: 'POST',
      body: data,
      mode: 'cors',
      cache: 'default' 
    })
    .then(function(response) {
      if(response.ok) {
        return response.text().then(function(text) {
          document.getElementById("mySidenavmensajeria_mensaje").innerHTML = text;
          var mySidenavmensajeria_mensaje= document.querySelectorAll("#mySidenavmensajeria_mensaje");
          var mySidenavmensajeria_buzon=document.querySelectorAll("#mySidenavmensajeria_buzon");
          mySidenavmensajeria_mensaje[0].style.display = "block";
          mySidenavmensajeria_buzon[0].style.display = "none";
          window.scrollTo(0, 0);
          document.getElementById("mySidenavmensajeria_mensaje").scrollTo(0, 0);
          document.getElementById("mySidenavmensajeria_buzon").scrollTo(0, 0);
          document.getElementById("mySidenavmensajeria").scrollTo(0, 0);
        });
      }else{
        throw "Error en la llamada Ajax";
      }
    })
    .then(function(texto) {
      console.log(texto);
    })
    .catch(function(err) {
      console.log(err);
    });
  });
  $(function(){
    $('.editar_productos_perfil').click(function(){
      var id_producto = $(this).attr('id_producto');
      var tipo = "editor";
      var id_tienda = $(this).attr('id_tienda');
      var id_contacto = $(this).attr('id_contacto');
      $("#sobrenosotros_perfil").css('display', 'none');
      $("#2misproductos").attr('class', 'grid_12 alpha');
      $("#1misproductos").load("../../../../../../../buscandoproductoeditar.php?tipo="+tipo+"&id_producto="+id_producto+"&id_contacto="+id_contacto+"&id_tienda="+id_tienda);
      $("#2misproductos").load("../../../../../../../buscandoproductoimgeditar.php?tipo="+tipo+"&id_producto="+id_producto+"&id_contacto="+id_contacto+"&id_tienda="+id_tienda);
    });
  });
});