$(document).ready(function () {
	function tamVentana() {
  	var tam = [0, 0];
  	if (typeof window.innerWidth != 'undefined'){
    	tam = [window.innerWidth,window.innerHeight];
  	}else if (typeof document.documentElement != 'undefined' && typeof document.documentElement.clientWidth !='undefined' && document.documentElement.clientWidth != 0){
    	tam = [document.documentElement.clientWidth,document.documentElement.clientHeight];
  	}else{
    	tam = [document.getElementsByTagName('body')[0].clientWidth,document.getElementsByTagName('body')[0].clientHeight];
  	}
  	return tam;
	}
	function anchoventana(){
		var x= tamVentana()[0];
		return x;
	}
});
$(function(){	
	$('.custom-select').click(function() {
		var tp=$('#pro').val();
		var id_estado = $('#estado2').val();
		var tipo = "ciudad";
		if (tp==1) {
			$("#todoproducto").attr('placeholder', 'Busca tu Producto');
		}else if (tp==2) {
			$("#todoproducto").attr('placeholder', 'Busca tu Servicio');
		}else{
			$("#todoproducto").attr('placeholder', 'Busca tu Empresa');}
			$("#campociudad").html('');
			$("#campociudad").load("../../../../../../../buscandociudad.php?id_estado="+id_estado+"&tipo="+tipo);
			if (anchoventana()>1024) {
				$(".custom-select").css("width", "20%");
				$(".custom-select1").css("width", "100%");
			}else{
				$(".custom-select").css("width", "32%");
				$(".custom-select1").css("width", "10%");
			}
	});
});
$(document).ready(function () {
	$(function(){
		$('#buscaproductoentienda').keyup(function(){
			var  producto = $(this).val();
			var id_tienda= $(this).attr('id_tienda');
			var tipo = "id_producto";
			$("#../../../../../../../buscandoproductosentienda").load("../../../../../../../buscandoproductosentienda.php?id_tienda="+id_tienda+"&producto="+producto);
		});
	});
});
$(document).ready(function () {
	$(function(){
		$('#categoria').change(function() {
			var id_categoria = $('#categoria').val();
			var tipo = "subcategoria";
			$("#camposubcategoria").load("../../../../../../../buscandosubcategoriaselec.php?id_categoria="+id_categoria+"&tipo="+tipo);
			if(id_categoria==""){
				$("#categoria").css("font-family", "Montserrat, sans-serif");	
				$("#categoria").css("font-weight", "lighter;");	
				$("#categoria").css("font-size", "16");	
			}else{
				$("#categoria").css("font-family", "Montserrat, sans-serif");	
				$("#categoria").css("font-weight", "lighter;");	
				$("#categoria").css("font-size", "16");	
			
			}
		});
	});
});
$(document).ready(function () {
	$(function(){
		$('#categoria').keyup(function(){
			var estado = $('#categoria').val();
			var tipo = "categoria";
			$("#campo1").load("../../../../../../../buscandosubcategoria.php?categoria="+categoria+"&tipo="+tipo);	
		});
	});
	$(function(){
		$('#tienda').keyup(function(){
			var nom = $('#tienda').val();
		  var id_estado = $('#estado2').val();
		  var id_ciudad = $('#ciudad2').val();
		  var araay = new Array();
			var array_cadena=nom.split(" ");
			for (x=0;x<array_cadena.length;x++){
				tienda = array_cadena.join('_');
			};
			var tipo = "tienda";
			$("#campo").load("../../../../../../../buscandolatienda.php?tienda="+tienda+"&tipo="+tipo+"&id_ciudad="+id_ciudad+"&id_estado="+id_estado);
		});
	});
	$(function(){
		$('#tiendanivel').keyup(function(){
			var nom = $('#tiendanivel').val();		
			var id_estado = $('#estado2').val();
			var id_ciudad = $('#ciudad2').val();
			var araay = new Array();
			var array_cadena=nom.split(" ");
			for (x=0;x<array_cadena.length;x++){
				tienda = array_cadena.join('_');
			};	
			var tipo = "tienda";
			$("#campo").load("../../../../../../../buscandolatiendanivel.php?tienda="+tienda+"&tipo="+tipo+"&id_ciudad="+id_ciudad+"&id_estado="+id_estado);
		});
	});
});
//Buscador
$(document).ready(function () {
	$(function(){
		$('#buscarlupa').click(function(){						
			buscarlupa();
		});
	});
	$('#todoproducto').keypress(function(e) {
  	var keycode = (e.keyCode ? e.keyCode : e.which);
    if (keycode == '13') {
        buscarlupa();
        e.preventDefault();
        return false;
    }
	});
	$(function(){
		$('#buscarlupa1').click(function(){
			buscarlupa1();
		});
	});
	$('#todoproducto1').keypress(function(e) {
    var keycode = (e.keyCode ? e.keyCode : e.which);
    if (keycode == '13') {
        buscarlupa1();
        e.preventDefault();
        return false;
    }
	});
	function buscarlupa(){
		var nom = $('#todoproducto').val();
		var id_estado = $('#estado2').val();
		var id_ciudad = $('#ciudad2').val();	
		var tipo = $('#pro').val();
		var selected =selected = $("#pro input[type='radio']:checked");
		if (tipo==1){
			window.location.href ="../../../../../../../buscandoelproducto2.php?producto="+nom+"&tipo="+tipo;
		}
		else{ 
			if (tipo==2){
				window.location.href ="../../../../../../../buscandoelproducto2.php?producto="+nom+"&tipo="+tipo;
			}else{	
				var tipo = "tienda";
				var tipo = "tienda";
				window.location.href = "../../../../../../../buscandolatienda2.php?tienda="+nom+"&tipo="+tipo;
			}
		}
		$("#campoproductosentienda").html("");
	}
	function buscarlupa1(){
		var nom = $('#todoproducto1').val();
		var id_estado = $('#estado2').val();
		var id_ciudad = $('#ciudad2').val();
		var tipo = $('#pro').val();
		var selected =selected = $("#pro input[type='radio']:checked");
		if (tipo==1){
			window.location.href ="../../../../../../../buscandoelproducto2.php?producto="+nom+"&tipo="+tipo;
		}else{
			if (tipo==2){
				window.location.href ="../../../../../../../buscandoelservicio2.php?producto="+nom+"&tipo="+tipo;
			}else{
				var tipo = "tienda";
				var tipo = "tienda";
				window.location.href = "../../../../../../../buscandolatienda2.php?tienda="+nom+"&tipo="+tipo;
			}
		}
		$("#campoproductosentienda").html("");
	}
});
$(document).ready(function () {
	$(function(){
		$(".pic1-animate-bottomenu1-nav").mouseenter(function(){
			$(".menu_oculto_sesion").css('display', 'block');
		});
	});
	$(function(){
		$(".pic1-animate-bottomenu1-nav").mouseleave(function(){
			$(".menu_oculto_sesion").css('display', 'none');
		});
	});
	//para selector
	var x, i, j, selElmnt, a, b, c,e;
	/*look for any elements with the class "custom-select":*/
	x = document.getElementsByClassName("custom-select");
	for (i = 0; i < x.length; i++) {
  	selElmnt = x[i].getElementsByTagName("select")[0];
  	/*for each element, create a new DIV that will act as the selected item:*/
		a = document.createElement("DIV");
  	a.setAttribute("class", "select-selected");
  	a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  	x[i].appendChild(a);
  	/*for each element, create a new DIV that will contain the option list:*/
  	b = document.createElement("DIV");
  	b.setAttribute("class", "select-items select-hide");
  	for (j = 0; j < selElmnt.length; j++) {
    	/*for each option in the original select element,
    	create a new DIV that will act as an option item:*/
    	c = document.createElement("DIV");
    	c.innerHTML = selElmnt.options[j].innerHTML;
    	c.addEventListener("click", function(e) {
      	  /*when an item is clicked, update the original select box,
        	and the selected item:*/
        	var y, i, k, s, h;
      	  s = this.parentNode.parentNode.getElementsByTagName("select")[0];
      	  h = this.parentNode.previousSibling;
      	  for (i = 0; i < s.length; i++) {
      	    if (s.options[i].innerHTML == this.innerHTML) {
      	      s.selectedIndex = i;
      	      h.innerHTML = this.innerHTML;
        	    y = this.parentNode.getElementsByClassName("same-as-selected");
          	  for (k = 0; k < y.length; k++) {
            	  y[k].removeAttribute("class");
          	  }
        	    this.setAttribute("class", "same-as-selected");
        	    break;
        	  }
        	}
        	h.click();
    	});
    	b.appendChild(c);
  	}
  	x[i].appendChild(b);
  	a.addEventListener("click", function(e) {
    	  /*when the select box is clicked, close any other select boxes,
    	  and open/close the current select box:*/
    	  e.stopPropagation();
    	  closeAllSelect(this);
    	  this.nextSibling.classList.toggle("select-hide");
    	  this.classList.toggle("select-arrow-active");
    	});
	}
	function closeAllSelect(elmnt) {
  	/*a function that will close all select boxes in the document,
  	except the current select box:*/
  	var x, y, i, arrNo = [];
  	x = document.getElementsByClassName("select-items");
  	y = document.getElementsByClassName("select-selected");
  	for (i = 0; i < y.length; i++) {
  	  if (elmnt == y[i]) {
  	    arrNo.push(i)
  	  } else {
  	    y[i].classList.remove("select-arrow-active");
  	  }
  	}
  	for (i = 0; i < x.length; i++) {
  	  if (arrNo.indexOf(i)) {
  	    x[i].classList.add("select-hide");
  	  }
  	}
	}
	/*if the user clicks anywhere outside the select box,
	then close all select boxes:*/
	document.addEventListener("click", closeAllSelect);
});
$(document).ready(function () {
//para selector
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select1");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
});
$(document).ready(function () {
	var posicion = 0;
	
	$(function(){
		$(".span-categoria").mouseenter(function(){
			var id_categoria = $(this).attr("id_categoria");
			var id=$(this).attr('id');
			var el=document.getElementById(id)
			let coords = el.getBoundingClientRect();
			if (coords.right==0){
			}else{
			posicion = coords.right;
			}
			$("#content-popup-panel"+id_categoria).css('left', posicion);
			$("#content-popup-panel"+id_categoria).css('display', 'flex');
			mostrar_panel_blanco = 1;
		});
	});
	
	$(function(){
		$(".span-categoria").mouseleave(function(){
			var id_categoria = $(this).attr("id_categoria");
				$("#content-popup-panel"+id_categoria).css('display', 'none');
		});
	});
	$(function(){
		$(".content-popup-panel").mouseenter(function(){
			var id_categoria = $(this).attr("id_categoria");
			$("#content-popup-panel"+id_categoria).css('display', 'flex');
			$(".dropdown-content-linkcategoria").css('display', 'flex');
		});
	});
	$(function(){
		$(".content-popup-panel").mouseleave(function(){
			var id_categoria = $(this).attr("id_categoria");
			$("#content-popup-panel"+id_categoria).css('display', 'none');
			$(".dropdown-content-linkcategoria").css('display', 'none');
		});
	});
	$(function(){
		$(".linkcategoria").mouseleave(function(){
			$(".dropdown-content-linkcategoria").css('display', 'none');
		});
	});
	$(function(){
		$(".linkcategoria").click(function(){
			$(".dropdown-content-linkcategoria").css('display', 'flex');
		});
	});
	$(function(){
		$(".dropdown-content-linkcategoria").mouseleave(function(){
			$(".dropdown-content-linkcategoria").css('display', 'none');
		});
	});
	$(function(){
		$(".dropdown-content-linkcategoria").mouseenter(function(){
			$(".dropdown-content-linkcategoria").css('display', 'flex');
		});
	});
});
document.addEventListener("DOMContentLoaded", function(event) { 
	if ( document.getElementById( "link_registro_panel" )) {
		var popup_registro=document.getElementById("link_registro_panel").addEventListener("click", ventana_aviso_registro);
		function ventana_aviso_registro(e) {
			document.getElementById("myModal_panel").style.display= 'flex';
		}
	}
	$('.close2').click(function() {
		$('#myModal_panel').css('display', 'none');
	});
	if ( document.getElementById( "myModal_panel" )) {
		var myModal_panel = document.getElementById('myModal_panel');
	}
});