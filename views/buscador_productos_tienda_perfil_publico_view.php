<div class="grid_12" style="min-height: 450px">
<?php
if ($total>0){
  for ($i = 0; $i < $total; $i++){
    ?> 
    <div class="grid_2_perfil omega contenedor3 entrada_imagen"> 
      <div class="grid_12perfil2">
        <div class="boxp1 editar_productos_perfil2" style="font-size:11px;" id="edita<?php echo $id_productos[$i]; ?>" id_producto="<?php echo $id_productos[$i]; ?>" id_tienda="<?php echo $id_tienda; ?>" id_contacto="<?php echo $id_contacto; ?>"   botonactual="misproductos" nombre_imagen_producto='<?php echo $nombre_imagen_producto[$i];?>'>
            <a href="../../../../../../../perfil/<?php echo $usuario_publico[$i]; ?>/<?php echo $id_productos[$i]; ?>~<?php echo $nombre_imagen_producto[$i];?>/page=<?php echo $page; ?>">
              <?php  
              $titu =  $productos[$i];
              $texto = $descripcion_producto[$i]; 
              ?>  
              <div class="demo-content2" style="width:100%;clear: left" >
                <img class="grid_img_1 image3" src="../../../../../../../img/Caja 1000x1000_Mesa de trabajo 1 copia.svg" data-src="../../../../../../../contactos/contacto<?php echo $id_contacto; ?>/<?php echo $nombre_imagen_producto[$i]; echo $id_productos[$i]; ?>/<?php echo $nombre_imagen_producto[$i];?>g1_<?php echo $id_productos[$i]; ?>.jpeg?<?php echo $version_imagen_producto[$i]?>" 
                  alt="<?php echo $nombre_imagen_producto[$i];?>g1_<?php echo $id_productos[$i]; ?>.jpeg"
                onerror="this.src='../../../../../../../img/Caja 1000x1000_Mesa de trabajo 1 copia.svg';" title="<?php echo $productos[$i]; ?>_<?php echo $descripcion_producto[$i]; ?>" />
              </div>
              <div class="boxtexto" title="<?php echo $productos[$i]; ?>">
                <div class="boxtexto-contenido1" >
                  <?php 
                  if($precio[$i]!=null){ 
                    echo "Bs. ".$precio[$i];
                  }else echo "Precio a Consultar" ?>
                </div>
                <div class="boxtexto-contenido2">
                  <?php echo $titu ?>
                </div>
              </div>
            </a> 
        </div>
      </div>
    </div>  
  <?php 
  } 
}else{
    ?>
    <div class="nohay" >
      <p> Tu búsqueda <span>"<?php echo $producto?>"</span>no coincide con ningún producto ó servicio de la tienda "<?php echo $tienda;?>"</p>
      <p>TE RECOMENDAMOS</p>
      <br>
      <p> 1. Usar palabras más comunes o generales.</p>
      <p>2. Usar una mejor ortografía.</p>
      <p>3. Para ayudarte a encontrar un producto parecido a tu búsqueda, navega por nuestro buscador principal.</p>
      <img src="../../../../../../../img/imagen_cono.png">
    </div>
  <?php 
}
?>
</div>
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
});
$('.paginacionlista').on('click', function(event) {
  if (anchoventana()>1024) {$('html, body').animate({scrollTop:500});}else {
    var ir_principio_productos=800+anchoventana();
    $('html, body').animate({scrollTop:ir_principio_productos});}
});
</script>