// declarar variable para Document
var x;
x=$(document);
$(function(){
	$('#cedula').keyup(function(){
		var cedula = $('#cedula').val();
		var tipo = $('#tipo').val();
		$("#campo").load("buscandorelajacion.php?cedula="+cedula+"&tipo="+tipo);
		
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
		$("#campo").load("buscandorelajacion.php?nombre="+nombre+"&tipo="+tipo);
		
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
		$("#campo").load("buscandorelajacion.php?apellido="+apellido+"&tipo="+tipo);
		
	});


});
$(function(){
	$('#fecharelajacion').Click(function(){
		var fecharelajacion = $('#fecharelajacion').val();
		var tipo = $('#tipo').val();
		$("#campo").load("buscandorelajacion.php?fecharelajacion="+fecharelajacion+"&tipo="+tipo);
		
	});


});
$(function(){
 $ ("#fecharelajacion").Click (function () {
   alert ('. controlador de click () llama.');
 }); 
 });