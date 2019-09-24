<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Founduss Registro</title>
<link rel="stylesheet" href="../../../../../../../css/fou.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/registro_de_contacto.css?<?php echo $version; ?>"> <!-- Nuevo CHAVEZ -->
<link rel="stylesheet" href="../../../../../../../css/Registro_de_empresa.css?<?php echo $version; ?>">  <!-- Nuevo CHAVEZ-->
<link rel="stylesheet" href="../../../../../../../css/perfil.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/estilos_panel_registro_de_contacto.css?<?php echo $version; ?>">
 <link rel="stylesheet" href="../../../../../../../css/form.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton2.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/panel.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/registro.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/reset.css?<?php echo $version; ?>">
 <link rel="stylesheet" href="../../../../../../../js/leaflet.css"/>
<link  rel="stylesheet" media="screen" href="../../../../../../../css/style.css?<?php echo $version; ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
<link  rel="stylesheet" href="../../../../../../../css/font-awesome.css?<?php echo $version; ?>">
<link href="../../../../../../../img/IsotipoFounduss-01.png" rel="icon" type="image/x-icon" />
<script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
<script src="../../../../../../../js/in-view.min.js"></script>
<script src="../../../../../../../js/funcion_tamano_ventana.js?<?php echo $version; ?>" ></script>
<script src="../../../../../../../js/scripts.js?<?php echo $version; ?>"></script>
<script  src="../../../../../../../js/jquery.touchSwipe.min.js"></script>
<script src="../../../../../../../js/leaflet.js"></script>
<script src="../../../../../../../loadCSS-2.0.1/src/loadCSS.js"></script>
<script src="../../../../../../../js/funciones-registro.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones-panel.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones-perfil.js?<?php echo $version; ?>"></script>
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
<?php 
include('views/panel_registro_view.php');
?> 
<body >

<div class="container flex" id="id_registro_contacto" >
  <div id="Estilo_registro_contacto" >
  <div  class="texto_Registro_de_contact">
  <h3 id="titulo_Registro_contacto_empresa" >Registro de contacto</h3>
</div>
<div class="Indicador_Registro_de_contact">
  <div class="Indicador_1" id='paso_1_registro_contacto_empresa'>
</div>
<div class="Indicador_2" id='paso_2_registro_contacto_empresa'>
</div>
</div>
  <div id="contactofor" class="container">
      <div class="one columns" style="min-height: 10px; display:none;">
        <input id="numero" class="numero" name="parte" type="text" value="<?php echo $numero; ?>" readonly="readonly" numero="<?php echo $numero; ?>" style="display: none;" >
      </div>
      <div class="ten columns" id="caja_Registro_contacto"> 
        <div class="twelve columns">
          <form action="<?php echo $editFormAction; ?>" method="post" name="form" class="form" id='formulario_registro_contacto'>
            <fieldset>
        
              <div  class="twelve columns" id="div_en_registro_de_contacto" > 
                <label class="name" id="label_en_registro_de_contacto" >
                  <input id="usuario" class="Ingresa_usuario" type="text" title="Usuario" name="usuario" value="" placeholder="Usuario" autocomplete="off" maxlength="100" required="required" >
                  <div id="campousuario" class="existe tooltiptext" existe_usuario="no" usuario_valido="no" > <?php echo $hayusuario; ?></div>
                </label> 
              </div>
              <div class="twelve columns" > 
                <label class="email" id="Label_en_registro_de_email">
                  <div id="campocorreo" class="existe tooltiptext" existe_correo="no" > <?php echo $haycorreo; ?></div>
                  <input id="correo_registro" class="Ingresa_correo" type="text" title="Correo electronico" name="correo" value="" size="32" placeholder="Correo electrónico" required="required" >
                </label>
              </div>
              <div class="twelve columns" > 
                <label class="phone" id="Label_en_registro_de_phone">
                  <input type="text" class="Ingresa_Telefono" title="Telefono o celular" name="telefono" value="" size="32" placeholder="Teléfono" required="required">
                </label>  
              </div>
              <div  class="twelve columns"  > 
                <label class="clave" id="Label_en_registro_de_clave">
                  <input type="password" class="Ingresa_contraseña"  id="clave" title="Clave" name="clave" value=""  placeholder="Contraseña" autocomplete="off" maxlength="60" required="required">
                </label> 
              </div>
              <div class="twelve columns" > 
                <label class="clave repetir" id="Label_en_registro_de_repetir_clave">
                  <input type="password" class="Repita_contraseña" id="clave1" title="Repita la clave1" name="clave1" value="" placeholder="Confirme contraseña" autocomplete="off" maxlength="60" required="required">
                  <div id="campo_repetir_contraseña" class="existe tooltiptext"> 
                  </div>
                </label> 
              </div>
              <div  class="twelve columns form_registro_de" >
               
                <div class="btns " >
                  <input class="boton" id="boton_siguiente" name="crea" type="submit" value="Siguiente">
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
      <div class="one columns" style="min-height: 10px; display:none;">
      </div>
  </div>
  <div id="tiendafor" class="container estilo_registro_de_empresa">  <!-- ///// AQUI ///// -->
      <div class="ten columns estilo_registro_de_contacto_media_query">
        <form action="<?php echo $editFormAction; ?>" method="post" name="form" class="form1 estilos_formulario_registro_de_empresa" id="formulario_tienda_registro" >
          <fieldset>
            <div class="twelve columns" style="min-height:10px"> 
            </div>
            <div class="twelve columns form_registro"  > 
              <label class="tienda_label" id="tienda_label_nombre_empresa">
                <input id="tienda" type="text" title="Nombre de la Tienda" class="Estilo_nombre_registro_de_empresa" name="tienda" value="" size="600" placeholder="Nombre de la Tienda:" required="required" >
                <div id="campotienda" class="existe tooltiptext"> 
                <?php echo $hayusuario; ?>
                </div>
              </label> 
            </div>
            <div class="twelve columns form_registro" style="display:flex; justify-content:center;">  
              <label class="categoria_label " id="categoria_label_categoria"   >
                <select class="estilos_selec_registro_de_empresa_categoria" id="categoria" title="Categorias" name="id_categoria" required="required" >
                      <option class="estilos_option_registro_de_empresa_categoria" value=""   >Categoria</option>
                      <?php
                      require('Connections/coneccion4.php');
                      $conn->set_charset("utf8");
                      $query_Recordset10 = "SELECT * FROM categoria ";
                      $Recordset10 = $conn->query($query_Recordset10);
                      if ($Recordset10->num_rows > 0){
                        while($row_Recordset10 = $Recordset10->fetch_assoc()){
                          ?>
                          <option value="<?php echo $row_Recordset10['id_categoria']; ?>" >
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
            <div style="height:30px;" class="twelve columns form_registro"> 
              <div id="camposubcategoria" class="camp">
                <label class="subcategoria_label" id="subcategoria_label_categoria">
                  <select class="estilos_selec_registro_de_empresa_subcategoria" id="subcategoria" title="Subategorias" name="id_subcategoria" required="required">
                    <option class="estilos_ption_registro_de_empresa_subcategoria" value=""   >
                    Subcategoria
                    </option>
                    <option>
                    Antes debe seleccionar la categoria
                    </option>
                  </select>
                </label> 
              </div>
            </div>
            <div class="twelve columns form_registro"> 
              <label class="estado_label" id="estado_label_estado">
                <select class="estilos_selec_registro_de_empresa_estado" id="estado_registro" name="estado" title="Estado" required="required">
                  <option class="estilos_option_registro_de_empresa_estado" value="" >
                  Seleccione el Estado
                  </option>
                  <?php
                  require('Connections/coneccion4.php');
                  $conn->set_charset("utf8");
                  $query_Recordset7 = "SELECT * FROM estados ";
                  $Recordset7  = $conn->query($query_Recordset7);
                  if ($Recordset7->num_rows > 0){
                    while($row_Recordset7 = $Recordset7->fetch_assoc()){
                  ?>
                  <option value="<?php echo $row_Recordset7['id_estado']; ?>">
                    <?php echo $row_Recordset7['estado']; ?>
                  </option>
                  <?php
                    } 
                  }
                  $conn->close();
                  ?>
                </select>
              </label>
            </div>
            <div style="height:30px;" class="twelve columns form_registro"> 
              <div id="campociudad" class="camp">
                <label class="ciudad_label" id="ciudad_label_ciudad">
                  <select class="estilos_selec_registro_de_empresa_ciudad" id="id_ciudad" title="Ciudad" name="id_ciudad" required="required">
                    <option class="estilos_option_registro_de_empresa_ciudad" value="">Seleccione la Ciudad</option>
                  </select>
                </label> 
              </div>
            </div>
            <div class="clear"></div>
            <div  class="twelve columns form_registro_de estilos_click" >
            <div class="Estilos_al_hacer_click_terminos_y_condiciones">
                <p  class="Haciendo_click_en_Registrar centrar">  Haciendo click en <span class="Texto_registrar_modo_gris"> Registrar</span></p>
                <p  class="Haciendo_click_en_Registrar">  Declarara ser una empresa jurídica y debe ingresar y aceptar los  <a id="link_terminos_y_condiciones" style=";font-family: 'Montserrat', sans-serif;font-weight:bold;"  class="copys_i"> Términos y Condiciones</a> de nuestra plataforma,
              así como también recibir correos electrónicos relacionados con miembros y servicios desde Founduss.com</p>  
                  </div> 
                  
              <div class="btns estilo_boton_registro_de_empresa" id="btns_registrar">
                <div class="input_acepto_texinos">
                  <input style="width:15px; height:15px;z-index:40;cursor:pointer;" type="checkbox" id="Input_checkbox_terminos_y_condiciones" name="test"> Acepto
                </div>
                <input  id='boton_enviar_formulario1' class="boton estilos_boton_registrar_empresa" name="" type="submit" value="Registrar"/>
              </div>
            </div>
          </fieldset>
          <input type="hidden" name="MM_insert" value="form2" />
          <input type="hidden" name="id_contacto" value="<?php echo $id_contacto; ?>" />
        </form>
      </div>
  </div>
  </div>
  </div>
  <div id="myModal_imagen_carga" class="modal " style="display: none;">
    <div class="modal-content" style='background:none;justify-content: center;'>
        <div class="container" style="display:flex;justify-content:center;">
        <div id="loader_registro"></div>
        </div>
    </div>
  </div>
</body>
</html>
<div class="container" style="z-index:5;display: flex;flex-direction: column;align-items: center;justify-content: center; border-top:solid; border-top-color:  rgba(230, 230, 230);transform: translateY(-80%);"  >
  <div class="six columns " style="margin-top:0px; display: flex; flex-wrap: wrap;justify-content: center;align-items: center;height: 120px; font-size: 16px; ">
    <span  class="copys" style="font-size: 14px;  color: white;  display: flex;justify-content: center;align-items: center; width: 50%">
      <a id="link_terminos_y_condiciones_footer" style=";font-family: 'Montserrat', sans-serif;font-weight:bold;"  class="copys_i"> Términos y Condiciones</a>
    </span>
    <p  style="font-size: 14px; width: 100%;  display: flex;justify-content: center;align-items: center; font-family: 'Montserrat', sans-serif;font-weight:normal; ">
      <span> Copyright ©  2018,</span>
      <span> FOUNDUSS C.A.,</span>
      <span> Todos los Derechos Reservados</span>
    </p>
  </div>
</div>
<script>
var link_terminos_y_condiciones_footer=document.getElementById("link_terminos_y_condiciones_footer");
link_terminos_y_condiciones_footer.addEventListener('click', function(){
  window.open("../../../../../../../terminos-y-condiciones");
});
</script>
<?php if ($numero_col_datos_usuarios_despues_registro>0) {
						?>
				<script>
				var usuario_bienvenida = '<?php echo $_SESSION['MM_Username'];?>';
				var correo_bienvenida = '<?php echo $_SESSION['MM_correo'];?>';
				var password_bienvenida = '<?php echo $_SESSION['MM_Password'];?>';
				var tienda_bienvenida = '<?php echo $_SESSION['MM_tiendaname'];?>';
				var data = new FormData();
				data.append("usuario", usuario_bienvenida);
				data.append("correo", correo_bienvenida);
				data.append("password", password_bienvenida);
				data.append("tienda", tienda_bienvenida);
				document.getElementById('myModal_imagen_carga').style.display='flex';
				fetch('../../../../../../../controllers/enviar_correo_bienvenida_controller.php', {
					method: 'POST',
					body: data,
					mode: 'cors',
					cache: 'default' 
				})
				.then(function(response) {
					if(response.ok) {
            location.href='../../../../../../../perfil-usuario';
					}else {
						throw "Error en la llamada Ajax";
					}
				})
				</script>
			<?php
        		}?>