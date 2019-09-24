<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Founduss Registro</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
<link rel="stylesheet" href="../../../../../../../css/fou.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/perfil.css?<?php echo $version; ?>">
 <link rel="stylesheet" href="../../../../../../../css/form.css?<?php echo $version; ?>">
 <link rel="stylesheet" href="../../../../../../../css/estilos_registro_usuario.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton2.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/panel.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/registro.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/reset.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../js/leaflet.css"/>
<link  rel="stylesheet" media="screen" href="../../../../../../../css/style.css?<?php echo $version; ?>">
<link  rel="stylesheet" href="../../../../../../../css/font-awesome.css?<?php echo $version; ?>">
<link href="../../../../../../../img/IsotipoFounduss-01.png" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="../../../../../../../css/Estilos_pie_de_pagina.css?<?php echo $version; ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
<script src="../../../../../../../js/in-view.min.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funcion_tamano_ventana.js?<?php echo $version; ?>" ></script>
<script src="../../../../../../../js/scripts.js?<?php echo $version; ?>"></script>
<script  src="../../../../../../../js/jquery.touchSwipe.min.js"></script>
<script src="../../../../../../../js/leaflet.js"></script>
<script src="../../../../../../../loadCSS-2.0.1/src/loadCSS.js"></script>
<script src="../../../../../../../js/funciones-registro.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones-panel.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones-perfil.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones_registro_usuario_cliente.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/busca3.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones_menu_rapido_tienda.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/busca.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/jquery.validate.min.js?<?php echo $version; ?>" type="text/javascript"></script>
<script src="../../../../../../../js/localization/messages_es.js?<?php echo $version; ?>" type="text/javascript"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131128364-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-131128364-1');
</script>
</head>
<body >
<?php include('panel_mvc.php') 
    ?>
 <div class="container flex" style="display:flex;z-index: 4;min-height:600px; border:solid;border-color:rgba(255,255,255,0);align-items: center;justify-content:center;">
 <div style="align-items: center;justify-content:center; width:20%; margin-top:0%; margin-right:40%;margin-left:40%; position:absolute;background-color:#FFF;display:flex;flex-direction: column; justify-content: center;
  align-items: center;" >
          <a href="../../../../../../../inicio" title="Founduss" style="width:80%">
          </a> 
          <div id="pasos_registro">
        </div>
          </div>
  <div class="content_registro_usuario">
  <div id="contactofor" class="container">
    <div class="row">
      <div class="one columns" style="min-height: 10px">
        <input id="numero" class="numero" name="parte" type="text" value="<?php echo $numero; ?>" readonly="readonly" numero="<?php echo $numero; ?>" style="display: none;" >
      </div>
      <div class="ten columns"> 
        <div class="twelve columns">
          <form action="<?php echo $editFormAction; ?>" method="post" name="form" class="form" id='formulario_registro_contacto'>
            <fieldset  style="display:flex;flex-direction: column;">
              <div class="twelve columns" style="min-height:50px;margin-top:20px;">
                <p id="titulo_registro" class="texto_registro_usuario">
                  Registro de usuario
                </p> 
              </div>
              <div  class="six columns form_registro" style="width:100%;" > 
                <label class="name" style="min-height:39px">
                  <input class="estilo_input_registro_usuario" id="imput_usuario_cliente"  type="text" title="Usuario" name="usuario" value="" placeholder="Usuario" autocomplete="off" maxlength="100" required="required" >
                  <div id="campousuario" class="existe tooltiptext" existe_usuario="no" usuario_valido="no" > <?php echo $hayusuario; ?></div>
                </label> 
              </div>
              <div class="six columns form_registro" style="width:100%;" > 
                <label class="email" style="min-height:39px">
                  <div id="campocorreo" class="existe tooltiptext" existe_correo="no" > <?php echo $haycorreo; ?></div>
                    <input  style="border-color: rgb(150,150,150,0.3);font-size:14px;" id="correo" type="text" title="Correo electronico" name="correo" value="" size="32" placeholder="Correo electrónico" required="required">
                </label>
              </div>
              <div  class="six columns form_registro" style="width:100%;"  > 
                <label class="clave" style="min-height:39px">
                  <input class="estilo_input_registro_usuario" type="password" id="clave" title="Clave" name="password" value=""  placeholder="Contraseña" autocomplete="off" maxlength="60" required="required">
                </label> 
              </div>
              <div class="six columns form_registro" style="width:100%;"  > 
                <label class="clave repetir" style="min-height:39px">
                  <input class="estilo_input_registro_usuario" type="password" id="clave1" title="Repita la clave1" name="password1" value="" placeholder="Repita Contraseña" autocomplete="off" maxlength="60" required="required">
                  <div id="campo_repetir_contraseña" class="existe tooltiptext"> 
                  </div>
                </label> 
              </div>
              <div class="six columns form_registro" style="width:100%;" > 
                <label class="phone" style="min-height:39px">
                  <input class="estilo_input_registro_usuario" type="text" title="Telefono o celular" name="telefono" value="" size="32" placeholder="Teléfono" required="required">
                </label>  
              </div>
              <p class="estilo_parrafo_haciendo_click_registro_usuario">  Haciendo click en <span class="Texto_registrar_modo_gris"> Registrar</span></p>
              <p class="parrafo" style="font-size: 11px;font-family: 'Montserrat', sans-serif;font-weight: 400;color: rgb(0, 0, 0);line-height: 1.3;text-align: center;">  Declarara ser una persona natural y debe ingresar y aceptar los  <a id="link_terminos_y_condiciones_registro_usuario" style=";font-family: 'Montserrat', sans-serif;font-weight:bold;" class="copys_i"> Términos y Condiciones</a> de nuestra plataforma,
              así como también recibir correos electrónicos relacionados con miembros y servicios desde Founduss.com</p>
              <div  class="six columns form_registro" style="width:100%;" > 
              <div style="display:flex;justify-content: center; align-items: center;">
                <label class="terminoscondiciones label" >
                  <input  type="checkbox" title="Telefono o celular" name="condiciones" value="1" style="width: 15px;height:15px;padding-top: 5px;padding-bottom: 5px;" required="required"  >
                  <span class="condiciones acepto" >Acepto</span> 
                </label>
                </div>  
              </div>
              <div  class="twelve columns form_registro_de registro" > 
                <div class="btns estilo_responsive" style="display:flex;align-items: center;flex-direction: column;" >
                  <input class="boton crear_contacto"  name="crea" type="submit" value="Registrar" id="id_crear_contacto" >
                  <div>
                    <?php if ((isset($mensaje)) && ($mensaje!='')){
                    echo $mensaje;
                    }?>
                  </div>
                </div>
              </div>
            </fieldset>
            <input type="hidden" name="MM_insert" value="form1" />
            <input type="hidden" name="MM_insert" value="form1" />
          </form>
        </div>  
      </div>
      <div class="one columns" style="min-height: 10px;">
      </div>
    </div>
  </div>
  </div>
  </div>
  <script>
  var link_terminos_y_condiciones_registro_usuario=document.getElementById("link_terminos_y_condiciones_registro_usuario");
  var id_crear_contacto=document.getElementById("id_crear_contacto");

  link_terminos_y_condiciones_registro_usuario.addEventListener('click', function(){
    window.open("../../../../../../../terminos-y-condiciones");
  });
  id_crear_contacto.addEventListener('click', function(){
    window.location.href='../../../../../../../perfil_usuario.php';
  });
  </script>
  <?php 
  include('pie_pag.html') 
  ?>
  
</body>
</html>
