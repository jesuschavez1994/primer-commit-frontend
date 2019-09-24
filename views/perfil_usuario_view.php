<!DOCTYPE >
<html ><head>
<meta  content="text/html; charset=utf-8" />
<title>Founduss Configuración</title>
<link rel="stylesheet" href="../../../../../../../css/fou.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/perfil.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/form.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton2.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton2.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/panel.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/reset.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/Estilos_perfil_usuario.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/Estilos_cambio_de_contrasena_usuario.css?<?php echo $version; ?>">
<link  rel="stylesheet" media="screen" href="../../../../../../../css/style.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/configuracion.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/responsive_configuracion.css?<?php echo $version; ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
<link rel="stylesheet" href="/bootstrap-4.1.3/dist/css/bootstrap.css?<?php echo $version; ?>">
<link rel="stylesheet" href="/dist/cropper.css?<?php echo $version; ?>">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css?<?php echo $version; ?>"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
   <link href="https://file.myfontastic.com/SQY7bBTxyFP89VqNjUyFL8/icons.css" rel="stylesheet">
<link href="../../../../../../../img/IsotipoFounduss-01.png" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="../../../../../../../css/Estilos_pie_de_pagina.css?<?php echo $version; ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="../../../../../../../css/Estilos_informacion_de_contacto.css?<?php echo $version; ?>">
<script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
<script src="../../../../../../../js/in-view.min.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones-panel.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/busca3.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones_configuracion.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones_certificacion_en_configuracion.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/busca.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/scripts.js?<?php echo $version; ?>" async="async"></script>
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>
   </head>
<body>
<?php include('panel_mvc.php') 
?>

<div class="menu_sidevar_slider">
   <nav Class="menu_sidevar_slider_nav" style="width:100%;">
      <ol class="Lista_ordenada_ol_menu_sidevar_slider_nav" style="width:100%;">
         <li class="estilos_li_menu"><span class="Estilos_fuentes_menu_sidevar" id="Perfil_datos_usuario">Perfil</span><div class="naranjita" id="linea__selecto_perfil_configuracion_perfil_usuario" ></div></li><div class="Separacion_div"></div>
         <li class="estilos_li_menu"><span class="Estilos_fuentes_menu_sidevar" id="Mensajeria_configuracion_usuario">Mensajeria</span> <div class="gris" id="linea_selecto_mensajeria_configuracion_perfil_usuario" ></div></li><div class="Separacion_div"></div>
         <li class="estilos_li_menu"><span class="Estilos_fuentes_menu_sidevar" id="Contraseña_configuracion_perfil_usuario">Contraseña</span><div class="gris" id="linea_selecto_certificacion_configuracion_perfil_usuario"></div></li><div class="Separacion_div"></div>
      </ol>
   </nav>
</div>
<div class="contenedor_de_cuadros_perfil_usuario">
   <div class="Formulario_datos_configuracion" style="margin-left:0%;" id="id_datos_perfil_usuario"> 
      <div class="contenedor_datos_perfil_usuario_y_imagen_de_usuario">
         <form>
            <div class="contenedor_50_50_entre_datos_de_perfil_y_imagen">
               <div class="datos_de_perfil_usuario">
                  <div style="display:flex;width:100%;height:55px;">
                     <p class="texto_Datos_de_la_cuenta"> Datos de perfil</p>
                  </div>
                  <div class="six columns form_registro configuracion_usuario datos_perfil"> 
                     <label class="flex linea tamaño_label" >
                        <span class="estilo_texto_span_datos_configuracion">
                           Usuario
                        </span>
                        <div class="contenedor_input_datos_perfil_usuario">
                           <input type="text" class="input_datos_de_perfil_usuario">
                        </div>
                     </label>
                  </div>
                  <div class="six columns form_registro configuracion_usuario datos_perfil"> 
                     <label class="flex linea tamaño_label" >
                        <span class="estilo_texto_span_datos_configuracion">
                           Correo
                        </span>
                        <div class="contenedor_input_datos_perfil_usuario">
                           <input type="text" class="input_datos_de_perfil_usuario">
                        </div>
                     </label>
                  </div>
                  <div class="six columns form_registro configuracion_usuario datos_perfil"> 
                     <label class="flex linea tamaño_label" >
                        <span class="estilo_texto_span_datos_configuracion">
                           Teléfono
                        </span>
                        <div class="contenedor_input_datos_perfil_usuario">
                           <input type="text" class="input_datos_de_perfil_usuario">
                        </div>
                     </label>
                  </div>
                  <div class="six columns form_registro configuracion_usuario datos_perfil"> 
                     <label class="flex linea tamaño_label" >
                        <span class="estilo_texto_span_datos_configuracion">
                           Cedula
                        </span>
                        <div class="contenedor_input_datos_perfil_usuario">
                           <select name="nacion" class="estilo_selec_cedula">
                              <option>
                                 V
                              </option>
                              <option>
                                 E
                              </option>
                           </select>
                           <input type="text" class="input_datos_de_perfil_usuario">
                        </div>
                     </label>
                  </div>
               </div>
               <!-- Carga de imagen Perfil Usuario Revis@r -->
               <div class="imagen_perfil_usuario">
                  <div class="container img_loaded" id="container_img_loaded_configuracion">
                     <label class="label" data-toggle="tooltip" title="Cambiar Imagen de Contacto" id="imagen_cargada_por_el_usuario_configuracion">
                        <div class="demo-content9" >
                           <img class="rounded img_ajuste_tamaño_configuracion" id="avatar" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="../../../../../../../../../../../../../../contactos/contacto<?php echo $id_contacto;?>/contactogg_<?php echo $id_contacto; ?>.jpeg?<?php echo $version_imagen_contacto; ?>" alt="avatar" width="100%" onerror="this.src='../../../../../../../tiendas/tieg_0.jpeg';">
                        </div>
                        <input type="file" class="sr-only" id="input" name="image" accept="image/*">
                     </label>
                     <div class="progress" style="z-index:100;background: rgba(243, 241, 241,0.66);">
                        <div class="loader_img"></div>
                     </div>
                     <div class="alert" role="alert"></div>
                  </div> 
               </div>
            </div>
            <div class="boton_guardar_datos_empresa">
              <button type="submit" class="boton_guardar_cambios_datos_del_perfil_usuario">
                Guardar
              </button>
            </div>
         </form>   
      </div>
   </div>
   <!-- Mensajeria -->
   <div class="contenedor_principal_mensajeria" id="id_mensajeria_perfil_usuario">
      <div class="contenedor_proporcional_de_mensajeria">
         <div class="estilos_de_mensajeria">
            <div class="contenedor_principal_empresas_mensajeria_perfil_usuario">
               <div class="contenedor_texto_empresa_mensajeria">
                  <h3 class="texto_empresas_mensajeria_perfil_usuario">Empresas</h3>
               </div>
               <div class="contenedor_buscador_mensajeria">
                  <div class="contenedor_input_buscador_y_lupa">
                     <input type="text" class="buscador_de_empresas_dentro_de_la_mensajeria_perfil_usuario" placeHolder="Busca tu empresa">
                     <img src="../../../../../../../img/lupa_gris.svg" class="lupa pic1-inpubusca1 lupa" value="" title="buscar">
                  </div>
               </div>
            </div>
            <div class="contenedor_chat_mensajeria">
               <div class="mydiv">
               </div>
               <div class="contentedor_div_mensajeria">
               </div>
               <div class="area_texto_y_send">
                  <div class="contenedor_de_area_de_texto_mensajeria_perfil_usuario">
                     <textarea class="area_texto_mensajera" placeholder="Escriba su mensaje..."></textarea>
                  </div>
                  <div class="image_send">
                  <img src="../../../../../../../img/ICONOS_DE_CHAT_EN_LINEA/icono_de_envio.svg" style="height:45px;width:45px">
                  </div>
               </div>
            </div>
            <div class="mis_stock">
               <div class="contenedor_texto_empresa_mensajeria">
                  <h3 class="texto_empresas_mensajeria_perfil_usuario">Stock</h3>
               </div>
               <div class="contenedor_buscador_mensajeria">
                  <div class="contenedor_input_buscador_y_lupa">
                     <input type="text" class="buscador_de_empresas_dentro_de_la_mensajeria_perfil_usuario" placeHolder="Busca tu stock">
                     <img src="../../../../../../../img/lupa_gris.svg" class="lupa pic1-inpubusca1 lupa" value="" title="buscar">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Contraseña-->
   <div class="Formulario_datos_configuracion contraseña" style="margin-left:0%;" id="id_contraseña_perfil_usuario"> 
      <div class="contenedor_cambio_contrasena_usuario">
         <div  class="Cuadro_Con_elementos_cambio_contrasena" style="width: 100%">
            <div  class="contenedor_texto_h3_cambio_contraseña">
               <h3 class="Estilos_texto_cambio_contrasena_usuario">
                  Cambio de contraseña
               </h3>
            </div>
            <form  class="edit estilos_formulario_cambio_contrasena_usuario"> 
              <div class="divformulario contaseña">
                <input class="estilo_input_ingrese_su_contrasña" class="editar" type="password" placeholder="Ingrese  nueva contraseña">
              </div>
              <div class="divformulario contaseña">
                  <label class="contenedor_iput_ingrese_contraseña">
                     <input  class="estilo_input_ingrese_su_contrasña" type="password" class="editar"  placeholder="Confirme nueva contraseña">
                     <div  class="existe"></div> 
                  </label>
               </div>
               <div class="divformulario boton_enviar_contraseña">
                <input type="submit" class="boton_guardar_cambios_datos_del_perfil_usuario" name="enviar" value="Enviar"  >
                <input type="hidden" name="enviar" value="Editar" > 
               </div>
            </form> 
         </div>
     </div>
   </div>
</div>
<?php 
include('pie_pag.html') 
?>

<script>
   var Perfil_datos_usuario=document.getElementById("Perfil_datos_usuario");
   var id_datos_perfil_usuario=document.getElementById("id_datos_perfil_usuario");
   var Contraseña_configuracion_perfil_usuario=document.getElementById("Contraseña_configuracion_perfil_usuario");
   var id_contraseña_perfil_usuario=document.getElementById("id_contraseña_perfil_usuario");
   var linea__selecto_perfil_configuracion_perfil_usuario=document.getElementById("linea__selecto_perfil_configuracion_perfil_usuario");
   var linea_selecto_certificacion_configuracion_perfil_usuario=document.getElementById("linea_selecto_certificacion_configuracion_perfil_usuario");
   var id_mensajeria_perfil_usuario=document.getElementById("id_mensajeria_perfil_usuario");
   var Mensajeria_configuracion_usuario=document.getElementById("Mensajeria_configuracion_usuario");
   var linea_selecto_mensajeria_configuracion_perfil_usuario=document.getElementById("linea_selecto_mensajeria_configuracion_perfil_usuario");

   Perfil_datos_usuario.addEventListener('click', function(){
      id_datos_perfil_usuario.style.display="flex";
      id_contraseña_perfil_usuario.style.display="none";
      id_mensajeria_perfil_usuario.style.display="none";
      linea__selecto_perfil_configuracion_perfil_usuario.style.background="rgb(241, 147, 1)";
      linea_selecto_certificacion_configuracion_perfil_usuario.style.background=" rgb(204, 204, 204)";
      linea_selecto_mensajeria_configuracion_perfil_usuario.style.background="rgb(204, 204, 204)";
      
   });

   Mensajeria_configuracion_usuario.addEventListener('click', function(){
      id_mensajeria_perfil_usuario.style.display="flex";
      id_datos_perfil_usuario.style.display="none";
      id_contraseña_perfil_usuario.style.display="none";
      linea_selecto_mensajeria_configuracion_perfil_usuario.style.background="rgb(241, 147, 1)";
      linea__selecto_perfil_configuracion_perfil_usuario.style.background="rgb(204, 204, 204)";
      linea_selecto_certificacion_configuracion_perfil_usuario.style.background="rgb(204, 204, 204)";

   });

   Contraseña_configuracion_perfil_usuario.addEventListener('click', function(){
      id_datos_perfil_usuario.style.display="none";
      id_mensajeria_perfil_usuario.style.display="none";
      id_contraseña_perfil_usuario.style.display="flex";
      linea__selecto_perfil_configuracion_perfil_usuario.style.background="rgb(204, 204, 204)";
      linea_selecto_certificacion_configuracion_perfil_usuario.style.background="rgb(241, 147, 1)";
      linea_selecto_mensajeria_configuracion_perfil_usuario.style.background="rgb(204, 204, 204)";

   });
</script>
</body>
</html>