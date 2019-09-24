

function tamVentana() {
  var tam = [0, 0];
  if (typeof window.innerWidth != 'undefined')
  {
    tam = [window.innerWidth,window.innerHeight];
  }
  else if (typeof document.documentElement != 'undefined'
      && typeof document.documentElement.clientWidth !=
      'undefined' && document.documentElement.clientWidth != 0)
  {
    tam = [
        document.documentElement.clientWidth,
        document.documentElement.clientHeight
    ];
  }
  else   {
    tam = [
        document.getElementsByTagName('body')[0].clientWidth,
        document.getElementsByTagName('body')[0].clientHeight
    ];
  }
  return tam;
}



function anchoventana(){
	var x= tamVentana()[0];
	return x;
}


function altoventana(){
	var y= tamVentana()[1];
	return y;
}

function tamaño_slider_imagenes_subcategoria() {
var x=0;
  if (anchoventana()>1024) {
  var x= anchoventana()*2*0.9;
 

  }

 if (anchoventana() <=1024 && anchoventana()>768) {
var x= anchoventana()*3.3*0.9;
     
 
    }

     
if (anchoventana()>480 && anchoventana() <=768 ) { 
      var x= anchoventana()*3.3*0.9;
      
     
    }

 if (anchoventana()<=480 ) {
      var x= anchoventana()*4*0.9;

    }

   

 return x;
   
}
function tamañocaja(){
 
    var d= tamaño_slider_imagenes_subcategoria()*0.09;
  return d;
 
}
function margencaja(){
	 
    var d=tamaño_slider_imagenes_subcategoria()*0.005;
  return d;
}


function tamaño_slider_imagenes_subcategoria3() {

 var x= anchoventana()*0.9;
  return x;

}


$(document).ready(function(){

$(".banner").css("height",anchoventana()*0.17+"px");
   $(window).resize(function(){
$(".banner").css("height",anchoventana()*0.17+"px");
       $(".pic1_subcategoria3").css("width",tamaño_slider_imagenes_subcategoria3()+"px");
        $(".pic1_subcategoria").css("width",tamaño_slider_imagenes_subcategoria()+"px");
$(".two.columns.buscalatienda22").css({"width": tamañocaja()+'px', "margin-top": "0%","margin-left": margencaja()+"px","margin-right":  margencaja()+"px"}
);
    $(".mas").attr("actuall", 0);
    $(".menos").attr("actuall", 0);
    $(".pic1_subcategoria3").animate({
    scrollLeft: 0
}, 500);
    

    });
 });


	


