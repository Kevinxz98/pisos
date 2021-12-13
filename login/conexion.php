<?php 
	
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$bd = 'pisos';

	$conection = @mysqli_connect($host,$user,$password,$bd);


	if(!$conection){
		echo "error en la conexion";
	} 

 ?>