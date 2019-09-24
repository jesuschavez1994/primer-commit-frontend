document.addEventListener("DOMContentLoaded", function(event) { 
    document.getElementById("enviar_mensaje_certificacion").addEventListener("submit", enviomensaje_cert);
    var btn_certificar_nivel_2= document.getElementById("boton_certificar_nivel_2").addEventListener("click", funcion_boton_certificar_nivel_2);
    var nivel_certificar=document.getElementById("nivel_certificar")
    var paso_certificacion_1 = document.getElementById("paso_certificacion_1");
    var paso_certificacion_2 = document.getElementById("paso_certificacion_2");
    var paso_certificacion_3 = document.getElementById("paso_certificacion_3");
    var archivos_certificacion = document.getElementById("archivos_certificacion");
    var verificacion_datos_certificacion = document.getElementById("verificacion_datos_certificacion");
    var informacion_certificacion = document.getElementById("informacion_certificacion");
    var titulo_formulario_certificacion = document.getElementById("titulo_formulario_certificacion");
    var div_formulario_certificacion = document.getElementById("div_formulario_certificacion");
    var click_paso_certificacion_1 = paso_certificacion_1.addEventListener("click", funcion_paso_certificacion_1);
    var click_paso_certificacion_2 = paso_certificacion_2.addEventListener("click", funcion_paso_certificacion_2);


    function funcion_paso_certificacion_1(event) {
        div_formulario_certificacion.style.display = 'block';
        informacion_certificacion.style.display = 'none';
        verificacion_datos_certificacion.style.display = 'block';
        archivos_certificacion.style.display = 'none';
        paso_certificacion_1.style.color = '#F99615';
        paso_certificacion_2.style.color = 'black';
        paso_certificacion_3.style.color = 'black';
    }
    function funcion_paso_certificacion_2(event) {
        div_formulario_certificacion.style.display = 'block';
        informacion_certificacion.style.display = 'flex';
        verificacion_datos_certificacion.style.display = 'none';
        archivos_certificacion.style.display = 'none';
        paso_certificacion_1.style.color = 'black';
        paso_certificacion_2.style.color = '#F99615';
        paso_certificacion_3.style.color = 'black';
    }

    function funcion_boton_certificar_nivel_2(event) {
        div_formulario_certificacion.style.display = 'block';
        titulo_formulario_certificacion.innerHTML = 'Certificación de Nivel 2';
        paso_certificacion_1.style.color = '#F99615';
        nivel_certificar.value=2;
        window.scrollTo(0, 10000);
    }
    var btn_certificar_nivel_3= document.getElementById("boton_certificar_nivel_3").addEventListener("click", funcion_boton_certificar_nivel_3);
    function funcion_boton_certificar_nivel_3(event) {
        div_formulario_certificacion.style.display = 'block';
        titulo_formulario_certificacion.innerHTML = 'Certificación de Nivel 3';
        paso_certificacion_1.style.color = '#F99615';
        nivel_certificar.value=3;
        window.scrollTo(0, 10000);
    }
     var btn_datos_certificacion_verificado= document.getElementById("btn_datos_certificacion_verificado").addEventListener("click", btn_datos_certificacion_verificado);
    function btn_datos_certificacion_verificado(event) {
        event.preventDefault();
        verificacion_datos_certificacion.style.display = 'none';
        informacion_certificacion.style.display = 'flex';
        paso_certificacion_1.style.color = 'black';
        paso_certificacion_2.style.color = '#F99615';
    }
     var btn_informacion_mostrada= document.getElementById("btn_informacion_mostrada").addEventListener("click", btn_informacion_mostrada);
    function btn_informacion_mostrada(event) {
        event.preventDefault();
        informacion_certificacion.style.display = 'none';
        archivos_certificacion.style.display = 'flex';
        paso_certificacion_1.style.color = 'black';
        paso_certificacion_2.style.color = 'black';
        paso_certificacion_3.style.color = '#F99615';
    }
    $('.close2').click(function() {
        $('#datos_enviados_certificacion').css('display', 'none');
        });
    var enviar_mensaje_certificacion= document.getElementById("enviar_mensaje_certificacion").addEventListener("submit", enviar_mensaje_certificacion);
    function enviomensaje_cert(event) {
        event.preventDefault();
        const data = new FormData(document.getElementById('enviar_mensaje_certificacion'));
        fetch('../../../../../../../enviar_correo_certificacion.php', {
            method: 'POST',
            body: data,
            mode: 'cors',
            cache: 'default' 
        })
        .then(function(response) {
            if(response.ok) {
                return response.text(); 
            } else {
            throw "Error en la llamada Ajax";
            }
        })
        .then(function(texto) {
            console.log(texto);
            document.getElementById("datos_enviados_certificacion").style.display = "block";
            div_formulario_certificacion.style.display = 'none';
        })
        .catch(function(err) {
            console.log(err);
        });
    }
    function enviar_mensaje_certificacion(event) {
        event.preventDefault();
        const data = new FormData(document.getElementById('enviar_mensaje_certificacion'));
        fetch('../../../../../../../controllers/actualizacion_datos_certificacion_controller.php', {
            method: 'POST',
            body: data,
            mode: 'cors',
            cache: 'default' 
        })
        .then(function(response) {
            if(response.ok) {
                return response.text();
            }else {
                throw "Error en la llamada Ajax";
            }
        })
        .then(function(texto) {
            console.log(texto);
            document.getElementById("enviarmensajefoundusscontenido").innerHTML = "Mensaje Enviado";
        })
        .catch(function(err) {
            console.log(err);
        });
    }
});