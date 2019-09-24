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
              <form method="post" name="form1" id="formulario_administrador_correo_bienvenida">
                  <input type="text" name=correo placeholder="correo" >
                  <input type="text" name=password placeholder="password" >
                <input type="submit" value="enviar">
              </form>
            </div>
          </div>
        </div>
    </div>
<?php include('pie_pag.html') ?>
</body>
<script>
    var formulario_administrador_correo_bienvenida_var = document.getElementById("formulario_administrador_correo_bienvenida").addEventListener("submit", enviar_correo_bienvenida_administrador);
    function enviar_correo_bienvenida_administrador(event) {
        event.preventDefault();
        var data = new FormData(document.getElementById('formulario_administrador_correo_bienvenida'));
    fetch('../../../../../../../controllers/enviar_correo_bienvenida_administrador_js_controller.php', {
        method: 'POST',
        body: data,
        mode: 'cors',
        cache: 'default' 
    })
    .then(function(response) {
        if(response.ok) {
           alert('enviado');
        }else {
            throw "Error en la llamada Ajax";
            alert('no enviado');
        }
        if(response==400) {
            alert('no enviado');
        }
    })
}
</script>
</html>