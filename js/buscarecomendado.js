// declarar variable para Document
var x;
x=$(document);
$(function(){
	$('#recomendado').keyup(function(){
		var recomendado = $('#recomendado').val();
		var tipo = $('#tipo').val();
		$("#campo1").load("buscandorecomendado.php?recomendado="+recomendado+"&tipo="+tipo);
		
	});


});
$(function(){
	$('#recomendado2').keyup(function(){
		var recomendado2 = $('#recomendado2').val();
		var tipo = $('#tipo').val();
		$("#campo1").load("buscandorecomendado.php?recomendado2="+recomendado2+"&tipo="+tipo);
		
	});


});
