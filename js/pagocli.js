// declarar variable para Document
var x;
x=$(document);
$(function(){
	$('#consulta').click(function(){
		var consulta = $('#consulta').val();
		var tipo = $('#consulta').attr('tipo');
		$("#campo").load("../buscandopago.php?cedula="+consulta+"&tipo="+tipo);
		
	});


});
$(function(){
	$('#nombre').keyup(function(){
		var nombre = $('#nombre').val();
		var tipo = $('#nombre').attr('tipo');
		$("#campo").load("buscandopago.php?nombre="+nombre+"&tipo="+tipo);
		
	});


});
$(function(){
	$('#apellido').keyup(function(){
		var apellido = $('#apellido').val();
		var tipo = $('#apellido').attr('tipo');
		$("#campo").load("buscandopago.php?apellido="+apellido+"&tipo="+tipo);
		
	});


});
$(function(){
	$('#dia').keyup(function(){
		var dia = $('#dia').val();
		var tipo = $('#dia').attr('tipo');
		$("#campo").load("buscandopago.php?dia="+dia+"&tipo="+tipo);
		
	});


});

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
		$("#campo").load("buscandopago.php?ano="+ano+"&tipo="+tipo);
		
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

