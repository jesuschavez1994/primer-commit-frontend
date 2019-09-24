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
		*/
		alert('abierto'+abierto );
		
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		//// $("#categoria"+id_categoria).attr("display", "block");/
		
		
		/*/////////////ABRIR PESTAÑAS*/
			$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		  $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////IDICAR NUEVO SELECTO*/
			 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
		  			$("#botoncategoria"+categoriaselecta).css('color', '#000');
		 			$("#botoncategoria"+categoriaselecta).css('background-color', '#CCC');
					/*SUBCATEGORIA*/
					$("#botonsubcate"+subselecto).attr("abierto", "0");
					$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
					
					
						 $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			
						
		 $(this).attr("abierto", "0");
			 $(this).css('color', '#000');
		 $(this).css('background-color', '#CCC');
		 
						
					
					
				//	$("#catesubcate"+categoriaselecta).css('display', 'none');
				//	$("#subcategoria"+subselecto).css('display', 'none');
				//	$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
				
		 
		}else
		{
			////alert('JOLIN'+abierto );
		
		var tipo = "categoria";
		 if(id_categoria!=categoriaselecta){
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		  $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////////ABRIR PESTAÑAS*/
			$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		
			
			/*/////////IDICAR NUEVO SELECTO*/
			 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botoncategoria"+categoriaselecta).attr("abierto", "0");
		  			$("#botoncategoria"+categoriaselecta).css('color', '#000');
		 			$("#botoncategoria"+categoriaselecta).css('background-color', '#CCC');
					
					/*SUBCATEGORIA*/
					$("#botonsubcate"+subselecto).attr("abierto", "0");
					$("#botonsubcate"+subselecto).css('color', '#FFF');
		 			$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					
					 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
					
					 }else{
						 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
		//	$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
		//	$("#subcategoria"+id_subcategoria).css('display', 'block');
		
						 
						 $("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
								 	
		 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		 
		 /*SUBCATEGORIA*/
					$("#botonsubcate"+subselecto).attr("abierto", "0");
					$("#botonsubcate"+subselecto).css('color', '#FFF');
		 			$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
		 
		 
		 
						 }
				
		
		}
	});

});


////////////////////////////////PRIMER BOTON CATEGORIA//////////////////////////////////////////*/

$(function(){
	$('.pic1-botoncategoria1').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		var subselecto= $("#categoriaselecta").attr('subselecto');
		var categoria = $(this).val();
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/
		alert('abierto'+abierto );
		
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		//// $("#categoria"+id_categoria).attr("display", "block");/
		
		
		/*/////////////ABRIR PESTAÑAS*/
			$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		  $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////IDICAR NUEVO SELECTO*/
			 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
		  			$("#botoncategoria"+categoriaselecta).css('color', '#000');
		 			$("#botoncategoria"+categoriaselecta).css('background-color', '#CCC');
					
						/*SUBCATEGORIA*/
					$("#botonsubcate"+subselecto).attr("abierto", "0");
					$("#botonsubcate"+subselecto).css('color', '#FFF');
		 			$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					
					
						 $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			
						
		 $(this).attr("abierto", "0");
			 $(this).css('color', '#000');
		 $(this).css('background-color', '#CCC');
		 
						
					
					
				//	$("#catesubcate"+categoriaselecta).css('display', 'none');
				//	$("#subcategoria"+subselecto).css('display', 'none');
				//	$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
				
		 
		}else
		{
			////alert('JOLIN'+abierto );
		
		var tipo = "categoria";
		 if(id_categoria!=categoriaselecta){
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		  $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////////ABRIR PESTAÑAS*/
			$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		
			
			/*/////////IDICAR NUEVO SELECTO*/
			 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botoncategoria"+categoriaselecta).attr("abierto", "0");
		  			$("#botoncategoria"+categoriaselecta).css('color', '#000');
		 			$("#botoncategoria"+categoriaselecta).css('background-color', '#CCC');
						/*SUBCATEGORIA*/
					$("#botonsubcate"+subselecto).attr("abierto", "0");
					$("#botonsubcate"+subselecto).css('color', '#FFF');
		 			$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
					
					 }else{
						 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
		//	$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
		//	$("#subcategoria"+id_subcategoria).css('display', 'block');
		
						 
						 $("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
								 	
		 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		 
		 
		 
		 
						 }
				
		
		}
	});

});




/*////////////////////////////////////////SUBCATEGORIA primero1 ///////////////////////////////*/

$(function(){
	$('.pic1-botonsubcategoriaprimero1').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		var subselecto= $("#categoriaselecta").attr('subselecto');
		var categoria = $(this).val();
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/
		alert('id_subcategoria'+id_subcategoria );
		
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		//// $("#categoria"+id_categoria).attr("display", "block");/
		
		
		/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////IDICAR NUEVO SELECTO*/
			// $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "1");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
					
						/*SUBCATEGORIA*/
				///	$("#botonsubcate"+subselecto).attr("abierto", "0");
				//	$("#botonsubcate"+subselecto).css('color', '#FFF');
		 		//	$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					
					
					//	 $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			
						
		 $(this).attr("abierto", "0");
			 $(this).css('color', '#000');
		 $(this).css('background-color', '#CCC');
		 
						
					
					
				//	$("#catesubcate"+categoriaselecta).css('display', 'none');
				//	$("#subcategoria"+subselecto).css('display', 'none');
				//	$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
				
		 
		}else
		{
			////alert('JOLIN'+abierto );
		
		var tipo = "categoria";
		 if(id_categoria!=categoriaselecta){
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		
			
			/*/////////IDICAR NUEVO SELECTO*/
		//	 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "0");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
						/*SUBCATEGORIA*/
				//	$("#botonsubcate"+subselecto).attr("abierto", "0");
				//	$("#botonsubcate"+subselecto).css('color', '#FFF');
		 		//	$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
					
					 }else{
						 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
		//	$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
		//	$("#subcategoria"+id_subcategoria).css('display', 'block');
		
						 
			//			 $("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
								 	
		 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		 
		 
		 
		 
						 }
				
		
		}
	});

});


/*////////////////////////////////////////SUBCATEGORIA primero///////////////////////////////*/

$(function(){
	$('.pic1-botonsubcategoriaprimero').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		var subselecto= $("#categoriaselecta").attr('subselecto');
		var categoria = $(this).val();
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/
		alert('id_subcategoria'+id_subcategoria );
		
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		//// $("#categoria"+id_categoria).attr("display", "block");/
		
		
		/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////IDICAR NUEVO SELECTO*/
			// $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "1");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
					
						/*SUBCATEGORIA*/
				///	$("#botonsubcate"+subselecto).attr("abierto", "0");
				//	$("#botonsubcate"+subselecto).css('color', '#FFF');
		 		//	$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					
					
					//	 $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			
						
		 $(this).attr("abierto", "0");
			 $(this).css('color', '#000');
		 $(this).css('background-color', '#CCC');
		 
						
					
					
				//	$("#catesubcate"+categoriaselecta).css('display', 'none');
				//	$("#subcategoria"+subselecto).css('display', 'none');
				//	$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
				
		 
		}else
		{
			////alert('JOLIN'+abierto );
		
		var tipo = "categoria";
		 if(id_categoria!=categoriaselecta){
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		
			
			/*/////////IDICAR NUEVO SELECTO*/
		//	 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "0");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
						/*SUBCATEGORIA*/
				//	$("#botonsubcate"+subselecto).attr("abierto", "0");
				//	$("#botonsubcate"+subselecto).css('color', '#FFF');
		 		//	$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
					
					 }else{
						 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
		//	$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
		//	$("#subcategoria"+id_subcategoria).css('display', 'block');
		
						 
			//			 $("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
								 	
		 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		 
		 
		 
		 
						 }
				
		
		}
	});

});


/*////////////////////////////////////////SUBCATEGORIA ///////////////////////////////*/

$(function(){
	$('.pic1-botonsubcategoria').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		var subselecto= $("#categoriaselecta").attr('subselecto');
		var categoria = $(this).val();
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/
		alert('id_subcategoria'+id_subcategoria+"abierto"+abierto );
		
		
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		//// $("#categoria"+id_categoria).attr("display", "block");/
		
		
		/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////IDICAR NUEVO SELECTO*/
			// $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "1");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
					
						/*SUBCATEGORIA*/
				///	$("#botonsubcate"+subselecto).attr("abierto", "0");
				//	$("#botonsubcate"+subselecto).css('color', '#FFF');
		 		//	$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					
					
					//	 $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			
						
		 $(this).attr("abierto", "0");
			 $(this).css('color', '#000');
		 $(this).css('background-color', '#CCC');
		 
						
					
					
				//	$("#catesubcate"+categoriaselecta).css('display', 'none');
				//	$("#subcategoria"+subselecto).css('display', 'none');
				//	$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
				
		 
		}else
		{
			////alert('JOLIN'+abierto );
		
		var tipo = "categoria";
		 if(id_categoria!=categoriaselecta){
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		
			
			/*/////////IDICAR NUEVO SELECTO*/
		//	 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "0");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
						/*SUBCATEGORIA*/
				//	$("#botonsubcate"+subselecto).attr("abierto", "0");
				//	$("#botonsubcate"+subselecto).css('color', '#FFF');
		 		//	$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
					
					 }else{
						 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
		//	$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
		//	$("#subcategoria"+id_subcategoria).css('display', 'block');
		
						 
			//			 $("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
								 	
		 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		 
		 
		 
		 
						 }
				
		
		}
	});

});


/*////////////////////////////////////////SUBCATEGORIA ultimo///////////////////////////////*/

$(function(){
	$('.pic1-botonsubcategoriaultimo').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		var subselecto= $("#categoriaselecta").attr('subselecto');
		var categoria = $(this).val();
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/
		alert('id_subcategoria'+id_subcategoria );
		
		
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		//// $("#categoria"+id_categoria).attr("display", "block");/
		
		
		/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////IDICAR NUEVO SELECTO*/
			// $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "1");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
					
						/*SUBCATEGORIA*/
				///	$("#botonsubcate"+subselecto).attr("abierto", "0");
				//	$("#botonsubcate"+subselecto).css('color', '#FFF');
		 		//	$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					
					
					//	 $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			
						
		 $(this).attr("abierto", "0");
			 $(this).css('color', '#000');
		 $(this).css('background-color', '#CCC');
		 
						
					
					
				//	$("#catesubcate"+categoriaselecta).css('display', 'none');
				//	$("#subcategoria"+subselecto).css('display', 'none');
				//	$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
				
		 
		}else
		{
			////alert('JOLIN'+abierto );
		
		var tipo = "categoria";
		 if(id_categoria!=categoriaselecta){
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		
			
			/*/////////IDICAR NUEVO SELECTO*/
		//	 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "0");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
						/*SUBCATEGORIA*/
				//	$("#botonsubcate"+subselecto).attr("abierto", "0");
				//	$("#botonsubcate"+subselecto).css('color', '#FFF');
		 		//	$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
					
					 }else{
						 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
		//	$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
		//	$("#subcategoria"+id_subcategoria).css('display', 'block');
		
						 
			//			 $("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
								 	
		 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		 
		 
		 
		 
						 }
				
		
		}
	});

});


