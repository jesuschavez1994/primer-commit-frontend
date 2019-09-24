<?php
for ($i = 0; $i < $a; $i++){
?>    
<div class="grid_2_perfil omega contenedor3 entrada_imagen"> 
  <div class="grid_12 perfil2">
      <div  class="boxp1" style="  font-size:11px; " >
        <?php  
        $titu =  $productos[$i];
        $texto = $descripcion[$i]; 
        ?>   
        <div class="<?php if ($status[$i]==7) {echo 'punto_disponible_gris';} ?>">
        </div> 
        <div class="middle3" style="width:100%" title="<?php echo $productos[$i]; ?>">
          <button id="edita<?php echo $id_productos[$i]; ?>" id_producto="<?php echo $id_productos[$i]; ?>" id_tienda="<?php echo $id_tienda; ?>" id_contacto="<?php echo $id_contacto; ?>"  class="editar_productos_perfil2 texto_boton_imagen3 " botonactual="misproductos" nombre_imagen_producto='<?php echo $nombre_imagen_producto[$i];?>'>
          VER
          </button>
        </div>
        <div class="middle4" style="width:100%" title="<?php echo $productos[$i]; ?>">
          <button id="edita_producto<?php echo $id_productos[$i]; ?>" id_producto="<?php echo $id_productos[$i]; ?>" id_tienda="<?php echo $id_tienda; ?>" id_contacto="<?php echo $id_contacto; ?>"  class="texto_boton_imagen4 myBtn" botonactual="misproductos" >
          EDITAR
          </button>
        </div>
        <div class="middle6" style="width:100%" title="<?php echo $productos[$i]; ?>">
          <button id="edita_producto_imagen<?php echo $id_productos[$i]; ?>" id_producto="<?php echo $id_productos[$i]; ?>" id_tienda="<?php echo $id_tienda; ?>" id_contacto="<?php echo $id_contacto; ?>"  class="texto_boton_imagen6 myBtn" botonactual="misproductos" >
          EDITAR IMAGEN
          </button>
        </div>
        <div class="demo-content2" style="width:100%;clear: left" >
          <img class="grid_img_1 image3" src="../../../../../../../img/Caja 1000x1000_Mesa de trabajo 1 copia.svg" data-src="../../../../../../../contactos/contacto<?php echo $id_contacto; ?>/<?php echo $nombre_imagen_producto[$i]; echo $id_productos[$i]; ?>/<?php echo $nombre_imagen_producto[$i];?>g1_<?php echo $id_productos[$i]; ?>.jpeg?<?php echo $version_imagen_producto[$i]?>" 
            alt="<?php echo $nombre_imagen_producto[$i];?>g1_<?php echo $id_productos[$i]; ?>.jpeg"   onerror="this.src='../../../../../../../img/Caja 1000x1000_Mesa de trabajo 1 copia.svg';" title="<?php echo $productos[$i]; ?>_<?php echo $descripcion[$i]; ?>" >   
        </div>
        <!--/////////////////abajo////////////////////-->
        <div class="boxtexto" title="<?php echo $productos[$i]; ?>">
          <div class="boxtexto-contenido1" >
            <?php if($precio[$i]!=null){ echo "Bs. ".$precio[$i];}else echo "Precio a Consultar" ?>
          </div>
          <div class="boxtexto-contenido2">
          <?php echo $titu ?>
          </div>
        </div>  
      </div>
  </div>
</div> 
<?php }?>
<div class="table-pagination pull-right twelve columns">
    <?php echo paginate($reload, $page, $total_pages, $adjacents);?>
</div>
<script >
inView( '.demo-content2' ).on( 'enter', function( figure ) {
  var img = figure.querySelector( 'img' );
  if (  'undefined' !== typeof img.dataset.src ) {
            figure.classList.add( 'is-loading' );
            newImg = new Image();
            newImg.src = img.dataset.src;
            newImg.className="grid_img_1 image3";
            newImg.addEventListener( 'load', function() {
                figure.innerHTML = '';
                figure.appendChild( this );
                setTimeout( function() {
                    figure.classList.remove( 'is-loading' );
                    figure.classList.add( 'is-loaded' );
                }, 300 );
            } );
        }
    } );
$('.editar_productos_perfil2').click(function(){
    var nombre_imagen_producto=$(this).attr('nombre_imagen_producto');
    var id_producto = $(this).attr('id_producto');
    var tipo = "editor";
    var id_tienda = $(this).attr('id_tienda');
    var id_contacto = $(this).attr('id_contacto');
    var botonselecto= $("#botonselecto").attr('selecto');
    var botonactual= $(this).attr('botonactual');
    var page=$('#activo_pag').attr('val');
    location.href="../../../../../../../perfil-usuario/"+id_producto+'~'+nombre_imagen_producto+'/page='+page;   
  });
$('.texto_boton_imagen4').click(function(){
    var id_producto = $(this).attr('id_producto');
    var tipo = "editor";
    var id_tienda = $(this).attr('id_tienda');
    var id_contacto = $(this).attr('id_contacto');
    var botonselecto= $("#botonselecto").attr('selecto');
    var botonactual= $(this).attr('botonactual');
    $("#botonselecto").attr("selecto", botonactual);
    $("#1"+botonselecto).css('display', 'none');
    $("#2"+botonselecto).css('display', 'none');
    $("#1"+botonactual).css('display', 'flex');
    $("#2"+botonactual).css('display', 'flex');
    $("#buscaproductos").css('display', 'flex');
    $("#2latiendaboton").css('display', 'none');
    $("#2micontactoboton").css('display', 'none');
    $("#latiendaboton").css('display', 'block');
    $("#2misproductos").attr('class', 'grid_8 alpha flex_perfil_producto');
    $("#1misproductos").load("../../../../../../../buscandoproductoeditar.php?tipo="+tipo+"&id_producto="+id_producto+"&id_contacto="+id_contacto+"&id_tienda="+id_tienda);
    $("#2misproductos").load("../../../../../../../buscandoproductoimgeditar.php?tipo="+tipo+"&id_producto="+id_producto+"&id_contacto="+id_contacto+"&id_tienda="+id_tienda);
     window.scrollTo(0, 0);
});
$('.texto_boton_imagen6').click(function(){
    var id_producto = $(this).attr('id_producto');
    var tipo = "editor";
    var id_tienda = $(this).attr('id_tienda');
    var id_contacto = $(this).attr('id_contacto');
    var botonselecto= $("#botonselecto").attr('selecto');
    var botonactual= $(this).attr('botonactual');
    $("#botonselecto").attr("selecto", botonactual);
    $("#1"+botonselecto).css('display', 'none');
    $("#2"+botonselecto).css('display', 'none');
    $("#1"+botonactual).css('display', 'flex');
    $("#2"+botonactual).css('display', 'flex');
    $("#buscaproductos").css('display', 'flex');
    $("#2latiendaboton").css('display', 'none');
    $("#2micontactoboton").css('display', 'none');
    $("#latiendaboton").css('display', 'block');
    $("#2misproductos").attr('class', 'grid_8 alpha flex_perfil_producto');
    $("#1misproductos").load("../../../../../../../editar_imagen_tienda.php?tipo="+tipo+"&id_producto="+id_producto+"&id_contacto="+id_contacto+"&id_tienda="+id_tienda);
    $("#2misproductos").load("../../../../../../../buscandoproductoimgeditar.php?tipo="+tipo+"&id_producto="+id_producto+"&id_contacto="+id_contacto+"&id_tienda="+id_tienda);
     window.scrollTo(0, 0);
});
$('.paginacionlista').on('click', function(event) {
   /* Act on the event */
  if (anchoventana()>1024) {
    $('html, body').animate({scrollTop:500});
  }else {
    var ir_principio_productos=800+anchoventana();
    $('html, body').animate({scrollTop:ir_principio_productos});
  }
});
</script>