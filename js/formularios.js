// JavaScript Document
var x;
x=$(document);
$(function(){
	$('#cedula').keyup(function(){
		var cedula = $('#cedula').val();
		var tipo = $('#tipo').val();
		$("#campo").load("verificaexiste.php?cedula="+cedula+"&tipo="+tipo);
		
	});
});