<!--enviar.php*/-->
<!doctype html>

 <html lang="es"> <!--Idioma-->
	<head>
	
	<!-- comentario   ctl+k -->
		<meta charset="utf-8">   <!--Caracteres-->
		<title>Pearl Jam fan page</title>
		
		<link href="sobre mi.css" rel="stylesheet">
		<link href="images/logo pearl.jpg"  rel="shortcut icon" />

 
</head>

<body>
	<div id="cabecera">
		<div id="header">
			<div id="logo">
				<h1><a>  </a></h1>
				
			</div>
		</div>
		
	</div>
		<div id="menu">
			<ul>
			<li><a href="Pearl jam fan page.html" title="">Home</a></li>
			<li><a href="integrantes.html" >Integrantes</a></li>
			<li><a href="fotos.html">Fotos</a></li>
			<li><a href="sobre mi.html" title="">Sobre mi</a></li>
			<li><a href="contacto.html" title="">Iniciar sesion</a></li>
			<!--<li><a href="#" title="">Contacts</a></li>-->
			</ul>
		</div>
		<!--  #menu -->
		 
		 
		 
		 
		 
		 <div class="wrapper">
  <div class="top"><div class="title"><h1>Fan de Pearl jam</h1></div></div>
  <div class="content">
  <div class="card first">
       
       
     <p class="text"> 
	 
 <?php

		// Consigo los datos del form

		$nombre = $_POST['nombre'];

		$email  = $_POST['email'];

		$comentarios = $_POST['comentarios'];

		

		// echo $nombre;

		

		// Uno o varios separados por ,

		$destinatario = "asdf@asdf.com,

						 asdf2@dsf.com";

		

		$asunto = "Formulario desde web";

		

		// Junto todos los datos solicitados en el form en 1 sola variable

		$cuerpo = "$nombre te envío el formulario, contactalo a su mail $email Su mensaje es: $comentarios ";

		

		$cabeceras = "From: Nombre <mail@sitio.com>";

		

		mail($destinatario,

			 $asunto,

			 $cuerpo,

			 $cabeceras);

			

		echo "Mensaje enviado: $cuerpo";

		

		

	?>

	 
	
 </p>
      
</div>


   </div>
         </div>

		<div id="footer">
		<p>&copy;Todos los derechos reservados. Diseñado por: EL MENDO </p>
	</div>
		 
		 



</body>
		
	
	
</html>
