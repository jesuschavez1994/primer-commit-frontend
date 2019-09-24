// declarar variable para Document


var x;
x=$(document);
$(function(){
	$('.pic1-botoncategoria').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var abierto= $(this).attr('abierto');
		var categoria = $(this).val();
		//alert('JOLIN'+abierto );
		
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		/* $("#categoria"+id_categoria).attr("display", "block");*/
		
		$(this).attr("abierto", "0");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		 
		 $("#subcategoria"+id_categoria).css('display', 'none');
		$("#subcategoria"+selecto).css('display', 'block');
		 
		/*$("#subcategoria"+id_categoria).load("buscando.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);
		
		$("#categoria"+id_categoria).load("buscandosubcategoria.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);*/
		
		/*$("#categoriatitulo"+id_categoria).html("<input class='pic1-botoncategoria"+1+"' name='categoria' type='button' value='"+categoria+"' id_categoria="+id_categoria+"' abierto="+abierto);*/
		}else
		{
			/*alert('JOLIN'+abierto );*/
			 $(this).attr("abierto", "1");
			 $(this).css('color', '#000');
		 $(this).css('background-color', '#ccc');
		 
		var tipo = "categoria";
		
		
		
		
		
		/* $("#categoria"+id_categoria).attr("display", "block");*/
		/*$("#categoria"+id_categoria).load("buscandosubcategoria.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);
		$("#subcategoria"+id_categoria).load("buscando.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);*/
		
		}
	});

});

$(function(){
	$('.pic1-botoncategoria1').click(function(){
		
		var id_categoria = $(this).attr('id_categoria');
		var abierto= $(this).attr('abierto');
		var categoria = $(this).val();
		/*alert('JOLIN'+abierto );*/
		
		id_categoria
		if(abierto==1){
		var tipo = "categoria";
		
		
		$(this).attr("abierto", "0");
		 $(this).css('color', '#fff');
		 $(this).css('background-color', '#F99615');
		
		 $("#subcategoria"+id_categoria).css('display', 'none');
		
		 
		/*$("#categoria"+id_categoria).load("buscandosubcategoria.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);
		$("#subcategoria"+id_categoria).load("buscando.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);*/
		
		}else
		{
			
			 $(this).attr("abierto", "1");
			 $(this).click("input").css('color', '#000');
		 $(this).css('background-color', '#ccc');
		 
		var tipo = "categoria";
		/* $("#categoria"+id_categoria).attr("display", "block");*/
		/*$("#categoria"+id_categoria).load("buscandosubcategoria.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);
		$("#subcategoria"+id_categoria).load("buscando.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);*/
		
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
		/*$("#categoria"+id_categoria).load("buscandotienda.php?id_subcategoria="+id_subcategoria+"&id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);
		$("#subcategoria"+id_categoria).load("buscando.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);*/
		
		}else
		{
			
			 $(this).attr("abierto", "1");
			 $(this).click("input").css('color', '#000');
			 
		 $(this).click("input").css('background-color', '#ccc');
		 
		var tipo = "categoria";
		$("#subcategoria"+id_categoria).css('display', 'block');
		$("#subcategoria"+selecto).css('display', 'none');
		
		
		/* $("#categoria"+id_categoria).attr("display", "block");
		$("#categoria"+id_categoria).load("buscandotienda.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);
		$("#subcategoria"+id_categoria).load("buscando.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);
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
		$("#categoria"+id_categoria).load("buscandotienda.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);
		$("#subcategoria"+id_categoria).load("buscando.php?id_categoria="+id_categoria+"&tipo="+tipo+"&abierto="+abierto+"&categoria="+categoria);
		*/
		}
	});

});
