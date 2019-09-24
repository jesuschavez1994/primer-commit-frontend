window.addEventListener("resize", myFunction);
function myFunction() {
var perfil_display= $('#2latiendaboton').css('display');
if (perfil_display!='none') { var eltop=anchoventana()+300}else { var eltop=anchoventana()+450+431;}

  if (anchoventana()>1024) {
      var posicion_menu_rapido=0;
              $('#latiendaboton').animate({top: posicion_menu_rapido+230+'px',width:'50px',height:'50px'});
       
        $('#micontactoboton').animate({top: posicion_menu_rapido+30+'px',width:'70px',height:'70px'});
        $('#miperfilboton').animate({top: posicion_menu_rapido+110+'px',width:'50px',height:'50px'});
        $('#misproductos').animate({top: posicion_menu_rapido+170+'px',width:'50px',height:'50px'});
        $('#latiendatexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#micontactotexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#miperfiltexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#misproductostexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#latiendatexto').fadeIn("fast");
        $('#micontactotexto').fadeOut("fast");
        $('#miperfiltexto').fadeOut("fast");
        $('#misproductostexto').fadeOut("fast");
        

    }
    else  { 
     var posicion_menu_rapido=eltop;
        $('#latiendaboton').animate({top: posicion_menu_rapido+230+'px',width:'50px',height:'50px'});
       
        $('#micontactoboton').animate({top: posicion_menu_rapido+30+'px',width:'70px',height:'70px'});
        $('#miperfilboton').animate({top: posicion_menu_rapido+110+'px',width:'50px',height:'50px'});
        $('#misproductos').animate({top: posicion_menu_rapido+170+'px',width:'50px',height:'50px'});
        $('#latiendatexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#micontactotexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#miperfiltexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#misproductostexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#latiendatexto').fadeIn("slow");
        $('#micontactotexto').fadeOut("slow");
        $('#miperfiltexto').fadeOut("slow");
        $('#misproductostexto').fadeOut("slow");
            
}
}

document.addEventListener("DOMContentLoaded", function(event) { 
  
var perfil_display= $('#2latiendaboton').css('display');
if (perfil_display!='none') { var eltop=anchoventana()+300}else { var eltop=anchoventana()+450+431;}
   

  if (anchoventana()>1024) {
      var posicion_menu_rapido=0;
        $('#latiendaboton').animate({top: posicion_menu_rapido+230+'px',width:'50px',height:'50px'});
       
        $('#micontactoboton').animate({top: posicion_menu_rapido+30+'px',width:'70px',height:'70px'});
        $('#miperfilboton').animate({top: posicion_menu_rapido+110+'px',width:'50px',height:'50px'});
        $('#misproductos').animate({top: posicion_menu_rapido+170+'px',width:'50px',height:'50px'});
        $('#latiendatexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#micontactotexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#miperfiltexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#misproductostexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#latiendatexto').fadeIn("fast");
        $('#micontactotexto').fadeOut("fast");
        $('#miperfiltexto').fadeOut("fast");
        $('#misproductostexto').fadeOut("fast");
        

    }
    else  { 
     var posicion_menu_rapido=eltop;
        $('#latiendaboton').animate({top: posicion_menu_rapido+230+'px',width:'50px',height:'50px'});
       
        $('#micontactoboton').animate({top: posicion_menu_rapido+30+'px',width:'70px',height:'70px'});
        $('#miperfilboton').animate({top: posicion_menu_rapido+110+'px',width:'50px',height:'50px'});
        $('#misproductos').animate({top: posicion_menu_rapido+170+'px',width:'50px',height:'50px'});
        $('#latiendatexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#micontactotexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#miperfiltexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#misproductostexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#latiendatexto').fadeIn("fast");
        $('#latiendatexto').fadeIn("slow");
        $('#micontactotexto').fadeOut("slow");
        $('#miperfiltexto').fadeOut("slow");
        $('#misproductostexto').fadeOut("slow");

}

   $('.mySidenav').click(function(event) {
     var id=$(this).attr('id');
     var tienda_oculta=$('#2latiendaboton').css('display');
     var ubicacion=$(this).attr('ubicacion');
     var tienda=$(this).attr('tienda');
var perfil_display= $('#2latiendaboton').css('display');
if (perfil_display!='none') { var eltop=anchoventana()+300}else { var eltop=anchoventana()+450+431;}

if (anchoventana()>1024) {
      var posicion_menu_rapido=0;
        $('#latiendatexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#micontactotexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#miperfiltexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#misproductostexto').animate({top: posicion_menu_rapido+45+'px'});
    }
    else  { 
     var posicion_menu_rapido=eltop;
       $('#latiendatexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#micontactotexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#miperfiltexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#misproductostexto').animate({top: posicion_menu_rapido+45+'px'});
}
  
switch(id){
    case 'latiendaboton':
        
  if (tienda_oculta=='none') {

        $('#latiendaboton').animate({top: posicion_menu_rapido+30+'px',width:'70px',height:'70px'});
       }

        $('#micontactoboton').animate({top: posicion_menu_rapido+110+'px',width:'50px',height:'50px'});
        $('#miperfilboton').animate({top: posicion_menu_rapido+170+'px',width:'50px',height:'50px'});
        $('#misproductos').animate({top: posicion_menu_rapido+230+'px',width:'50px',height:'50px'});
        $('#latiendatexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#micontactotexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#miperfiltexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#misproductostexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#latiendatexto').fadeIn("slow");
        $('#micontactotexto').fadeOut("slow");
        $('#miperfiltexto').fadeOut("slow");
        $('#misproductostexto').fadeOut("slow");





        break;
    case 'micontactoboton':
       if (tienda_oculta=='none') {
        $('#latiendaboton').animate({top: posicion_menu_rapido+230+'px',width:'50px',height:'50px'});
       }
        $('#micontactoboton').animate({top: posicion_menu_rapido+30+'px',width:'70px',height:'70px'});
        $('#miperfilboton').animate({top: posicion_menu_rapido+110+'px',width:'50px',height:'50px'});
        $('#misproductos').animate({top: posicion_menu_rapido+170+'px',width:'50px',height:'50px'});
        $('#latiendatexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#micontactotexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#miperfiltexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#misproductostexto').animate({top: posicion_menu_rapido+45+'px'});
    $('#latiendatexto').fadeOut("slow");
    $('#micontactotexto').fadeIn("slow");
    $('#miperfiltexto').fadeOut("slow");
    $('#misproductostexto').fadeOut("slow");


        break;
     case 'miperfilboton':
 if (tienda_oculta=='none') {
        $('#latiendaboton').animate({top: posicion_menu_rapido+230+'px',width:'50px',height:'50px'});
        }
        $('#micontactoboton').animate({top: posicion_menu_rapido+110+'px',width:'50px',height:'50px'});
        $('#miperfilboton').animate({top: posicion_menu_rapido+30+'px',width:'70px',height:'70px'});
        $('#misproductos').animate({top: posicion_menu_rapido+170+'px',width:'50px',height:'50px'});
        $('#latiendatexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#micontactotexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#miperfiltexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#misproductostexto').animate({top: posicion_menu_rapido+45+'px'});
       $('#latiendatexto').fadeOut("slow");
       $('#micontactotexto').fadeOut("slow");
       $('#miperfiltexto').fadeIn("slow");
       $('#misproductostexto').fadeOut("slow");

      var formData = new FormData(document.getElementById(id));
      formData.append("tienda", tienda);
      formData.append("ubicacion", ubicacion);
      //formData.append(f.attr("name"), $(this)[0].files[0]);
      $.ajax({
        url: '../../../../../../../ubicacion.php',
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
          $('#mySidenavubicacion').html(data);
        }
      });
    



            
             

             



        break;
       case 'misproductos':
 if (tienda_oculta=='none') {
        $('#latiendaboton').animate({top: posicion_menu_rapido+230+'px',width:'50px',height:'50px'});
        }
        $('#micontactoboton').animate({top: posicion_menu_rapido+110+'px',width:'50px',height:'50px'});
        $('#miperfilboton').animate({top: posicion_menu_rapido+170+'px',width:'50px',height:'50px'});
        $('#misproductos').animate({top: posicion_menu_rapido+30+'px',width:'70px',height:'70px'});
        $('#latiendatexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#micontactotexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#miperfiltexto').animate({top: posicion_menu_rapido+45+'px'});
        $('#misproductostexto').animate({top: posicion_menu_rapido+45+'px'});
     $('#latiendatexto').fadeOut("slow");
     $('#micontactotexto').fadeOut("slow");
     $('#miperfiltexto').fadeOut("slow");
     $('#misproductostexto').fadeIn("slow");

        break;
  
}

   
   });


});