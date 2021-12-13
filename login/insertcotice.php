<?php 

include "./conexion.php";

$querycotice = mysqli_query($conection, "SELECT * FROM `cotice`");

  while($datacotice = mysqli_fetch_array($querycotice)){
    $tithec = $datacotice['tithec'];
    $txtc = $datacotice['txtc'];
  }




	if($_POST['tithec']){

		$tithec = $_POST['tithec'];

		$query_inserttxtfoton1 = mysqli_query($conection, "UPDATE `cotice` SET `tithec`='$tithec'");
	} 


	if($_POST['txtc']){

		$txtc = $_POST['txtc'];

		$query_inserttxtfoton2 = mysqli_query($conection, "UPDATE `cotice` SET `txtc`='$txtc'");
	} 

 

 ?>