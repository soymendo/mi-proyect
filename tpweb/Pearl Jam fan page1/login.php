<?php
//login.php
//1º consigo los datos
$usuario=$_Post['usuario'];
//Comparo encriptado con encriptado
$clave=md5($_Post['clave']);

//2º Me conecto a la base
include("conexion.php");


//3º Creo la query
$buscar="SELECT * FROM usuarios 
		 WHERE
		 usuario='$usuario'
		 AND
		 clave='$clave'
		 ";

//4º Ejecutar

		$buscar_ej=mysqli_query(
								$conexion, $buscar
								);
//5º Preguntar si no funciono
if ($buscar_ej==false)
{
echo "mirar el sql $buscar";	
}
else
{
echo "vas bien";	
}
		 



?>