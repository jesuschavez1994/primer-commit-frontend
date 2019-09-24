

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
function tamañocaja(){
	var d= anchoventana()*0.186;
	return d;
}
function margencaja(){
	var d= anchoventana()*0.005;
	return d;
}
$(document).ready(function(){

	 $(window).resize(function(){

       $(".two.columns.buscalatienda2").css({"width": tamañocaja()+"px", "margin-top": "0%","margin-right": margencaja()+"px","margin-left": margencaja()+"px"}
);
     	$(".pic1_subcategoria3").css("width",anchoventana()*0.9+"px");
        $(".pic1_subcategoria").css("width",anchoventana()*2*0.9+"px");
		$(".two.columns.buscalatienda22").css({"width": "9%", "margin-top": "0%","margin-left": "0.5","margin-right": "0.5"});
    
		$(".mas").attr("actuall", 0);
		$(".menos").attr("actuall", 0);
		$(".pic1_subcategoria3").animate({
    scrollLeft: 0
}, 500);
		

    });
 });

$(".pic1_subcategoria3").css("width",anchoventana()*0.9+"px");
        $(".pic1_subcategoria").css("width",anchoventana()*3*0.9+"px");
$(".two.columns.buscalatienda22").css({"width": "9%", "margin-top": "0%","margin-right": "0.5%","margin-right": "0.5%"}
);

