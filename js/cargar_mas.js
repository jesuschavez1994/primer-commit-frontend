$('.more').on("click",function() 
{ 
var ID = $(this).attr("id");
var id_categoria=$(this).attr("id_categoria");
var id_subcategoria=$(this).attr("id_subcategoria");
var valor_more_actual=$(this).attr("valor_more_actual");


if(ID)
{
$("#more"+id_categoria).html('<img src="moreajax.gif" />');

$.ajax({
type: "GET",
url: "ajax_more.php",
data: "id_categoria="+id_categoria+"&id_subcategoria="+id_subcategoria+"&valor_more_actual="+valor_more_actual, 
cache: false,
success: function(html){
$("#categoriak"+id_categoria).append(html);
$("#more_"+id_categoria+"_"+id_subcategoria).remove();
$("#inicion"+id_categoria).remove();

}
});
}
else
{
$(".morebox").html('The End');

}


return false;


});