<!doctype html>
<html lang="es">
	<head>
		<title>RLG Outlet Usados</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		
		<meta name="author" content="RLG Informatica" />
		<meta name="robots" content="noindex, nofollow" >
		
		<link href="css/estilos.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
		<link rel="icon" href="imagenes/favicon.png" type="image/png">
		<!-- Mapa con GOOGLE MAPS API -->
		
		<script >
						
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
			
			
			<div class="outlet">
				<nav class="categorias">
					<h4> Categorias </h4>
					<ul class="categorias-lista">
						<li><a href="productos.php?categoria=motherboards"> ° MOTHER</a></li>
						<li><a href="productos.php?categoria=procesadores"> ° PROCESADORES</a></li>
						<li><a href="productos.php?categoria=memorias"> ° MEMORIA RAM</a></li>
						<li><a href="productos.php?categoria=discos rigidos"> ° DISCOS RIGIDOS</a></li>
						<li><a href="productos.php?categoria=notebooks"> ° NOTEBOOKS</a></li>			
						<li><a href="productos.php?categoria=cpu"> ° CPU</a></li>			
					</ul>   
					
					<form method="post" action="buscar_productos.php" class="formulario-busqueda">
							Ingrese busqueda:
							<input type="text" name="busqueda" id="busqueda">										
							<input type="submit" name="button" id="button" value="Buscar">
					</form>
				</nav> 	<!-- Cierra .categorias -->
				
				<div class="productos">
					<?php 
						$buscar = $_POST['busqueda'];
					?>
				
				
					<h3 class="productos-busqueda"><?php echo "Resultados para su busqueda de: " . "''" . "$buscar" . "''";?></h3>
					
					<table>
						<tr>
							<?php
								
							// me conecto a la base	
							include("conexion.php");
							
							//realizo la consulta
							$busqueda = "SELECT * FROM productos
									   WHERE 
									   descripcion LIKE '%$buscar%' OR
									   categoria LIKE '%$buscar%' OR
									   marca LIKE '%$buscar%'";

							$ej_busqueda = mysqli_query($conexion, $busqueda);		  

							if($ej_busqueda === false){
								echo "Error, ver SQL";
							} else {
								
								// Conseguimos cantidad de resultados
								$canti = mysqli_num_rows($ej_busqueda);
								
								
								if($canti > 0){
									// echo "Tengo resultados";
									
									// Si tengo resultados los muestro
									$contar = 0;
									while($reg = mysqli_fetch_array($ej_busqueda)){
										if($contar == 3){
											$contar = 0;
											echo "</tr> <tr>";
										}
										$contar++;
									?>

										<td class="productos-tabla">
											<p><?php echo $reg['descripcion'];?></p>
											<div class="productos-item-imagen">
												<img src="/Proyecto-RLG/imagenes/productos/<?php echo $reg['imagen'] . ".jpg"?>" alt="imagen de articulo">
											</div>
											<p><?php echo "$" . $reg['precio'];?></p>
											
										</td>
										
										
										
									<?php
										
										
									}//aca termina el while
								}else {
									echo "<h3 class='no-tenemos'>NO ENCONTRAMOS COINCIDENCIAS CON TU BUSQUEDA</h3>";
								} //aca termina el if de cant
							}//DANGER ZONE no escribir fuera de esto
							?>
						</tr> <!--cierra tr -->
					</table> <!--cierra tabla -->
					
				</div> <!--cierra productos -->
			</div> <!--cierra outlet -->
			
			
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