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
  <style>
    .label {
      cursor: pointer;
    }
    .progress {
      display: none;
      margin-bottom: 1rem;
    }
    .alert {
      display: none;
    }
    .img-container img {
      max-width: 100%;
    }
        * {
            margin: 0;
            padding: 0;
        }
        html,body {
            height:100%;
        }
  </style>
</head>
<body>
<?php include('panel_mvc.php') 
?>
  <div class="contactofor twelve columns" style="min-height:100%; box-sizing: border-box;margin-top: 0px; display:flex;flex-direction:column;flex-wrap: wrap;overflow:hidden;"> 
    <div class="menu_sidevar_slider">
     <div class="imagen_configuracion"><img src="../../../../../../../img/ICONOS_CONFI/engranajes.svg" class="engranage_img" ><span class="Texto_configuracion">Configuración</span></div>
      <nav Class="menu_sidevar_slider_nav">
        <ol class="Lista_ordenada_ol_menu_sidevar_slider_nav" id="configuracion_nav">
         <li class="estilos_li_menu"><span class="Estilos_fuentes_menu_sidevar" id="Perfil_configuracion_usuario">Perfil</span><div class="naranjita" id="linea__selecto_perfil_configuracion" >      </div></li><div class="Separacion_div"></div>
         <li class="estilos_li_menu"><span class="Estilos_fuentes_menu_sidevar" id="Ubicacion_configuracion_usuario">Ubicación</span> <div class="gris" id="linea_selecto_ubicacion_configuracion" >  </div></li><div class="Separacion_div"></div>
         <li class="estilos_li_menu"><span class="Estilos_fuentes_menu_sidevar" id="Certificación_configuracion_usuario">Certificación</span><div class="gris" id="linea_selecto_certificacion_configuracion" > </div></li><div class="Separacion_div"></div>
         <li class="estilos_li_menu"><span class="Estilos_fuentes_menu_sidevar" id="contraseña_configuracion_usuario">Contraseña</span><div class="gris" id="linea_selecto_contraseña_configuracion" > </div></li><div class="Separacion_div"></div>
        </ol>
      </nav>
    </div>
    <div class="Ventana_formularios">
      <div class="Formulario_datos_configuracion" id="Formulario_datos_perfil__configuracion"> 
        <div style="display:flex;flex-direction:column;width:100%;" id="id_datos_perfil">
          <form class="form1" action="<?php echo $editFormAction; ?>" method="post" name="form1">
            <div style="display:flex;width:100%;justify-content: space-around;">
              <div class="Caja_Datos" id="datos_perfil_usuario">
                <div style="display:flex;width:60%;height:55px;">
                  <p class="texto_Datos_de_la_cuenta" id="texto_datos_perfil_usuario_configuracion"> Datos de contacto</p>
                  <p class="texto_Datos_de_la_cuenta tienda" id="texto_datos_Ubicacion_de_la_tienda_usuario_configuracion"> Ubicación de la tienda</p>
                </div>
                <div class="six columns form_registro configuracion_usuario datos_perfil" id="contenedor_label_1"> 
                  <label class="flex linea" id="label_nombre_perfil_configuracion">
                    <span class="estilo_texto_span_datos_configuracion">Usuario</span>
                    <div style="display:flex;width: 100%;justify-content: space-between;">
                    <input style="font-size:16px;border-bottom:none;padding:0px;height:18px;margin-bottom:0px;" class="input_datos usuario" disabled="disabled" id="miusuario" class="editar input_certificacion" name="usuario" type="text" title="<?php echo $usuario; ?>" value="<?php echo $usuario; ?>" required>
                    <img src="../../../../../../../img/candado_gris.svg" class="candado" title="Este campo no se puede modificar">
                    </div>
                  </label>
                </div>
                <div class="six columns form_registro configuracion_usuario margin_perfil datos_perfil" id="contenedor_label_2"> 
                  <label class="flex linea" id="correo_de_la_tienda">
                    <span class="estilo_texto_span_datos_configuracion" >Correo</span> 
                    <div style="display:flex;width: 100%;justify-content: space-between;">
                      <input style="font-size:16px;border-bottom:none;padding:0px;height:18px;margin-bottom:0px;"  class="input_datos"  id="correo_configuracion" class="editar input_certificacion" name="correo" type="text" title="<?php echo $correo; ?>" value="<?php echo $correo; ?>" required  title="Correo" autocomplete="off">
                      <img src="../../../../../../../img/lapiz_gris.svg" class="lapiz" id="id_enable_correo_configuracion" title="Editar">
                      <input type="hidden" name="MM_update8" value="form8">
                      <input type="hidden" name="id_contacto" value="<?php echo $id_contacto; ?>" readonly="readonly">
                    </div>
                  </label>
                </div> 
                <div class="six columns form_registro configuracion_usuario margin_perfil datos_perfil"  id="contenedor_label_3"> 
                  <label class="flex linea"  id="numero_telefonico_tiendo_configuracion_usuario">
                    <span class="estilo_texto_span_datos_configuracion">
                      Teléfono
                    </span> 
                    <div style="display:flex;width: 100%;justify-content: space-between;">
                      <input  style="font-size:16px;border-bottom:none;padding:0px;height:18px;margin-bottom:0px;"  class="input_datos"  id="telefono_configuracion" class="editar" name="telefono" type="text" value="<?php echo $telefono; ?>" required  title="<?php echo $telefono; ?>" >
                      <img src="../../../../../../../img/lapiz_gris.svg" class="lapiz" id="id_enable_telefono_configuracion" title="Editar">
                      <input type="hidden" name="MM_update6" value="form6" >
                    </div>
                  </label>
                </div>
                <div class="six columns form_registro configuracion_usuario margin_perfil datos_perfil"  id="contenedor_label_4"> 
                  <label  style="display:flex;" class="flex linea" id="numero_local_tienda_configuracion_usuario">
                    <span class="estilo_texto_span_datos_configuracion">
                      Celular
                    </span> 
                    <div style="display:flex;width: 100%;justify-content: space-between;">
                      <input style="font-size:16px;border-bottom:none;padding:0px;height:18px;margin-bottom:0px;"  class="input_datos ancho_input" style="color:#939191;"  id="cel_configuracion" class="editar" name="cel" type="text" value="<?php echo $cel; ?>" required  title="<?php echo $cel; ?>" >
                      <img src="../../../../../../../img/lapiz_gris.svg" class="lapiz" id="id_enable_cel_configuracion" title="Editar">
                      <input type="hidden" name="MM_update7" value="form7" >
                    </div>
                  </label>
                </div>
              </div>
              <div class="caja_imagen_perfil" id="imagen_perfil_usuario_configuracion">
                <div class="container img_loaded" id="container_img_loaded_configuracion">
                  <label class="label" data-toggle="tooltip" title="Cambiar Imagen de Contacto" id="imagen_cargada_por_el_usuario_configuracion">
                    <div class="demo-content9" >
                      <img class="rounded img_ajuste_tamaño_configuracion" id="avatar" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="../../../../../../../../../../../../../../contactos/contacto<?php echo $id_contacto;?>/contactogg_<?php echo $id_contacto; ?>.jpeg?<?php echo $version_imagen_contacto; ?>" alt="avatar" width="100%" onerror="this.src='../../../../../../../tiendas/tieg_0.jpeg';">
                    </div>
                    <input type="file" class="sr-only" id="input" name="image" accept="image/*">
                  </label>
                  <div class="progress" style="height:500px;z-index:100;background: rgba(243, 241, 241,0.66);">
                     <div class="loader_img"></div>
                  </div>
                  <div class="alert" role="alert"></div>
                </div> 
              </div>
            </div> 
            <div class="boton_guardar_datos_empresa">
              <button type="submit" class="boton_guardar_cambios_datos_del_perfil">
                Guardar
              </button>
            </div>
            <div class="boton_siguiente_datos_empresa">
            <div class="estilo_boton" id="contenedora_slider_low_configuracion" style="width:20%;">
              <div class="span_boton_siguiente" id="Datos_perfil_2"> 
                <span class="texto_boton_siguiente_configuracion">
                  Siguiente 
                </span>
                <div class="flecha_izquierda" style="display: flex;transform: rotate(-40deg);">
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
      <div class="estilos_datos_de_empresa" id="id_datos_empresa">
        <form class="form1" action="<?php echo $editFormAction; ?>" method="post" name="form1" style="width:100%;">
          <div style="display:flex;justify-content: space-around;">
            <div class="Caja_Datos" id="">
              <div style="display:flex;width:100%;height:40px;margin-bottom: 15px;">
                <p class="texto_Datos_de_la_cuenta tienda"  style="display: block;"> 
                  Datos de Empresa
                </p>  
              </div>
              <div class="six columns form_registro configuracion_usuario datos_perfil" id="id_label_nombre_de_empresa">
                <label class="flex label_nombre_contacto_configuracion_tienda" id="nombre_de_contacto_configuracion_usuario_tienda">
                  <span class="estilo_texto_span_datos_configuracion">Nombre Empresa </span>
                  <div style="display:flex;width:100%;border-bottom: solid 1px rgba(194, 189, 189,0.45);">
                  <input type="hidden" name="id_contacto" value="<?php echo $id_contacto; ?>" readonly="readonly" >
                  <input title="<?php echo $tienda; ?>" style="padding:0px;height:19px;"  id="tienda_configuracion" class="editar estilos_textos_input_datos_de_la_tienda_configuracion" name="tienda" type="text" value="<?php echo $tienda; ?>" required   placeholder="El Nombre de la Tienda" <?php if ($nivel>=2) { echo 'disabled';} ?>>
                  <?php if($nivel>=2) {?><img src="../../../../../../../img/candado_gris.svg" class="candado" title="Este campo no se puede modificar"><?php } ?>
                  <?php if($nivel==1) {?><img src="../../../../../../../img/lapiz_gris.svg" class="lapiz" id="id_enable_contacto" style="padding-bottom: 5px;" title="Editar"><?php } ?>
                  <input type="hidden" name="MM_update5" value="form5" >
                  </div>
                </label>
              </div>
              <div class="six columns form_registro configuracion_usuario margin_perfil datos_perfil" id="id_label_la_empresa">
                <label class="flex label_nombre_contacto_configuracion_tienda" id="label_nombre_de_la_tienda_configuracion">
                  <span class="estilo_texto_span_datos_configuracion">Nombre de contacto</span>
                  <div style="display:flex;width:100%;align-items: center;border-bottom: solid 1px rgba(194, 189, 189,0.45);">
                  <input title="<?php echo $contacto; ?>" style="padding:0px;height:19px;" id="contacto" class="editar estilos_textos_input_datos_de_la_tienda_configuracion" name="contacto" type="text" value="<?php echo $contacto; ?>" required >
                  <img src="../../../../../../../img/lapiz_gris.svg" class="lapiz" id="id_enable_tienda_configuracion" style="padding-bottom: 5px;" title="Editar">
                  <input type="hidden" name="MM_update2" value="form2" >
                  <input type="hidden" name="id_tienda" value="<?php echo $id_tienda; ?>" >
                  </div>
                </label>
              </div>
              <div class="six columns form_registro configuracion_usuario margin_perfil datos_perfil"  style="margin-bottom: 9px;">
                <label class="flex label_nombre_contacto_configuracion_tienda" id="label_categoria_tienda_configuracion">
                  <span class="estilo_texto_span_datos_configuracion">Categoria</span>
                  <div style="display:flex;width:100%;align-items: center;border-bottom:solid 1px rgba(194, 189, 189,0.45);">
                  <select class="edit" id="categoria" name="categoria" title="<?php echo $categoria_u; ?> " style=" font-family:'Montserrat',sans-serif;font-weight:400;color:#939191;border:none;width:100%;font-size:16px;background:white;padding:0px;height:21px;"<?php if ($nivel>=2) { echo 'disabled';} ?> >
                    <option value="" style="background:#F99615; color:#FFF;">
                      Seleccione la Categoria
                    </option>
                    <?php
                    require('Connections/coneccion4.php');
                    $conn->set_charset("utf8");
                    $query_Recordset10 = "SELECT * FROM categoria ";
                    $Recordset10  = $conn->query($query_Recordset10);
                    if ($Recordset10->num_rows > 0) {
                      while($row_Recordset10 = $Recordset10->fetch_assoc()) {?>
                        <option value="<?php echo $row_Recordset10['id_categoria']; ?>" <?php if( $id_categoria_u== $row_Recordset10['id_categoria']){?> selected="selected" <?php }?>>
                          <?php echo $row_Recordset10['categoria']; ?>
                        </option>
                      <?php 
                      }
                    } 
                    ?>
                  </select>
                  <?php if($nivel>=2) {?><img src="../../../../../../../img/candado_gris.svg" class="candado" title="Este campo no se puede modificar"><?php } ?>
                  <?php if($nivel==1) {?><img src="../../../../../../../img/lapiz_gris.svg" class="lapiz" id="id_enable_categoria" style="padding-bottom:5px;" title="Editar"><?php } ?>
                  </div>
                </label>
              </div>
              <div class="six columns form_registro configuracion_usuario margin_perfil datos_perfil">
                <label class="flex label_nombre_contacto_configuracion_tienda" id="label_subcategoria_tienda_configuracion">
                  <span class="estilo_texto_span_datos_configuracion">Subcategoria</span>
                  <div id="camposubcategoria" class="camp">
                    <input type="hidden" name="id_tienda_subcategoria" value="<?php echo $id_tienda_subcategoria; ?>" >
                    <input type="hidden" name="MM_update33" value="form33" >
                    <div style="display:flex;width:100%;align-items: center;border-bottom:solid 1px rgba(194, 189, 189,0.45);">
                    <select id="subcategoria" class="subca" name="id_subcategoria" title="Subcategoria" style=" font-family: 'Montserrat', sans-serif;font-weight:400;color:#939191;border:none;width: 100%;font-size:16px;background:white;padding:0px;height:25px;" <?php if ($nivel>=2) { echo 'disabled';} ?>>
                      <option value="">
                        Seleccione la Subcategoria 
                      </option>
                      <?php
                      require('Connections/coneccion4.php');
                      $conn->set_charset("utf8");
                      $query_Recordset11 = "SELECT * FROM subcategoria WHERE id_categoria = $id_categoria_u";
                      $Recordset11  = $conn->query($query_Recordset11);
                      if ($Recordset11->num_rows > 0) {
                        while($row_Recordset11 = $Recordset11->fetch_assoc()) {?>
                          <option <?php if($row_Recordset11['id_subcategoria']==$id_subcategoria_u){?> selected="selected"<?php }?> value="<?php echo $row_Recordset11['id_subcategoria']; ?>"> 
                            <?php echo $row_Recordset11['subcategoria']; ?>
                          </option>
                          <?php 
                        } 
                      }  
                      ?>
                    </select>
                    <?php if($nivel>=2) {?><img src="../../../../../../../img/candado_gris.svg" class="candado" title="Este campo no se puede modificar"><?php }?>
                    <?php if($nivel==1) {?><img src="../../../../../../../img/lapiz_gris.svg" class="lapiz" id="id_enable_subcategoria" style="padding-bottom: 5px;" title="Editar"><?php } ?>
                    </div>
                  </div>
                </label>
              </div>
            </div>
            <div class="imagen_tienda">
              <div class="container">
                <label class="label" data-toggle="tooltip" title="" data-original-title="Cambiar Imagen de Perfil" id="imagen_cargada_por_la_tienda_configuracion">
                  <div class="demo-content9">
                    <img style="width:100%" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="../../../../../../../../../../../../../../contactos/contacto<?php echo $id_contacto;?>/tienda<?php echo $id_tienda;?>/tiegg_<?php echo $id_tienda;?>.jpeg?<?php echo $version_imagen_tienda; ?>" class="rounded" id="avatar1" onerror="this.src='../../../../../../../tiendas/tieg_0.jpeg';" width="100%" height="300px">
                  </div>
                  <input type="file" class="sr-only" id="input1" name="image" accept="image/*">
                </label>
                <div class="progress" style="height:300px;z-index:100;background: rgba(243, 241, 241,0.66);">
                  <div class="loader_img"></div>
                </div>
                <div class="alert1" role="alert">
                </div>
              </div>
            </div>
          </div>
          <div  class="contenedor_boton_editar boton_responsive" id="">
            <button type="submit" class="boton_guardar_cambios_datos_empresa">
              <div class="boton_editar" id="boton_editar_guardar_cambios">
                <span class="texto_boton_guardar_cambios_datos_empresas_configuracion">
                  Guardar
                </span>
              </div>
            </button>
          </div>
          <div style="width:100%;display:flex;">
            <div class="boton_atras_datos_perfil" style="width:50%;">
            <div class="flecha_izquierda" style="display: flex;">
            </div> 
              <div class="estilo_boton" id="contenedora_slider_low_configuracion">
                <span class="texto_boton_siguiente_configuracion" id="id_atras_datos_de_perfil">
                  Atrás
                </span>
              </div>
            </div>
            <div class="" style="width:50%;display:flex;">
              <div  style="width:100%;" >
                <span id="icono_flecha_izquierda_datos_tienda_configuracion" style="width: 100%;display: flex;justify-content: flex-end;"class="texto_boton_siguiente_configuracion">
                  Siguiente
                </span>
              </div>
              <div class="flecha_izquierda" style="display: flex;transform: rotate(-45deg);">
              </div> 
            </div>
          </div>
        </form>
      </div>
      <div class="estilos_datos_de_ubicacion" id="id_ubicacion" style="display:none;">
        <form class="form1" action="<?php echo $editFormAction; ?>" method="post" name="form1">
          <span class="Texto_datos_de_ubicacion_configuracion" id="id_Texto_datos_de_ubicacion">
            Datos de ubicación
          </span>
          <div class="contenedor_label_Estado_y_Ciudad_configuracion" id="id_contenedor_label_Estado_y_Ciudad_configuracion">
            <label class="flex label_nombre_contacto_configuracion_tienda" id="label_de_Ubicacion">
              <select id="estado_configuracion" name="id_estado" title="Estado" style=" font-family:'Montserrat', sans-serif;font-weight:500;color:#939191;border:none;border-bottom:solid 1px rgba(194, 189, 189,0.45);width: 100%;font-size:15px;">
                <option value="" style="background:#F99615; color:#FFF;">
                  Seleccione el Estado
                </option>
                <?php require('Connections/coneccion4.php');
                $conn->set_charset("utf8");
                $query_Recordset6 = "SELECT * FROM estados ";
                $Recordset6  = $conn->query($query_Recordset6);
                if ($Recordset6->num_rows > 0) {
                  while($row_Recordset6 = $Recordset6->fetch_assoc()) {   ?> 
                    <option value="<?php echo $row_Recordset6['id_estado']; ?>" <?php if( $id_estado== $row_Recordset6['id_estado']){?> selected="selected"   <?php }?>><?php echo $row_Recordset6['estado']; ?></option>
                    <?php 
                  } 
                }
                ?>
              </select>
            </label>
            <label class="ciudad_label label_nombre_contacto_configuracion_tienda" id="label_Estado_ubicacion_configuracion_usuario" style="width:60%;">
              <div id="campociudad3" class="camp"><label class="ciudad_label" id="id_ciudad_label" style="display:flex;align-items: flex-start;">
                <select id="ciudad" class="subca" name="id_ciudad" title="Ciudades" style=" font-family: 'Montserrat', sans-serif;font-weight:500;color:#939191;border:none;    border-bottom:solid 1px rgba(194, 189, 189,0.45);width: 100%;font-size:15px;background:white;"   >
                  <option value="">
                    Seleccione la Ciudad 
                  </option>
                  <?php 
                  require('Connections/coneccion4.php');
                  $conn->set_charset("utf8");
                  $query_Recordset8 = "SELECT * FROM ciudades WHERE id_estado = $id_estado";
                  $Recordset8  = $conn->query($query_Recordset8);
                  if ($Recordset8->num_rows > 0) {
                    while($row_Recordset8 = $Recordset8->fetch_assoc()) {?>
                      <option <?php if($row_Recordset8['id_ciudad']==$id_ciudad){?> selected="selected"<?php }?> value="<?php echo $row_Recordset8['id_ciudad']; ?>"> <?php echo $row_Recordset8['ciudad']; ?></option>
                        <?php 
                    }  
                  } 
                  $conn->close(); 
                  ?>
                </select>
              </div>
            </label>
          </div>
          <div class="twelve columns form_registro"> 
            <label class="flex edit">
              <input type="hidden" name="MM_update3" value="form3">
              <input type="hidden" name="id_tienda" value="<?php echo $id_tienda; ?>" >
              <p class="texto_direccion">Direccion:</p>
              <textarea style="width:100%;" id="direccion" title="Direccion" name="direccion" placeholder="Direccion:"><?php echo strip_tags($direccion); ?></textarea>
            </label>
          </div>
          <!------------------------->
          <div id="div_espaciador" style="width:100%;height:10px;"></div>
          <div class="contenedor_boton_siguiente_al_mapa">
            <button type="submit" class="boton_guardar_cambios_datos_del_perfil">
             Guardar
            </button>
          </div>
          <div class="div_contenedor_boton_siguiente_que_direcciona_al_mapa">
            <input style="font-size:18px;width:15%;" class="boton_siguiente_que_direcciona_al_mapa" name="" value="Siguiente" id="boton_editar_configuracion" style="display:flex;"> 
            <div class="flecha_izquierda" style="display: flex;transform: rotate(-40deg);">
                </div>
          </div>
          <label class="flex line" style="width:18%;" id="boton_siguiente_ubicacion">
            <input type="hidden" name="MM_update4" value="form4">
          </label>
        </form>
      </div>
      <!-- Mapa-->
      <div class="estilos_mapa_ubicacon" id="id_estilos_mapa_ubicacon">
        <label class="flex">
          <p class="Texto_Mapa_de_Ubicacion_Configuracion">Mapa de ubicación:</p>
          <P class="Texto_cambiar_ubicacion_configuracion">Para indicar su ubicación, acercar el mapa, hacer click y guardar</P>
          <div id="mapid" style="height: 290px;width:100%;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3), 0 6px 20px 0 rgba(0,0,0,0.20);border-radius:10px;">
          </div>
          <div style="width:100%;display:flex;justufy-content:center;">
            <form  class="edit" action="<?php echo $editFormAction; ?>" method="post" name="form1">
              <input id="ubicacion_certificacion" class="editar hide" name="ubicacion" type="text" value="" required style="font-weight:bold;" title="ubicacion" />
              <input type="hidden" name="MM_update10" value="form10" />
              <input type="hidden" name="id_tienda" value="<?php echo $id_tienda; ?>" />
              <input class="boton_submit_configuracion load_confi" name="" type="submit" value="Guardar" />
            </form>
          </div>
          <div class="boton_atras_datos_empresa" style="transform:translateY(15px);">
            <div class="estilo_boton" id="contenedora_slider_low_configuracion" style="justify-content:flex-end;width:10%;">
                <div class="span_boton_siguiente" id="boton_atras_datos_de_ubicacion" style="display: flex;justify-content: space-around;background:white;box-shadow:none;">
                <div class="flecha_izquierda" style="display: flex;">
                </div> 
                  <span class="texto_boton_siguiente_configuracion">
                   Atrás
                  </span>
                </div>
              </div>
            </div>
        </label>
      </div>
      <!-- -->
      <div class="Estilos_certificacion_configuracion" id="id_certificacion">
       <!-- Codigo Certificación -->
       <div class="Contenedor_principal_Modo_columna_de_texto_certificacion_y_Planes_de_certificacion_Configuracion" id="id_Contenedor_principal_Modo_columna_de_texto_certificacion_y_Planes_de_certificacion_Configuracion">
          <div class="Espacio_texto_certificacion_configuracion" id="id_Espacio_texto_certificacion_configuracion">
            <span class="Texto_certificacion_configuracion">Certifícate en el plan que más se ajuste a tus requerimientos</span>
          </div>
          <div class="Contenedor_Principal_de_los_planes_de_certificacion_configuracion" id="id_Contenedor_Principal_de_los_planes_de_certificacion_configuracion" style="display: flex;place-content: center flex-start;align-items: center;width: 100%;height: 100%;padding-bottom:25px;">
           <div class="Espacio_entre_cada_plantilla"></div>
            <div class="Planes_de_certificacion" id="id_Planes_de_certificacion" style="width: 40%;border-radius: 7px;display: flex;flex-direction: column;height: 70%;">
              <div class="cuadro_contenedor_de_texto_planes_certificacion_configuracion" id="id_cuadro_contenedor_de_texto_planes_certificacion_configuracion" >
               <span class="span_texto_Planes_de_certificacion_configuracion" id="id_span_texto_Planes_de_certificacion_configuracion">Planes de certificación</span>
              </div>
              <div class="contenedor_especificaciones_individuales_planes_de_certificacion" id="id_contenedor_especificaciones_individuales_planes_de_certificacion">
               <span class="texto_plan_certificacion" id="id_texto_plan_1_certificacion">Número de publicaciones</span>
              </div>
              <div class="contenedor_especificaciones_individuales_planes_de_certificacion" id="id_contenedor_especificaciones_individuales_planes_de_certificacion_1">
                <span class="texto_plan_certificacion" id="id_texto_plan_2_certificacion">Datos de contacto visible a consumidores</span>
              </div>
              <div class="contenedor_especificaciones_individuales_planes_de_certificacion" id="id_contenedor_especificaciones_individuales_planes_de_certificacion_2">
                <span class="texto_plan_certificacion" id="id_texto_plan_3_certificacion">Ubicación geografica de la empresa</span>
              </div>
              <div class="contenedor_especificaciones_individuales_planes_de_certificacion" id="id_contenedor_especificaciones_individuales_planes_de_certificacion_3">
               <span class="texto_plan_certificacion" id="id_texto_plan_4_certificacion">Área de mensajeria</span>
              </div>
              <div class="contenedor_especificaciones_individuales_planes_de_certificacion" id="id_contenedor_especificaciones_individuales_planes_de_certificacion_4">
                <span class="texto_plan_certificacion" id="id_texto_plan_5_certificacion">Empresa verificada por Founduss</span>
              </div>
              <div class="contenedor_especificaciones_individuales_planes_de_certificacion" id="id_contenedor_especificaciones_individuales_planes_de_certificacion_5">
                <span class="texto_plan_certificacion" id="id_texto_plan_6_certificacion">Aplicaciones adicionales sin costo alguno</span>
              </div>
            </div>
            <div class="Espacio_entre_cada_plantilla">  </div>
            <div class="Contenedor_principal_nivel_gratis_configuracion" id="id_Contenedor_principal_nivel_gratis_configuracion">
              <div class="contenedor_sencillo_configuracion" id="id_contenedor_sencillo_configuracion">
                <div id="contenedor_span_texto">
                  <span class="estilos_texto_sencillo_gratis_Configuracion" id="id_estilos_texto_sencillo_gratis_Configuracion">Sencillo</span>
                </div>
              </div>
              <div class="contenedor_box_shadow">
                <div class="" id="id_contenedor_span_Gratis_configuracion">
                  <span class="estilos_texto_gratis_Configuracion">Gratis</span><span class="estilos_texto_90_dias_Configuracion"> 90 días</span>
                </div>
                <div class="contenedor_check_list" id="id_contenedor_de_check_list_configuracion">
                  <span class="numeros_aplicaciones_certificacion">5</span>
                </div>
                <div class="contenedor_check_list" id="id_contenedor_1">
                  <span class="list_confirmacion">&#10004</span>
                </div>
                <div class="contenedor_check_list" id="id_contenedor_2">
                 <span class="list_confirmacion">&#10004</span>
                </div>
                <div class="contenedor_check_list" id="id_contenedor_3">
                  <span class="list_confirmacion_X">&#10006</span>
                </div>
                <div class="contenedor_check_list" id="id_contenedor_4">
                  <span class="list_confirmacion_X">&#10006</span>
                </div>
                <div class="contenedor_check_list" id="id_contenedor_5">
                  <span class="list_confirmacion_X">&#10006</span>
                </div>
              </div>
            </div>
            <div class="Espacio_entre_cada_plantilla"></div>
            <!-- Estandar -->
            <div class="Contenedor_principal_nivel_gratis_configuracion" id="id_Contenedor_principal_nivel_Estandar_configuracion">
              <div class="contenedor_sencillo_configuracion" id="id_contenedor_Estandar_configuracion">
                <div id="contenedor_span_texto_estandar">
                  <span class="estilos_texto_sencillo_gratis_Configuracion" id="id_estilos_texto_sencillo_gratis_Configuracion">Estandar</span>
                </div>
              </div>
              <div class="contenedor_box_shadow">
                <div class="" id="id_contenedor_span_Estandar_configuracion">
                  <span class="estilos_texto_gratis_Configuracion">80.000 Bs</span><span class="estilos_texto_90_dias_Configuracion">3 meses</span>
                </div>
                <div class="contenedor_check_list" id="id_contenedor_de_check_list_configuracion">
                  <span class="numeros_aplicaciones_certificacion">20</span>
                </div>
                <div class="contenedor_check_list">
                  <span class="list_confirmacion">&#10004</span>
                </div>
                <div class="contenedor_check_list" id="id_contenedor_8">
                  <span class="list_confirmacion">&#10004</span> 
                </div>
                <div class="contenedor_check_list">
                 <span class="list_confirmacion">&#10004</span> 
                </div>
                <div class="contenedor_check_list" id="id_contenedor_9">
                  <span class="list_confirmacion">&#10004</span> 
                </div>
                <div class="contenedor_check_list">
                  <span class="list_confirmacion_X">&#10006</span>
                </div>
                <?php if($nivel!=3) {?>
                  <div class="contenedor_check_list" style="width:100%;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
                    <button  type="button" name="Certificarme" class="boton_certificarme_configuracion" valve="Certificarme" id="botton_certificarme_nivel_estandar_configuracion" <?php if($nivel==2) {?>disabled <?php }?>>
                      <?php if($nivel==2) {?><span class="Estilo_certificado">Certificado</span><?php }
                        else {?><span class="Estilo_certificado">Certificarme</span><?php }
                      ?>
                    </button>
                  </div>
                <?php }?>
              </div>
            </div>
            <div class="Espacio_entre_cada_plantilla"></div>
              <!--PREMIUM -->
            <div class="Contenedor_principal_nivel_gratis_configuracion" id="id_Contenedor_principal_nivel_premium_configuracion">
              <div class="contenedor_sencillo_configuracion" id="id_contenedor_premium_configuracion">
                <div id="contenedor_span_texto_premium">
                  <span class="estilos_texto_sencillo_gratis_Configuracion" id="id_estilos_texto_sencillo_gratis_Configuracion">Premium</span>
                </div>
              </div>
              <div class="contenedor_box_shadow">
                <div class="" id="id_contenedor_span_premium_configuracion">
                  <span class="estilos_texto_gratis_Configuracion">120.000 Bs</span><span class="estilos_texto_90_dias_Configuracion">6 meses</span>
                </div>
                <div class="contenedor_check_list" id="id_contenedor_de_check_list_configuracion">
                  <span class="numeros_aplicaciones_certificacion">500</span>
                </div>
                <div class="contenedor_check_list">
                 <span class="list_confirmacion">&#10004</span> 
                </div>
                <div class="contenedor_check_list" id="id_contenedor_10">
                  <span class="list_confirmacion">&#10004</span> 
                </div>
                <div class="contenedor_check_list">
                 <span class="list_confirmacion">&#10004</span> 
                </div>
                <div class="contenedor_check_list" id="id_contenedor_11">
                 <span class="list_confirmacion">&#10004</span> 
                </div>
                <div class="contenedor_check_list">
                 <span class="list_confirmacion">&#10004</span>
                </div>
                <div class="contenedor_check_list" style="width:100%;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
                  <button type="button" name="Certificarme" class="boton_certificarme_configuracion" valve="Certificarme" id="botton_certificarme_nivel_premium_configuracion" <?php if($nivel==3) {?>disabled <?php }?>> 
                    <?php if($nivel==3) {?><span class="Estilo_certificado">Certificado</span><?php }
                      else {?><span class="Estilo_certificado">Certificarme</span><?php }
                    ?>
                  </button>
                </div>
              </div>
            </div>
            <div class="Espacio_entre_cada_plantilla"></div>        
          </div>
        </div>
      </div>
      <!-- Descripcion -->
      <div class="Formulario_datos_configuracion descripcion" id="id_descripcion" style="flex-direction:column;">
        <form class="form1" action="<?php echo $editFormAction; ?>" method="post" name="form1">
          <div style="display:flex;width:100%;height:40px;margin-bottom: 15px;">
            <p class="texto_Datos_de_la_cuenta tienda" style="display: block;"> 
              Datos de Empresa
            </p>  
          </div>
          <label style="display:flex;" class="flex edit nombre_contacto_configuracion_tienda" id="text_tarea_descripcion_ubicacion_perfil_usuario_configuracion">
            <p class="texto_descripcion">Descripción</p>
            <textarea placeholder="¿A qué se dedica tu empresa?" style="width:100%; height:230px;" id="descripcion" title="Descripcion " name="descripcion" ><?php echo strip_tags($descripcion); ?></textarea>
            <input type="hidden" name="MM_update12" value="form12" >
            <input type="hidden" name="id_tienda" value="<?php echo $id_tienda; ?>" >
            <input type="hidden" name="MM_update3" value="form3" >
            <input type="hidden" name="id_tienda_subcategoria" value="<?php echo $id_tienda_subcategoria; ?>" >
          </label>
          <div class="contenedor_boton_siguiente_al_mapa" id="id_contenedor_boton_siguiente_al_mapa">
            <button type="submit" class="boton_guardar_cambios_datos_del_perfil">
             Guardar
            </button>
          </div>
        </form>
        <div class="contenedor_boton_atras_a_datos_de_empresa">
          <div class="flecha_izquierda" style="display: flex;">
          </div>
          <span  class="estilos_boton_atras_Datos_empresa" id="id_boton_atras_datos_empresa">
            Atrás
          </span>
        </div>
      </div>
      <!-- PASO # 1-->
      <form class="form1" method="post" name="form1" id='enviar_mensaje_certificacion' id_tienda='<?php echo $id_tienda;?>'>
        <div class="estilos_paso_1_certificacion" id="id_estilos_paso_1_certificacion">
          <div id="verificacion_datos_certificacion" class="verificacion_de_datos_certificacion">
            <div style="display:flex;align-items:center;">
              <div class="flecha_izquierda" id="icono_flecha_atras_certificacion" style="display: flex;">
              </div>
              <div class="Estilo_texto_paso_1">
                <h3 class="Textp_paso_1 paso1">
                Paso <span style="width:6px"></span><span class="circulo_naranja">1</span>
                </h3>
              </div>
            </div>
            <h3 class="amarillo-letra-certificacion flex">
              <span class="Texto_verifica">Verifique sus datos</span>  
            </h3>
            <div class="six columns form_registro form_certificacion"> 
              <label class="flex" id="Tienda_label">
                <p class="color_Tutulos_datos">Empresa</p>
                <input id="tienda_certificacion" class="editar input_paso_1" name="tienda" type="text" value="<?php echo $tienda; ?>" required  placeholder="El Nombre de la Tienda" <?php if ($nivel>=2) { echo 'disabled';} ?>>
                <input type="hidden" name="MM_update2" value="form2" >
                <input type="hidden" name="id_tienda" value="<?php echo $id_tienda; ?>" >
                <input type="hidden" name="id_contacto" value="<?php echo $id_contacto; ?>" readonly="readonly" >
              </label>
            </div>
            <div class="six columns form_registro form_certificacion" style="padding-left:40px;"> 
              <label class="flex" id="correo_label">
                <p class="color_Tutulos_datos">Correo</p>
                <input id="correo_certficiacion" class="editar editar input_paso_1" name="correo" type="text" value="<?php echo $correo; ?>" required  title="Correo" autocomplete="off">
                <input type="hidden" name="MM_update8" value="form8">
                <input type="hidden" name="id_contacto" value="<?php echo $id_contacto; ?>" readonly="readonly">
              </label>
            </div> 
            <div class="six columns form_registro form_certificacion"> 
              <label class="flex" id="telefono_label">
                <p class="color_Tutulos_datos"> Teléfono</p>
                <input id="telefono_certificacion" class="editar editar input_paso_1" name="telefono" type="text" value="<?php echo $telefono; ?>" required title="Telefono" >
                <input type="hidden" name="MM_update6" value="form6" >
              </label>
            </div>
            <div class="six columns form_registro form_certificacion" style="padding-left:40px;"> 
              <label class="flex" id="celular_label_paso">
                <p class="color_Tutulos_datos"> Celular</p>
                <input id="cel_certificacion" class="editar editar input_paso_1" name="cel" type="text" value="<?php echo $cel; ?>" required title="Celular" >
                <input type="hidden" name="MM_update7" value="form7" >
              </label>
            </div>
            <div class="six columns form_registro form_certificacion"> 
              <label class="flex" id="categoria_label_paso">
                <p class="color_Tutulos_datos">Categoría</p>
                <select style="width:100%;font-family: 'Montserrat', sans-serif;font-size:16px;color: #939191;font-weight: 400;border-bottom:none;padding:0px;height:18px;" class="edit categoria_select" id="categoria_certificacion" name="categoria" title="Categoria"  <?php if ($nivel>=2) { echo 'disabled';} ?> >
                  <option value="" style="background:#F99615; color:#FFF;">
                  Seleccione la Categoria
                  </option>
                  <?php
                  require('Connections/coneccion4.php');
                  $conn->set_charset("utf8");
                  $query_Recordset10 = "SELECT * FROM categoria ";
                  $Recordset10  = $conn->query($query_Recordset10);
                  if ($Recordset10->num_rows > 0) {
                    while($row_Recordset10 = $Recordset10->fetch_assoc()) {?>
                      <option value="<?php echo $row_Recordset10['id_categoria']; ?>" <?php if( $id_categoria_u== $row_Recordset10['id_categoria']){?> selected="selected" <?php }?>>
                      <?php echo $row_Recordset10['categoria']; ?>
                      </option>
                       <?php 
                    }
                  } 
                  $conn->close(); 
                  ?>
                </select>
              </label>
            </div>
            <div class="six columns form_registro form_certificacion"  style="padding-left:40px;"> 
              <label class="flex" id="id_la_subcategoria">
                <p class="color_Tutulos_datos">Subcategoría</p>
                <div id="camposubcategoria_certificacion" class="camp">
                  <select style="width:100%;font-family: 'Montserrat', sans-serif;font-size:16px;color: #939191;font-weight: 400;padding:0px;border-bottom:0px;" id="subcategoria_certificacion" class="subca" name="id_subcategoria" title="Subcategoria"  <?php if ($nivel>=2) { echo 'disabled';} ?>>
                    <option value="">
                      Seleccione la Subcategoria 
                    </option>
                    <?php
                    require('Connections/coneccion4.php');
                    $conn->set_charset("utf8");
                    $query_Recordset11 = "SELECT * FROM subcategoria WHERE id_categoria = $id_categoria_u";
                    $Recordset11  = $conn->query($query_Recordset11);
                    if ($Recordset11->num_rows > 0) {
                      while($row_Recordset11 = $Recordset11->fetch_assoc()) {?>
                        <option <?php if($row_Recordset11['id_subcategoria']==$id_subcategoria_u){?> selected="selected"<?php }?> value="<?php echo $row_Recordset11['id_subcategoria']; ?>"> 
                        <?php echo $row_Recordset11['subcategoria']; ?>
                        </option>
                        <?php 
                      } 
                    }  
                    $conn->close(); 
                  ?>
                  </select>
                </div>
              </label>
            </div>
            <input type="hidden" name="MM_update12" value="form12" >
            <input type="hidden" name="id_tienda" value="<?php echo $id_tienda; ?>" >
            <input type="hidden" name="MM_update33" value="form33" >
            <input type="hidden" name="id_tienda_subcategoria" value="<?php echo $id_tienda_subcategoria; ?>" >
            <div class="six columns form_registro form_certificacion"> 
              <label class="flex" id="id_label_estado">
                <p class="color_Tutulos_datos">Estado</p>
                <select style="padding:0px;border-bottom:none;" id="estado_certificacion" name="id_estado" title="Estado" >
                  <option value="" style="background:#F99615; color:#FFF;">
                    Seleccione el Estado
                  </option>
                  <?php require('Connections/coneccion4.php');
                  $conn->set_charset("utf8");
                  $query_Recordset6 = "SELECT * FROM estados ";
                  $Recordset6  = $conn->query($query_Recordset6);
                  if ($Recordset6->num_rows > 0) {
                    while($row_Recordset6 = $Recordset6->fetch_assoc()) {   ?> 
                      <option value="<?php echo $row_Recordset6['id_estado']; ?>" <?php if( $id_estado== $row_Recordset6['id_estado']){?> selected="selected"   <?php }?>><?php echo $row_Recordset6['estado']; ?></option>
                        <?php 
                    } 
                  }
                  $conn->close();
                  ?>
                </select>
              </label>
            </div>
            <div class="six columns form_registro form_certificacion" style="padding-left:40px;"> 
              <label style="border-bottom:none;" class="flex" id="id_label_ciudad">
                <p class="color_Tutulos_datos">Ciudad</p>
                <div id="campociudad4" class="camp" style="height:18px">
                  <label class="ciudad_label" style="justify-content: flex-start; font-size:16p;min-height:18px;">
                    <select style="width:100%;font-family: 'Montserrat', sans-serif;font-size: 16px;color: #939191;font-weight: 400;padding:0px;" id="ciudad_certificacion" class="subca" name="id_ciudad" title="Ciudades"   >
                      <option value="">
                      Seleccione la Ciudad 
                      </option>
                      <?php 
                      require('Connections/coneccion4.php');
                      $conn->set_charset("utf8");
                      $query_Recordset8 = "SELECT * FROM ciudades WHERE id_estado = $id_estado";
                      $Recordset8  = $conn->query($query_Recordset8);
                      if ($Recordset8->num_rows > 0) {
                        while($row_Recordset8 = $Recordset8->fetch_assoc()) {?>
                          <option <?php if($row_Recordset8['id_ciudad']==$id_ciudad){?> selected="selected"<?php }?> value="<?php echo $row_Recordset8['id_ciudad']; ?>"> <?php echo $row_Recordset8['ciudad']; ?></option>
                        <?php 
                        }  
                      } 
                      $conn->close(); 
                      ?>
                    </select>
                  </label>
                </div>
              </label>
            </div>
            <div class="six columns form_registro form_certificacion nuevo"> 
              <label class="flex" style="display:none;">
                <input type="hidden" name="MM_update4" value="form4" >
                <input type="hidden" name="id_tienda" value="<?php echo $id_tienda; ?>" >
              </label>
              <span class="boton siguiente_a_paso_2" id='btn_datos_certificacion_verificado' style="width:22%;">
                Siguiente
              </span>
            </div>
          </div>
        </div>
        <!-- PASO # 2 -->
        <div class="estilos_paso_1_certificacion" id="id_estilos_paso_2_certificacion">
          <div class="estilos_transferencias_bancarias_div_configuracion_certificacion" id="id_estilos_transferencias_bancarias_div_configuracion_certificacion">
            <div style="display:flex;align-items:center;padding-left:9%;padding-right: 10%;">
              <div class="flecha_izquierda" id="icono_flecha_atras_al_paso_1_certificacion" style="display: flex;">
              </div>
              <div class="Estilo_texto_paso_1">
                <h3 class="Textp_paso_1">
                  Paso <span style="width:6px"></span><span class="circulo_naranja">2</span>
                </h3>
              </div>
            </div>
            <h2 class="estilos_textos_cuentas_bancarias_h2" >
              <span class="texto_h2_Transferencia_bancaria_certificacion">
                Transferencia Bancaria a la Cuenta Corriente N° a nombre de
              </span>
            </h2>
            <div class="Espacios"></div>
            <div class="contenedor_tipos_de_cuenta_flex_certificacion">
              <div class="tipos_de_cuentas_bancarias_paso_2">
                <span class="Textos_tipos_de_banco_certificacion" style="background:#FFC07B">BANCO PROVINCIAL</span>
                <span class="espacio_entre_span"></span>
                <span class="Textos_tipos_de_banco_certificacion"style="background:#FFC07B">BANCO VENEZUELA </span>
                <span class="espacio_entre_span"></span>
                <span class="Textos_tipos_de_banco_certificacion" style="background:#FFC07B">BANCO BICENTENARIO</span>
              </div>
              <div class="espacio_entre_tipo_de_cuentas_y_numeros_de_cuenta"></div>
              <div class="span_contenedor_de_cuentas_bancarias">
                <span class="cuentas_estilos_texto_certificacacion">0108 2413 3601 00073694 (CORRIENTE) Bryan Hinojosa V-19.170.086</span>
                <p style="width:100%;height:15%;"></p>
                <span class="cuentas_estilos_texto_certificacacion">0102 0315 5600 00220709 (CORRIENTE) Bryan Hinojosa V-19.170.086</span>
                <p style="width:100%;height:15%;"></p>
                <span class="cuentas_estilos_texto_certificacacion">0175 0397 9400 75705711 (CORRIENTE) Bryan Hinojosa V-19.170.086</span>
              </div>
            </div>
            <div class="Espacios_boton"></div> 
            <div class="contenedor_boton">
              <span class="boton siguiente_a_paso_2" id='id_boton_aiguiente_paso_3'>
                Siguiente
              </span>
            </div>   
          </div>
        </div>
        <!-- PASO # 3 -->
        <div class="estilos_paso_3_certificacion" id="id_paso_3_certificacion">
          <div id="archivos_certificacion">
            <div class="cuadro_archivos_certificacion" id="id_archivos_cuadros_certificacion">
              <div style="display:flex;align-items:center;padding-left:9%;padding-right:10%;margin-bottom: 25px;">
                <div class="flecha_izquierda" id="icono_flecha_atras_al_paso_2_certificacion" style="display: flex;"></div>
                <div class="Estilo_texto_paso_1">
                 <h3 class="Textp_paso_1">
                    Paso <span style="width:6px"></span><span class="circulo_naranja">3</span>
                  </h3>
                </div>
              </div>
              <div class="contenedor_texto_documentos">
                <p class="Texto_recibos">
                  Con la intención de garantizar la autenticidad de información de las empresas, 
                  requerimos que los usuarios nos suministren en línea los recaudos:
                </p>
              </div>
              <div style="display:flex;">
                <label class="label_archivos_certificacion" style="display:inline">
                  <img src="../../../../../../../img/Iconos de certificacion-rif.svg" class="rounded estilo_img_requisitos_certificacion" id="avatar_certificacion_1" onerror="this.src='../../../../../../../img/carga.jpg';" width="60%">
                  <p class="letras_archivos_adjuntos" >
                    Adjunte el RIF de la empresa (Actualizado)
                  </p>
                  <input type="file" name="archivo" id="archivo1"  style="display: none;"  >
                </label>
                <label class="label_archivos_certificacion" style="display:inline">
                  <img src="../../../../../../../img/Iconos de certificacion-recibo.svg" class="rounded estilo_img_requisitos_certificacion" id="avatar_certificacion_2" onerror="this.src='../../../../../../../img/carga.jpg';" width="60%">
                  <p class="letras_archivos_adjuntos" >
                    Adjunte una factura de teléfono ó electricidad (Vigencia no mayor a 3 mese)
                  </p>
                  <input type="file" name="archivo2" id="archivo2"  style="display: none;" >
                </label>
                <label class="label_archivos_certificacion" style="display:inline">
                  <img src="../../../../../../../img/Iconos de certificacion-deposito.svg" class="rounded estilo_img_requisitos_certificacion" id="avatar_certificacion_3" onerror="this.src='../../../../../../../img/carga.jpg';" width="60%">
                  <p class="letras_archivos_adjuntos" >
                    Adjunte un comprobante de deposito a la cuenta de founduss
                  </p>
                  <input type="file" name="archivo3" id="archivo3" style="display: none;">
                </label>
              </div>
              <div class="Espacio_div_entre_img_texto_certificacion">
                <p class="texto_adjuntar_documentos_tipos" style="margin-top:0px;">
                  Puedes adjuntar tus documentos en cualquiera de estos formatos:
                  <span class="amarillo-letra-certificacion" style="color:rgb(255, 174, 0);padding-left:4px;margin-top:0px;margin-bottom:0px;">
                    PDF/JPG/JPEG/PNG
                  </span>
                </p>
                <br>
                <button  id="boton_enviar" class="boton siguiente_a_paso_2" name="" type="submit" value="Enviar" style="margin-top:25px;width: 19%">
                  Enviar
                </button>
                <input type="hidden" name="MM_update" value="form2" />
                <input type="hidden" name="id_tienda" value="<?php echo $id_tienda; ?>" />
                <input name="correotienda" type="hidden" value="<?php echo $correo; ?>">
                <input name="tienda" type="hidden" value="<?php echo $tienda; ?>">
                <input id='nivel_certificar' name="nivel_certificar" type="hidden" value="">
                <input name="corre" type="hidden" value="18">
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="Formulario_datos_configuracion paso4_datos_enviados" id="id_paso_4" onload="myFunction()">
        <div id="loader"></div>
        <div style="display:none;" id="myDiv" class="animate-bottom">
        <p class="texto_enviado_certificacion">Enviado.</p>
        <p class="Estilo_parrafo_datos_enviados">Sus recaudos han sido enviados satisfactoriamente. En un plazo de 12 horas estaremos procesando su solicitud de certificación y le enviaremos un mensaje a su correo electrónico.</p>
        </div>
      </div> 
      <!-- Contraseña -->
      <div class="Formulario_datos_configuracion contraseña" id="id_contraseña">
        <div class="contenedor_cambio_contrasena_usuario">
          <div id="contenido_contra" class="Cuadro_Con_elementos_cambio_contrasena" style="width: 100%">
          <div class="contenedor_texto_h3_cambio_contraseña">
            <h3 class="Estilos_texto_cambio_contrasena_usuario">
              Cambio de contraseña
            </h3>
          </div>
            <form action="<?php echo $editFormAction; ?>" method="post" name="form1" method="post" id="formulario_cambiar_contraseña" class="edit estilos_formulario_cambio_contrasena_usuario"> 
              <div class="divformulario contaseña">
                <input class="estilo_input_ingrese_su_contrasña" id="clave" class="editar" name="clave" type="password" value="" required  title="Contraseña" placeholder="Ingrese  nueva contraseña">
              </div>
              <div class="divformulario contaseña">
                <label class="contenedor_iput_ingrese_contraseña">
                  <input  class="estilo_input_ingrese_su_contrasña" type="password" class="editar" id="clave1" title="Repita la clave1" name="clave1" value=""  autocomplete="off" maxlength="60" required="required" placeholder="Confirme nueva contraseña">
                  <div id="campo_repetir_contraseña" class="existe"> </div>
                  <input type="hidden" name="MM_update9" value="form9" >
                </label>
                <input type="hidden" name="id_contacto" value="<?php echo $id_contacto; ?>" readonly="readonly" >
                <input type="hidden" name="id_tienda" value="<?php echo $id_tienda; ?>" >  
              </div>
              <div class="divformulario boton_enviar_contraseña">
                <input type="submit" id="mensaje_click" class="boton_submit estilos_boton_enviar" name="enviar" value="Enviar"  >
                <input type="hidden" name="enviar" value="Editar" > 
              </div>
            </form> 
          </div>
        </div>
      </div>
      <div id="myModal_contraseña" class="modal" >
        <div style=" width:41%;" class="modal-content estilos_cambio_contrasena_usuario" id='modal_contraseña'>
        <div>
        <button style="transform: translateY(40%)" id="cerrar_cambio_contra" type="button" class="close" data-dismiss="modal" aria-label="Close" style="z-index: 1">
          <span  aria-hidden="true">&times;</span>
        </button>
      </div>
      
    </div>
  </div>
  <?php 
  include('pie_pag.html') 
  ?>
  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content" style="width:50%">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalLabel1">
                       Recorta la imagen
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                          ×
                        </span>
                      </button>
                    </div>
                    <div class="modal-body" style="height:500px">
                      <div class="img-container" style="height:500px">
                        <img id="image1" src="../../../../../../../contactos/contacto1/tienda1/tiegg_1.jpeg">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cancelar
                      </button>
                      <button type="button" class="btn btn-primary" id="crop1">
                       Guardar
                      </button>
                    </div>
                  </div>
                </div>
              </div>
  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width:50%; height:708px">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">
                          Recorta la imagen
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">
                            &times;
                          </span>
                        </button>
                      </div>
                      <div class="modal-body" style="height:500px;">
                        <div class="img-container"  style="height:500px;">
                          <img id="image" src="../../../../../../../contactos/contacto<?php echo $id_contacto;?>/contactogg_<?php echo $id_contacto; ?>.jpeg">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                          Cancelar
                        </button>
                        <button type="button" class="btn btn-primary" id="crop">
                          Guardar
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
  <div class="clear">
  </div>
</body>
</html>
<script src="/bootstrap-4.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/dist/cropper.js"></script>
<script>

  var Datos_perfil_1=document.getElementById("Datos_perfil_1");
  var Datos_perfil_2=document.getElementById("Datos_perfil_2");
  var texto_datos_perfil_usuario_configuracion=document.getElementById("texto_datos_perfil_usuario_configuracion");
  var label_nombre_perfil_configuracion=document.getElementById("label_nombre_perfil_configuracion");
  var nombre_de_contacto_configuracion_usuario_tienda=document.getElementById("nombre_de_contacto_configuracion_usuario_tienda");
  var correo_de_la_tienda=document.getElementById("correo_de_la_tienda");
  var label_nombre_de_la_tienda_configuracion=document.getElementById("label_nombre_de_la_tienda_configuracion");
  var numero_telefonico_tiendo_configuracion_usuario=document.getElementById("numero_telefonico_tiendo_configuracion_usuario");     
  var label_categoria_tienda_configuracion=document.getElementById("label_categoria_tienda_configuracion");
  var numero_local_tienda_configuracion_usuario=document.getElementById("numero_local_tienda_configuracion_usuario");
  var label_subcategoria_tienda_configuracion=document.getElementById("label_subcategoria_tienda_configuracion");  
  var Ubicacion_configuracion_usuario=document.getElementById("Ubicacion_configuracion_usuario"); 
  var datos_perfil_usuario=document.getElementById("datos_perfil_usuario"); 
  var imagen_perfil_usuario_configuracion=document.getElementById("imagen_perfil_usuario_configuracion"); 
  var texto_datos_Ubicacion_de_la_tienda_usuario_configuracion=document.getElementById("texto_datos_Ubicacion_de_la_tienda_usuario_configuracion"); 
  var label_de_Ubicacion=document.getElementById("label_de_Ubicacion");
  var label_Estado_ubicacion_configuracion_usuario=document.getElementById("label_Estado_ubicacion_configuracion_usuario");
  var contenedora_slider_low_configuracion=document.getElementById("contenedora_slider_low_configuracion");
  var contenedor_label_1=document.getElementById("contenedor_label_1");
  var contenedor_label_2=document.getElementById("contenedor_label_2");
  var boton_editar_configuracion=document.getElementById("boton_editar_configuracion");
  var imagen_cargada_por_el_usuario_configuracion=document.getElementById("imagen_cargada_por_el_usuario_configuracion");
  var Formulario_datos_perfil__configuracion=document.getElementById("Formulario_datos_perfil__configuracion");
  var Perfil_configuracion_usuario=document.getElementById("Perfil_configuracion_usuario");
  var icono_flecha_izquierda_datos_tienda_configuracion=document.getElementById("icono_flecha_izquierda_datos_tienda_configuracion");
  var id_Texto_datos_de_ubicacion=document.getElementById("id_Texto_datos_de_ubicacion");
  var id_contenedor_label_Estado_y_Ciudad_configuracion=document.getElementById("id_contenedor_label_Estado_y_Ciudad_configuracion");
  var linea_selecto_ubicacion_configuracion=document.getElementById("linea_selecto_ubicacion_configuracion");
  var Certificación_configuracion_usuario=document.getElementById("Certificación_configuracion_usuario");
  var linea_selecto_certificacion_configuracion=document.getElementById("linea_selecto_certificacion_configuracion");
  var id_Espacio_texto_certificacion_configuracion=document.getElementById("id_Espacio_texto_certificacion_configuracion");
  var id_Planes_de_certificacion=document.getElementById("id_Planes_de_certificacion");
  var id_Planes_de_certificacion=document.getElementById("id_Planes_de_certificacion");
  var id_Contenedor_principal_Modo_columna_de_texto_certificacion_y_Planes_de_certificacion_Configuracion=document.getElementById("id_Contenedor_principal_Modo_columna_de_texto_certificacion_y_Planes_de_certificacion_Configuracion");
  var id_Contenedor_Principal_de_los_planes_de_certificacion_configuracion=document.getElementById("id_Contenedor_Principal_de_los_planes_de_certificacion_configuracion");
  var id_cuadro_contenedor_de_texto_planes_certificacion_configuracion=document.getElementById("id_cuadro_contenedor_de_texto_planes_certificacion_configuracion");
  var id_span_texto_Planes_de_certificacion_configuracion=document.getElementById("id_span_texto_Planes_de_certificacion_configuracion");
  var id_contenedor_especificaciones_individuales_planes_de_certificacion=document.getElementById("id_contenedor_especificaciones_individuales_planes_de_certificacion");
  var id_texto_plan_1_certificacion=document.getElementById("id_texto_plan_1_certificacion");
  var id_contenedor_especificaciones_individuales_planes_de_certificacion_1=document.getElementById("id_contenedor_especificaciones_individuales_planes_de_certificacion_1");
  var id_contenedor_especificaciones_individuales_planes_de_certificacion_2=document.getElementById("id_contenedor_especificaciones_individuales_planes_de_certificacion_2");
  var id_contenedor_especificaciones_individuales_planes_de_certificacion_3=document.getElementById("id_contenedor_especificaciones_individuales_planes_de_certificacion_3");
  var id_contenedor_especificaciones_individuales_planes_de_certificacion_4=document.getElementById("id_contenedor_especificaciones_individuales_planes_de_certificacion_4");
  var id_contenedor_especificaciones_individuales_planes_de_certificacion_5=document.getElementById("id_contenedor_especificaciones_individuales_planes_de_certificacion_5");
  var id_Contenedor_principal_nivel_gratis_configuracion=document.getElementById("id_Contenedor_principal_nivel_gratis_configuracion");
  var id_contenedor_sencillo_configuracion=document.getElementById("id_contenedor_sencillo_configuracion"); 
  var contenedor_span_texto=document.getElementById("contenedor_span_texto");
  var id_contenedor_span_Gratis_configuracion=document.getElementById("id_contenedor_span_Gratis_configuracion");
  var id_contenedor_de_check_list_configuracion=document.getElementById("id_contenedor_de_check_list_configuracion");
  var id_Contenedor_principal_nivel_Estandar_configuracion=document.getElementById("id_Contenedor_principal_nivel_Estandar_configuracion");
  var contenedor_span_texto_estandar=document.getElementById("contenedor_span_texto_estandar");
  var id_contenedor_Estandar_configuracion=document.getElementById("id_contenedor_Estandar_configuracion");
  var id_contenedor_span_Estandar_configuracion=document.getElementById("id_contenedor_span_Estandar_configuracion");
  var id_Contenedor_principal_nivel_premium_configuracion=document.getElementById("id_Contenedor_principal_nivel_premium_configuracion");
  var id_contenedor_premium_configuracion=document.getElementById("id_contenedor_premium_configuracion");
  var id_contenedor_span_premium_configuracion=document.getElementById("id_contenedor_span_premium_configuracion");
  var contenedor_span_texto_premium=document.getElementById("contenedor_span_texto_premium");
  var botton_certificarme_nivel_estandar_configuracion=document.getElementById("botton_certificarme_nivel_estandar_configuracion");
  var btn_datos_certificacion_verificado=document.getElementById("btn_datos_certificacion_verificado");
  var id_estilos_transferencias_bancarias_div_configuracion_certificacion=document.getElementById("id_estilos_transferencias_bancarias_div_configuracion_certificacion");
  var id_archivos_cuadros_certificacion=document.getElementById("id_archivos_cuadros_certificacion");
  var id_boton_aiguiente_paso_3=document.getElementById("id_boton_aiguiente_paso_3");
  var boton_siguiente_ubicacion=document.getElementById("boton_siguiente_ubicacion");
  var icono_flecha_atras_certificacion=document.getElementById("icono_flecha_atras_certificacion");
  var icono_flecha_atras_al_paso_1_certificacion=document.getElementById("icono_flecha_atras_al_paso_1_certificacion");
  var icono_flecha_atras_al_paso_2_certificacion=document.getElementById("icono_flecha_atras_al_paso_2_certificacion");
  var botton_certificarme_nivel_premium_configuracion=document.getElementById("botton_certificarme_nivel_premium_configuracion");
  var container_img_loaded_configuracion=document.getElementById("container_img_loaded_configuracion");
  var id_certificacion=document.getElementById("id_certificacion");
  var id_ubicacion=document.getElementById("id_ubicacion");
  var id_datos_empresa=document.getElementById("id_datos_empresa");
  var label_nombre_de_la_tienda_configuracion=document.getElementById("label_nombre_de_la_tienda_configuracion");
  var id_datos_perfil=document.getElementById("id_datos_perfil");
  var div_espaciador=document.getElementById("div_espaciador");
  var id_estilos_mapa_ubicacon=document.getElementById("id_estilos_mapa_ubicacon");
  var id_estilos_paso_1_certificacion=document.getElementById("id_estilos_paso_1_certificacion");
  var id_estilos_paso_2_certificacion=document.getElementById("id_estilos_paso_2_certificacion");
  var id_paso_3_certificacion=document.getElementById("id_paso_3_certificacion");
  var id_ciudad_label=document.getElementById("id_ciudad_label");
  var estado_configuracion=document.getElementById("estado_configuracion");
  var boton_atras_datos_de_ubicacion=document.getElementById("boton_atras_datos_de_ubicacion");
  var linea__selecto_perfil_configuracion=document.getElementById("linea__selecto_perfil_configuracion");
  var contraseña_configuracion_usuario=document.getElementById("contraseña_configuracion_usuario");
  var id_contraseña=document.getElementById("id_contraseña");
  var id_descripcion=document.getElementById("id_descripcion");
  var id_boton_atras_datos_empresa=document.getElementById("id_boton_atras_datos_empresa");
  var id_atras_datos_de_perfil=document.getElementById("id_atras_datos_de_perfil");
  var boton_enviar=document.getElementById("boton_enviar");
  var id_paso_4=document.getElementById("id_paso_4");
  var loader=document.getElementById("loader");
  var myDiv=document.getElementById("myDiv");
  var correo_configuracion=document.getElementById("correo_configuracion");
  var telefono_configuracion=document.getElementById("telefono_configuracion");
  var cel_configuracion=document.getElementById("cel_configuracion");
  var tienda_configuracion=document.getElementById("tienda_configuracion");
  var categoria=document.getElementById("categoria");
  var subcategoria=document.getElementById("subcategoria");
  var id_enable_correo_configuracion=document.getElementById("id_enable_correo_configuracion");
  var id_enable_telefono_configuracion=document.getElementById("id_enable_telefono_configuracion");
  var id_enable_cel_configuracion=document.getElementById("id_enable_cel_configuracion");
  var id_enable_tienda_configuracion=document.getElementById("id_enable_tienda_configuracion");
  var id_enable_categoria=document.getElementById("id_enable_categoria");
  var id_enable_subcategoria=document.getElementById("id_enable_subcategoria");


  var myVar;
  //correo_configuracion.disabled = true;
  //telefono_configuracion.disabled = true;
  //cel_configuracion.disabled = true;
  //tienda_configuracion.disabled = true;
  //categoria.disabled = true;
  //subcategoria.disabled = true;


  //id_enable_correo_configuracion.addEventListener('click', function(){
   // correo_configuracion.disabled = false;
  //});
  //id_enable_telefono_configuracion.addEventListener('click', function(){
    //telefono_configuracion.disabled = false;
  //});
  //id_enable_cel_configuracion.addEventListener('click', function(){
    //cel_configuracion.disabled = false;
  //});
  //id_enable_tienda_configuracion.addEventListener('click', function(){
    //tienda_configuracion.disabled = false;
  //});
  //id_enable_categoria.addEventListener('click', function(){
    //categoria.disabled = false;
  //});
  //id_enable_subcategoria.addEventListener('click', function(){
    //subcategoria.disabled = false;
  //});

  boton_atras_datos_de_ubicacion.addEventListener('click', function(){
   id_estilos_mapa_ubicacon.style.display="none";
   id_ubicacion.style.display="flex";
   boton_editar_configuracion.style.display="flex";
  });
  estado_configuracion.addEventListener('click', function(){
    id_ciudad_label.style.display="flex";
    id_ciudad_label.style.alignItems="flex-start";
  });

  id_atras_datos_de_perfil.addEventListener('click', function(){
    id_datos_empresa.style.display="none";
    Formulario_datos_perfil__configuracion.style.display="flex";
    datos_perfil_usuario.style.display="flex";
    numero_telefonico_tiendo_configuracion_usuario.style.display="flex";
  });

  contraseña_configuracion_usuario.addEventListener('click', function(){
    id_contraseña.style.display="flex";
    linea_selecto_contraseña_configuracion.style.background="rgb(241, 147, 1)";
    linea_selecto_ubicacion_configuracion.style.background="rgb(204, 204, 204)";
    linea__selecto_perfil_configuracion.style.background="rgb(204, 204, 204)";
    linea_selecto_certificacion_configuracion.style.background="rgb(204, 204, 204)";
    Formulario_datos_perfil__configuracion.style.display="none";
    id_ubicacion.style.display="none";
    id_estilos_mapa_ubicacon.style.display="none";
    id_certificacion.style.display="none";
    id_estilos_paso_1_certificacion.style.display="none";
    id_estilos_paso_2_certificacion.style.display="none";
    id_paso_3_certificacion.style.display="none";
    id_descripcion.style.display="none";
    id_paso_4.style.display="none";
    myDiv.style.display= "none";
    id_datos_empresa.style.display= "none";
  });

  id_boton_atras_datos_empresa.addEventListener('click', function(){
    id_descripcion.style.display="none";
    id_datos_empresa.style.display="flex";
  });

  Perfil_configuracion_usuario.addEventListener('click', function(){
    myDiv.style.display= "none";
    linea__selecto_perfil_configuracion.style.background="rgb(241, 147, 1)";
    linea_selecto_contraseña_configuracion.style.background="rgb(204, 204, 204)";
    id_paso_3_certificacion.style.display="none";
    id_estilos_paso_2_certificacion.style.display="none";
    id_estilos_paso_1_certificacion.style.display="none";
    id_certificacion.style.display="none";
    id_datos_perfil.style.display="block";
    linea_selecto_ubicacion_configuracion.style.background="rgb(204, 204, 204)";
    id_datos_empresa.style.display="none";
    Formulario_datos_perfil__configuracion.style.display="flex";
    id_ubicacion.style.display="none";
    Formulario_datos_perfil__configuracion.style.width="840px";
    Formulario_datos_perfil__configuracion.style.height="496px";
    label_nombre_perfil_configuracion.style.display="flex";
    correo_de_la_tienda.style.display="flex";
    numero_telefonico_tiendo_configuracion_usuario.style.display="flex";
    numero_local_tienda_configuracion_usuario.style.display="flex";
    texto_datos_Ubicacion_de_la_tienda_usuario_configuracion.style.display="none";
    texto_datos_perfil_usuario_configuracion.style.display="flex";
    contenedor_label_3.style.width="65%";
    contenedora_slider_low_configuracion.style.display="flex";
    imagen_cargada_por_el_usuario_configuracion.style.display="block";
    label_de_Ubicacion.style.display="none";
    label_Estado_ubicacion_configuracion_usuario.style.display="none";
    boton_editar_configuracion.style.display="none";
    container_img_loaded_configuracion.style.display="flex";
    datos_perfil_usuario.style.width="55%";
    imagen_perfil_usuario_configuracion.style.display="flex";
    contenedor_label_1.style.display="flex";
    contenedor_label_2.style.display="flex";
    linea_selecto_ubicacion_configuracion.style.background='rgb(204, 204, 204)';
    linea_selecto_certificacion_configuracion.style.background='rgb(204, 204, 204)';
    datos_perfil_usuario.style.display="flex";
    contenedor_label_3.style.display="flex";
    contenedor_label_4.style.display="flex";
    icono_flecha_izquierda_datos_tienda_configuracion.style.display="none";
    Datos_perfil_2.style.display="flex";
    boton_siguiente_ubicacion.style.display="none";
    id_archivos_cuadros_certificacion.style.display="none";
    verificacion_datos_certificacion.style.display="none";
    id_estilos_transferencias_bancarias_div_configuracion_certificacion.style.display="none";
    Formulario_datos_perfil__configuracion.style.paddingTop='4%';
    id_estilos_mapa_ubicacon.style.display="none";
    id_contraseña.style.display="none";
    id_paso_4.style.display="none";
 });
  
 Ubicacion_configuracion_usuario.addEventListener('click', function(){
    myDiv.style.display= "none";
    linea__selecto_perfil_configuracion.style.background="rgb(204, 204, 204)";
    linea_selecto_contraseña_configuracion.style.background="rgb(204, 204, 204)";
    id_estilos_mapa_ubicacon.style.display="none";
    boton_editar_configuracion.style.display="flex";
    id_datos_empresa.style.display="none";
    linea_selecto_ubicacion_configuracion.style.background="rgb(241, 147, 1)";
    id_ubicacion.style.display="flex";
    id_ubicacion.style.flexDirection="column";
    Formulario_datos_perfil__configuracion.style.display="none";
    id_certificacion.style.display="none";
    texto_datos_Ubicacion_de_la_tienda_usuario_configuracion.style.display="none";
    label_de_Ubicacion.style.display="block";
    label_Estado_ubicacion_configuracion_usuario.style.display="block";
    contenedora_slider_low_configuracion.style.display="none";
    imagen_cargada_por_el_usuario_configuracion.style.display="none";
    contenedor_label_3.style.width="100%";
    datos_perfil_usuario.style.width="90%";
    contenedor_label_1.style.display="none";
    contenedor_label_2.style.display="none";
    id_Texto_datos_de_ubicacion.style.display="block";
    linea_selecto_certificacion_configuracion.style.background='rgb(204, 204, 204)';
    datos_perfil_usuario.style.display="flex";
    id_contenedor_label_Estado_y_Ciudad_configuracion.style.display="flex";
    contenedor_label_3.style.display="flex";
    boton_editar_configuracion.style.display="flex";
    contenedor_label_4.style.display="flex";
    icono_flecha_izquierda_datos_tienda_configuracion.style.display="none";
    boton_siguiente_ubicacion.style.display="flex";
    id_archivos_cuadros_certificacion.style.display="none";
    verificacion_datos_certificacion.style.display="none";
    id_estilos_transferencias_bancarias_div_configuracion_certificacion.style.display="none";
    boton_editar_configuracion.style.display="flex";
    id_estilos_paso_1_certificacion.style.display="none";
    id_estilos_paso_2_certificacion.style.display="none";
    id_paso_3_certificacion.style.display="none";
    id_descripcion.style.display="none";
    id_paso_4.style.display="none";
  });

  Certificación_configuracion_usuario.addEventListener('click', function(){
    id_contraseña.style.display= "none";
    myDiv.style.display= "none";
    linea__selecto_perfil_configuracion.style.background="rgb(204, 204, 204)";
    linea_selecto_certificacion_configuracion.style.background="#f09200";
    linea_selecto_ubicacion_configuracion.style.background="rgb(204, 204, 204)";
    linea_selecto_contraseña_configuracion.style.background="rgb(204, 204, 204)";
    id_paso_3_certificacion.style.display="none";
    id_estilos_paso_2_certificacion.style.display="none";
    id_estilos_paso_1_certificacion.style.display="none";
    id_ubicacion.style.display="none";
    id_datos_empresa.style.display="none";
    id_ubicacion.style.display="none";
    Formulario_datos_perfil__configuracion.style.display="none";
    id_certificacion.style.display="flex";
    id_datos_perfil.style.display="none";
    verificacion_datos_certificacion.style.display="none";
    id_estilos_transferencias_bancarias_div_configuracion_certificacion.style.display="none";
    id_archivos_cuadros_certificacion.style.display="none";
    boton_editar_configuracion.style.display="none";
    linea_selecto_ubicacion_configuracion.style.background="rgb(204, 204, 204)";
    /* id_cuadro_contenedor_de_texto_planes_certificacion_configuracion.style.border="solid 1px blue";*/
    id_cuadro_contenedor_de_texto_planes_certificacion_configuracion.style.background="rgba(224, 223, 223, 0.4)";
    id_contenedor_especificaciones_individuales_planes_de_certificacion.style.display="flex";
    id_contenedor_especificaciones_individuales_planes_de_certificacion.style.justifyContent="center";
    id_contenedor_especificaciones_individuales_planes_de_certificacion.style.width="100%";
    id_contenedor_especificaciones_individuales_planes_de_certificacion.style.height="30%";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_1.style.display="flex";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_1.style.justifyContent="center";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_1.style.width="100%";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_1.style.height="30%";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_2.style.display="flex";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_2.style.justifyContent="center";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_2.style.width="100%";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_2.style.height="30%";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_3.style.display="flex";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_3.style.justifyContent="center";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_3.style.width="100%";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_3.style.height="30%";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_4.style.display="flex";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_4.style.justifyContent="center";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_4.style.width="100%";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_4.style.height="30%";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_5.style.display="flex";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_5.style.justifyContent="center";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_5.style.width="100%";
    id_contenedor_especificaciones_individuales_planes_de_certificacion_5.style.height="30%";
    linea_selecto_ubicacion_configuracion.style.background="rgb(204, 204, 204)";
    /*botton_certificarme_nivel_gratis_configuracion.style.background="#0FDBDB";*/
    /* Nivel Estandar*/
    id_Contenedor_principal_nivel_Estandar_configuracion.style.width="20%";
    id_Contenedor_principal_nivel_Estandar_configuracion.style.height="90%";
    id_contenedor_Estandar_configuracion.style.width="100%";
    id_contenedor_Estandar_configuracion.style.height="11%";
    id_contenedor_Estandar_configuracion.style.display="flex";
    id_contenedor_Estandar_configuracion.style.alignItems="flex-end";
    id_contenedor_Estandar_configuracion.style.justifyContent="center";
    /* PREMIUM */ 
    id_Contenedor_principal_nivel_premium_configuracion.style.width="20%";
    id_Contenedor_principal_nivel_premium_configuracion.style.height="90%";
    id_contenedor_premium_configuracion.style.width="100%";
    id_contenedor_premium_configuracion.style.height="11%";
    id_contenedor_premium_configuracion.style.display="flex";
    id_contenedor_premium_configuracion.style.justifyContent="center";
    id_contenedor_premium_configuracion.style.alignItems="flex-end";
    Formulario_datos_perfil__configuracion.style.width="840px"
    id_estilos_mapa_ubicacon.style.display="none";
    id_paso_4.style.display="none";
    id_descripcion.style.display="none";
  });

  Datos_perfil_2.addEventListener('click', function(){
    Formulario_datos_perfil__configuracion.style.display="none";
    id_datos_empresa.style.display="block";
    label_categoria_tienda_configuracion.style.display="flex";
    label_subcategoria_tienda_configuracion.style.display="flex";
    label_nombre_de_la_tienda_configuracion.style.display="flex";
    nombre_de_contacto_configuracion_usuario_tienda.style.display="flex";
    icono_flecha_izquierda_datos_tienda_configuracion.style.display="flex";
  });
  
  icono_flecha_izquierda_datos_tienda_configuracion.addEventListener('click', function(){
    id_datos_empresa.style.display="none";
    id_datos_empresa.style.display="none";
    Datos_perfil_2.style.display="flex";
    texto_datos_perfil_usuario_configuracion.style.display="block";
    correo_de_la_tienda.style.display="flex";
    numero_telefonico_tiendo_configuracion_usuario.style.display="flex";
    numero_local_tienda_configuracion_usuario.style.display="flex";
    container_img_loaded_configuracion.style.display="flex"; 
    id_descripcion.style.display="flex";
  });
  
  boton_editar_configuracion.addEventListener('click', function(){
    id_ubicacion.style.display="none";
    id_estilos_mapa_ubicacon.style.display="flex";
    boton_editar_configuracion.style.display="none";
    datos_perfil_usuario.style.paddingTop="0px";
    datos_perfil_usuario.style.width="100%";
    var map = L.map('mapid').setView([10.06803,-69.28403], 12);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    var popup = L.popup();
    function onMapClickConf(e) {
         popup
        .setLatLng(e.latlng)
        .setContent("Tu ubicación es:" + e.latlng.lat.toString()+','+e.latlng.lng.toString())
        .openOn(map);
        $('#ubicacion_certificacion').attr('value',  e.latlng.lat.toString()+','+e.latlng.lng.toString());
       }
       map.on('click', onMapClickConf); 
       function onMapClickCert(e) {
         popup
        .setLatLng(e.latlng)
        .setContent("Tu ubicación es:" + e.latlng.lat.toString()+','+e.latlng.lng.toString())
        .openOn(map);
        $('#ubicacion_certificacion').attr('value',  e.latlng.lat.toString()+','+e.latlng.lng.toString());
       }
       map.on('click', onMapClickCert);
  });
 /* Certificarme nivel estandar*/
 if ( botton_certificarme_nivel_estandar_configuracion) {

 botton_certificarme_nivel_estandar_configuracion.addEventListener('click', function(){
    id_estilos_paso_1_certificacion.style.display="block";
    id_certificacion.style.display="none";
    verificacion_datos_certificacion.style.display="block";
    verificacion_datos_certificacion.style.paddingLeft="9%";
    verificacion_datos_certificacion.style.paddingRight="9%";
  });
}
  /* Paso2 */
  btn_datos_certificacion_verificado.addEventListener('click', function(){
    id_estilos_paso_2_certificacion.style.display="block";
    id_estilos_paso_1_certificacion.style.display="none";
    verificacion_datos_certificacion.style.display="none";
    id_estilos_transferencias_bancarias_div_configuracion_certificacion.style.display="flex";
    id_estilos_transferencias_bancarias_div_configuracion_certificacion.style.flexDirection="column";
  });
 /* PASO 3*/
  id_boton_aiguiente_paso_3.addEventListener('click', function(){
    id_estilos_paso_2_certificacion.style.display="none";
    id_paso_3_certificacion.style.display="block";
    id_archivos_cuadros_certificacion.style.display="flex";
    id_estilos_transferencias_bancarias_div_configuracion_certificacion.style.display="none";
  });
  /* Eventos back certificaciones*/
  icono_flecha_atras_certificacion.addEventListener('click', function(){
    id_certificacion.style.display="flex";
    id_estilos_paso_1_certificacion.style.display="none";
    verificacion_datos_certificacion.style.display="none";
  });
  icono_flecha_atras_al_paso_1_certificacion.addEventListener('click', function(){
    id_estilos_paso_1_certificacion.style.display="block";
    id_estilos_paso_2_certificacion.style.display="none";
    id_estilos_transferencias_bancarias_div_configuracion_certificacion.style.display="none";
    verificacion_datos_certificacion.style.display="block";
  });
  icono_flecha_atras_al_paso_2_certificacion.addEventListener('click', function(){
    id_estilos_paso_2_certificacion.style.display="block";
    id_paso_3_certificacion.style.display="none";
    id_archivos_cuadros_certificacion.style.display="none";
    id_estilos_transferencias_bancarias_div_configuracion_certificacion.style.display="block";
   
  });

  /* Certificacion Nivel 3 "PREMIUM*/
  botton_certificarme_nivel_premium_configuracion.addEventListener('click', function(){
    id_certificacion.style.display="none";
    id_estilos_paso_1_certificacion.style.display="block";
    verificacion_datos_certificacion.style.display="block";
    verificacion_datos_certificacion.style.paddingLeft="9%";
    verificacion_datos_certificacion.style.paddingRight="8%";
  });


    window.addEventListener('DOMContentLoaded', function () {
      var avatar = document.getElementById('avatar');
      var image = document.getElementById('image');
      var input = document.getElementById('input');
      var $progress = $('.progress');
      var  $progress  = $('#imagen_cargada_por_el_usuario_configuracion');
      var $progressBar = $('.loader_img');
      var $alert = $('.alert');
      var $modal = $('#modal');
      var cropper;
      $('[data-toggle="tooltip"]').tooltip();
      input.addEventListener('change', function (e) {
        var files = e.target.files;
        var done = function (url) {
          input.value = '';
          image.src = url;
          $alert.hide();
          $modal.modal('show');
        };
        var reader;
        var file;
        var url;
        if (files && files.length > 0) {
          file = files[0];
          if (URL) {
            done(URL.createObjectURL(file));
          } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
              done(reader.result);
            };
            reader.readAsDataURL(file);
          }
        }
      });
      $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
          aspectRatio: 1,  
        
          viewMode: 0,
        });
      }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
      });
      document.getElementById('crop').addEventListener('click', function () {
        var initialAvatarURL;
        var canvas;
        $modal.modal('hide');
        if (cropper) {
          canvas = cropper.getCroppedCanvas({
           
          });
         
          initialAvatarURL = avatar.src;
          avatar.src = canvas.toDataURL();
          $progress.show();
          $alert.removeClass('alert-success alert-warning');
          canvas.toBlob(function (blob) {
            var formData = new FormData();
            formData.append('avatar', blob);
            formData.append("id_contacto", "<?php echo $id_contacto; ?>");
            formData.append("id_tienda", "<?php echo $id_tienda; ?>");
            formData.append("subir_contacto", "1");
            formData.append("subir_perfil", "<?php echo $subir_perfil; ?>");
            formData.append("version_imagen_contacto", "<?php echo $version_imagen_contacto; ?>");
            fetch('../../../../../../../usuario_tienda_backend/update_versionImagenContacto.php', {
			      method: 'POST',
			      body: formData,
			      mode: 'cors',
			      cache: 'default' 
		        })
		        .then(function(response) {
			        if(response.ok) {
		 		        return response.json();
			        }else {
				        throw "Error en la llamada Ajax";
			        }
		        })
		        .then(function(myJson) {
		        });
            $.ajax('../../../../../../../procesar-subida.php', {
              method: 'POST',
              data: formData,
              processData: false,
              contentType: false,
              xhr: function () {
                var xhr = new XMLHttpRequest();
                xhr.upload.onprogress = function (e) {
                  var percent = '0';
                  var percentage = '0%';
                  var rotate=0;
                  if (e.lengthComputable) {
                    percent = Math.round((e.loaded / e.total) * 100);
                    percentage = percent 
                    rotate = (360*percentage)/100;
                    rotar(rotate);
                    function rotar(degree) {
                      $progressBar.css("transform", 'rotate(' + degree + 'deg)');
                      $('.progress').css("display","flex");
                      $('.progress').show();
                      $('#imagen_cargada_por_el_usuario_configuracion').hide();
                    
                    }  
                  }
                };
                return xhr;
              },
              success: function () {
      

              },
              error: function () {
                avatar.src = initialAvatarURL;
                $alert.show().addClass('alert-warning').text('Upload error');
              },
              complete: function () {
                $progress.hide();
                location.href="../../../../../../../configuracion";
                
              },
            });
          });
        }
      });
    });
  </script>
<script>
  window.addEventListener('DOMContentLoaded', function () {
    
    if ( document.getElementById( "cambio_contraseña" )) {
      document.getElementById("cambio_contraseña").onclick = function() {
        var modal = document.getElementById('myModal_contraseña').style.display = "flex";
      }
    }
    document.getElementById("cerrar_cambio_contra").onclick = function() {
      var modal = document.getElementById('myModal_contraseña').style.display = "none";
    }
    document.getElementById("cerrar_cambio_contra").onclick = function() {
      var modal = document.getElementById('myModal_contraseña').style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == document.getElementById('myModal_contraseña')) {
        document.getElementById('myModal_contraseña').style.display = "none";
      }
      if (event.target ==document.getElementById('myModal_contraseña')) {
        document.getElementById('myModal_contraseña').style.display = "none";
      }
    }
    var avatar = document.getElementById('avatar1');
    var image = document.getElementById('image1');
    var input = document.getElementById('input1');
    var $progress = $('.progress');
    var $progressBar = $('.loader_img');
    var $imagen_tienda=$('#imagen_cargada_por_la_tienda_configuracion');
    var $alert = $('.alert1');
    var $modal = $('#modal1');
    var cropper;
    $('[data-toggle="tooltip"]').tooltip();
    input.addEventListener('change', function (e) {
      var files = e.target.files;
      var done = function (url) {
        input.value = '';
        image.src = url;
        $alert.hide();
        $modal.modal('show');
      };
      var reader;
      var file;
      var url;
      if (files && files.length > 0) {
          file = files[0];
          if (URL) {
            done(URL.createObjectURL(file));
          }else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
              done(reader.result);
            };
            reader.readAsDataURL(file);
          }
      }
    });
      $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
          aspectRatio: 1,  
        
          viewMode: 0,
        });
      }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
      });
      document.getElementById('crop1').addEventListener('click', function () {
        var initialAvatarURL;
        var canvas;
        $modal.modal('hide');
        if (cropper) {
          canvas = cropper.getCroppedCanvas({
           
          });
          
          initialAvatarURL = avatar.src;
          avatar.src = canvas.toDataURL();
          $progress.show();
          $alert.removeClass('alert-success alert-warning');
          canvas.toBlob(function (blob) {
            var formData = new FormData();
            formData.append('avatar1', blob);
            formData.append("id_contacto", "<?php echo $id_contacto; ?>");
            formData.append("id_tienda", "<?php echo $id_tienda; ?>");
            formData.append("subir_contacto", "0");
            formData.append("subir_perfil", "1");
            formData.append("version_imagen_tienda", "<?php echo $version_imagen_tienda; ?>");
            fetch('../../../../../../../tienda_backend/update_versionImagenTienda.php', {
			      method: 'POST',
			      body: formData,
			      mode: 'cors',
			      cache: 'default' 
		        })
		        .then(function(response) {
			        if(response.ok) {
		 		        return response.json();
			        }else {
				        throw "Error en la llamada Ajax";
			        }
		        })
		        .then(function(myJson) {
		        });
            $.ajax('../../../../../../../procesar-subida.php', {
              method: 'POST',
              data: formData,
              processData: false,
              contentType: false,
              xhr: function () {
                var xhr = new XMLHttpRequest();
                xhr.upload.onprogress = function (e) {
                  var percent = '0';
                  var percentage = '0%';
                  var rotate=0;
                  if (e.lengthComputable) {
                    percent = Math.round((e.loaded / e.total) * 100);
                    percentage = percent 
                    rotate = (360*percentage)/100;
                    rotar(rotate);
                    function rotar(degree) {
                      $('#imagen_cargada_por_la_tienda_configuracion').hide();
                      $progressBar.css("transform", 'rotate(' + degree + 'deg)');
                      $('.progress').css("display","flex");
                      $('.progress').show();
                     
                    }  
                  }
                };
                return xhr;
              },
              success: function () {
        

              },
              error: function () {
                avatar.src = initialAvatarURL;
                $alert.show().addClass('alert-warning').text('Upload error');
              },
              complete: function () {
                $progress.hide();
             location.href="../../../../../../../configuracion";
    
              },
            });
          });
        }
      });
    });
  </script>
<script type="text/javascript">
  var formulario_registro_contacto =  document.getElementById("formulario_cambiar_contraseña");
  formulario_registro_contacto.onsubmit = function(e){
    var clave=document.getElementById("clave").value;
    var clave1=document.getElementById("clave1").value;
    if (clave!=clave1) {
      document.getElementById('campo_repetir_contraseña').innerHTML = "Las contraseñas no Coinciden";
      e.preventDefault();
    }
  }
  var repetir_clave=document.getElementById("clave1");
  repetir_clave.onkeyup=function() {
    var clave=document.getElementById("clave").value;
    var clave1=document.getElementById("clave1").value;
    if (clave1==clave) {
      document.getElementById('campo_repetir_contraseña').innerHTML = "Las contraseñas Coinciden";
      document.getElementById('campo_repetir_contraseña').style.color = "green";
    }else{
      document.getElementById('campo_repetir_contraseña').innerHTML = "Las contraseñas no Coinciden";
      document.getElementById('campo_repetir_contraseña').style.color = "red";
    }
  }
</script>