// JavaScript Document

/////////////////////mas///////////////////////
$(function(){
	$('.mas').click(function(){
	
		var id_categoria = $(this).attr('id_categoria');
		var categoria = $(this).attr('categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var abierto= $(this).attr('abierto');
		var actual= $(this).attr('actual');
		//var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		//var subselecto= $("#categoriaselecta").attr('subselecto');
		//var categoria = $(this).val();
		var tipo = "mas"
		//alert("../../../../../../../buscandootratienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+"&categoria="+categoria+"&tipo="+tipo+"&abierto="+abierto);
		
		$("#categoria"+id_categoria).slideUp( 800 );
		
		$("#subcategoria"+id_subcategoria).css('display', 'block');
		
		$("#categoria"+id_categoria).load("../../../../../../../buscandootratienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+"&categoria="+categoria+"&tipo="+tipo+"&abierto="+abierto+"&actual="+actual);
			
		 $("#categoria"+id_categoria).show( "slow" );
		 $("#categoria"+id_categoria).fadeIn( 2500 );
		 
		 /////////////////////////////////
		 
		 
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
		 
		 
		 
		//////////////////////////////////
		
	});

});


/////////////////////menos///////////////////////
$(function(){
	$('.menos').click(function(){
	
		var id_categoria = $(this).attr('id_categoria');
		var categoria = $(this).attr('categoria');
		var id_subcategoria = $(this).attr('id_subcategoria');
		var actual= $(this).attr('actual');
		var abierto= $(this).attr('abierto');
		//var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
		//var subselecto= $("#categoriaselecta").attr('subselecto');
		//var categoria = $(this).val();
		var tipo = "menos"
		alert("../../../../../../../buscandootratienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+"&categoria="+categoria+"&tipo="+tipo+"&abierto="+abierto+"&actual="+actual);
		
		$("#categoria"+id_categoria).slideUp( 800 );
		
		$("#subcategoria"+id_subcategoria).css('display', 'block');
		
		$("#categoria"+id_categoria).load("../../../../../../../buscandootratienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+"&categoria="+categoria+"&tipo="+tipo+"&abierto="+abierto+"&actual="+actual);
			
		 $("#categoria"+id_categoria).show( "slow" );
		 $("#categoria"+id_categoria).fadeIn( 2500 );
		 
		
		
	});

});



