// declarar variable para Document
var x;
x=$(document);
$(function(){
	$('#cedula').keyup(function(){
		var cedula = $('#cedula').val();
		var tipo = $('#cedula').attr('tipo');
		$("#campo").load("buscandopago.php?cedula="+cedula+"&tipo="+tipo);
		
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
		var tipo = $('#nombre').attr('tipo');
		$("#campo").load("buscandopago.php?nombre="+nombre+"&tipo="+tipo);
		
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
		var tipo = $('#apellido').attr('tipo');
		$("#campo").load("buscandopago.php?apellido="+apellido+"&tipo="+tipo);
		
	});


});
/*$(function(){
	$('#dia').keyup(function(){
		var dia = $('#dia').val();
		var tipo = $('#dia').attr('tipo');
		$("#campo").load("buscandopago.php?dia="+dia+"&tipo="+tipo);
		
	});


});*/

$(function(){
	$('#mes').keyup(function(){
		var mes = $('#mes').val();
		var tipo = $('#mes').attr('tipo');
		$("#campo").load("buscandopago.php?mes="+mes+"&tipo="+tipo);
		
	});


});

$(function(){
	$('#ano').keyup(function(){
		var ano = $('#ano').val();
		var tipo = $('#ano').attr('tipo');
		$("#campo").load("buscapagoano.php?ano="+ano+"&tipo="+tipo);
		
	});


});

$(function(){
	$('#factura').keyup(function(){
		var factura = $('#factura').val();
		var tipo = $('#factura').attr('tipo');
		$("#campo").load("buscandopago.php?factura="+factura+"&tipo="+tipo);
		
	});


});

$(function(){
	$('#pago').keyup(function(){
		var pago = $('#pago').val();
		var tipo = $('#pago').attr('tipo');
		$("#campo").load("buscandopago.php?pago="+pago+"&tipo="+tipo);
		
	});


});

$(function(){
	$('#cheque').keyup(function(){
		var cheque = $('#cheque').val();
		var tipo = $('#cheque').attr('tipo');
		$("#campo").load("buscandopago.php?cheque="+cheque+"&tipo="+tipo);
		
	});


});

$(function(){
	$('#deposito').keyup(function(){
		var deposito = $('#deposito').val();
		var tipo = $('#deposito').attr('tipo');
		$("#campo").load("buscandopago.php?deposito="+deposito+"&tipo="+tipo);
		
	});


});

$(function(){
	$('#debito').keyup(function(){
		var debito = $('#debito').val();
		var tipo = $('#debito').attr('tipo');
		$("#campo").load("buscandopago.php?debito="+debito+"&tipo="+tipo);
		
	});


});

$(function(){
	$('#transferencia').keyup(function(){
		var transferencia = $('#transferencia').val();
		var tipo = $('#transferencia').attr('tipo');
		$("#campo").load("buscandopago.php?transferencia="+transferencia+"&tipo="+tipo);
		
	});


});

$(function(){
	$('#talonario').keyup(function(){
		var talonario = $('#talonario').val();
		var tipo = $('#talonario').attr('tipo');
		$("#campo").load("buscandopago.php?talonario="+talonario+"&tipo="+tipo);
		
	});


});

