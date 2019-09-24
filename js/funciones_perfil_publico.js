document.addEventListener("DOMContentLoaded", function(event) { 
document.getElementById("enviar_mensaje_tienda").addEventListener("submit", enviomensaje);

function enviomensaje(event) {
  event.preventDefault();


const data = new FormData(document.getElementById('enviar_mensaje_tienda'));
fetch('../../../../../../../enviar_correo_tienda.php', {
   method: 'POST',
   body: data,
   mode: 'cors',
    cache: 'default' 
})
.then(function(response) {
   if(response.ok) {
       return response.text();
     
   } else {
       throw "Error en la llamada Ajax";
   }

})
.then(function(texto) {
   console.log(texto);
    document.getElementById("mySidenavmensajeria_buzon").innerHTML = "Mensaje Enviado";
})
.catch(function(err) {
   console.log(err);
});
}
});