<!doctype html>
<html lang="es">
	<head>
		<title>RLG Servicio Tecnico</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link href="estilos.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
		<link rel="icon" href="imagenes/favicon.png" type="image/png">
	
		<!-- Mapa con GOOGLE MAPS API -->
		
		<script>
						
			function initMap() {
				var myLatLng = {lat: -34.6491506, lng: -58.5539576};

				var map = new google.maps.Map(document.getElementById('map'), {
				  zoom: 13,
				  center: myLatLng
				});

				var marker = new google.maps.Marker({
				  position: myLatLng,
				  map: map,
				  title: "NUESTRO TALLER"
				});
			}
		</script>
						
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxt2BY9Y41I2DQxT7bfVZ8AhfAb0OV6c0&callback=initMap"
		async defer>
		</script>
			
	
	</head>
	
	<body>
		<header class="cabecera">
			<a class="cabecera-imagen" href="index.html">
				<img src="imagenes/logo.png" alt="logo">
			</a>
			<div class="cabecera-texto">
				<a href="index.html">
					<h1>RLG</h1>
				</a>
				<h2>Servicio Técnico Informático</h2>				
			</div> <!-- Cierra .cabecera-texto -->
			
			<h3>PC DE ESCRITORIO - NOTEBOOK - NETBOOK - REDES  </h3>
		</header> <!-- Cierra .cabecera -->
	
		<div class="contenedor">
			<nav class="botonera">
				<button class="toggle" id="boton">
					<img src="imagenes/hamburguesa.svg" alt="Abrir menu">
				</button>
				<ul class="botonera-lista" id="menu">
					<li><a href="index.html">INICIO</a></li>
					<li><a href="quienes.html">¿QUIENES SOMOS?</a></li>
					<li><a href="nuestros-servicios.html">SERVICIOS</a></li>
					<li><a href="outlet.php">OUTLET USADOS</a></li>
					<li><a href="contacto.php">CONTACTO</a></li>			
				</ul>   
			</nav> 	<!-- Cierra .botonera -->
			
			
			
			<div class="contacto">
				
				<img src="imagenes/fondo-contacto.jpg" alt="">
				
				
				<div class="contacto-formulario">
					
					<?php

					// Conseguimos datos
					$nombre = $_POST['nombre'];
					$email = $_POST['email'];
					$consulta = $_POST['consulta'];
					$telefono = $_POST['telefono'];
					$destinatario = "rodrigo_la_giglia@yahoo.com.ar";
					
					
					//GUARDO TODO EN LA BASE DE DATOS, TABLA CONSULTAS
					
					// me conecto a la base	
					include("conexion.php");
					
					$ag = "INSERT INTO consultas
					VALUES (NULL,'$nombre','$email',$telefono,'$consulta')";
					
					
					// Ejecutar la query
					$ej_ag = mysqli_query($conexion, $ag);
					
					// Verificamos si funcionó
					if(!$ej_ag){
						echo "<h3 class='enviado'>Lo lamentamos, hubo un error y no se envió tu consulta<br>intenta de nuevo más tarde</h3>";
					} else {
						echo "<h3 class='enviado'>Tu mansaje se ha enviado, <br>te contestaremos a la brevedad</h3>";
					}
					
					
					//ENVIO POR MAIL
					
					// Guardo todos los datos que pedí en una sola variable
					$cuerpo = "$nombre con numero de telefono $telefono te envió la siguiente consulta: $consulta . Contactalo a su mail $email";
					
						
					// Este es para el dueño del sitio
					mail($destinatario, 'Consulta desde el sitio web.', $cuerpo);
										
					// Mail para la persona que completó el formulario
					mail(
						$email, 
						"Gracias por contactarnos", 
						"Te contestaremos a la brevedad, RLG Computacion"
					);
					
					

					?>										
					
				</div>	
			
			
				
			</div>   <!--CIERRA contacto-->
			
			<footer class="piefondo">
				<div class="pie">
					<div class="pie-mapa">
						<h4>UBICACION Y ZONA DE COBERTURA PARA VISITAS</h4>
						
						<div id="map"></div>
						

						<p>RAMOS MEJIA, HAEDO, LOMAS DEL MIRADOR, SAN JUSTO, VILLA LUZURIAGA, VILLA SARMIENTO, MORON, CIUDADELA</p>
					</div> <!-- Cierra .pie-mapa -->
					
					<div class="pie-derecha">
						<p class="pie-derecha-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
						ut labore et dolore magna aliqua. Ut enim ad </p>
						<div class="pie-derecha-telefono">
							<img src="imagenes/whatsapp.png" alt="whatsapp">
							<img src="imagenes/telefono.png" alt="telefono">
							<p>1154949087</p>
						</div>
						<p class="email">rodrigo_la_giglia@yahoo.com.ar</p>
						
						

					</div><!-- Cierra .pie-derecha -->
				
				</div> <!-- Cierra .pie -->
				<p class="creditos">Desarrollado por RLG </p>
			</footer> <!-- Cierra .piefondo -->
			
			
		</div>   <!-- Cierra contenedor -->
		
		<script src="js/hamburguesa.js"></script>  <!--ENLAZO JAVASCRIPT PARA EL MENU HAMBURGUESA -->
		
	</body>


</html>
