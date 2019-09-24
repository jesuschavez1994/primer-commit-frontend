document.addEventListener("DOMContentLoaded", function (event) {
    var id_paso_4=document.getElementById("id_paso_4");
    var loader=document.getElementById("loader");
    var myDiv=document.getElementById("myDiv");
    var id_paso_3_certificacion=document.getElementById("id_paso_3_certificacion");
    var avatar_certificacion_1 = document.getElementById('avatar_certificacion_1');
    var input1 = document.getElementById('archivo1');
    var avatar_certificacion_2 = document.getElementById('avatar_certificacion_2');
    var input2 = document.getElementById('archivo2');
    var avatar_certificacion_3 = document.getElementById('avatar_certificacion_3');
    var input3 = document.getElementById('archivo3');
    function showPage() {
        loader.style.display="none";
        myDiv.style.display= "flex";
        myDiv.style.flexDirection= "column";
        id_paso_4.style.alignItems="center";
      }
    input1.addEventListener('change', function (e) {
        avatar_certificacion_1.attributes.getNamedItem("src").value= "../../../../../../../img/Iconos de certificacion-adj_listo.svg";
    });
    input2.addEventListener('change', function (e) {
        avatar_certificacion_2.attributes.getNamedItem("src").value= "../../../../../../../img/Iconos de certificacion-adj_listo.svg";
    });
    input3.addEventListener('change', function (e) {
        avatar_certificacion_3.attributes.getNamedItem("src").value= "../../../../../../../img/Iconos de certificacion-adj_listo.svg";
    });
    document.getElementById("enviar_mensaje_certificacion").addEventListener("submit", enviomensaje_cert);
    $('.close2').click(function () {
        $('#datos_enviados_certificacion').css('display', 'none');
    });
    var enviar_mensaje_certificacion = document.getElementById("enviar_mensaje_certificacion").addEventListener("submit", enviar_mensaje_certificacion);
    function enviomensaje_cert(event) {
        var input1 = document.getElementById('archivo1');
        var input2 = document.getElementById('archivo2');
        var input3 = document.getElementById('archivo3');
        event.preventDefault();
        if(input1.files && input1.files[0] && input2.files && input2.files[0] && input3.files && input3.files[0]){   
            var FormDatacertificacion = new FormData(document.getElementById('enviar_mensaje_certificacion'));
            id_paso_3_certificacion.style.display="none";
                        id_paso_4.style.display="flex";
                        loader.style.display="flex"; 
            $.ajax({
                url: "../../../../../../../enviar_correo_certificacion.php",
                type: "post",
                dataType: "html",
                data: FormDatacertificacion,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data){
                    setTimeout(function(){showPage();
                    }, 3000); 
                }
            })
            .done(function(res){
            });
        }else{
            if(!input1.files[0]){
                alert('falta entrada 1 ');
            }
            if(!input2.files[0]){
                alert('falta entrada 2 ');
            }
            if(!input3.files[0]){
                alert('falta entrada 3 ');
            }
        }
    }
    
    function enviar_mensaje_certificacion(event) {
        var input1 = document.getElementById('archivo1');
        var input2 = document.getElementById('archivo2');
        var input3 = document.getElementById('archivo3');
        event.preventDefault();
        if(input1.files && input1.files[0] && input2.files && input2.files[0] && input3.files && input3.files[0]){
            var data = new FormData(document.getElementById('enviar_mensaje_certificacion'));
            fetch('../../../../../../../controllers/actualizacion_datos_certificacion_controller.php', {
                method: 'POST',
                body: data,
                mode: 'cors',
                cache: 'default'
            })
                .then(function (response) {
                if (response.ok) {
                    return response.text();
                }
                else {
                    throw "Error en la llamada Ajax";
                }
            })
            .then(function (texto) {
                console.log(texto);
                document.getElementById("enviarmensajefoundusscontenido").innerHTML = "Mensaje Enviado";
            })["catch"](function (err) {
                console.log(err);
            });
        }
    }
});
