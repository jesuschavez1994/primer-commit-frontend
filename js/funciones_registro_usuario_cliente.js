document.addEventListener("DOMContentLoaded", function(event) {
    var formulario_registro_contacto = document.getElementById("formulario_registro_contacto");
    var imput_usuario_cliente = document.getElementById("imput_usuario_cliente");
    formulario_registro_contacto.onsubmit = function(e){
        e.preventDefault();
        var data = new FormData(formulario_registro_contacto);
        fetch('../usuario_cliente_backend/create.php', {
            method: 'POST',
            body: data,
            mode: 'cors',
            cache: 'default' 
        })
        .then(function(response) {
            if(response.ok) {
                return response.text().then(function(text) {
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
    }
    imput_usuario_cliente.onkeyup=function(e){
		var usuario = imput_usuario_cliente.value;  
		var tipo = "usuario";
		var data = new FormData();
		data.append("usuario", usuario);
		fetch('../../../../../../../usuario_cliente_backend/buscandousuario.php', {
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
    }

$(function(){
	$('#correo').keyup(function(){
		var correo = $('#correo').val();
		var tipo = "correo";
		$("#campocorreo").load("../../../../../../../buscandocorreo.php?correo="+correo+"&tipo="+tipo);
		document.getElementById('campocorreo').style.visibility= 'visible';
		document.getElementById('campocorreo').style.opacity= '1';
    setTimeout(function(){
      document.getElementById('campocorreo').style.visibility= 'hidden';
			document.getElementById('campocorreo').style.opacity= '0';
    },4000,"JavaScript");
	});
});
});