














<!doctype html>

<html lang="es"> <!--Idioma-->
   <head>
   
   <!-- comentario   ctl+k -->
	   <meta charset="utf-8">   <!--Caracteres-->
	   <title>Pearl Jam fan page</title>
	   
	   <link href="registro.css" rel="stylesheet">
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
		   <li><a href="muro.php" title="">Home</a></li>
		   <li><a href="integrantes.html" >Integrantes</a></li>
		   <li><a href="fotos.html">Fotos</a></li>
		   <li><a href="sobremi.html" title="">Sobre mi</a></li>
		   <li><a href="#" title="">Iniciar sesion</a></li>
		   <!--<li><a href="#" title="">Contacts</a></li>-->
		   </ul>
	   </div>
	   <!--  #menu -->
		
		
		
		
		
		<div class="wrapper">
 <div class="top"><div class="title"><h1>Fan de Pearl jam</h1></div></div>
 <div class="content">
 <div class="card first">
	  
	  
 <?php
	// registro_pr.php
	
	// Consigo los datos
	$nombre   = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email    = $_POST['email'];
	$telefono = $_POST['telefono'];
	$usuario  = $_POST['usuario'];
	// Guardamos la clave encriptada
	$clave    = md5($_POST['clave']);
	
	// Me conecto a la BD
	include("conexion.php");
	
	// Genero la query (INSERT)
	$insertar = "INSERT INTO usuarios
				 VALUES(
					NULL,
					
					'$usuario',
					'$clave',
					'$nombre',
					'$apellido',
					'$email',
					'$telefono',
					''
				 )";
	
	// Ejecutar la query
	$insertar_ej = mysqli_query(
					$conexion, $insertar
					);
	
	// Pregunto si funcionó
	if($insertar_ej == false){
		echo "Falló :(";
	} else {
		echo "Registro insertado. Bienvenido";
	}
	 
	
?>
	 
	 <br><br><br>
	 
  </div>
   
  </div>
		</div>

	   <div id="footer">
	   <p>&copy;Todos los derechos reservados. Diseñado por: EL MENDO </p>
   </div>
		
		



</body>
	   
   
   
</html>
