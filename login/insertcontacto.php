<?php 

include "./conexion.php";


	if($_POST){

		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$cel = $_POST['cel'];
		$mensaje = $_POST['mensaje'];

		$query_insertcontacto = mysqli_query($conection, "INSERT INTO `clientes`( `nombre`, `correo`, `cel`, `mensaje`) VALUES ('$nombre','$correo','$cel','$mensaje')");
	} 



 ?>