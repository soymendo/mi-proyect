<!doctype html>

 <html lang="es"> <!--Idioma-->
	<head>
	
	<!-- comentario   ctl+k -->
		<meta charset="utf-8">   <!--Caracteres-->
		<title>Pearl Jam fan page</title>
		
		<link href="contacto.css" rel="stylesheet">
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
       
       
     <div class="login-page">
  <div class="form">
    <!--<form class="register-form">
      <input type="text" placeholder="Nombre"/><br><br>
      <input type="password" placeholder="Contraseña"/><br><br>
      <input type="text" placeholder="Correo"/>
      <button>crear</button>
      <p class="message">No estas registardo? <a href="#">registro aqui.</a></p>
    </form>-->
    <form method="post" action="login_pr.php">
		<label for="usuario">Usuario</label>
		<input type="text" name="usuario" id="usuario"><br><br>

		<label for="clave">Contraseña</label>
		<input type="password" name="clave" id="clave"><br><br>
		
		<input type="submit" name="button" id="button" value="Ingresar"><br><br>
	</form><br>
	Si no estas registrado, hace click <a href="registro.php">aqui</a>
  </div>
</div>
      
	  
	  
   </div>
    
   </div>
         </div>

		<div id="footer">
		<p>&copy;Todos los derechos reservados. Diseñado por: EL MENDO </p>
	</div>
		 
		 



</body>
		
	
	
</html>
