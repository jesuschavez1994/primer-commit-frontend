var x;
x=$(document);
$('.target').change(function() {
   alert('Handler for .change() called.');
 }); 
$(function(){
	
	$('.target').change(function() {
		
		var id = $('#espta').val();
		
		$("#other").load("selecto.php?id="+id);
		if(id!=''){
		$("#oculta").css("display", "block");
		$('#fechas').val('');
		} else {
			 
		$("#oculta").css("display", "none");	
			}
	});
	

});



$(function(){
	$('#costo').change(function() {
		var costo = $('#costo').attr('checked');
		var edita = $('#costo').attr('edita');
		var tip = $('#costo').val();
		//alert(tip);
		 switch(tip){
			 case 'consulta':{
						if(costo){
							var cost =	2;
						} else {
							var cost =	1; 
						}
						break;
			 }
			 case 'bio':{
						if(costo){
							var cost =	4;
						} else {
							var cost =	3; 
						}
						break;
			 }
			 case 'grupo':{
						if(costo){
							var cost =	6;
							$('#val').text('Valor:');
						} else {
							var cost =	5; 
							$('#val').text('');
						}
						break;
			 }
			  case 'consuledita':{
						if(costo){
							var cost =	8;
							$('#val').text('Valor:');
						} else {
							var cost =	7; 
							$('#val').text('');
						}
						break;
			 }
			 
		 }
		$("#campocosto").load("selecto.php?cost="+cost+"&edita="+edita);	
	});
	

});
$(function(){
	$('#fechapago').change(function() {
		
		var fp = $('#fechapago').attr('checked');
		var fe = $('#fechapago').attr('edita');;
		var tip = $('#fechapago').val();
		
		//alert(tip);
		 switch(tip){
			 case 'pago':{
				 
						if(fp){
							$("#oculta").css("display", "block");
							//var fech = $('#fecha').val();
							$('#campofecha').text("");
							
						} else {
							$("#oculta").css("display", "none");
							//$('#fechap').val(fe);
							$("#campofecha").load("selecto.php?fe="+fe);
							
						}
						break;
			 }
			 
			
		 }
		 //$("#campofecha").load("selecto.php?cost="+cost+"&fe="+fe);	
	});
	

});
$(function(){
	$('.targetfecha').change(function() {
		var fecha = $('#fechas').val();
		$("#other").load("selecto.php?fecha="+fecha);
		
	});
	

});


$(function(){
		   	$('#forma').change(function() {
			var fecha = "joder";
			var foter ="";
			
		   fo = $('#forma option:selected').val() + "";
		
		     $("#te").load("selecto.php?fo="+fo);
			    });

});
 $(function(){
		   	$('#forma1').change(function() {
			var fecha = "joder";
			var foter ="";
			var num = $('#forma1').attr("numero");
		   var formi = $('#forma1').attr("formi");
		   fo = $('#forma1 option:selected').val() + "";
		
		     $("#te").load("selecto.php?foe="+fo+"&num="+num+"&formi="+formi);
			    });

});
 



$(function(){
		   	$('.parcial').change(function() {
		  var parc = $('#parcial').val();
			var costo = $('#parcial').attr("costo");
			  $("#descuento").load("selecto.php?parc="+parc+"&costo="+costo);
				$("#descu").load("selecto1.php?parc="+parc);
				  });

});