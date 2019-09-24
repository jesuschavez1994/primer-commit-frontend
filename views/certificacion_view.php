<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Founduss Perfil Usuario</title>
<link rel="stylesheet" href="../../../../../../../css/fou.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/perfil.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/form.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton2.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/panel.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton.css?<?php echo $version; ?>">
<link  rel="stylesheet" media="screen" href="../../../../../../../css/inicio.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/reset.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../js/leaflet.css"/>
<link  rel="stylesheet" media="screen" href="../../../../../../../css/style.css?<?php echo $version; ?>">
<link  rel="stylesheet" href="../../../../../../../css/font-awesome.css?<?php echo $version; ?>">
<link  rel="stylesheet" media="screen" href="../../../../../../../css/certificacion.css?<?php echo $version; ?>">
<link href="../../../../../../../img/IsotipoFounduss-01.png" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="../../../../../../../css/Estilos_pie_de_pagina.css?<?php echo $version; ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
<script src="../../../../../../../js/funcion_tamano_ventana.js?<?php echo $version; ?>" ></script>
<script src="../../../../../../../js/in-view.min.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/scripts.js?<?php echo $version; ?>" async="async"></script>
<script  src="../../../../../../../js/jquery.touchSwipe.min.js"></script>
<script src="../../../../../../../js/leaflet.js"></script>
<script src="../../../../../../../loadCSS-2.0.1/src/loadCSS.js"></script>
<script src="../../../../../../../js/funciones-panel.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones-perfil.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones_certificacion.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/busca3.js?<?php echo $version; ?>"></script>
<script src="../../../../../../../js/funciones_menu_rapido_tienda.js?<?php echo $version; ?>"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131128364-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-131128364-1');
</script>
</head>
<body>
  <?php  
  include('panel_mvc.php') 
  ?>
  <div class="container" >
      <div class="row">
        <div class="twelve columns certificacion-cuerpo">
            <div class="four columns tarjeta1_certificacion" > 
            <img src="../../../../../../../img/Imagen_pag_cert_nivel1.svg" class="imagen_certificacion">
              <div class="tarjeta-certificacion" id='tarjeta<?php echo $id_categoria;?>' id_categoria='<?php echo $id_categoria;?>' >
                  <div class="titulo_card_cert">
                  <p >
                      NIVEL 1
                    </p>
                    <p>
                    Gratis
                  </p>
                  <p class="validez-certificacion">   
                    Válida por 90 días        
                  </p>
                  </div>
                <div class="contenido-certificacion">
                  <p class="parrafo-certificacion">
                    <span class="gris-letra-certificacion">✓</span> Inscripción dentro de Founduss.
                  </p>
                  <p class="parrafo-certificacion">
                    <span class="gris-letra-certificacion">✓</span> Cuenta automanejable.
                  </p>
                  <p class="parrafo-certificacion">
                    <span class="gris-letra-certificacion">✓</span> Datos de contacto accesibles para tus clientes.
                  </p>
                  <p class="parrafo-certificacion">
                    <span class="gris-letra-certificacion">✓</span> Ubicación geográfica de tu empresa.
                  </p>
                  <p class="gris-letra-certificacion" >
                    <span class="gris-letra-certificacion">✓</span> Publicación de hasta 5 de tus productos/servicios.
                  </p>
                </div>
                <br>
                <br>
                <br>
                <br>
              </div>
            </div>
           
            <div class="four columns tarjeta1_certificacion"  > 
            <img src="../../../../../../../img/Imagen_pag_cert_nivel2.svg" class="imagen_certificacion">
            <div class="tarjeta-certificacion" id='tarjeta<?php echo $id_categoria;?>' id_categoria='<?php echo $id_categoria;?>' >
                  <div class="titulo_card_cert">
                  <p >
                      NIVEL 2
                    </p>
                    <p>
                    Bs. <?php echo $precio_nivel_2?>.00
                  </p>
                  <p class="validez-certificacion">   
                    Válida por 3 meses         
                  </p>
                  </div>
                <div class="contenido-certificacion">
                  <p class="parrafo-certificacion">
                    <span class="azul-letra-certificacion">✓</span> Inscripción dentro de Founduss.
                  </p>
                  <p class="parrafo-certificacion">
                    <span class="azul-letra-certificacion">✓</span> Cuenta automanejable.
                  </p>
                  <p class="parrafo-certificacion">
                    <span class="azul-letra-certificacion">✓</span> Datos de contacto accesibles para tus clientes.
                  </p>
                  <p class="parrafo-certificacion">
                    <span class="azul-letra-certificacion">✓</span> Ubicación geográfica de tu empresa.
                  </p>
                  <p class="parrafo-certificacion">
                    <span class="azul-letra-certificacion">✓</span> Recepción de correos electrónicos mediante tu perfil.
                  </p>
                  <p class="azul-letra-certificacion">
                    <span class="azul-letra-certificacion">✓</span> Publicación de hasta 20 de tus productos/servicios.
                  </p>
                  <p class="azul-letra-certificacion">
                    <span class="azul-letra-certificacion">✓</span> Empresa verificada por personal de Founduss.
                  </p>
                </div>
                <?php 
                if ($nivel==2) {
                ?>
                  <button class="boton">Su tienda está en Este Nivel</button>
                <?php
                }elseif ($nivel>2) {
                }else{
                ?>
                  <button class="boton" id='boton_certificar_nivel_2' >Certificar</button>
                <?php
                }
                ?>
                <br>
              </div>
            </div>
            <div class="four columns tarjeta1_certificacion" > 
            <img src="../../../../../../../img/Imagen_pag_cert_nivel3.svg" class="imagen_certificacion">
              <div class="tarjeta-certificacion" id='tarjeta<?php echo $id_categoria;?>' id_categoria='<?php echo $id_categoria;?>' >
                  <div class="titulo_card_cert">
                    <p>
                      NIVEL 3
                    </p>
                    <p>
                      Bs. <?php echo $precio_nivel_3?>.00
                    </p>
                    <p class="validez-certificacion">   
                      Válida por 6 meses           
                    </p>
                  </div>
                <div class="contenido-certificacion">
                   <p class="parrafo-certificacion">
                    <span class="amarillo-letra-certificacion">✓</span> Inscripción dentro de Founduss.
                  </p>
                  <p class="parrafo-certificacion">
                    <span class="amarillo-letra-certificacion">✓</span> Cuenta automanejable.
                  </p>
                  <p class="parrafo-certificacion">
                    <span class="amarillo-letra-certificacion">✓</span> Datos de contacto accesibles para tus clientes.
                  </p>
                  <p class="parrafo-certificacion">
                    <span class="amarillo-letra-certificacion">✓</span> Ubicación geográfica de tu empresa.
                  </p>
                  <p class="parrafo-certificacion">
                    <span class="amarillo-letra-certificacion">✓</span> Recepción de correos electrónicos mediante tu perfil.
                  </p>
                  <p class="amarillo-letra-certificacion">
                    <span class="amarillo-letra-certificacion">✓</span> 500 Publiciones de tus productos/servicios. 
                  </p>
                  <p class="amarillo-letra-certificacion">
                    <span class="amarillo-letra-certificacion">✓</span> Empresa verificada por personal de Founduss.
                  </p>
                  <p class="amarillo-letra-certificacion">
                    <span class="amarillo-letra-certificacion">✓</span>Mejoras y actualizaciones que tenga la página en el periodo de certificación serán
                        anexadas sin costo alguno.
                  </p>
                </div>
                <?php 
                if ($nivel==3) {
                ?>
                  <p class="parrafo-certificacion estilo_texto_su_tienda">Su tienda está en Este Nivel</p>
                <?php
                }else{
                ?>
                  <button class="boton" id='boton_certificar_nivel_3' >Certificar</button>
                <?php
                }
                ?>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div id="datos_enviados_certificacion" class="modal " style="display: none;">
        <div class="modal-content" style="height: 500px;display: flex" >
          <p><span class="close2" id="cerrarventana" >×</span></p>
          <div  style="display: flex; flex-direction: column;justify-content: center;align-items: center; min-height: 440px;">
              <div class="container_12" style='display: flex; justify-content: center;align-items: center;    flex-direction: column;'>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    0%
                  </div>
                </div>
                <div id="2nuevoproductos" class="grid_12 " >
                  <p id='fin_envio_archivos_certificacion' style='display:none'>Los datos fueron Envnviados satisfactoriamente, 
                  espere a que se verifiquen los datos por uno de 
                  nuestros trabajadores en un plazo máximo de 72 horas habiles.
                </p>
                </div>
              </div>
          </div>
        </div>
      </div> 
      <div id="div_formulario_certificacion" class="twelve columns" style="display: none"  > 
        <div id="titulo_formulario_certificacion"></div>
        <div id="pasos_certificacion">
          <span id="paso_certificacion_1">Paso 1</span><span> | </span><span id="paso_certificacion_2">Paso 2</span><span> | </span><span id="paso_certificacion_3">Paso 3</span>
        </div>
        <br>
        <div id="formulario_certificacion" >
          <form class="form1" method="post" name="form1" id='enviar_mensaje_certificacion' id_tienda='<?php echo $id_tienda;?>'>
            <div id="verificacion_datos_certificacion">
              <h3 class="amarillo-letra-certificacion flex">
                <p>Verifique que sus datos</p>
                <div class="demo-content4" id='icono-certificacion-verificacion'>
                  <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="../../../../../../../img/Iconos de certificacion-02.svg" class="tarjeta_inicio">
                </div> 
              </h3>
              <div class="six columns form_registro form_certificacion"> 
                <label class="flex">
                  <p>Correo:</p>
                  <input id="correo" class="editar" name="correo" type="text" value="<?php echo $correo; ?>" required  title="Correo" autocomplete="off">
                  <input type="hidden" name="MM_update8" value="form8">
                  <input type="hidden" name="id_contacto" value="<?php echo $id_contacto; ?>" readonly="readonly">
                </label>
             </div> 
             <div class="six columns form_registro form_certificacion"> 
                <label class="flex">
                 <p> Telefono:</p>
                  <input id="telefono" class="editar" name="telefono" type="text" value="<?php echo $telefono; ?>" required title="Telefono" >
                  <input type="hidden" name="MM_update6" value="form6" >
                </label>
              </div>
             <div class="six columns form_registro form_certificacion"> 
                <label class="flex">
                  <p> Celular:</p>
                  <input id="cel" class="editar" name="cel" type="text" value="<?php echo $cel; ?>" required title="Celular" >
                  <input type="hidden" name="MM_update7" value="form7" >
                </label>
              </div>
             <div class="six columns form_registro form_certificacion"> 
               <label class="flex">
                  <p>Tienda</p>
                  <input id="tienda" class="editar" name="tienda" type="text" value="<?php echo $tienda; ?>" required  placeholder="El Nombre de la Tienda" <?php if ($nivel>=2) { echo 'disabled';} ?>>
                  <input type="hidden" name="MM_update2" value="form2" >
                  <input type="hidden" name="id_tienda" value="<?php echo $id_tienda; ?>" >
                  <input type="hidden" name="id_contacto" value="<?php echo $id_contacto; ?>" readonly="readonly" >
                
                </label>
              </div>
              <div class="six columns form_registro form_certificacion"> 
                <label class="flex">
                  <p>La Categoría:</p>
                  <select class="edit" id="categoria" name="categoria" title="Categoria"  <?php if ($nivel>=2) { echo 'disabled';} ?> >
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
              <div class="six columns form_registro form_certificacion"> 
                <label class="flex">
                  <p> La Subcategoría:</p>
                  <div id="camposubcategoria" class="camp">
                   <select id="subcategoria" class="subca" name="id_subcategoria" title="Subcategoria"  <?php if ($nivel>=2) { echo 'disabled';} ?>>
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
              <input type="hidden" name="id_tienda" value="<?php echo $id_tienda; ?>" >
              <input type="hidden" name="id_tienda_subcategoria" value="<?php echo $id_tienda_subcategoria; ?>" >
           <div class="six columns form_registro form_certificacion"> 
              <label class="flex">
                <select id="estado_certificacion" name="id_estado" title="Estado" >
                  <option value="" style="background:#F99615; color:#FFF;"  >Seleccione el Estado</option>
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
           <div class="six columns form_registro form_certificacion"> 
              <div id="campociudad4" class="camp">
                <label class="ciudad_label" style="justify-content: flex-start;">
                  <select id="ciudad" class="subca" name="id_ciudad" title="Ciudades"   >
                    <option value="">Seleccione la Ciudad </option>
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
            </div>
           <div class="six columns form_registro form_certificacion"> 
              <label class="flex edit">
                <input type="hidden" name="MM_update3" value="form3">
                <input type="hidden" name="id_tienda" value="<?php echo $id_tienda; ?>" >
                <p>Direccion:</p>
                <textarea id="direccion" title="Direccion" name="direccion" placeholder="Direccion:" style="width:80%" >
                  <?php echo $direccion; ?>
                </textarea>
              </label>
            </div>
            <div class="six columns form_registro form_certificacion"> 
              <label class="flex">
                <input type="hidden" name="MM_update4" value="form4" >
                <input type="hidden" name="id_tienda" value="<?php echo $id_tienda; ?>" >
              </label>
            </div>
            <button class="boton" id='btn_datos_certificacion_verificado'>Siguente</button>
          </div>
           <div id="informacion_certificacion" style="display: none">
            <br>
            <div class="tarjeta-certificacion-paso-2"> 
            <p class="texto-tarjeta-certificacion-paso-2">Con la intención de garantizar la autenticidad de la información, 
              así como mantener la credibilidad de las Tiendas Certificadas de Nivel 2 y autorizadas para el uso de la Página Web FOUNDUSS, 
              requerimos que los usuarios que decidan formar parte de nuestra comunidad, nos suministre en línea los siguientes requisitos y 
              recaudos, los cuales se aprovecharán para concretar está Certificación, previa verificación de nuestra parte.</p>
            <br>
            <p class="negrita parrafo-grande-certificacion">Transferencia Bancaria a la Cuenta Corriente N° a nombre de</p>
            <p class="texto-tarjeta-certificacion-paso-2">Bryan Hinojosa V-19.170.086 BANCO PROVINCIAL CORRIENTE 0108 2413 3601 00073694</p>
            <p class="texto-tarjeta-certificacion-paso-2">Bryan Hinojosa V-19.170.086 BANCO VENEZUELA CORRIENTE 0102 0315 5600 00220709</p>
            <p class="texto-tarjeta-certificacion-paso-2">Bryan Hinojosa V-19.170.086 BANCO BICENTENARIO CORRIENTE 0175 0397 9400 75705711</p>
            <br>
            <p class="negrita parrafo-grande-certificacion"> Recaudos: </p>
            <p class="texto-tarjeta-certificacion-paso-2">Registro de Información Fiscal actualizado (R.I.F)</p>
            <p class="texto-tarjeta-certificacion-paso-2">Recibo de servicio (luz, gas, teléfono, agua, suscripción por cable, telefonía celular postpago). 
              El recibo debe tener una vigencia no mayor a tres (3) meses.</p> 
              <div class="boton-derecha-certificacion">
                <button class="boton" id='btn_informacion_mostrada' style='width:25%'>Siguente</button>
              </div>
            </div>
          </div>
          <div id="archivos_certificacion">
            <div class="cuadro_archivos_certificacion" >
            <label class="label_archivos_certificacion" >
              <img src="../../../../../../../img/Iconos de certificacion-rif.svg" class="rounded" id="avatar1" onerror="this.src='../../../../../../../img/carga.jpg';" width="60%">
              <p class="letras_archivos_adjuntos" >
                Adjunte el RIF de la empresa
              </p>
              <input type="file" name="archivo" id="archivo1" placeholder=""  size="30"  style="display: none;" required>
            </label>
            <label class="label_archivos_certificacion" >
              <img src="../../../../../../../img/Iconos de certificacion-recibo.svg" class="rounded" id="avatar2" onerror="this.src='../../../../../../../img/carga.jpg';" width="60%">
              <p class="letras_archivos_adjuntos" >
                Adjunte una factura de teléfono ó electricidad
              </p>
              <input type="file" name="archivo2" id="archivo2" placeholder=""  size="30" style="display: none;" required>
            </label>
            <label class="label_archivos_certificacion" >
              <img src="../../../../../../../img/Iconos de certificacion-deposito.svg" class="rounded" id="avatar3" onerror="this.src='../../../../../../../img/carga.jpg';" width="60%">
              <p class="letras_archivos_adjuntos" >
                Adjunte un comprobante de deposito a la cuenta de founduss
              </p>
              <input type="file" name="archivo3" id="archivo3" placeholder=""  size="30" style="display: none;" required >
            </label>
            </div>
            <br>
            <br>
            <p>Puedes adjuntar tus documentos en cualquiera de estos formatos:</p>
            <p class="amarillo-letra-certificacion">PDF/JPG/JPEG/PNG</p>
            <br>
            <button class="boton" name="" type="submit" value="Enviar" style="margin-top: 10px;width: 25%" />Enviar</button>
            <input type="hidden" name="MM_update" value="form2" />
            <input type="hidden" name="id_tienda" value="<?php echo $id_tienda; ?>" />
            <input name="correotienda" type="hidden" value="<?php echo $correo; ?>">
            <input name="id_tienda" type="hidden" value="<?php echo $id_tienda; ?>">
            <input name="tienda" type="hidden" value="<?php echo $tienda; ?>">
            <input id='nivel_certificar' name="nivel_certificar" type="hidden" value="">
            <input name="corre" type="hidden" value="18">
          </div>
      </form>
    </div>
  </div>
<!--=============================pie=================================-->
<?php include('pie_pag.html') ?>
</body>
</html>
<script>
    window.addEventListener('DOMContentLoaded', function () {
      var avatar1 = document.getElementById('avatar1');
      var input1 = document.getElementById('archivo1');
      var avatar2 = document.getElementById('avatar2');
      var input2 = document.getElementById('archivo2');
      var avatar3 = document.getElementById('avatar3');
      var input3 = document.getElementById('archivo3');
      input1.addEventListener('change', function (e) {
        avatar1.attributes.getNamedItem("src").value= "../../../../../../../img/Iconos de certificacion-adj_listo.svg";
    });
      input2.addEventListener('change', function (e) {
        avatar2.attributes.getNamedItem("src").value= "../../../../../../../img/Iconos de certificacion-adj_listo.svg";
    });
      input3.addEventListener('change', function (e) {
        avatar3.attributes.getNamedItem("src").value= "../../../../../../../img/Iconos de certificacion-adj_listo.svg";
    });
       });
  </script>