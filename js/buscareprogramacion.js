// declarar variable para Document
var x;
x=$(document);
$(function(){
	$('#cedula').keyup(function(){
		var cedula = $('#cedula').val();
		var tipo = $('#tipo').val();
		$("#campo").load("buscandoreprogramacion.php?cedula="+cedula+"&tipo="+tipo);
		
	});


});
$(function(){
	$('#nombre').keyup(function(){
								
		var nombre = new Array();
		var nom = $('#nombre').val();
		  var araay = new Array();
		var array_cadena=nom.split(" ");
		for (x=0;x<array_cadena.length;x++){
			nombre = array_cadena.join('_');
			}
		var tipo = $('#tipo').val();
		$("#campo").load("buscandoreprogramacion.php?nombre="+nombre+"&tipo="+tipo);
		
	});


});
$(function(){
	$('#apellido').keyup(function(){
								  
		var nom = $('#apellido').val();
		  var araay = new Array();
		var array_cadena=nom.split(" ");
		for (x=0;x<array_cadena.length;x++){
			apellido = array_cadena.join('_');
			}
		var tipo = $('#tipo').val();
		$("#campo").load("buscandoreprogramacion.php?apellido="+apellido+"&tipo="+tipo);
		
	});


});
$(function(){
	$('#fechareprogramacion').Click(function(){
		var fechareprogramacion = $('#fechareprogramacion').val();
		var tipo = $('#tipo').val();
		$("#campo").load("buscandoreprogramacion.php?fechareprogramacion="+fechareprogramacion+"&tipo="+tipo);
		
	});


});
$(function(){
 $ ("#fechareprogramacion").Click (function () {
   alert ('. controlador de click () llama.');
 }); 
 });