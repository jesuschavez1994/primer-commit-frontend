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
		//alert('abierto'+abierto );
		
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
		
		alert('abierto'+abierto );
		*/
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
		var menos= "menos"+id_categoria;
		var mas= "mas"+id_categoria;
		
		$("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		
		/*var categoriaselecta = $("#categoriaselecta").val();
		alert('JOLIN'+id_subcategoria );
		alert('SUBCATEGORIA primero1 id_categoria'+id_categoria );*/
		var tipo = "categoria";
		
		$("#categoria"+id_categoria).slideUp( 800 );
		id_categoria
		$("#subcategoria"+id_subcategoria).css('display', 'block');
		$("#categoria"+id_categoria).load("buscandotienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto);
		 $("#categoria"+id_categoria).show( "slow" );
		 $("#categoria"+id_categoria).fadeIn( 2500 );
		
		if(abierto==1){
		
		
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "1");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
					
					
			$("#subcategoria"+subselecto).css('display', 'none');
			
						
		 $(this).attr("abierto", "0");
			 $(this).css('color', '#000');
		 $(this).css('background-color', '#CCC');
		 
				
		 
		}else
		{
			////alert('JOLIN'+abierto );
		
		var tipo = "categoria";
		  if(id_subcategoria!=subselecto){
		
			
			/*/////////IDICAR NUEVO SELECTO*/
		//	 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "0");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
						/*SUBCATEGORIA*/
					
					 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
					
					 }else{
		
						 
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
		//alert("busca");
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		var subselecto= $("#categoriaselecta").attr('subselecto');
		var categoria = $(this).val();
		var tipo = "categoria";
		
		var menos= "menos"+id_categoria;
		var mas= "mas"+id_categoria;
		
		$("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/
		$("#categoria"+id_categoria).slideUp( 800 );
		$("#subcategoria"+id_subcategoria).css('display', 'block');
		$("#categoria"+id_categoria).load("buscandotienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto);
		 $("#categoria"+id_categoria).show( "slow" );
		 $("#categoria"+id_categoria).fadeIn( 2500 );
		
		//alert("buscandotienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto );
		id_categoria
		if(abierto==1){
		
		//// $("#categoria"+id_categoria).attr("display", "block");/
		/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
		//	$("#subcategoria"+subselecto).css('display', 'none');
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
		 if(id_subcategoria!=subselecto){
		
		 
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
		
		var menos= "menos"+id_categoria;
		var mas= "mas"+id_categoria;
		
		$("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		
		
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/
	//	alert("abierto"+abierto );
		var tipo = "categoria";
		$("#categoria"+id_categoria).slideUp( 800 );
		$("#subcategoria"+id_subcategoria).css('display', 'block');
		$("#categoria"+id_categoria).load("buscandotienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto);
		 $("#categoria"+id_categoria).show( "slow" );
		 $("#categoria"+id_categoria).fadeIn( 2500 );
		
		id_categoria
		if(abierto==1){
				//// $("#categoria"+id_categoria).attr("display", "block");/
		
		/*/////////////ABRIR PESTAÑAS*/
		
			/*/////////IDICAR NUEVO SELECTO*/
			// $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "1");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
					
						
		 $(this).attr("abierto", "0");
			 $(this).css('color', '#000');
		 $(this).css('background-color', '#CCC');
		 
		}else
		{
			////alert('JOLIN'+abierto );
		
		var tipo = "categoria";
		 if(id_subcategoria!=subselecto){
		
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
		
		var menos= "menos"+id_categoria;
		var mas= "mas"+id_categoria;
		
		$("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/////////////////////ojo aqui/////////
	//	alert('id_subcategoria'+id_subcategoria );
		$("#categoria"+id_categoria).slideUp( 800 );
		$("#subcategoria"+id_subcategoria).css('display', 'block');
		$("#categoria"+id_categoria).load("buscandotienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto);
		 $("#categoria"+id_categoria).show( "slow" );
		 $("#categoria"+id_categoria).fadeIn( 2500 );
		 
		
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		//// $("#categoria"+id_categoria).attr("display", "block");/
		
		
		/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
			
			
			
			 
			
			
			
			
			
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
		//	$("#subcategoria"+subselecto).css('display', 'none');
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
		 if(id_subcategoria!=subselecto){
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

/*////////////////////////////////////////MENOS///////////////////////////////*/

$(function(){
	$('.menos').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		var subselecto= $("#categoriaselecta").attr('subselecto');
		var categoria = $(this).val();
		var cual = "menos";
		var menos= "menos"+id_categoria;
		var mas= "mas"+id_categoria;
		var actual= $(this).attr('actual');
		
		$("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/////////////////////ojo aqui/////////
		alert('id_subcategoria');
		$("#categoria"+id_categoria).slideUp( 800 );
		$("#subcategoria"+id_subcategoria).css('display', 'block');
		$("#categoria"+id_categoria).load("buscandootratienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&cual="+cual+"&abierto="+abierto+"&actual="+actual);
		 $("#categoria"+id_categoria).show( "slow" );
		 $("#categoria"+id_categoria).fadeIn( 2500 );
		 
		
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		//// $("#categoria"+id_categoria).attr("display", "block");/
		
		
		/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
			
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "1");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
					
					
					//	 $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			
						
		 $(this).attr("abierto", "0");
			 $(this).css('color', '#000');
		 $(this).css('background-color', '#CCC');
		 
						
		 
		}else
		{
			////alert('JOLIN'+abierto );
		
		var tipo = "categoria";
		 if(id_subcategoria!=subselecto){
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		
			
			/*/////////IDICAR NUEVO SELECTO*/
		//	 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "0");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
						/*SUBCATEGORIA*/
				
					
					 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
					
					 }else{
						
						 
			//			 $("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
								 	
		 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		 
		 
		 
		 
						 }
				
		
		}
	});

});

/*////////////////////////////////////////MAS///////////////////////////////*/

$(function(){
	$('.mas').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		var subselecto= $("#categoriaselecta").attr('subselecto');
		var categoria = $(this).val();
		var cual = "mas";
		var menos= "menos"+id_categoria;
		var mas= "mas"+id_categoria;
		var todos= "todos"+id_categoria;
		var cerrar= "cerrar"+id_categoria;
		var inicio= "inicio"+id_categoria;
		var actual= $(this).attr('actual');
		
		$("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		$("#"+todos).attr("id_subcategoria", id_subcategoria);
		$("#"+cerrar).attr("id_subcategoria", id_subcategoria);
		$("#"+inicio).attr("id_subcategoria", id_subcategoria);
		alert(categoria);
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/////////////////////ojo aqui/////////
		
		$("#categoria"+id_categoria).slideUp( 800 );
		$("#subcategoria"+id_subcategoria).css('display', 'block');
		$("#categoria"+id_categoria).load("buscandootratienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&cual="+cual+"&abierto="+abierto+"&actual="+actual);
		 $("#categoria"+id_categoria).show( "slow" );
		 $("#categoria"+id_categoria).fadeIn( 2500 );
		 
		
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		//// $("#categoria"+id_categoria).attr("display", "block");/
		
		
		/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
			
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "1");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
					
					
					//	 $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			
						
		 $(this).attr("abierto", "0");
			 $(this).css('color', '#000');
		 $(this).css('background-color', '#CCC');
		 
						
		 
		}else
		{
			////alert('JOLIN'+abierto );
		
		var tipo = "categoria";
		 if(id_subcategoria!=subselecto){
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		
			
			/*/////////IDICAR NUEVO SELECTO*/
		//	 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "0");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
						/*SUBCATEGORIA*/
				
					
					 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
					
					 }else{
						
						 
			//			 $("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
								 	
		 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		 
		 
		 
		 
						 }
				
		
		}
	});

});

/*////////////////////////////////////////TODOS///////////////////////////////*/

$(function(){
	$('.todas').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		var subselecto= $("#categoriaselecta").attr('subselecto');
		var categoria = $(this).val();
		var cual = "todos";
		var menos= "menos"+id_categoria;
		var mas= "mas"+id_categoria;
		var todos= "todos"+id_categoria;
		var cerrar= "cerrar"+id_categoria;
		var inicio= "inicio"+id_categoria;
		alert(mas);
		$("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		$("#"+todos).attr("id_subcategoria", id_subcategoria);
		$("#"+cerrar).attr("id_subcategoria", id_subcategoria);
		$("#"+inicio).attr("id_subcategoria", id_subcategoria);
		var actual= $(this).attr('actual');
		
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/////////////////////ojo aqui/////////
		
		$("#categoria"+id_categoria).slideUp( 800 );
		$("#subcategoria"+id_subcategoria).css('display', 'block');
		$("#categoria"+id_categoria).load("buscandootratienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&cual="+cual+"&abierto="+abierto+"&actual="+actual);
		 $("#categoria"+id_categoria).show( "slow" );
		 $("#categoria"+id_categoria).fadeIn( 2500 );
		 
		
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		//// $("#categoria"+id_categoria).attr("display", "block");/
		
		
		/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
			
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "1");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
					
					
					//	 $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			
						
		 $(this).attr("abierto", "0");
			 $(this).css('color', '#000');
		 $(this).css('background-color', '#CCC');
		 
						
		 
		}else
		{
			////alert('JOLIN'+abierto );
		
		var tipo = "categoria";
		 if(id_subcategoria!=subselecto){
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		
			
			/*/////////IDICAR NUEVO SELECTO*/
		//	 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "0");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
						/*SUBCATEGORIA*/
				
					
					 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
					
					 }else{
						
						 
			//			 $("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
								 	
		 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		 
		 
		 
		 
						 }
				
		
		}
	});

});

/*////////////////////////////////////////CERRAR///////////////////////////////*/

$(function(){
	$('.cerrar').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		var subselecto= $("#categoriaselecta").attr('subselecto');
		var categoria = $(this).val();
		var cual = "cerrar";
		var menos= "menos"+id_categoria;
		var mas= "mas"+id_categoria;
		var todos= "todos"+id_categoria;
		var cerrar= "cerrar"+id_categoria;
		var inicio= "inicio"+id_categoria;
		
		$("#"+menos).attr("id_subcategoria", id_subcategoria);
		
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		$("#"+todos).attr("id_subcategoria", id_subcategoria);
		$("#"+cerrar).attr("id_subcategoria", id_subcategoria);
		$("#"+inicio).attr("id_subcategoria", id_subcategoria);
		alert("gg");
		
		alert(mas);
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/////////////////////ojo aqui/////////
		var actual= $(this).attr('actual');
		$("#categoria"+id_categoria).slideUp( 800 );
		$("#subcategoria"+id_subcategoria).css('display', 'block');
		$("#categoria"+id_categoria).load("buscandootratienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&cual="+cual+"&abierto="+abierto+"&actual="+actual);
		 $("#categoria"+id_categoria).show( "slow" );
		 $("#categoria"+id_categoria).fadeIn( 2500 );
		 
		
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		//// $("#categoria"+id_categoria).attr("display", "block");/
		
		
		/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
			
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "1");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
					
					
					//	 $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			
						
		 $(this).attr("abierto", "0");
			 $(this).css('color', '#000');
		 $(this).css('background-color', '#CCC');
		 
						
		 
		}else
		{
			////alert('JOLIN'+abierto );
		
		var tipo = "categoria";
		 if(id_subcategoria!=subselecto){
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		
			
			/*/////////IDICAR NUEVO SELECTO*/
		//	 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "0");
		  			$("#botonsubcate"+subselecto).css('color', '#000');
		 			$("#botonsubcate"+subselecto).css('background-color', '#CCC');
						/*SUBCATEGORIA*/
				
					
					 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
					
					 }else{
						
						 
			//			 $("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
								 	
		 $(this).attr("abierto", "1");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		 
		 
		 
		 
						 }
				
		
		}
	});

});

$(function(){
	$('#tienda').keyup(function(){
								
		//var tienda = $('#tienda').val();
		var nom = $('#tienda').val();
		  var araay = new Array();
		var array_cadena=nom.split(" ");
		for (x=0;x<array_cadena.length;x++){
			tienda = array_cadena.join('_');
			}
		var tipo = "tienda";
		$("#campo").load("buscandolatienda.php?tienda="+tienda+"&tipo="+tipo);
		
	});


});

