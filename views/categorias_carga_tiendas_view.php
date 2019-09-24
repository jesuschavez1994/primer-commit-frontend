<?php
if ($total_tiendas>0){
  for ($a = 0; $a < $total_tiendas; $a++){
  ?>    
  <div class="pic1-cajapequena two columns buscalatiendad2"  style="max-height:600px; margin-top:0px; margin-bottom: 10px "> 
    <div class="boxp" style="  font-size:11px; " >
      <div class="demo-content-categoria" style="width:100%;clear: left" >
          <img class="grid_img_1 image3" src="../../../../../../../tiendas/tieg_0.jpeg" data-src="../../../../../../../contactos/contacto<?php echo $id_contacto[$a]; ?>/tienda<?php echo $imgp[$a]; ?>/tieg_<?php echo $imgp[$a]; ?>.jpeg?<?php echo $version_imagen_tienda[$a]; ?>" onerror="this.src='../../../../../../../tiendas/tieg_0.jpeg';"  title="<?php echo $tienda[$a]; ?>" >   
      </div>
      <div class="boxtexto" >
        <div class="boxtexto-contenido2 cuadro_tienda">
          <?php 
          if(!empty($nombre_franquicia[$a])){?>
            <p style="font-size:20px;"><?php  echo $nombre_franquicia[$a];?></p>
          <?php 
          }else{ ?>
            <p style="font-size:20px;"> <?php  echo $tienda[$a];?></p>
          <?php 
          } ?>
          <p style="font-size: 12px; color:rgb(100,100,100);padding-top:5px"> <?php  echo $direccion[$a];?></p>
        </div>
        <div class="boxtexto-contenido3">
          <?php echo $ciudad[$a] ?>
        </div>
      </div>
      <a href="../../../../../../../perfil/<?php echo $usuario_publico[$a]; ?>" style=" height:100%; width: 100%; border-radius:3px; border-bottom-style:none; border-right-style:none; font-weight:bold; position:absolute; top:0px; right:0px; background-color:transparent;border-color:transparent;z-index: 3    "> 
      </a> 
    </div>
  </div>
  <?php 
  } 
  }else{
  ?>
  <div style="min-height: 700px">
  <div class="nohay" >
     <p> En este momento no poseemos tiendas en esta categorias</p>
     <p>TE RECOMENDAMOS</p>
     <br>
     <p> Explorar otras categorias</p>
    <img src="../../../../../../../img/imagen_cono.png">
    </div>
  </div>
  <?php  
  } 
  ?>
  <div class="table-pagination pull-right twelve columns">
    <?php echo paginate($reload, $page, $total_pages, $adjacents);?>
  </div>
  <script >
inView( '.demo-content-categoria' ).on( 'enter', function( figure ) {
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
</script>