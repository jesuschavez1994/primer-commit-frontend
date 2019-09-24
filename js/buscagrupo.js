// declarar variable para Document
var x;
x=$(document);
$(function(){
	$('#cedula').keyup(function(){
		var cedula = $('#cedula').val();
		var tipo = $('#tipo').val();
		$("#campo").load("buscandogrupo.php?cedula="+cedula+"&tipo="+tipo);
		
	});


});
$(function(){
	$('#nombre').keyup(function(){
								
		//var nombre = $('#nombre').val();
		var nom = $('#nombre').val();
		  var araay = new Array();
		var array_cadena=nom.split(" ");
		for (x=0;x<array_cadena.length;x++){
			nombre = array_cadena.join('_');
			}
		var tipo = $('#tipo').val();
		$("#campo").load("buscandogrupo.php?nombre="+nombre+"&tipo="+tipo);
		
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
		$("#campo").load("buscandogrupo.php?apellido="+apellido+"&tipo="+tipo);
		
	});


});
$(function(){
	$('#fechagrupo').Click(function(){
		var fechagrupo = $('#fechagrupo').val();
		var tipo = $('#tipo').val();
		$("#campo").load("buscandogrupo.php?fechagrupo="+fechagrupo+"&tipo="+tipo);
		
	});


});
$(function(){
 $ ("#fechagrupo").Click (function () {
   alert ('. controlador de click () llama.');
 }); 
 });