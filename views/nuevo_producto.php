<?php
if (!isset($_SESSION)) {
  session_start();
}
$id_tienda = filter_var($_POST['id_tienda'],  FILTER_SANITIZE_NUMBER_INT);
$id_contacto = filter_var($_POST['id_contacto'],  FILTER_SANITIZE_NUMBER_INT);
$id_producto = filter_var($_POST['id_producto'],  FILTER_SANITIZE_NUMBER_INT);
$nombre_imagen_producto = filter_var($_POST['nombre_imagen_producto'], FILTER_SANITIZE_STRING);
if ($id_tienda== $_SESSION['MM_id_tienda'] && $id_contacto=$_SESSION['MM_id_contacto']) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
<script src="../../../../../../../js/funcion_formulario_nuevo_producto.js"></script>
<script>
$(function(){
  $(".escondido").on('change', function (evt) {
    var input = $(this).attr('id');
    var image = $(this).attr('imagen');
    input = document.getElementById(input);
    image = document.getElementById(image);
    var files = evt.target.files;
    var done = function (url) {
      image.src = url;   
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
        reader.onload = function (evt) {
          done(reader.result);
        };
        reader.readAsDataURL(file);
      }
    }
  });
  $(".formulario_imagen_producto").on("submit", function(e){
    var $progress = $('.progress');
    var $progressBar = $('.progress-bar');
    var id = $(this).attr('id');
    var lugar=$(this).attr('lugar');
    e.preventDefault();
    var f = $(this);
    var formData = new FormData(document.getElementById(id));
    formData.append("id_producto", "<?php echo $id_producto; ?>");
    formData.append("id_contacto", "<?php echo $id_contacto; ?>");
    formData.append("id_tienda", "<?php echo $id_tienda; ?>");
    formData.append("nombre_imagen_producto", "<?php echo $nombre_imagen_producto;?>");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
      url: "../../../../../../../procesar-subida.php",
      type: "post",
      dataType: "html",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      xhr: function () {
        var xhr = new XMLHttpRequest();
        xhr.upload.onprogress = function (e) {
          $progress.show();
          var percent = '0';
          var percentage = '0%';
          if (e.lengthComputable) {
            percent = Math.round((e.loaded / e.total) * 100);
            percentage = percent + '%';
            $progressBar.width(percentage).attr('aria-valuenow', percent).text(percentage);
          }
        };
        return xhr;
      },
      success: function(data){
        var imgPath=['','','','','',''];
        for (var i = 1; i <= 5; i++) {
          imgPath[i]="/../../../../../../../contactos/contacto<?php echo $id_contacto;?>/<?php echo $nombre_imagen_producto; echo $id_producto; ?>/<?php echo $nombre_imagen_producto;?>"+i+"_<?php echo $id_producto; ?>.jpeg"+"?"+Date.now();           
          $('#producto_subido'+i).attr("src", imgPath[i]);
        }
      }
    })
    .done(function(res){
      $("#mensaje").html("Listo!!");
      $("#2nuevoproductos").html('');
      $('#myModal2').css('display', 'none');
      location.href ="../../../../../../../perfil-usuario/<?php echo $id_producto; ?>~<?php echo $nombre_imagen_producto;?>";
    });
  });
});
$(function(){
  $(".close2").on('click', function (evt) {
    location.href ="../../../../../../../perfil-usuario/<?php echo $id_producto; ?>~<?php echo $nombre_imagen_producto;?>";
  });
});
</script>
</head>
<body>
  <h3 style="font-size:18pt;text-align: center;color: rgb(87, 87, 86);font-family: 'Montserrat', sans-serif;font-weight: normal;">
    Ingrese las imagenes
  </h3>
  <form  enctype="multipart/form-data" id="formuploadajax" lugar="1" class="formulario_imagen_producto" method="post" style="display: flex;flex-direction: column;align-items: center;" > 
    <div class="grid_12" style="display: flex;flex-direction: row;align-items: center;" >
      <div class="grid_2_5imagenes">
        <div class="contenedor entrada_imagen ">
          <label>
            <div class="middle">
              <div class="texto_boton_imagen">
                Seleccione Imagen
              </div>
            </div>
            <input class="escondido" type="file" id="archivo1" name="avatar1" imagen="producto_subido1">
          </label>
          <img class="entrada_imagen imagen"  src="../../../../../../../img/ICONO-INSERTAR-IMAGEN.jpg" id="producto_subido1" alt="SIN IMAGEN"  onerror="this.src='../../../../../../../productos/productop0_0.jpg';" >    
        </div>
      </div>
      <div class="grid_2_5imagenes">
        <div class="contenedor entrada_imagen2 ">
          <label>
            <div class="middle">
              <div class="texto_boton_imagen">
                Seleccione Imagen
              </div>
            </div>
            <input class="escondido" type="file" id="archivo2" name="avatar2" imagen="producto_subido2">
          </label>
          <img class="entrada_imagen imagen"  src="../../../../../../../img/gris-icono.jpg" id="producto_subido2" alt="SIN IMAGEN"  onerror="this.src='../../../../../../../productos/productop0_0.jpg';" >
        </div>
      </div>
      <!-- /////////////////IMAGEN 3 PRODUCTO////////////////////-->
      <div class="grid_2_5imagenes">
        <div class="contenedor entrada_imagen2">
          <label>
            <div class="middle">
              <div class="texto_boton_imagen">
                Seleccione Imagen
              </div>
            </div>
            <input class="escondido" type="file" id="archivo3" name="avatar3" imagen="producto_subido3">
          </label>
          <img class="entrada_imagen imagen"  src="../../../../../../../img/gris-icono.jpg" id="producto_subido3" alt="SIN IMAGEN"  onerror="this.src='../../../../../../../productos/productop0_0.jpg';"> 
        </div>
      </div>
      <!-- /////////////////IMAGEN 4 PRODUCTO////////////////////-->
      <div class="grid_2_5imagenes">
        <div class="contenedor entrada_imagen2 ">
          <label>
            <div class="middle">
              <div class="texto_boton_imagen">
                Seleccione Imagen
              </div>
            </div>
            <input class="escondido" type="file" id="archivo4" name="avatar4" imagen="producto_subido4">
          </label>
          <img class="entrada_imagen imagen"  src="../../../../../../../img/gris-icono.jpg" id="producto_subido4" alt="SIN IMAGEN"  onerror="this.src='../../../../../../../productos/productop0_0.jpg';" >  
        </div>
      </div>
      <!-- ///////////////IMAGEN 5 PRODUCTO//////////////////-->
      <div class="grid_2_5imagenes">
        <div class="contenedor entrada_imagen2">
          <label>
            <div class="middle">
              <div class="texto_boton_imagen">
                Seleccione Imagen
              </div>
            </div>
            <input class="escondido" type="file" id="archivo5" name="avatar5" imagen="producto_subido5">
          </label>
          <img class="entrada_imagen imagen"  src="../../../../../../../img/gris-icono.jpg" id="producto_subido5" alt="SIN IMAGEN"  onerror="this.src='../../../../../../../productos/productop0_0.jpg';" >
          <input class="entrada_imagen" type="hidden" name="subir_producto" value="1">
        </div>
        <div id="mensaje"></div> 
      </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        0%
      </div>
    </div>
    <input style="" class="texto_boton_imagen5"  type="submit" value="Subir archivo">
  </form>
  <div class="clear"></div>
</body>
<?php }?>
</html>