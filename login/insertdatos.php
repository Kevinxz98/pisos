<?php 

include "./conexion.php";


	if($_POST['nombre']){

		$nombre = $_POST['nombre'];

		$query_insertnombre = mysqli_query($conection, "UPDATE `contacto` SET `nombre`='$nombre'");
	} 


	if($_POST['cel']){

		$cel = $_POST['cel'];

		$query_insertcel = mysqli_query($conection, "UPDATE `contacto` SET `cel`='$cel'");
	} 


	if($_POST['correo']){

		$correo = $_POST['correo'];

		$query_insertcorreo = mysqli_query($conection, "UPDATE `contacto` SET `correo`='$correo'");
	} 


	if($_POST['ciudad']){

		$ciudad = $_POST['ciudad'];

		$query_insertciudad = mysqli_query($conection, "UPDATE `contacto` SET `ciudad`='$ciudad'");
	} 


	if($_POST['direccion']){

		$direccion = $_POST['direccion'];

		$query_insertdireccion= mysqli_query($conection, "UPDATE `contacto` SET `direccion`='$direccion'");
	} 

 

 ?>