document.addEventListener("DOMContentLoaded", function(event) { 
  
var popup_ayuda=document.getElementById("mensaje_ayuda").addEventListener("click", enviomensaje_founduss);

function enviomensaje_founduss(event) {
document.getElementById("myModal_pie").style.display= 'flex';
 
}

var enviomensaje= document.getElementById("enviarmensajefoundusscontenido").addEventListener("submit", enviomensajefounduss);

function enviomensajefounduss(event) {
  event.preventDefault();


const data = new FormData(document.getElementById('enviarmensajefoundusscontenido'));
fetch('../../../../../../../enviar_correo_founduss.php', {
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
    document.getElementById("enviarmensajefoundusscontenido").innerHTML = "Mensaje Enviado";
})
.catch(function(err) {
   console.log(err);
});
}


 

$('.close2').click(function() {
$("#2nuevoproductos").html('');

$('#myModal_pie').css('display', 'none');
  
});


var modal = document.getElementById('myModal_pie');



// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
       
    }
}

});