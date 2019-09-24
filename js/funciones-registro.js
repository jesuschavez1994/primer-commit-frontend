document.addEventListener("DOMContentLoaded", function(event) {
  var contador_click=0;
  var checkbox = document.getElementById('Input_checkbox_terminos_y_condiciones');
  var link_terminos_y_condiciones=document.getElementById("link_terminos_y_condiciones");
  var boton_enviar_formulario1=document.getElementById("boton_enviar_formulario1");
  var input_nombre_tienda=document.getElementById("tienda");
  var input_nombre_categoria=document.getElementById("categoria");
  var input_nombre_subcategoria=document.getElementById("subcategoria");
  var input_nombre_estado_registro=document.getElementById("estado_registro");
  var input_nombre_id_ciudad=document.getElementById("id_ciudad");
  boton_enviar_formulario1.addEventListener("click", contar_click_registro_tienda, false);
  input_nombre_tienda.addEventListener("change", contar_click_registro_tienda_input_tienda, false);
  input_nombre_categoria.addEventListener("change", contar_click_registro_tienda_input_categoria, false);
  input_nombre_subcategoria.addEventListener("change", contar_click_registro_tienda_input_subcategoria, false);
  input_nombre_estado_registro.addEventListener("change", contar_click_registro_tienda_input_estado_registro, false);
  input_nombre_id_ciudad.addEventListener("change", contar_click_registro_tienda_input_id_ciudad, false);
  function contar_click_registro_tienda(){
    contador_click=contador_click+1;
  }
  function contar_click_registro_tienda_input_tienda(){
    contador_click=0;
  }
  function contar_click_registro_tienda_input_categoria(){
    contador_click=0;
  }
  function contar_click_registro_tienda_input_subcategoria(){
    contador_click=0;
  }
  function contar_click_registro_tienda_input_estado_registro(){
    contador_click=0;
  }
  function contar_click_registro_tienda_input_id_ciudad(){
    contador_click=0;
  }
  
  link_terminos_y_condiciones.addEventListener('click', function(){
    window.open("../../../../../../../terminos-y-condiciones");
  });
  checkbox.addEventListener("change", validaCheckbox, false);
  function validaCheckbox(){
    var checked = checkbox.checked;
    if(checked){
      contador_click=0;
    }
  }
  var prevenir_evento_binario=0;
  var formulario_tienda_registro = document.getElementById("formulario_tienda_registro");
  formulario_tienda_registro.onsubmit = function(e){
    var existe=$('#existe').val();
    if (existe=='si') {
      e.preventDefault();
    }
    var checked = checkbox.checked;
      if(checked){
        if(contador_click>1){
          e.preventDefault();
        }
      }else{
      e.preventDefault();
    }
  }
  var formulario_registro_contacto = document.getElementById("formulario_registro_contacto");
  formulario_registro_contacto.onsubmit = function(e){
    var clave=document.getElementById("clave").value;
    var clave1=document.getElementById("clave1").value;
    var usuario_valido=document.getElementById("campousuario").attributes.getNamedItem("usuario_valido").value;
    var existe_usuario=document.getElementById("campousuario").attributes.getNamedItem("existe_usuario").value;
    var existe_correo=document.getElementById("campocorreo").attributes.getNamedItem("existe_correo").value;
    if (usuario_valido=='si') {
      prevenir_evento_binario=0;
      if (existe_usuario=='si') {
        prevenir_evento_binario=1;
        document.getElementById('campousuario').style.visibility= 'visible';
        document.getElementById('campousuario').innerHTML= 'el usuario ya existe';
        document.getElementById('campousuario').style.opacity= '1';
      }else { 
        prevenir_evento_binario=0;
        document.getElementById('campousuario').style.visibility= 'hidden';
        document.getElementById('campousuario').style.opacity= '0';
        document.getElementById('campousuario').innerHTML= 'el usuario esta disponible';
      }  
    }else{
        prevenir_evento_binario=1;
        document.getElementById('campousuario').style.visibility= 'visible';
        document.getElementById('campousuario').style.opacity= '1';
        document.getElementById('campousuario').innerHTML= 'usuario invalido,ingrese mas de 3 caracteres, no coloque espacios en blanco, acentos, o caracteres que no sean - o _';
    } 
    if (existe_correo=='si') {
        document.getElementById('campocorreo').style.visibility= 'visible';
        document.getElementById('campocorreo').style.opacity= '1';
        prevenir_evento_binario=1;
      }else { 
        prevenir_evento_binario=0;
        document.getElementById('campocorreo').style.visibility= 'hidden';
        document.getElementById('campocorreo').style.opacity= '0';
      }
      if (clave!=clave1) {
        prevenir_evento_binario=1;
        document.getElementById('campo_repetir_contraseña').innerHTML = "Las contraseñas no Coinciden";
        document.getElementById('campo_repetir_contraseña').style.visibility= 'visible';
        document.getElementById('campo_repetir_contraseña').style.opacity= '1';
      }else{ 
        prevenir_evento_binario=0;
        document.getElementById('campo_repetir_contraseña').style.visibility= 'hidden';
        document.getElementById('campo_repetir_contraseña').style.opacity= '0';
      }
    if (prevenir_evento_binario==1) {
      e.preventDefault();
    }
    
  }
  var repetir_clave=document.getElementById("clave1");
  repetir_clave.onkeyup=function() {
    var clave=document.getElementById("clave").value;
    var clave1=document.getElementById("clave1").value;
    setTimeout(function(){
      document.getElementById('campo_repetir_contraseña').style.visibility= 'hidden';
      document.getElementById('campo_repetir_contraseña').style.opacity= '0';
    },4000,"JavaScript");
    if (clave1==clave) {
      document.getElementById('campo_repetir_contraseña').innerHTML = "Las contraseñas Coinciden";
      document.getElementById('campo_repetir_contraseña').style.visibility= 'visible';
      document.getElementById('campo_repetir_contraseña').style.opacity= '1';
    }else{
      document.getElementById('campo_repetir_contraseña').innerHTML = "Las contraseñas no Coinciden";
      document.getElementById('campo_repetir_contraseña').style.visibility= 'visible';
      document.getElementById('campo_repetir_contraseña').style.opacity= '1';
    } 
  }
  var numero=document.getElementById('numero');
  var indicador_paso_1=document.getElementById('paso_1_registro_contacto_empresa');
  var indicador_paso_2=document.getElementById('paso_2_registro_contacto_empresa');

  if(numero.value==2){
    document.getElementById('titulo_Registro_contacto_empresa').innerHTML = 'Registro de empresa';
    indicador_paso_1.style.background='rgb(177, 177, 177)';
    indicador_paso_2.style.background='rgb(249, 150, 21)';
  }
});