// declarar variable para Document

var todasabierta;
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
			//$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		 // $("#catesubcate"+categoriaselecta).css('display', 'none');
			//$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////IDICAR NUEVO SELECTO*/
			 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
		  			
					/*SUBCATEGORIA*/
					$("#botonsubcate"+subselecto).attr("abierto", "0");
					
					
					
					
			
						
		 $(this).attr("abierto", "0");
		;
		 
						
					
					
			
				
		 
		}else
		{

		
		var tipo = "categoria";
		 if(id_categoria!=categoriaselecta){
	
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		
			
			/*/////////IDICAR NUEVO SELECTO*/
			 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botoncategoria"+categoriaselecta).attr("abierto", "0");
		  			
					
		
					$("#botonsubcate"+subselecto).attr("abierto", "0");
					
					
					
					 $(this).attr("abierto", "1");
		 
					
					 }else{
		
			$("#subcategoria"+id_subcategoria).css('display', 'block');
								 	
		 $(this).attr("abierto", "1");
		
		 
		
					$("#botonsubcate"+subselecto).attr("abierto", "0");
					
					
		 
		 
		 
						 }
				
		
		}
	});

});



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
		 //	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		 //  $("#catesubcate"+categoriaselecta).css('display', 'none');
			//$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////IDICAR NUEVO SELECTO*/
			 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
		  			
					
						/*SUBCATEGORIA*/
					$("#botonsubcate"+subselecto).attr("abierto", "0");
					
					
					
					
					 //	 $("#catesubcate"+categoriaselecta).css('display', 'none');
			//$("#subcategoria"+subselecto).css('display', 'none');
			
						
		 $(this).attr("abierto", "0");
			
						
					
					
				//	$("#catesubcate"+categoriaselecta).css('display', 'none');
				//	$("#subcategoria"+subselecto).css('display', 'none');
				//	$("#botoncategoria"+categoriaselecta).attr("abierto", "1");
				
		 
		}else
		{
			////alert('JOLIN'+abierto );
		
		var tipo = "categoria";
		 if(id_categoria!=categoriaselecta){
		 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
	 //	  $("#catesubcate"+categoriaselecta).css('display', 'none');
		//	$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////////ABRIR PESTAÑAS*/
		 //	$("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
		
			
			/*/////////IDICAR NUEVO SELECTO*/
			 $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botoncategoria"+categoriaselecta).attr("abierto", "0");
		  		
						/*SUBCATEGORIA*/
					$("#botonsubcate"+subselecto).attr("abierto", "0");
				
					
					 $(this).attr("abierto", "1");
		
					
					 }else{
						 /*////CERRAR PESTAÑAS DEL VIEJO SELECTO/////////*/
		//  $("#catesubcate"+categoriaselecta).css('display', 'none');
		//	$("#subcategoria"+subselecto).css('display', 'none');
			/*/////////////ABRIR PESTAÑAS*/
		//	$("#catesubcate"+id_categoria).css('display', 'block');
		//	$("#subcategoria"+id_subcategoria).css('display', 'block');
		
						 
					 //	 $("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
								 	
		 $(this).attr("abierto", "1");
		 
		 
		 
		 
		 
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
		var todas= "todas"+id_categoria;
		var cerrar= "cerrar"+id_categoria;
		var inicio= "inicio"+id_categoria;
		var actual= $(this).attr('actual');
		//var maxi= $(this).attr('maxi');
		var maxi= $(this).attr('maxi');
		//alert(maxi);
		
		
		 $("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		$("#"+todas).attr("id_subcategoria", id_subcategoria);
		$("#"+cerrar).attr("id_subcategoria", id_subcategoria);
		$("#"+inicio).attr("id_subcategoria", id_subcategoria);
		
		$("#"+menos).css('display', 'block');
		$("#"+mas).css('display', 'block');
		$("#"+todas).css('display', 'block');
		$("#"+cerrar).css('display', 'block');
		$("#"+inicio).css('display', 'none');
		
		$("#"+menos).attr('maxi', maxi);
		$("#"+mas).attr('maxi', maxi);
		$("#"+todas).attr('maxi', maxi);
		$("#"+cerrar).attr('maxi', maxi);
		$("#"+inicio).attr('maxi', maxi);
		
		$("#"+menos).attr('actual', actual);
		$("#"+mas).attr('actual', actual);
		$("#"+todas).attr('actual', actual);
		$("#"+cerrar).attr('actual', actual);
		$("#"+inicio).attr('actual', actual);

		$("#"+menos).attr("actuall", 0);
		$("#"+mas).attr("actuall", 0)
		
		
		/*var categoriaselecta = $("#categoriaselecta").val();
		alert('JOLIN'+id_subcategoria );
		alert('SUBCATEGORIA primero1 id_categoria'+id_categoria );*/
		var tipo = "categoria";
		$("#categoriak"+id_categoria).css('display', 'none');
		$("#categoria"+id_categoria).slideUp( 100 );
		
		$("#subcategoria"+id_subcategoria).css('display', 'block');
		$("#categoria"+id_categoria).load("../../../../../../../buscandotienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&maxi="+maxi+"&actual="+actual,function(response, status){
            if (status == "success"){
            	location.href="#botoncategoria"+id_categoria;
            	$("#popup-panel-"+id_categoria).css('display', 'none');
               $("#categoria"+id_categoria).slideDown(800);
                
                
            }
        });
		
		if(abierto==1){
		
		
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "1");
		  			
					
					
			$("#subcategoria"+subselecto).css('display', 'none');
			
						
		 $(this).attr("abierto", "0");
			 
		 
				
		 
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
		  		
						/*SUBCATEGORIA*/
					
					 $(this).attr("abierto", "1");
	
					
					 }else{
		
						 
			//			 $("#catesubcate"+id_categoria).css('display', 'block');
			$("#subcategoria"+id_subcategoria).css('display', 'block');
								 	
		 $(this).attr("abierto", "1");
		
		 
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
		var todas= "todas"+id_categoria;
		var cerrar= "cerrar"+id_categoria;
		var inicio= "inicio"+id_categoria;
		var actual= $(this).attr('actual');
		var maxi= $(this).attr('maxi');

		$("#"+menos).attr("actuall", 0);
		$("#"+mas).attr("actuall", 0)
		
		
		 $("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		$("#"+todas).attr("id_subcategoria", id_subcategoria);
		$("#"+cerrar).attr("id_subcategoria", id_subcategoria);
		$("#"+inicio).attr("id_subcategoria", id_subcategoria);
		
		$("#"+menos).css('display', 'block');
		$("#"+mas).css('display', 'block');
		$("#"+todas).css('display', 'block');
		$("#"+cerrar).css('display', 'block');
		$("#"+inicio).css('display', 'none');
		
		$("#"+menos).attr('maxi', maxi);
		$("#"+mas).attr('maxi', maxi);
		$("#"+todas).attr('maxi', maxi);
		$("#"+cerrar).attr('maxi', maxi);
		$("#"+inicio).attr('maxi', maxi);
		
		$("#"+menos).attr('actual', actual);
		$("#"+mas).attr('actual', actual);
		$("#"+todas).attr('actual', actual);
		$("#"+cerrar).attr('actual', actual);
		$("#"+inicio).attr('actual', actual);
		
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/$("#categoriak"+id_categoria).css('display', 'none');
		$("#categoria"+id_categoria).slideUp( 100 );
		$("#subcategoria"+id_subcategoria).css('display', 'block');
		$("#categoria"+id_categoria).load("../../../../../../../buscandotienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&maxi="+maxi+"&actual="+actual,function(response, status){
            if (status == "success"){
            	location.href="#botoncategoria"+id_categoria;
            	$("#popup-panel-"+id_categoria).css('display', 'none');
               $("#categoria"+id_categoria).slideDown(800);
                
                
            }
        });
		
		//alert("../../../../../../../buscandotienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto );
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
		 			$("#botonsubcate"+subselecto).css('background-color', '#fff');
					
						/*SUBCATEGORIA*/
				///	$("#botonsubcate"+subselecto).attr("abierto", "0");
				//	$("#botonsubcate"+subselecto).css('color', '#FFF');
		 		//	$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					
					
					//	 $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			
						
		 $(this).attr("abierto", "0");
		
		// $(this).css('background-image:url', '(../img/fondoboton.png)');
						
					
					
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
		  		
						/*SUBCATEGORIA*/
				//	$("#botonsubcate"+subselecto).attr("abierto", "0");
				//	$("#botonsubcate"+subselecto).css('color', '#FFF');
		 		//	$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					 $(this).attr("abierto", "1");
		
		//$(this).css('background-image', 'none');
					
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
		var todas= "todas"+id_categoria;
		var cerrar= "cerrar"+id_categoria;
		var inicio= "inicio"+id_categoria;
		var actual= $(this).attr('actual');
		var maxi= $(this).attr('maxi');
		 $("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		$("#"+todas).attr("id_subcategoria", id_subcategoria);
		$("#"+cerrar).attr("id_subcategoria", id_subcategoria);
		$("#"+inicio).attr("id_subcategoria", id_subcategoria);
		
		$("#"+menos).css('display', 'block');
		$("#"+mas).css('display', 'block');
		$("#"+todas).css('display', 'block');
		$("#"+cerrar).css('display', 'block');
		$("#"+inicio).css('display', 'none');
		
		$("#"+menos).attr('maxi', maxi);
		$("#"+mas).attr('maxi', maxi);
		$("#"+todas).attr('maxi', maxi);
		$("#"+cerrar).attr('maxi', maxi);
		$("#"+inicio).attr('maxi', maxi);
		
		$("#"+menos).attr('actual', actual);
		$("#"+mas).attr('actual', actual);
		$("#"+todas).attr('actual', actual);
		$("#"+cerrar).attr('actual', actual);
		$("#"+inicio).attr('actual', actual);
		
		$("#"+menos).attr("actuall", 0);
		$("#"+mas).attr("actuall", 0)
		
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/
	//	alert("abierto"+abierto );
		var tipo = "categoria";
		$("#categoriak"+id_categoria).css('display', 'none');
		$("#categoria"+id_categoria).slideUp( 100 );
		$("#subcategoria"+id_subcategoria).css('display', 'block');
		$("#categoria"+id_categoria).load("../../../../../../../buscandotienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&maxi="+maxi+"&actual="+actual,function(response, status){
            if (status == "success"){
            	location.href="#botoncategoria"+id_categoria;
            	$("#popup-panel-"+id_categoria).css('display', 'none');
               $("#categoria"+id_categoria).slideDown(800);
                
            }
        });
		
		id_categoria
		if(abierto==1){
				//// $("#categoria"+id_categoria).attr("display", "block");/
		
		/*/////////////ABRIR PESTAÑAS*/
		
			/*/////////IDICAR NUEVO SELECTO*/
			// $("#categoriaselecta").attr('categoriaselecta', id_categoria);
				 $("#categoriaselecta").attr('subselecto', id_subcategoria);
				 /*////////////EDITAR VIEJO SELECTO*/
		 			$("#botonsubcate"+subselecto).attr("abierto", "1");
		  		
					
						
		 $(this).attr("abierto", "0");
	
		 
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
		  
				//	$("#botonsubcate"+subselecto).attr("abierto", "0");
				//	$("#botonsubcate"+subselecto).css('color', '#FFF');
		 		//	$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					 $(this).attr("abierto", "1");
	
					
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
		var todas= "todas"+id_categoria;
		var cerrar= "cerrar"+id_categoria;
		var inicio= "inicio"+id_categoria;
		var actual= $(this).attr('actual');
		var maxi= $(this).attr('maxi');
		
		
		
		 $("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		$("#"+todas).attr("id_subcategoria", id_subcategoria);
		$("#"+cerrar).attr("id_subcategoria", id_subcategoria);
		$("#"+inicio).attr("id_subcategoria", id_subcategoria);
		
		$("#"+menos).css('display', 'block');
		$("#"+mas).css('display', 'block');
		$("#"+todas).css('display', 'block');
		$("#"+cerrar).css('display', 'block');
		$("#"+inicio).css('display', 'none');
		
		$("#"+menos).attr('maxi', maxi);
		$("#"+mas).attr('maxi', maxi);
		$("#"+todas).attr('maxi', maxi);
		$("#"+cerrar).attr('maxi', maxi);
		$("#"+inicio).attr('maxi', maxi);
		
		$("#"+menos).attr('actual', actual);
		$("#"+mas).attr('actual', actual);
		$("#"+todas).attr('actual', actual);
		$("#"+cerrar).attr('actual', actual);
		$("#"+inicio).attr('actual', actual);
		
		
		$("#"+menos).attr("actuall", 0);
		$("#"+mas).attr("actuall", 0)
		
		
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/////////////////////ojo aqui/////////
	//	alert('id_subcategoria'+id_subcategoria );
	$("#categoriak"+id_categoria).css('display', 'none');
		$("#categoria"+id_categoria).slideUp( 100);
		$("#subcategoria"+id_subcategoria).css('display', 'block');
		$("#categoria"+id_categoria).load("../../../../../../../buscandotienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&maxi="+maxi+"&actual="+actual,function(response, status){
            if (status == "success"){
            	location.href="#botoncategoria"+id_categoria;
            	$("#popup-panel-"+id_categoria).css('display', 'none');
               $("#categoria"+id_categoria).slideDown(800);
                
                
            }
        });
		 
		 
		 
		
		
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
		  		
					
						/*SUBCATEGORIA*/
				///	$("#botonsubcate"+subselecto).attr("abierto", "0");
				//	$("#botonsubcate"+subselecto).css('color', '#FFF');
		 		//	$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					
					
					//	 $("#catesubcate"+categoriaselecta).css('display', 'none');
			$("#subcategoria"+subselecto).css('display', 'none');
			
						
		 $(this).attr("abierto", "0");
		
		 
						
					
					
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
		  		
						/*SUBCATEGORIA*/
				//	$("#botonsubcate"+subselecto).attr("abierto", "0");
				//	$("#botonsubcate"+subselecto).css('color', '#FFF');
		 		//	$("#botonsubcate"+subselecto).css('background-color', '#F99615');
					
					 $(this).attr("abierto", "1");
		
					
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
		var todas= "todas"+id_categoria;
		var cerrar= "cerrar"+id_categoria;
		var inicio= "inicio"+id_categoria;
		var actual= Number($(this).attr('actuall'));
		if (actual<=0) {
		actual=actual;	
		}else actual=actual-anchoventana()*0.9;

		
		
		
		$("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
	;

		
		$("#categoriad"+id_categoria).animate({
    scrollLeft: actual
}, 500);
		$("#"+menos).attr("actuall", actual);
		$("#"+mas).attr("actuall", actual);
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
		var todas= "todas"+id_categoria;
		var cerrar= "cerrar"+id_categoria;
		var inicio= "inicio"+id_categoria;
		var actual= Number($(this).attr('actuall'));
		$("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		if (actual>=anchoventana()*2*0.9) {actual=actual;} else
		actual=anchoventana()*0.9+actual;
		
		
		
		
		 
		
		$("#categoriad"+id_categoria).animate({
    scrollLeft: actual
}, 500);
	
		$("#"+menos).attr("actuall", actual);
		$("#"+mas).attr("actuall", actual);
		
		//boton();
	//	document.getElementById("botoncategoria2").innerHTML;
	});

});

/*////////////////////////////////////////todas///////////////////////////////*/

$(function(){
	$('.todas').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		var subselecto= $("#categoriaselecta").attr('subselecto');
		var categoria = $(this).val();
		var cual = "todas";
		var menos= "menos"+id_categoria;
		var mas= "mas"+id_categoria;
		var todas= "todas"+id_categoria;
		var cerrar= "cerrar"+id_categoria;
		var inicio= "inicio"+id_categoria;
		
		//
		$("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		$("#"+todas).attr("id_subcategoria", id_subcategoria);
		$("#"+cerrar).attr("id_subcategoria", id_subcategoria);
		$("#"+inicio).attr("id_subcategoria", id_subcategoria);
		var actual= $(this).attr('actual');
		//var maxi= $(this).attr('maxi');
		var maxi= $("#categoria"+id_categoria).attr('maxi');
		//alert(maxi);
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/////////////////////ojo aqui/////////
		
		$("#"+menos).css('display', 'none');
		$("#"+mas).css('display', 'none');
		$("#categoria"+id_categoria).slideUp(100);
		$("#categoria"+id_categoria).css('display', 'none');

		
		$("#categoriak"+id_categoria).load("../../../../../../../buscandootratienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&cual="+cual+"&abierto="+abierto+"&actual="+actual+"&maxi="+maxi,function(response, status){
            if (status == "success"){
               $("#categoriak"+id_categoria).slideDown(800);
                
                
            }
        });
		
				/////////////////borrar todo de todos
				$(this).css('display', 'none');
		
				$("#"+inicio).css('display', 'block');

	});

});
/*////////////////////////////////////////inicio///////////////////////////////*/

$(function(){
	$('.inicio').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		var subselecto= $("#categoriaselecta").attr('subselecto');
		var categoria = $(this).val();
		var cual = "inicio";
		var menos= "menos"+id_categoria;
		var mas= "mas"+id_categoria;
		var todas= "todas"+id_categoria;
		var cerrar= "cerrar"+id_categoria;
		var inicio= "inicio"+id_categoria;
		
		var actual= $(this).attr('actual');
		var maxi= $(this).attr('maxi');
		
		//alert(mas);
		$("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		$("#"+todas).attr("id_subcategoria", id_subcategoria);
		$("#"+cerrar).attr("id_subcategoria", id_subcategoria);
		$("#"+inicio).attr("id_subcategoria", id_subcategoria);
		var actual= 5;
		
		
		/*var categoriaselecta = $("#categoriaselecta").val();
		*/////////////////////ojo aqui/////////
		$("#categoriak"+id_categoria).slideUp(200);
		$("#categoriak"+id_categoria).css('display', 'none');
		
		$("#categoria"+id_categoria).load("../../../../../../../buscandootratienda2.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&cual="+cual+"&abierto="+abierto+"&actual="+actual+"&maxi="+maxi,function(response, status){
            if (status == "success"){
               $("#categoria"+id_categoria).slideDown(800);
                
                
            }
        });
		//////////////mostrar tugos con inicio
				$("#"+cerrar).css('display', 'block');	
				 $("#"+menos).css('display', 'block');
		$("#"+mas).css('display', 'block');
		$("#"+todas).css('display', 'block');
		$("#"+cerrar).css('display', 'block');
		$("#"+inicio).css('display', 'none');
	});

});
$('.more').on("click",function() 
{ 
var ID = $(this).attr("id");
var id_categoria=$(this).attr("id_categoria");
var id_subcategoria=$(this).attr("id_subcategoria");
var valor_more_actual=$(this).attr("valor_more_actual");
if(ID)
{
$("#more"+id_categoria).html('<img src="moreajax.gif" />');

$.ajax({
type: "GET",
url: "ajax_more.php",
data: "id_categoria="+id_categoria+"&id_subcategoria="+id_subcategoria+"&valor_more_actual="+valor_more_actual, 
cache: false,
success: function(html){
$("#categoriak"+id_categoria).append(html);
$("#more_"+id_categoria+"_"+id_subcategoria).remove();
$("#inicion"+id_categoria).remove();

}
});
}
else
{
$(".morebox").html('The End');

}
return false;
});

//hover de flechas
$(function(){
	$('.pic1_subcategoria').mouseenter(function(){
		var id_categoria = $(this).attr("id_categoria");
		
		
		
		$("#subcategoriaflechai"+id_categoria).css('display', 'block');
		$("#subcategoriaflechad"+id_categoria).css('display', 'block');
		

	});

});

$(function(){
	$('.pic1_subcategoria').mouseleave(function(){
		var id_categoria = $(this).attr("id_categoria");
		
		
		
		$("#subcategoriaflechai"+id_categoria).css('display', 'none');
		$("#subcategoriaflechad"+id_categoria).css('display', 'none');
		

	});

});
$(function(){
	$('.flechasubcategoria').mouseleave(function(){
		var id_categoria = $(this).attr("id_categoria");
		
		
		
		$("#subcategoriaflechai"+id_categoria).css('display', 'none');
		$("#subcategoriaflechad"+id_categoria).css('display', 'none');
		

	});

});
$(function(){
	$('.flechasubcategoria').mouseenter(function(){
		var id_categoria = $(this).attr("id_categoria");
		
		
		
		$("#subcategoriaflechai"+id_categoria).css('display', 'block');
		$("#subcategoriaflechad"+id_categoria).css('display', 'block');
		

	});

});
