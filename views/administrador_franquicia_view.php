<!DOCTYPE >
<html >
<head>
<meta  content="text/html; charset=utf-8" />
<title>Founduss Categorias</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
<link rel="stylesheet" href="../../../../../../../css/fou.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton2.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/panel.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/perfil.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/reset.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/inicio.css?<?php echo $version; ?>">
<link  rel="stylesheet" media="screen" href="../../../../../../../css/style.css">
<link rel="stylesheet" href="../../../../../../../css/form.css?<?php echo $version; ?>">
<link rel="stylesheet" href="../../../../../../../css/skeleton.css?<?php echo $version; ?>">
<link href="../../../../../../../img/IsotipoFounduss-01.png" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="../../../../../../../css/Estilos_pie_de_pagina.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
<script src="../../../../../../../js/in-view.min.js"></script>
<script src="../../../../../../../js/funcion_tamaño_ventana.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/funciones-panel.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/scripts.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/busca.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/ventana.js?<?php echo $version; ?>" async="async"></script>
<script src="../../../../../../../js/funciones-inicio.js?<?php echo $version; ?>" async="async"></script>
</head>
<body>
  <?php
  include('panel_mvc.php');  

  ?>
  <div class="container" >
      <div class="eleven columns" style="border-color: rgba(61,61, 63,0.5);margin-left: 4.1666%;margin-right: 4.1666%">
      <div class="twelve columns">
              <form id="formulario_agregar_franquicia" method="post" name="form1">
                <p> agregar franquicia</p>
                <input value="" name="nombre_franquicia" placeholder="nombre franquicia">
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
                
                <input type="submit" value="enviar">
              </form>
            </div>
       <?php
       $a=0;
        foreach ($datos_search_franquicia_array['datos_search_franquicia'] as $datos_search_franquicia){
          $b=$a%2;
        ?>
            <div class="twelve columns" style="<?php if($b==0){ echo 'background-color:#ddd';}?>">
              <form id_fraqnuicia="<?php echo $datos_search_franquicia['id_franquicia'];?>" id="formulario_agregar_franquicia_<?php echo $datos_search_franquicia['id_franquicia'];?> " method="post" name="form1" class="formulario_modificar_franquicia">
                <p> <?php echo $datos_search_franquicia['id_franquicia'];echo $datos_search_franquicia['nombre_franquicia']; echo $datos_search_franquicia['estatus_franquicia'];?> 
                </p>
                <input type="hidden" name="id_franquicia" value="<?php echo $datos_search_franquicia['id_franquicia'];?>">
                <input type="hidden" name="estatus_franquicia" value="<?php echo $datos_search_franquicia['estatus_franquicia'];?>">
                <input name="nombre_franquicia" value="<?php echo $datos_search_franquicia['nombre_franquicia']; ?>">

                <div class="six columns form_registro"> 
            <label class="flex">
              <p>La Categoría:</p>
                <select class="edit" id="categoria" name="categoria" title="Categoria" style="font-weight:bold;" >
                  <option value="" style="background:#F99615; color:#FFF;">
                  Seleccione la Categoria
                  </option>
                  <?php
                  $datos_search_franquicia_id_categoria=$datos_search_franquicia['id_categoria'];
                  $datos_search_franquicia_id_subcategoria=$datos_search_franquicia['id_subcategoria'];
                  require('Connections/coneccion4.php');
                  $conn->set_charset("utf8");
                  $query_Recordset10 = "SELECT * FROM categoria ";
                  $Recordset10  = $conn->query($query_Recordset10);
                  if ($Recordset10->num_rows > 0) {
                    while($row_Recordset10 = $Recordset10->fetch_assoc()) {?>
                      <option value="<?php echo $row_Recordset10['id_categoria']; ?>" <?php if( $datos_search_franquicia_id_categoria== $row_Recordset10['id_categoria']){?> selected="selected" <?php }?>>
                        <?php echo $row_Recordset10['categoria']; ?>
                      </option>
                      <?php 
                    }
                  } 
                  ?>
                </select>
            </label>
          </div>
          <div class="six columns form_registro"> 
            <label class="flex">
              <p> La Subcategoría:</p>
              <div id="camposubcategoria" class="camp">
                <select id="subcategoria" class="subca" name="id_subcategoria" title="Subcategoria" style="font-weight:bold;" >
                  <option value="">
                    Seleccione la Subcategoria 
                  </option>
                  <?php
                  require('Connections/coneccion4.php');
                  $conn->set_charset("utf8");
                  $query_Recordset11 = "SELECT * FROM subcategoria WHERE id_categoria = $datos_search_franquicia_id_categoria";
                  $Recordset11  = $conn->query($query_Recordset11);
                  if ($Recordset11->num_rows > 0) {
                    while($row_Recordset11 = $Recordset11->fetch_assoc()) {?>
                      <option <?php if($row_Recordset11['id_subcategoria']==$datos_search_franquicia_id_subcategoria){?> selected="selected"<?php }?> value="<?php echo $row_Recordset11['id_subcategoria']; ?>"> 
                        <?php echo $row_Recordset11['subcategoria']; ?>
                      </option>
                      <?php
                    }
                  }
                  ?>
                </select>
              </div>
            </label>
          </div>
                <input type="submit" value="enviar">
              </form>
            </div>
            <?php
            $a=$a+1;
            }
            ?>
          </div>
        </div>
    </div>
    <div class="popup-overlay">
    </div>
<?php include('pie_pag.html') ?>
</body>
<script>
var classname = document.getElementsByClassName("formulario_modificar_franquicia");
var myFunction = function() {
  event.preventDefault();
  var id = this.getAttribute("id");
  var data = new FormData(document.getElementById(id));
    fetch('../../../../../../../franquicia_backend/update.php', {
        method: 'POST',
        body: data,
        mode: 'cors',
        cache: 'default' 
    })
    .then(function(response) {
        if(response.ok) {
          return response.text().then(function(text) {
            alert(text);
          })
        }else{
            alert('no enviado');
        }
        if(response==400) {
            alert('no enviado');
        }
    })
};
for (var i = 0; i < classname.length; i++) {
    classname[i].addEventListener('submit', myFunction, false);
}
    var formulario_agregar_franquicia_var = document.getElementById("formulario_agregar_franquicia").addEventListener("submit", formulario_agregar_franquicia);
    function formulario_agregar_franquicia(event) {
        event.preventDefault();
        var data = new FormData(document.getElementById('formulario_agregar_franquicia'));
    fetch('../../../../../../../franquicia_backend/create.php', {
        method: 'POST',
        body: data,
        mode: 'cors',
        cache: 'default' 
    })
    .then(function(response) {
        if(response.ok) {
          return response.text().then(function(text) {
            alert(text);
          })
        }else{
            alert('no enviado');
        }
        if(response==400) {
            alert('no enviado');
        }
    })
}
</script>
</html>