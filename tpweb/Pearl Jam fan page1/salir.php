<?php
	// salir.php
	
	session_start();
	session_destroy();
	
	header("location: Pearl jam fan page.php");
?>