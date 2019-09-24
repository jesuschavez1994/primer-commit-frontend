 document.addEventListener("DOMContentLoaded", function(event) { 
  $('#datos_contacto').click(function(){   

    $("#mi_contacto_boton").css('display', 'flex');
    $("#la_tienda_botonn").css('display', 'none');
    $("#mi_perfil_boton").css('display', 'none');
    $("#cambio_imagen_contacto").css('display', 'block');
    $("#cambio_imagen_tienda").css('display', 'none');
  $('.boton_configuracion').css('color','black');
  $(this).css('color','rgb(241,147,0)');
  }); 
   $('#datos_tienda').click(function(){   

    $("#mi_contacto_boton").css('display', 'none');
    $("#la_tienda_botonn").css('display', 'flex');
    $("#mi_perfil_boton").css('display', 'none');
    $("#cambio_imagen_contacto").css('display', 'none');
    $("#cambio_imagen_tienda").css('display', 'none');
      $('.boton_configuracion').css('color','black');
  $(this).css('color','rgb(241,147,0)');
   var map = L.map('mapid').setView([10.06803,-69.28403], 12);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);



var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("Tu ubicación es:" + e.latlng.lat.toString()+','+e.latlng.lng.toString())
        .openOn(map);
        $('#ubicacion').attr('value',  e.latlng.lat.toString()+','+e.latlng.lng.toString());
}

map.on('click', onMapClick);

  }); 
      $('#mi_perfil').click(function(){   

    $("#mi_contacto_boton").css('display', 'none');
    $("#la_tienda_botonn").css('display', 'none');
    $("#mi_perfil_boton").css('display', 'flex');
        $("#cambio_imagen_contacto").css('display', 'none');
    $("#cambio_imagen_tienda").css('display', 'block');
      $('.boton_configuracion').css('color','black');
  $(this).css('color','rgb(241,147,0)');
   

  }); 

   });