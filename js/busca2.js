// declarar variable para Document


var x;
x=$(document);
/*////////////////////////////////SEGUNDO BOTON CATEGORIA//////////////////////////////////////////*/

$(function(){
	$('.pic1-botoncategoria').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		var subselecto= $("#categoriaselecta").attr('subselecto');
		var categoria = $(this).val();
		/*var categoriaselecta = $("#categoriaselecta").val();
		
		alert('categoriaselecta'+categoriaselecta );
		*/
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		//// $("#categoria"+id_categoria).attr("display", "block");/
		
		 $(this).attr("abierto", "0");
			 $(this).css('color', '#000');
		 $(this).css('background-color', '#ccc');
		  /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		  $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			
			 if(id_categoria!=categoriaselecta){
			
		/*/////////////ABRIR PESTAÑAS*/
			$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
			
		/*/////////IDICAR NUEVO SELECTO*/
			 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 	//		$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
		  			$("#botoncategoria"+categoriaselecta).css('color', '#FFF');
		 			$("#botoncategoria"+categoriaselecta).css('background-color', '#F99615');
					
					
					
				//	$("#catesubcate"+categoriaselecta).css('display', 'none');
				//	$("#subcategoria"+subselecto).css('display', 'none');
				//	$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
				}
		 
		}else
		{
			////alert('JOLIN'+abierto );
			
		 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		 
		var tipo = "categoria";
		
		/*/////////////ABRIR PESTAÑAS*/
			$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		
		if(id_categoria!=categoriaselecta){	
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		  $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////IDICAR NUEVO SELECTO*/
			 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 //			$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
		  			$("#botoncategoria"+categoriaselecta).css('color', '#000');
		 			$("#botoncategoria"+categoriaselecta).css('background-color', '#CCC');
					
		}
		
		}
	});

});
/*////////////////////////////////PRIMER BOTON CATEGORIA//////////////////////////////////////////*/
$(function(){
	$('.pic1-botoncategoria1').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		var subselecto= $("#categoriaselecta").attr('subselecto');
		var categoria = $(this).val();
		//alert('#abierto'+abierto );
		
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		
		
		
		$(this).attr("abierto", "0");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		 $("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		         
				 
				 
				 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		 // $("#catesubcate"+categoriaselecta).css('display', 'none');
		//	$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////IDICAR NUEVO SELECTO*/
			 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			//$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
		  			$("#botoncategoria"+categoriaselecta).css('color', '#000');
		 			$("#botoncategoria"+categoriaselecta).css('background-color', '#ccc');
		 
				 
		
		
		}else
		{
			
			 $(this).attr("abierto", "1");
			 $(this).click("input").css('color', '#000');
		 $(this).css('background-color', '#ccc');
		
		var tipo = "categoria";
		 $("#catesubcate"+id_categoria).css('display', 'none');
			$("#subcategoria"+id_subcategoria).css('display', 'none');
	$(this).css('display', 'block');
	
	
					 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		  $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////IDICAR NUEVO SELECTO*/
			 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
		  			$("#botoncategoria"+categoriaselecta).css('color', '#000');
		 			$("#botoncategoria"+categoriaselecta).css('background-color', '#ccc');
		 
	
		 
		
		}
	});

});

/*////////////////////////////////////////SUBCATEGORIA///////////////////////////////*/
$(function(){
	$('.pic1-botonsubcategoriaprimero1').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var selecto= $(this).attr('selecto');
		var categoria = $(this).val();
		/*alert('JOLIN'+abierto );*/
		
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		
		
		$(this).attr("abierto", "0");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		$("#subcategoria"+id_categoria).css('display', 'none');
		$("#subcategoria"+selecto).css('display', 'block');
		/*$("#categoria"+id_categoria).load("../../../../../../../buscandotienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);
		$("#subcategoria"+id_categoria).load("../../../../../../../buscando.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);*/
		
		}else
		{
			
			 $(this).attr("abierto", "1");
			 $(this).click("input").css('color', '#000');
			 
		 $(this).click("input").css('background-color', '#ccc');
		 
		var tipo = "categoria";
		$("#subcategoria"+id_categoria).css('display', 'block');
		$("#subcategoria"+selecto).css('display', 'none');
		
		
		/* $("#categoria"+id_categoria).attr("display", "block");
		$("#categoria"+id_categoria).load("../../../../../../../buscandotienda.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);
		$("#subcategoria"+id_categoria).load("../../../../../../../buscando.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);
		*/
		}
	});

});
$(function(){
	$('.pic1-botonsubcategoria').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var selecto= $(this).attr('selecto');
		var categoria = $(this).val();
		
		//alert('JOLIN'+abierto );
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		
		
		$(this).attr("abierto", "0");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		$("#subcategoria"+id_categoria).css('display', 'none');
		$("#subcategoria"+selecto).css('display', 'block');
	
		
		}else
		{
			
			 $(this).attr("abierto", "1");
			 $(this).click("input").css('color', '#000');
			 
		 $(this).click("input").css('background-color', '#ccc');
		 
		var tipo = "categoria";
		$("#subcategoria"+id_categoria).css('display', 'block');
		$("#subcategoria"+selecto).css('display', 'none');
		
		
		/* $("#categoria"+id_categoria).attr("display", "block");
		$("#categoria"+id_categoria).load("../../../../../../../buscandotienda.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);
		$("#subcategoria"+id_categoria).load("../../../../../../../buscando.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);
		*/
		}
	});

});
