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
<link  rel="stylesheet" href="../../../../../../../css/font-awesome.css">
<link href="../../../../../../../img/IsotipoFounduss-01.png" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="../../../../../../../css/Estilos_pie_de_pagina.css?<?php echo $version; ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
<script src="../../../../../../../js/in-view.min.js?<?php echo $version; ?>"></script>
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
<div id="myModal_panel" class="modal " style="display: none;">
   <div class="modal-content" style="height: 500px;display: flex;background-color: rgb(15,36,62);" >
     <p><span class="close2" id="cerrar_ventana_panel" >×</span></p>
     <div  style="display: flex; flex-direction: column;justify-content: center; align-items: center; min-height: 440px;">
       <div class="container" style="display: flex; flex-direction: column;justify-content: center; align-items: center;">
          <img src="../../../../../../../img/advertencia.png">
          <div style="font-size: 40px;color:white;height: 60px;margin-top: 30px; ">¿Eres Empresa?</div>
          <div style="display: flex; flex-direction: row;justify-content: center; align-items: center; width: 100%">
            <a href="../../../../../../../registro" class="boton" style="width: 20%;padding: 5px;font-size: 20px;color:white;text-align: center;box-sizing: border-box; " > Si</a>
            <a class="close2 boton" style="width: 20%;padding: 5px;margin-left: 10px; font-size: 20px;color:white;text-align: center; box-sizing: border-box;" >No</a>
          </div>
          <div style="font-size: 16px;color:rgb(240,146,0);height: 44px; margin-top: 60px">El Registro Sólo Aplica para tiendas </div>
        </div>
      </div>
    </div>
</div> 



<div class="row">
  <div class="container top_ingreso" >

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
   <div class="six columns">

    <form name="form" action="../../../../../../../ingreso" method="POST" style="padding:0;margin-left: 10%;margin-right: 10%;display: flex;justify-content: center;flex-direction: column; ">
       
        <input class="pic1-formulario-ingreso" name="usuario" type="text" placeholder="USUARIO" id="ingreso_usuario" align="middle" autocomplete="off">  
    
  
     <input class="pic1-formulario-ingreso" name="clave" type="password" placeholder="CONTRASEÑA"  align="middle" autocomplete="off">

     
     <input class="pic1-formulario-ingreso-boton" type="submit"  value="Entrar">
     <br>
     <span  style="display: flex;justify-content: center;" ><a id="link_registro_panel" class="ingreso_registro_css" style="display: flex;justify-content: center;text-decoration-line: underline;cursor: pointer;color:black">Eres Nuevo en founduss?</a></span>

<br>
     <p style="display: flex;justify-content: center;">
     <span id="enviar_usuario" style="display:  inline-block; text-decoration-line: underline;cursor: pointer;">Olvido Su usuario?</span><span class="copys_i">&nbsp;|&nbsp;</span>
      <span id="cambio_contraseña" style="display: inline-block;text-decoration-line: underline;cursor: pointer;">Olvido Su Contraseña?</span>
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
  <div class="modal-content" style="height: 500px;display: flex">
<div>
      <span class="close">&times;</span>
</div>
    <div style="display: flex; flex-direction: column;justify-content: center;
  align-items: center; min-height: 440px;" >
    <div id="contenido_contra" class="modal-body container_12">

      <h3 style="text-align: center;color:#F99615;"> CAMBIO DE CONTRASEÑA</h3>
   <form action="<?=$_SERVER['PHP_SELF']?>" method="post" id="formulario" class="edit" style="display: flex;flex-direction: column;align-items: center; margin-top: 100px"> 
    <div class="divformulario">
        <label>
          <span> Ingrese su Usuario</span>
   
       
        </label>
     
          

        <input type="text" class="editar" name="usuario_nombre" >
</div>
 <div class="divformulario">
        <label>
          <span> Ingrese su correo</span>
   
       
        </label>
     
          

        <input type="text" class="editar" name="correo_usuario" >
</div>
    
   <div class="divformulario" style="display: flex;justify-content: center;">

        <input type="submit" id="mensaje_click" class="boton_submit" name="enviar" value="Enviar" style="margin-top: 40px;" >
        <input type="hidden" name="enviar" value="Enviar" /> 
        </div>
    </form> 
    </div>
 </div>
  </div>
</div>

<div id="myModal_usuario" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="height: 500px;display: flex">
<div>
      <span class="close">&times;</span>
</div>
    <div style="display: flex; flex-direction: column;justify-content: center;
  align-items: center; min-height: 440px;" >
    <div id="contenido_usuario" class="modal-body container_12">

      <h3 style="text-align: center;color:#F99615;"> Envio de Usuario</h3>
   <form action="<?=$_SERVER['PHP_SELF']?>" method="post" id="formulario2" class="edit" style="display: flex;flex-direction: column;align-items: center; margin-top: 100px"> 
    
 <div class="divformulario">
        <label>
          <span> Ingrese su correo</span>
   
       
        </label>
     
          

        <input type="text" class="editar" name="correo_usuario" >
</div>
    
   <div class="divformulario" style="display: flex;justify-content: center;">

        <input type="submit" id="mensaje_click2" class="boton_submit" name="enviar" value="Enviar" style="margin-top: 40px;" >
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
 
        <a href="../../../../../../../terminos-y-condiciones" class="copys_i" > Ayuda</a><span class="copys_i">&nbsp;|&nbsp;</span>
       <a href="../../../../../../../terminos-y-condiciones" class="copys_i" > Términos y Condiciones</a>
       </span>
       <p  style="font-size: 14px; width: 100%;  display: flex;justify-content: center;
    align-items: center; font-family: 'Libre Franklin', sans-serif; ">
         <span> Copyright ©  2018,</span>
         <span> FOUNDUSS C.A.,</span>
         <span> Todos los Derechos Reservados</span>
       </p>
  </div>


  


  </div>
</body>
</html>


<script>
var modal = document.getElementById('myModal_contraseña');

// Get the button that opens the modal
var btn = document.getElementById("cambio_contraseña");

// Get the <span> element that closes the modal


// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}



// When the user clicks anywhere outside of the modal, close it

var form = document.getElementById("formulario");
  form.onsubmit = function(e){
 
    e.preventDefault();





var data = new FormData(document.getElementById('formulario'));

fetch('cambio_contrasena.php', {
   method: 'POST',
   body: data,
   mode: 'cors',
    cache: 'default' 
})
.then(function(response) {
   if(response.ok) {
       return response.text().then(function(text) {
  document.getElementById("contenido_contra").innerHTML = text;
    
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




var modal2 = document.getElementById('myModal_usuario');

// Get the button that opens the modal
var btn2 = document.getElementById("enviar_usuario");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close")[1];
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btn2.onclick = function() {
    modal2.style.display = "block";

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