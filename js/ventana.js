// declarar variable para Document


var x;
x=$(document);
/*////////////////////////////////SEGUNDO BOTON CATEGORIA//////////////////////////////////////////*/
$(document).ready(function () {
$(function(){
 $('#elbotondesubir').click(function(){
 $('#modal').fadeIn('slow');
 $("#modal").css('display', 'block');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        
       
        

         $('#close').on('click', function(){
        
                 
      
                 $('.popup-overlay').fadeOut('slow');
                 $('#modal').fadeOut('slow');
               $("#modal").css('display', 'none');
        
        });
        
    });
 });


$(function(){
    
    $('.pic1-botoncategoria').click(function(){
    
        var id_categoria = $(this).attr('id_categoria');
        var id_subcategoria = $(this).attr('id_subcategoria');
        var abierto= $(this).attr('abierto');
        var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
        var subselecto= $("#categoriaselecta").attr('subselecto');
        var categoria = $(this).val();

      
        $('#popup'+id_categoria).fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        
       
        

        $('#close'+id_categoria).on('click', function(){
        
                 $('#popup'+id_categoria).fadeOut('slow');
      
                 $('.popup-overlay').fadeOut('slow');
        return false;
        });
        return false;
    });
    $('.tarjeta2').click(function(){
    
      var id_categoria = $(this).attr('id_categoria');
        var id_subcategoria = $(this).attr('id_subcategoria');
        var abierto= $(this).attr('abierto');
        var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
        var subselecto= $("#categoriaselecta").attr('subselecto');
        var categoria = $(this).val();
        
      
        $('#popup'+id_categoria).fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        
       
        

        $('#close'+id_categoria).on('click', function(){
        
                 $('#popup'+id_categoria).fadeOut('slow');
      
                 $('.popup-overlay').fadeOut('slow');
        return false;
        });
        return false;
    });
    

  $('.pic1-botonsubcategoria').on('click', function(){
    var id_categoria = $(this).attr('id_categoria');
         var id_subcategoria = $(this).attr('id_subcategoria');
         var subcategorianombre=$(this).attr('value');
        
                 $('#popup'+id_categoria).fadeOut('slow');
      
                $('.popup-overlay').fadeOut('slow');
                document.getElementById("botonaladocate"+id_categoria).innerHTML =subcategorianombre;
                 document.getElementById("raya_categoria_medio"+id_categoria).style.display ='block';
                 document.getElementById("botonaladocate"+id_categoria).getAttributeNode("id_categoria").value =id_categoria;
                 document.getElementById("botonaladocate"+id_categoria).style.display ='block';
        return false;
        });

        $('.pic1-botonsubcategoriaultimo').on('click', function(){
            var id_categoria = $(this).attr('id_categoria');
            var id_subcategoria = $(this).attr('id_subcategoria');
            var subcategorianombre=$(this).attr('value');
            
             $('#popup'+id_categoria).fadeOut('slow');
      
            $('.popup-overlay').fadeOut('slow');
          document.getElementById("botonaladocate"+id_categoria).innerHTML =subcategorianombre;
          document.getElementById("raya_categoria_medio"+id_categoria).style.display ='block';
          document.getElementById("botonaladocate"+id_categoria).getAttributeNode("id_categoria").value =id_categoria;
          document.getElementById("botonaladocate"+id_categoria).style.display ='block';
        return false;
        });

         $('.pic1-botonsubcategoriaprimero').on('click', function(){
            var id_categoria = $(this).attr('id_categoria');
         var id_subcategoria = $(this).attr('id_subcategoria');
          var subcategorianombre=$(this).attr('value');
         
                $('#popup'+id_categoria).fadeOut('slow');
      
                $('.popup-overlay').fadeOut('slow');
                document.getElementById("botonaladocate"+id_categoria).innerHTML =subcategorianombre;
                document.getElementById("raya_categoria_medio"+id_categoria).style.display ='block';
                document.getElementById("botonaladocate"+id_categoria).getAttributeNode("id_categoria").value =id_categoria;
                document.getElementById("botonaladocate"+id_categoria).style.display ='block';
        return false;
        });

        $('.pic1-botonsubcategoriaprimero1').on('click', function(){
            var id_categoria = $(this).attr('id_categoria');
         var id_subcategoria = $(this).attr('id_subcategoria');
          var subcategorianombre=$(this).attr('value');
          
                 $('#popup'+id_subcategoria).fadeOut('slow');
      
                  $('.popup-overlay').fadeOut('slow');
                 document.getElementById("botonaladocate"+id_categoria).innerHTML =subcategorianombre;
                 document.getElementById("raya_categoria_medio"+id_categoria).style.display ='block';
                 document.getElementById("botonaladocate"+id_categoria).getAttributeNode("id_categoria").value =id_categoria;
                 document.getElementById("botonaladocate"+id_categoria).style.display ='block';
        return false;
        });
 
    
      
});

$(function(){      
    
    $('.pic1-botoncategoria1').click(function(){
        
        
        var id_categoria = $(this).attr('id_categoria');
        var id_subcategoria = $(this).attr('id_subcategoria');
        var abierto= $(this).attr('abierto');
        var categoriaselecta= $("#categoriaselecta").attr('categoriaselecta');
        var subselecto= $("#categoriaselecta").attr('subselecto');
        var categoria = $(this).val();
      
        $('#popup'+id_categoria).fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        

        $('#close'+id_categoria).on('click', function(){
        
                 $('#popup'+id_categoria).fadeOut('slow');
      
                 $('.popup-overlay').fadeOut('slow');
        return false;
        });
        return false;
    });
  $('.pic1-botonsubcategoria').on('click', function(){
    var id_categoria = $(this).attr('id_categoria');
         var id_subcategoria = $(this).attr('id_subcategoria');
         var subcategorianombre=$(this).attr('value');
        
                 $('#popup'+id_categoria).fadeOut('slow');
      
                $('.popup-overlay').fadeOut('slow');
                $("#botonaladocate"+id_categoria).attr('value', subcategorianombre);
                $("#botonaladocate"+id_categoria).attr('id_categoria', id_categoria);
                $("#botonaladocategoria"+id_categoria).css('display', 'block');
        return false;
        });

        $('.pic1-botonsubcategoriaultimo').on('click', function(){
            var id_categoria = $(this).attr('id_categoria');
            var id_subcategoria = $(this).attr('id_subcategoria');
            var subcategorianombre=$(this).attr('value');
            
             $('#popup'+id_categoria).fadeOut('slow');
      
            $('.popup-overlay').fadeOut('slow');
            $("#botonaladocate"+id_categoria).attr('value', subcategorianombre);
            $("#botonaladocate"+id_categoria).attr('id_categoria', id_categoria);
                $("#botonaladocategoria"+id_categoria).css('display', 'block');
        return false;
        });

         $('.pic1-botonsubcategoriaprimero').on('click', function(){
            var id_categoria = $(this).attr('id_categoria');
         var id_subcategoria = $(this).attr('id_subcategoria');
          var subcategorianombre=$(this).attr('value');
         
                $('#popup'+id_categoria).fadeOut('slow');
      
                $('.popup-overlay').fadeOut('slow');
                $("#botonaladocate"+id_categoria).attr('value', subcategorianombre);
                $("#botonaladocate"+id_categoria).attr('id_categoria', id_categoria);
                $("#botonaladocategoria"+id_categoria).css('display', 'block');
        return false;
        });

        $('.pic1-botonsubcategoriaprimero1').on('click', function(){
            var id_categoria = $(this).attr('id_categoria');
         var id_subcategoria = $(this).attr('id_subcategoria');
          var subcategorianombre=$(this).attr('value');
          
                 $('#popup'+id_subcategoria).fadeOut('slow');
      
                  $('.popup-overlay').fadeOut('slow');
                  $("#botonaladocate"+id_categoria).attr('value',subcategorianombre);
                  $("#botonaladocate"+id_categoria).attr('id_categoria', id_categoria);
                $("#botonaladocategoria"+id_categoria).css('display', 'block');
        return false;
        });
 
    
      
});
});
