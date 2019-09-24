<?php
$a=0;
foreach ($estados as $estado) {
  $id_estado_sel[$a] = $estado['id_estado'];
  $estado_sel[$a] = $estado['estado'];
  $a++; 
}
$estadoes_totales=$a;
$a=0;
foreach ($categorias as $categoria) {
  $id_categoria_panel[$a] = $categoria["id_categoria"];
  $categoria_panel[$a] = $categoria["categoria"];
$a++; 
}
$total_categoria_panel=$a;
?>
<div class="Estilos_panel_de_registro_principal" style="z-index: 15" >
  <div class="two columns panel estilos_logo_panel_de_registro" >
      <div class="contenedor_logo" >
        <a href="../../../../../../../inicio" title="Founduss"><img src="../../../../../../../img/Icono de founduss copia-03-03.svg" class="logo_panel" id="clic_regreso_inicio" /><img src="../../../../../../../img/Isotipo Founduss-01.svg" class="logo_view"></a> 
      </div>
  </div>
  <div class="two columns panel1 estilos_flotar_a_la_derecha" id="two_columns_panels_Tamaño" >
    <div class="div_ayuda_panel_de_registro">
      <h4 ><a class="estilos_ayuda_registro_de_contacto" id='mensaje_ayuda'>Ayuda</a></h4>
    </div>
    <div class="Linea_vertical_panel_de_registro">
    </div>
  </div>
  <div class="clear">
  </div>
</div>
<div id="myModal_panel" class="modal " style="display: none;">
   <div class="modal-content-advertencia"> 
     <p><span class="close2" id="cerrar_ventana_panel" >×</span></p>
     <div  class="caja_Advertencia" >
       <div class="container" id="container_caja_Advertencia"> 
          <img src="../../../../../../../img/icono.svg" id="imagen"> 
          <div class="texto_Eres_Empresa">¿Eres Empresa?</div>
          <div class="Caja_si_no"> 
            <a href="../../../../../../../registro" class="si_eres_empresa"> Si</a>
            <div class="raya_Eres_medio_eres_Empresa"></div>
            <a class="close2" id="No_eres_empresa" >No</a>
          </div>
          <div class="texto">El Registro sólo aplica para Empresas Jurídicas </div>
        </div>
      </div>
    </div>
</div> 
<span class="icon-user-plus" style="display:none"></span><a style="display:none" id='link_registro_panel' class="ingreso_registro_css pestaña_reducida">Regístrate</a>
<div id="myModal_pie" class="modal " style="display: none;">
  <div class="modal-content windows_ayuda">
    <p><span class="close2" id="cerrar_ventana_mensaje_founduss" >×</span></p>
    <div class="contenedor_de_necesitas_ayuda_registro_de_contacto">
      <div class="container">
        <div id="contenido_mensaje_founduss" class="twelve columns " >
         <script src="../../../../../../../js/jquery-3.3.1.min.js"></script>
         <script src="../../../../../../../js/funciones_pie_pag.js"></script>
         <h3 class="texto_necesitas_ayuda">¿Necesitas ayuda?</h3>
         <form class="edit estilo_formulario_ayuda" id='enviarmensajefoundusscontenido'  method="post" name="form1" >
           <div class="divformulario">
             <fieldset>
               <label class="name">
                 <input type="email" id="correo_ingresa_correo_panel" class="editar clase_ingrese_su_correo" name="correo"  value="" required  title="Correo" placeholder="Su Correo por favor">
               </label>
             </fieldset>
             <br />
             <fieldset>
               <label class="name">
                 <input type="text" id="correo_clase_asunto_ayuda" class="editar clase_asunto_ayuda" name="asunto"  value="" required  title="Correo" placeholder="Asunto">
               </label>
             </fieldset>
             <br />
             <fieldset>
               <label class="name">
                 <textarea  name="mensaje" placeholder="Describa su necesidad "  style="width:100%; text-align:justify; max-height:210px;    border: 1px solid rgb(198, 198, 198);border-bottom: 1px solid rgb(198, 198, 198);border-bottom-right-radius: 14px;border-bottom-left-radius: 14px;border-top-left-radius: 14px;border-top-right-radius: 14px; background-color: rgb(242,242,242); margin-bottom:18px;" class="mensaje clase_text_tarea" required >
                 </textarea>
                 <br />
                 <input class="boton" name="" type="submit" value="Enviar"  >
               </label>
             </fieldset>
             <input name="correotienda" type="hidden" value="atencionalcliente@founduss.com">
             <input name="corre" type="hidden" value="18">
           </div>
         </form>
        </div>
       </div>
     </div>
   </div>
</div> 