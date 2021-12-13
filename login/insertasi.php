<?php 

include "./conexion.php";

$queryasi = mysqli_query($conection, "SELECT * FROM `asi`");

while($dataasi = mysqli_fetch_array($queryasi)){

  $asitxt = $dataasi['asitxt'];
  $taasi = $dataasi['taasi'];

}




	if($_POST['asitxt']){

		$asitxt = $_POST['asitxt'];

		$query_inserttxtfoton1 = mysqli_query($conection, "UPDATE `asi` SET `asitxt`='$asitxt'");
	} 


	if($_POST['taasi']){

		$taasi = $_POST['taasi'];

		$query_inserttxtfoton2 = mysqli_query($conection, "UPDATE `asi` SET `taasi`='$taasi'");
	} 

 

 ?>