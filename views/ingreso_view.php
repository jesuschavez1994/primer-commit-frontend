<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Founduss Ingreso</title>
<link rel="stylesheet" href="../../../../../../../css/fou.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/perfil.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/form.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/Estilos_pie_pagina.css?<?php echo $version; ?>">
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
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link  rel="stylesheet" href="../../../../../../../css/font-awesome.css?<?php echo $version; ?>">
<link href="../../../../../../../img/IsotipoFounduss-01.png" rel="icon" type="image/x-icon" />
<script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
<script src="../../../../../../../js/in-view.min.js"></script>
<script src="../../../../../../../js/scripts.js?<?php echo $version; ?>"></script>
<script  src="../../../../../../../js/jquery.touchSwipe.min.js"></script>
<script src="../../../../../../../js/leaflet.js"></script>
<script src="../../../../../../../loadCSS-2.0.1/src/loadCSS.js"></script>
<script type="text/javascript">loadCSS("https://fonts.googleapis.com/css?family=Oxygen");</script>
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
    padding-top: 0px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */

@media(min-width:1025px)and(max-width:1900px){
  .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    border: 1px solid #888;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
    width:50%;
    height: 500px
}
}
@media(min-width:90px)and(max-width:767px){
  .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    border: 1px solid #888;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
    width:50%;
    height: 500px
}
}

</style>

</head>

<body >
<!--==============================cabeza=================================-->
<div id="myModal_panel" class="modal " style="display: none;">
   <div class="modal-content-advertencia"> 
     <p><span class="close2" id="cerrar_ventana_panel" >×</span></p>
     <div  class="caja_Advertencia" >
       <div class="container" id="container_caja_Advertencia"> 
          <img src="../../../../../../../img/icono.svg" id="imagen"> 
          <div class="texto_Eres_Empresa">¿Eres Empresa?</div>
          <div class="Caja_si_no"> 
            <a href="../../../../../../../registro" class="si_eres_empresa"  > Si</a>
            <div class="raya_Eres_medio_eres_Empresa"></div>
            <a class="close2" id="No_eres_empresa" >No</a>
          </div>
          <div class="texto">El Registro sólo aplica para Empresas Jurídicas </div>
        </div>
      </div>
    </div>
</div> 



<div class="row" >
  <div class="container top_ingreso"  >

       <div class="row">
       <div class="three columns">
       </div>
   <div class="six columns">
    <a href="../../../../../../../inicio" title="Founduss"><img src="../../../../../../../img/Isotipo Founduss-01.svg" class="imagenes_ingreso"  /></a>
    <a href="../../../../../../../inicio" title="Founduss"><img src="../../../../../../../img/Lettering Founduss-01.svg" class="imagenes_ingreso" /></a> 
     <div id='aviso_ingreso' style="visibility: hidden;opacity: 0; position: absolute;width: 10%;margin-left: 44%;margin-right:45%;left: 0%; right:0%;top:30%;bottom: 0px;display: none;;height: 40px" class="existe tooltiptext">El usuario o contraseña estan incorrectos, intenta nuevamente.</div>  
    </div>
    <div class="three columns">
  
    </div>
    </div>

    <div class="row">
       <div class="three columns">
       </div>
   <div class="six columns" style="display:flex; justify-content:center;">

    <form name="form" action="../../../../../../../ingreso" method="POST" style="padding:0;margin-left: 10%;margin-right: 10%;display: flex;justify-content: center;flex-direction: column; ">
       
        <input class="pic1-formulario-ingreso" name="usuario" type="text" placeholder="USUARIO" id="ingreso_usuario" align="middle" autocomplete="off">  
    
  
     <input class="pic1-formulario-ingreso" name="clave" type="password" placeholder="CONTRASEÑA"  align="middle" autocomplete="off">

     
     <input class="pic1-formulario-ingreso-boton" type="submit"  value="Entrar">
     <br>
     <span  style="display: flex;justify-content: center;" ><a id="link_registro_panel" class="ingreso_registro_css" style="display: flex;justify-content: center;text-decoration:none;cursor: pointer;color:black">¿Eres Nuevo en founduss?</a></span>

<br>
     <p style="display: flex;justify-content: center;">
     <span id="enviar_usuario" style="display:  inline-block; text-decoration:none;cursor: pointer;">¿Olvido su usuario?</span><span class="copys_i">&nbsp;|&nbsp;</span>
      <span id="cambio_contraseña" style="display: inline-block;text-decoration:none;cursor: pointer;">¿Olvido su contraseña?</span>
    </p>
     
    </form>
    </div>
    <div class="three columns aviso_ingreso">
  
    </div>
    </div>
    
      
    
  </div>
</div>

<!-- The Modal -->
<div id="myModal_contraseña" class="modal">

  <!-- Modal content -->
  <div class="modal-content cuadro_Recuperacion_contraseña" id="modal-content">
     <p style="display:flex; justify-content:flex-end;"> <span class="close" style="display:flex;position:relative;float:right; margin-top:15px;" >&times;</span></p>
    <div class="Cuadro_Con_elementos" >
    <div id="contenido_contra" class="modal-body container_12">
      <h3 class="texto_recuperar_contraseña">Recuperación de contraseña</h3>
      <p class="texto_para_usuario">Escriba su nombre de usuario o correo electrónico y recibirá un código para restablecer su contraseña</p>
   <form action="<?=$_SERVER['PHP_SELF']?>" method="post" id="formulario" class="edit edit_estilo"> 
 <div class="divformulario" id="divformulario_cambio_contraseña">
        
     
          

        <input type="text" class="editar" name="correo_or_usuario" id="texto_Ingresa_tu_usuario" placeholder="Ingrese usuario o correo electrónico" >
</div>
    
   <div class="divformulario" style="display: flex;justify-content: center;">

        <input type="submit" id="mensaje_click" class="boton_submit" name="enviar" value="Enviar">
        <input type="hidden" name="enviar" value="Enviar" /> 
        </div>
    </form> 
    </div>
 </div>
  </div>
</div>

<div  id="myModal_usuario" class="modal">

  <!-- Modal content -->
  <div class="modal-content estilos_olvidu_su_usuario">
<div class="twelve columns div_colse">
      <span class="close estilos_cerrar_ventana_envio_de_usuario" >&times;</span>
</div>
    <div style="height:310px;display: flex; flex-direction: column;justify-content: center;
  align-items: center; min-height:1px;" >
    <div id="contenido_usuario" class="modal-body container_12">

      <h3 class="Estilos_texto_envio_de_usuario"> Envio de Usuario</h3>
   <form action="<?=$_SERVER['PHP_SELF']?>" method="post" id="formulario2" class="edit" style="display: flex;flex-direction: column;align-items: center; margin-top:3%"> 
    
 <div class="divformulario">
        <input id="Texto_ingrese_correo_ingresa" type="text" class="editar Estilos_texto_ingrese_su_correo" name="correo_usuario" placeholder="Ingrese su correo">
        </div>
    
   <div class="divformulario" style="display: flex;justify-content: center;">

        <input type="submit" id="mensaje_click2" class="boton_submit estilos_boton_enviar" name="enviar" value="Enviar" style="margin-top: 40px;" >
        <input type="hidden" name="enviar" value="Enviar" /> 
        </div>
    </form> 
    </div>
 </div>
  </div>

</div>
<div class="container" style="display: flex;align-items: center;justify-content: center; border-top:solid; border-top-color:  rgba(230, 230, 230);"  >



   <div class="six columns " style="
    margin-top: 10px; 
    display: flex; 
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    height: 60px; 
    font-size: 16px; 
">


       <span  class="copys" style="font-size: 14px;  color: white;  display: flex;justify-content: center;
    align-items: center; width: 50%">
 
        <a class="ayuda_ingresa" id="mensaje_ayuda">Ayuda <span class="Linea_Separacion_ayuda_Terminos">|</span> </a>
        <div id="myModal_pie" class="modal " style="display: none;">
  <div class="modal-content Ventana_ayuda_pie_pagina"  >
    <p><span class="close2" id="cerrar_ventana_mensaje_founduss" >×</span></p>
    <div  style="display: flex; flex-direction: column;justify-content: center; align-items: center; min-height:1px;">
      <div class="container">
        <div id="contenido_mensaje_founduss" class="twelve columns " >
         <script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
         <script src="../../../../../../../js/funciones_pie_pag.js"></script>
         <h3 style="text-align: center;font-family:'Montserrat',sans-serif;font-weight: normal;    color: rgb(87, 87, 86);font-size:18pt;    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);" >¿Necesitas ayuda?</h3>
         <form class="edit" id='enviarmensajefoundusscontenido'  method="post" name="form1" style="display: flex;justify-content:center;flex-direction: column;align-items: center; font-family: 'Montserrat', sans-serif;color:black;font-weight:400;">
           <div class="divformulario">
             <fieldset>
               <label class="name">
                 <input type="email" id="correo_ingreso" class="editar" name="correo"  value="" required style="text-align: center;font-family:'Montserrat',sans-serif;font-weight: normal;color:rgb(100,100,100);font-size:14px;" title="Correo" placeholder="Su Correo por favor">
               </label>
             </fieldset>
             <br />
             <fieldset>
               <label class="name">
                 <input type="text" id="correo_asunto_ingreso" class="editar" name="asunto"  value="" required style="text-align: center;font-family:'Montserrat',sans-serif;font-weight: normal;color:rgb(100,100,100);font-size:14px;" title="Correo" placeholder="Asunto">
               </label>
             </fieldset>
             <br />
             <fieldset>
               <label class="name">
                 <textarea  name="mensaje" placeholder="Describa su necesidad "  style="width:100%; text-align:justify; max-height:210px;    border: 1px solid rgb(198, 198, 198);border-bottom: 1px solid rgb(198, 198, 198);border-bottom-right-radius: 14px;border-bottom-left-radius: 14px;border-top-left-radius: 14px;border-top-right-radius: 14px; background-color: rgb(242,242,242); " class="mensaje" required >
                 </textarea>
                 <br />
                 <input class="boton enviar_mensaje_atyuda_ingresa" name="" type="submit" value="Enviar" style="font-weight: bold;border-radius: 20px;" >
               </label>
             </fieldset>
             <input name="correotienda" type="hidden" value="atencionalcliente@founduss.com">
             <input name="corre" type="hidden" value="18">
           </div>
         </form>
        </div>
       </div>
     </div>
   </div>
</div> 
        <a id="link_terminos_y_condiciones_ingresa" style="font-family: 'Montserrat', sans-serif;font-weight:400;"  class="copys_i"> Términos y Condiciones</a>
       </span>
       <p  style="font-size: 14px; width: 100%;  display: flex;justify-content: center;
    align-items: center; font-family: 'Libre Franklin', sans-serif; ">
         <span> Copyright ©  2018,</span>
         <span> FOUNDUSS C.A.,</span>
         <span> Todos los Derechos Reservados</span>
       </p>
  </div>


  


  </div>-
</body>
</html>
<script>

var link_terminos_y_condiciones_ingresa=document.getElementById("link_terminos_y_condiciones_ingresa");
link_terminos_y_condiciones_ingresa.addEventListener('click', function(){
  window.open("../../../../../../../terminos-y-condiciones");
});
</script>

<script>
var modal = document.getElementById('myModal_contraseña');
// Get the button that opens the modal
var btn = document.getElementById("cambio_contraseña");
// Get the <span> element that closes the modal
// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "flex";
}
// When the user clicks anywhere outside of the modal, close it
var form = document.getElementById("formulario");
  form.onsubmit = function(e){
    e.preventDefault();
    var data = new FormData(document.getElementById('formulario'));
    fetch('controllers/enviar_correo_cambio_contrasena_controller.php', {
    method: 'POST',
    body: data,
    mode: 'cors',
    cache: 'default' 
    })
    .then(function(response) {
    if(response.ok) {
      return response.json();
    }else {
       return response.json();
    }
    })
    .then(function(myJson) {
      document.getElementById("contenido_contra").innerHTML =myJson.existe_usuario;
      if(myJson.existe_usuario==1){
      document.getElementById("contenido_contra").innerHTML="Mensaje Enviado";
      document.getElementById("contenido_contra").style.display="flex";
      document.getElementById("contenido_contra").style.justifyContent="center";
      document.getElementById("contenido_contra").style.fontSize="20px";
      document.getElementById("contenido_contra").style.height="240px";
      document.getElementById("contenido_contra").style.alignItems="center";
      }
    });
};
var modal2 = document.getElementById('myModal_usuario');

// Get the button that opens the modal
var btn2 = document.getElementById("enviar_usuario");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close")[1];
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btn2.onclick = function() {
    modal2.style.display = "flex";

}

// When the user clicks on <span> (x), close the modal
span2.onclick = function(event) {

    modal2.style.display = "none";


}
span.onclick = function(event) {

    modal.style.display = "none";


}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var form2 = document.getElementById("formulario2");
  form2.onsubmit = function(e){
 
    e.preventDefault();





var data = new FormData(document.getElementById('formulario2'));

fetch('enviar_usuario.php', {
   method: 'POST',
   body: data,
   mode: 'cors',
    cache: 'default' 
})
.then(function(response) {
   if(response.ok) {
       return response.text().then(function(text) {
  document.getElementById("contenido_usuario").innerHTML = text;
  document.getElementById("contenido_usuario").style.display="flex";
  document.getElementById("contenido_usuario").style.justifyContent="center";  
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

};
</script>