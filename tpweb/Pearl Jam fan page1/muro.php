<?php
	// visitas.php
	
	// Validamos si existe la var de sesión ID
	session_start();
	
	// Si el usuario no pasó por login_pr y puso sus datos correctos la var de sesión nunca se creó, por lo tanto isset() devolverá false
	if(isset($_SESSION['id']) == false){
		header("location: index.php");
	}
	
	include("funciones.php");
	
?>




<!doctype html>

 <html lang="es"> <!--Idioma-->
	<head>
	
	<!-- comentario   ctl+k -->
		<meta charset="utf-8">   <!--Caracteres-->
		<title>Pearl Jam fan page</title>
		
		<link href="Fondo.css" rel="stylesheet">
		<link href="images/logo pearl.jpg"  rel="shortcut icon" />

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<style type="text/css">
@import "gallery.css";
</style>
</head>

<body>
	 
	<div id="cabecera">
		<div id="header">
			<div id="logo">
				<h1><a>JAMERS </a></h1>
				
			</div>
		</div>
		
	</div>
		<nav>
		<div id="menu">
			<ul>
			<li><a href="muro.php" title="">Muro</a></li>
			<li><a href="integrantes.html" >Integrantes</a></li>
			<li><a href="fotos.html">Fotos</a></li>
			<li><a href="sobremi.html" title="">Sobre mi</a></li>
			<li><a href="index.php" title="">Iniciar sesion</a></li>
			<!--<li><a href="#" title="">Contacts</a></li>-->
			</ul>
		</div> <!--menu-->
		</nav>
		<!--  #menu -->
		<div id="page"> <!--contenedor-->
		
		
		<div id="sidebar">
						<ul>
							
							<li>
								<h2>Sobre la banda:</h2>
								<p>Pearl Jam es considerado por algunos críticos como la banda más importante de la década de 1990, si bien dicho título pueden merecerlo varios grupos. Desde su debut, el grupo ha vendido 30 millones de álbumes en los Estados Unidos, y un estimado de 60 millones en todo el mundo.</p>
							</li>
							<li>
								<h2>Categorias</h2>
								<ul>
									<li><a href="proximoshows.html">Proximos tours</a></li>
									<li><a href="discografia/discografia.html">Discografia</a></li>
									<li><a href="videos.html">Videos</a></li>
									<li><a href="#">Letras originles</a></li>
									<li><a href="#">Letras traducidas</a></li>
									<li><a href="#">Novedades</a></li>
								</ul>
							</li>
							<div id="listadiaria">
							<li>
								<h2>Set list de hoy</h2> <!--musica-->
								<ul>
									<li><audio  src="Queen.mp3" controls="controls"></audio></li>
									<li><audio  src="Queen.mp3" controls="controls"></audio></li>
									<li><audio  src="Queen.mp3" controls="controls"></audio></li>
									<li><audio  src="Queen.mp3" controls="controls"></audio></li>
									<li><audio  src="Queen.mp3" controls="controls"></audio></li>
									<li><audio  src="Queen.mp3" controls="controls"></audio></li>
									<li><audio  src="Queen.mp3" controls="controls"></audio></li>
									<li><audio  src="Queen.mp3" controls="controls"></audio></li>
									<li><audio  src="Queen.mp3" controls="controls"></audio></li>
									<li><audio  src="Queen.mp3" controls="controls"></audio></li>
									 
									 
								</ul>
							</li>
						  </div>
							
						</ul>
					</div>
					<!-- end #sidebar -->
		
		
		
		
		
		<!---------------------------------------------------------------------------------------------------------------------------------------------------->
			<div id="page-bgtop">
				
					<div id="content">
						<div id="gallery-wrapper">
							<div id="gallery"> <img class="output" src="images/img04.jpg" alt="" />
								<div id="thumbnail-bg"> <!--imagen minimizada-->
									<ul class="thumbnails">
									
									<li><img class="active" src="images/img04.jpg" title="EDDIE VEDDER" alt="" width="604" height="375"  /></li>
																			<li><img src="images/img05.jpg" title="MIKE MCCREADY" alt="" width="100" height="75"   /></li>
																			<li><img src="images/img06.jpg" title="MATT CAMERON" alt="" width="100" height="75"   /></li>
																			<li><img src="images/img07.jpg" title="JEFF AMENT" alt="" width="100" height="75"  /></li>
																			<li><img src="images/img08.jpg" title="STONE GOSSARD" alt="" width="100" height="75"  /></li>
									</ul>
								</div>
								<br class="clear" />
							</div>
               
							<script type="text/javascript">
	
							$('#gallery').gallerax({
								outputSelector: 		'.output',					// Output selector
								thumbnailsSelector:		'.thumbnails li img',		// Thumbnails selector
								captionSelector:		'.caption'					// Caption selector
							});
	
						</script>
							<!-- fin -->
						</div>
						<div class="post">
						<?php
		//conseguimos los comentarios
		include("conexion.php");
		$comentarios="
			SELECT*FROM comentarios
			ORDER BY fecha DESC
			LIMIT 20
					";
		//Ejecutar la query
		$comentarios_ej=mysqli_query(
				$conexion ,$comentarios
							);
		//Preguntar si es == false
		//fetch array
		while(
		$reg_com=mysqli_fetch_array($comentarios_ej)
		)
		{
			echo"<h2>";
			nombre($reg_com['id_usuario']);
			echo "</h2>";
			echo "<p>" . $reg_com['comentario'] . "</p>";
			if($_SESSION['id']==$reg_com['id_usuario'])
			{
				//echo "podes borrarlo";
			?>
			
			<a href="eliminar.php?id_c=
			<?php
			echo $reg_com['id_comentario'];
			?>">
			<img src="imagenes/eliminar.png" alt=
			"ELIMINAR COMENTARIO">
			</a>
			
			<?php
			
			
			
			}
			echo "<hr>";
		}
		
	?>
	
		 
	 <a href="salir.php">Cerrar sesion</a>
	 <br>
	 
	 <br>
	  <a href="agregar.php">comentario</a>
						</div>
						<div class="post">
							 
							</div>
						</div>
						<div style="clear: both;">&nbsp;</div>
					</div>
					<!-- end #content -->
					
					<div style="clear: both;">&nbsp;</div>
				
			</div>
		</div>
		<!-- end #page -->
	</div>
	<div id="footer">
		<p>&copy;Todos los derechos reservados. Diseñado por: EL MENDO </p>
	</div>
	<!-- end #footer -->




</body>
		
	
	
</html>
