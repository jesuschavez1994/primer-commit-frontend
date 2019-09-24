// declarar variable para Document
var x;
x=$(document);
$(function(){
	$('#cedula').keyup(function(){
		var cedula = $('#cedula').val();
		var tipo = $('#tipo').val();
		$("#campo").load("buscandobio.php?cedula="+cedula+"&tipo="+tipo);
		
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
		$("#campo").load("buscandobio.php?nombre="+nombre+"&tipo="+tipo);
		
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
		$("#campo").load("buscandobio.php?apellido="+apellido+"&tipo="+tipo);
		
	});


});
$(function(){
	$('#fechabio').Click(function(){
		var fechabio = $('#fechabio').val();
		var tipo = $('#tipo').val();
		$("#campo").load("buscandobio.php?fechabio="+fechabio+"&tipo="+tipo);
		
	});


});
$(function(){
 $ ("#fechabio").Click (function () {
   alert ('. controlador de click () llama.');
 }); 
 });