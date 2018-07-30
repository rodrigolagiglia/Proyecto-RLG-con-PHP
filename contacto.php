<!doctype html>
<html lang="es">
	<head>
		<title>RLG Contacto</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<meta name="description" content="Reparacion y mantenimiento de computadoras, notebooks y all in one " />
		<meta name="keywords" content="contacto, reparacion de computadoras, service, mantenimiento, " />
		<meta name="author" content="RLG Informatica" />
		<meta name="robots" content="index, follow" >
		
	
		<link href="css/estilos.css" rel="stylesheet">
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
					<h3>ENVIANOS TU CONSULTA</h3>
					<div class="contacto-formulario-sobre">
						<img src="imagenes/sobre.svg" alt="">
						<a class="copy-sobre" href='https://www.freepik.com/free-vector/open-email-envelope_883364.htm'>*Designed by Freepik</a>
					</div>
					<form action="enviar.php" method="post" autocomplete="off">
						
						<label>
							Nombre:
							<input id="nombre" type="text" name="nombre"  required>
						</label>
						<label>	
							E-mail:
							<input id="email" type="email" name="email" required>
						</label>
						<label>	
							Teléfono:
							<input id="telefono" type="tel" name="telefono" required>
						</label>
						
						<label>	
							Tu consulta o comentario:
							<textarea id="consulta" name="consulta"></textarea>
						</label>
						
						<input type="submit" value="Enviar">
						<input id="resetear" type="reset" value="Limpiar fomrulario">
					</form>
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
		
		<script src="js/validacion.js"></script>  <!--ENLAZO JAVASCRIPT PARA VALIDACION DE CAMPOS FORMULARIO -->
		
	</body>


</html>