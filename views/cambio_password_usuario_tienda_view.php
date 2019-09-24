<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Founduss Ingreso</title>
<link rel="stylesheet" href="../../../../../../../css/fou.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/perfil.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/form.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton2.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/panel.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/reset.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../js/leaflet.css"/>
<link  rel="stylesheet" media="screen" href="../../../../../../../css/style.css?<?php echo $version; ?>">
<link  rel="stylesheet" href="../../../../../../../css/ingreso.css?<?php echo $version; ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400i,500" rel="stylesheet">
<link rel="stylesheet" href="../../../../../../../css/Estilos_pie_de_pagina.css?<?php echo $version; ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link  rel="stylesheet" href="../../../../../../../css/font-awesome.css">
<link href="../../../../../../../img/IsotipoFounduss-01.png" rel="icon" type="image/x-icon" />
<script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
<script src="../../../../../../../js/in-view.min.js"></script>
<script src="../../../../../../../js/scripts.js?<?php echo $version; ?>"></script>
<script  src="../../../../../../../js/jquery.touchSwipe.min.js"></script>
<script src="../../../../../../../js/leaflet.js"></script>
<script src="../../../../../../../loadCSS-2.0.1/src/loadCSS.js"></script>
<script src="../../../../../../../js/funciones-panel.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones-perfil.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/busca3.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones_ingresa.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones_menu_rapido_tienda.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/jquery.validate.min.js" type="text/javascript"></script>
<script src="../../../../../../../js/localization/messages_es.js" type="text/javascript"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131128364-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131128364-1');
</script>
<style>

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
   
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
    width:50%;
    height: 500px
}

</style>

</head>

<body >
<!--==============================cabeza=================================-->

<div class="container top_ingreso"  >
    <div class="three columns">
    </div>
    <div class="six columns">
        <a href="../../../../../../../inicio" title="Founduss">
            <img src="../../../../../../../img/Lettering Founduss-01.svg" class="imagenes_ingreso" >
        </a> 
        <div id='aviso_ingreso' style="visibility: hidden;opacity: 0; position: absolute;width: 10%;margin-left: 44%;margin-right:45%;left: 0%; right:0%;top:30%;bottom: 0px;display: none;;height: 40px" class="existe tooltiptext">
            El usuario o contraseña estan incorrectos, intenta nuevamente.
        </div>  
    </div>
    <div class="three columns">
    </div>
    <div class="twelve columns" style="display:flex; justify-content:center;">
    <div class="modal-content cuadro_Recuperacion_contraseña" id="modal-content">
            <div class="Cuadro_Con_elementos" >
                <div id="contenido_contra" class="modal-body container_12">
                    <h3 class="texto_recuperar_contraseña">Recuperación de contraseña</h3>
                    <p class="texto_para_usuario">Escriba su nombre de usuario o correo electrónico y recibirá un código para restablecer su contraseña</p>
                    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" id="formulario_password" class="edit edit_estilo" style="display:flex;flex-direction:column;align-items:center"> 
                        <div class="divformulario" id="divformulario_cambio_contraseña">
                            <input type="text" class="editar" name="password" id="texto_Ingresa_tu_password" placeholder="Ingrese su nueva contraseña" >
                        </div>
                        <div class="divformulario" id="divformulario_cambio_contraseña">
                            <input type="text" class="editar" name="password_repeat" id="texto_Ingresa_tu_password_repeat" placeholder="Repita su nueva contraseña" >
                        </div>
                        <div class="divformulario" style="display: flex;justify-content: center;">
                            <input type="submit" id="mensaje_click_cambio_password" class="boton_submit" name="enviar" value="Enviar">
                            <input type="hidden" name="correo" value="<?php echo $correo_s ?>" > 
                            <input type="hidden" name="token" value="<?php echo $token_s ?>" > 
                            <input type="hidden" name="id_token" value="<?php echo $id_token_s ?>" > 
                            <input type="hidden" name="id_contacto" value="<?php echo $id_contacto_s ?>" > 
                            <input type="hidden" name="enviar" value="Enviar" > 
                        </div>
                     </form> 
                </div>
            </div>
    </div>
</div>
<div class="container" style="display: flex;align-items: center;justify-content: center; border-top:solid; border-top-color:  rgba(230, 230, 230);"  >
   <div class="six columns " style="margin-top: 10px; display: flex; flex-wrap: wrap;justify-content: center;align-items: center;height: 60px; font-size: 16px; ">
        <span  class="copys" style="font-size: 14px;  color: white;  display: flex;justify-content: center;align-items: center; width: 50%">
            <a href="../../../../../../../terminos-y-condiciones" class="copys_i" > Ayuda</a>
            <span class="copys_i">&nbsp;|&nbsp;</span>
            <a href="../../../../../../../terminos-y-condiciones" class="copys_i" > Términos y Condiciones</a>
       </span>
       <p  style="font-size: 14px; width: 100%;  display: flex;justify-content: center;align-items: center; font-family: 'Libre Franklin', sans-serif; ">
         <span> Copyright ©  2018,</span>
         <span> FOUNDUSS C.A.,</span>
         <span> Todos los Derechos Reservados</span>
       </p>
    </div>
</div>
</body>
</html>
<script>
var form = document.getElementById("formulario_password");
form.onsubmit = function(e){
    e.preventDefault();
    var data = new FormData(document.getElementById('formulario_password'));
    fetch('usuario_tienda_backend/update_password.php', {
        method: 'POST',
        body: data,
        mode: 'cors',
        cache: 'default' 
    })
    .then(function(response) {
        if(response.ok) {
            return response.text().then(function(text) {
                location.href ="https://founduss.com/ingreso";
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
};
</script>