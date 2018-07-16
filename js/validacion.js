var validoNombre = document.getElementById("nombre");

validoNombre.addEventListener("focus", function( event ) {
  	event.target.classList.add("foco");   //FOCO SOBRE NOMBRE   
});

validoNombre.addEventListener("blur", function( event ) {
  
  event.target.classList.add("validar");  
  event.target.classList.remove("foco");  //ELIMINO FOCO
});



var validoEmail = document.getElementById("email");

validoEmail.addEventListener("focus", function( event ) {
  
  event.target.classList.add("foco");    
});

validoEmail.addEventListener("blur", function( event ) {
  event.target.classList.add("validar");    
  event.target.classList.remove("foco");  //ELIMINO FOCO
});



var validoTelefono = document.getElementById("telefono");

validoTelefono.addEventListener("focus", function( event ) {
  event.target.classList.add("foco");    
});

validoTelefono.addEventListener("blur", function( event ) {
  event.target.classList.add("validar");    
  event.target.classList.remove("foco");  //ELIMINO FOCO
});



var focoComentario = document.getElementById("consulta");

focoComentario.addEventListener("focus", function( event ) {
  event.target.classList.add("foco");    
});

focoComentario.addEventListener("blur", function( event ) {
  event.target.classList.remove("foco");  //ELIMINO FOCO
});



var reseteo = document.getElementById("resetear");
reseteo.addEventListener("click", function( event ) {
  validoNombre.classList.remove("validar");   
  validoEmail.classList.remove("validar");
  validoTelefono.classList.remove("validar");
});





