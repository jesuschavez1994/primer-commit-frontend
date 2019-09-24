
   $('.mySidenav').click(function(event) {
     var id=$(this).attr('id');
     var tienda_oculta=$('#2latiendaboton').css('display');
     var ubicacion=$(this).attr('ubicacion');
     var tienda=$(this).attr('tienda');
 
switch(id){
    case 'latiendaboton':
        
  if (tienda_oculta=='none') {
        $('#latiendaboton').animate({top: '30px',width:'70px',height:'70px'});
       }

        $('#micontactoboton').animate({top: '110px',width:'50px',height:'50px'});
        $('#miperfilboton').animate({top: '170px',width:'50px',height:'50px'});
        $('#misproductos').animate({top: '230px',width:'50px',height:'50px'});
        $('#latiendatexto').fadeIn("slow");
        $('#micontactotexto').fadeOut("slow");
        $('#miperfiltexto').fadeOut("slow");
        $('#misproductostexto').fadeOut("slow");
      




        break;
    case 'micontactoboton':
       if (tienda_oculta=='none') {
        $('#latiendaboton').animate({top: '230px',width:'50px',height:'50px'});
       }
        $('#micontactoboton').animate({top: '30px',width:'70px',height:'70px'});
        $('#miperfilboton').animate({top: '110px',width:'50px',height:'50px'});
        $('#misproductos').animate({top: '170px',width:'50px',height:'50px'});
    $('#latiendatexto').fadeOut("slow");
    $('#micontactotexto').fadeIn("slow");
    $('#miperfiltexto').fadeOut("slow");
    $('#misproductostexto').fadeOut("slow");

        break;
     case 'miperfilboton':
 if (tienda_oculta=='none') {
        $('#latiendaboton').animate({top: '230px',width:'50px',height:'50px'});
        }
        $('#micontactoboton').animate({top: '110px',width:'50px',height:'50px'});
        $('#miperfilboton').animate({top: '30px',width:'70px',height:'70px'});
        $('#misproductos').animate({top: '170px',width:'50px',height:'50px'});
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
        $('#latiendaboton').animate({top: '230px',width:'50px',height:'50px'});
        }
        $('#micontactoboton').animate({top: '110px',width:'50px',height:'50px'});
        $('#miperfilboton').animate({top: '170px',width:'50px',height:'50px'});
        $('#misproductos').animate({top: '30px',width:'70px',height:'70px'});
     $('#latiendatexto').fadeOut("slow");
     $('#micontactotexto').fadeOut("slow");
     $('#miperfiltexto').fadeOut("slow");
     $('#misproductostexto').fadeIn("slow");

        break;
  
}

   
   });


