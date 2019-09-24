$(document).ready(function () {





$(function(){
	$('.pic1_subcategoria4').mouseenter(function(){
		var id_categoria = $(this).attr("id_categoria");
		
		
		
		$("#subcategoriaflechai"+id_categoria).css('visibility', 'visible');
		$("#subcategoriaflechad"+id_categoria).css('visibility', 'visible');
		

	});

});

$(function(){
	$('.pic1_subcategoria4').mouseleave(function(){
		var id_categoria = $(this).attr("id_categoria");
		
		
		
		$("#subcategoriaflechai"+id_categoria).css('visibility', 'hidden');
		$("#subcategoriaflechad"+id_categoria).css('visibility', 'hidden');
		

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
		var menos= "subcategoriaflechai"+id_categoria;
		var mas= "subcategoriaflechad"+id_categoria;
		var todas= "todas"+id_categoria;
		var cerrar= "cerrar"+id_categoria;
		var inicio= "inicio"+id_categoria;
		var actual= Number($(this).attr('actuall'));
		if (actual<=0) {
		actual=actual;	
		}else actual=actual-anchoventana()*0.9;

		
			if (actual<=anchoventana()*0*0.9) {
			$("#"+mas).css("opacity", '1');
			//$("#"+mas).css("background-color", 'rgba(60,60,60,0.5)');
			$("#"+menos).css("opacity", '0.1');
			$("#"+menos).css("background-color", '#fff');
		}
		
		
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
		var menos= "subcategoriaflechai"+id_categoria;
		var mas= "subcategoriaflechad"+id_categoria;
		var todas= "todas"+id_categoria;
		var cerrar= "cerrar"+id_categoria;
		var inicio= "inicio"+id_categoria;
		var actual= Number($(this).attr('actuall'));
		$("#"+menos).attr("id_subcategoria", id_subcategoria);
		$("#"+mas).attr("id_subcategoria", id_subcategoria);
		if (actual>=anchoventana()*1*0.9) {actual=actual;

		} else
		actual=anchoventana()*0.9+actual;
		
		if (actual>=anchoventana()*0*0.9) {
			$("#"+mas).css("opacity", '0.1');
			$("#"+mas).css("background-color", '#fff');
			$("#"+menos).css("opacity", '1');
		//	$("#"+menos).css("background-color", 'rgba(60,60,60,0.5)');

		}
		
		 
		
		$("#categoriad"+id_categoria).animate({
    scrollLeft: actual
}, 500);
	
		$("#"+menos).attr("actuall", actual);
		$("#"+mas).attr("actuall", actual);
		
		//boton();
	//	document.getElementById("botoncategoria2").innerHTML;
	});

});
});
