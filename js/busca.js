var x;
x=$(document);
$(document).ready(function () {
	var parte = $('#numero').val();
	var botonselecto= $("#botonselecto").attr('selecto');
	var botonactual= "misproductos";
	var paso_registro_1 = document.getElementById("paso_1_registro_contacto_empresa");
	var paso_registro_2 = document.getElementById("paso_2_registro_contacto_empresa");
	if(botonselecto=="latiendaboton"){
	}else{
		if(botonselecto!="buscaproductos"){	
			$("#buscaproductos").css('display', 'block');
		}
		var botonselecto = "latiendaboton";
		$("#1"+botonselecto).css('display', 'none');
		$("#2"+botonselecto).css('display', 'none');
		$("#1"+botonactual).css('display', 'flex');
		$("#2"+botonactual).css('display', 'flex');		  
	}
	if(parte==2){
				$("#contactofor").css("display", "none");	
				$("#tiendafor").css("display", "flex");
				
	}else{
				$("#contactofor").css("display", "flex");	
				$("#tiendafor").css("display", "none");	
				
        
	}
});
$(function(){
	$('#usuario').keyup(function(){
		var usuario = $('#usuario').val();
		var tipo = "usuario";
		var data = new FormData();
		data.append("usuario", usuario);
		fetch('../../../../../../../buscandousuario.php', {
			method: 'POST',
			body: data,
			mode: 'cors',
			cache: 'default' 
		})
		.then(function(response) {
			if(response.ok) {
				document.getElementById('campousuario').style.visibility= 'visible';
				document.getElementById('campousuario').style.opacity= '1';
		 		setTimeout(function(){
					document.getElementById('campousuario').style.visibility= 'hidden';
					document.getElementById('campousuario').style.opacity= '0';
		 		},4000,"JavaScript");
		 		return response.json();
			}else {
				throw "Error en la llamada Ajax";
			}
		})
		.then(function(myJson) {
			var existe_usuario_c=document.getElementById("campousuario").attributes.getNamedItem("existe_usuario").value=myJson.existe_usuario;
			var usuario_valido_c=document.getElementById("campousuario").attributes.getNamedItem("usuario_valido").value=myJson.usuario_valido;
			if (usuario_valido_c=='si'){
				if (existe_usuario_c=='si'){
					document.getElementById('campousuario').innerHTML= 'el usuario ya existe';
				}else{ 
					document.getElementById('campousuario').innerHTML= 'el usuario esta disponible';
				}
			}else{ 
				document.getElementById('campousuario').innerHTML= 'el usuario no debe poseer espacios o caracteres especiales que no sean - y _';
		 	}
		});
});

});
$(function(){
	$('#correo_registro').keyup(function(){
		var correo_registro = $('#correo_registro').val();
		var tipo = "correo";
		$("#campocorreo").load("../../../../../../../buscandocorreo.php?correo="+correo_registro+"&tipo="+tipo);
		document.getElementById('campocorreo').style.visibility= 'visible';
		document.getElementById('campocorreo').style.opacity= '1';
    setTimeout(function(){
      document.getElementById('campocorreo').style.visibility= 'hidden';
			document.getElementById('campocorreo').style.opacity= '0';
    },4000,"JavaScript");
	});
});
$(function(){
	$('#tienda').keyup(function(){
		var tienda = $('#tienda').val();
		var tipo = "tienda";
		var data = new FormData();
		data.append("tienda", tienda);
		fetch('../../../../../../../buscando_tienda.php', {
   		method: 'POST',
   		body: data,
   		mode: 'cors',
    	cache: 'default' 
		})
		.then(function(response) {
   		if(response.ok) {
       	return response.text().then(function(text) {
  				document.getElementById("campotienda").innerHTML = text;
 					document.getElementById('campotienda').style.visibility= 'visible';
					document.getElementById('campotienda').style.opacity= '1';
    			setTimeout(function(){
       			document.getElementById('campotienda').style.visibility= 'hidden';
						document.getElementById('campotienda').style.opacity= '0';
    			},4000,"JavaScript");
   			});} else {
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
});
$(function(){
	$('#categoria').change(function() {
		var id_categoria = $('#categoria').val();
		var tipo = "subcategoria";
		$("#camposubcategoria").load("../../../../../../../buscandosubcategoriaselec.php?id_categoria="+id_categoria+"&tipo="+tipo);
		if(id_categoria==""){
				$("#categoria").css("font-weight", "lighter");	
				$("#categoria").css("font-size", "11");	
				
		}else{
				$("#categoria").css("font-family", "Montserrat, sans-serif");	
				$("#categoria").css("font-weight", "lighter;");	
				$("#categoria").css("font-size", "11");	
				
			}
	});
});
$(function(){
	$('#estado_registro').change(function() {
		var id_estado = $('#estado_registro').val();
		var tipo = "ciudad";
		$("#campociudad").html('');
		$("#campociudad").load("../../../../../../../buscando_ciudad_selec_registro.php?id_estado="+id_estado+"&tipo="+tipo);
	});
});
$(function(){
	$('#estado_configuracion').change(function() {
		var id_estado = $('#estado_configuracion').val();
		var tipo = "ciudad";
		$("#campociudad3").load("../../../../../../../buscando_ciudad_selec_registro.php?id_estado="+id_estado+"&tipo="+tipo);
	});
});
$(function(){
	$('#estado_certificacion').change(function() {
		var id_estado = $('#estado_certificacion').val();
		var tipo = "ciudad";
		$("#campociudad4").load("../../../../../../../buscando_ciudad_selec_registro.php?id_estado="+id_estado+"&tipo="+tipo);
	});
});