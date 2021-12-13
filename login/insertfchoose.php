<?php 

include "./conexion.php";

$queryimag1 = mysqli_query($conection, "SELECT f.nameimage,f.txtfoton
											 FROM fotoschoose f
											  WHERE idimagen = 1");

$queryimag2 = mysqli_query($conection, "SELECT f.nameimage,f.txtfoton
											 FROM fotoschoose f
											  WHERE idimagen = 2");

$queryimag3 = mysqli_query($conection, "SELECT f.nameimage,f.txtfoton
											 FROM fotoschoose f
											  WHERE idimagen = 3");

$queryimag4 = mysqli_query($conection, "SELECT f.nameimage,f.txtfoton
											 FROM fotoschoose f
											  WHERE idimagen = 4");



while ($dataimg1 = mysqli_fetch_array($queryimag1)) {

	$txtfoto1 = $dataimg1['txtfoton'];

		if($dataimg1['nameimage'] != null){
			$img1 = $dataimg1['nameimage'];
    		$foto1 = 'includes/img/uploads/'.$dataimg1['nameimage'];
    	} else {
    		$foto1 = '';
    	}
    }

    while ($dataimg2 = mysqli_fetch_array($queryimag2)) {

    	$txtfoto2 = $dataimg2['txtfoton'];

		if($dataimg2['nameimage'] != null){
			$img2 = $dataimg2['nameimage'];
    		$foto2 = 'includes/img/uploads/'.$dataimg2['nameimage'];
    	} else {
    		$foto2 = '';
    	}
    }

    while ($dataimg3 = mysqli_fetch_array($queryimag3)) {

    	$txtfoto3 = $dataimg3['txtfoton'];

		if($dataimg3['nameimage'] != null){
			$img3 = $dataimg3['nameimage'];
    		$foto3 = 'includes/img/uploads/'.$dataimg3['nameimage'];
    	} else {
    		$foto3 = '';
    	}
    }

     while ($dataimg4 = mysqli_fetch_array($queryimag4)) {

     	$txtfoto4 = $dataimg4['txtfoton'];

		if($dataimg4['nameimage'] != null){
			$img4 = $dataimg4['nameimage'];
    		$foto4 = 'includes/img/uploads/'.$dataimg4['nameimage'];
    	} else {
    		$foto4 = '';
    	}
    }




	if($_FILES['img1']){
		
    $foton1 			= $_FILES['img1'];
	$nombre_foton1 		= $foton1['name'];
	$typefoton1			= $foton1['type'];
	$url_tempfoton1		= $foton1['tmp_name'];


	if($nombre_foton1 != '' || $nombre_foton1 != null){
		$destino = 'includes/img/uploads/';
		$imgfoton1_nombre = 'img_'.md5(date('YdjNBisLoBis'));
		$imgfoton1_new = $imgfoton1_nombre.'.jpg';
		$src = $destino.$imgfoton1_new;
	}else{
		$imgfoton1_new = $img1;
	}

	$query_insertfoton1 = mysqli_query($conection, "UPDATE `fotoschoose` SET `nameimage` = '$imgfoton1_new' WHERE idimagen = 1");


	if ($query_insertfoton1) {
		move_uploaded_file($url_tempfoton1, $src);

	}

}


	if($_FILES['img2']){
		
		
	$foton2 			= $_FILES['img2'];
	$nombre_foton2 		= $foton2['name'];
	$typefoton2			= $foton2['type'];
	$url_tempfoton2		= $foton2['tmp_name'];


	if($nombre_foton2 != '' || $nombre_foton2 != null){
		$destino = 'includes/img/uploads/';
		$imgfoton2_nombre = 'img_'.md5(date('YNBisLoBis'));
		$imgfoton2_new = $imgfoton2_nombre.'.jpg';
		$src = $destino.$imgfoton2_new;
	}else{
		$imgfoton2_new = $img2;
	}


	$query_insertfoton2 = mysqli_query($conection, "UPDATE `fotoschoose` SET `nameimage` = '$imgfoton2_new' WHERE idimagen = 2");

	if ($query_insertfoton2) {

			if($nombre_foton2 != ''){

				move_uploaded_file($url_tempfoton2, $src);
			}
	}
} 
 

	if($_FILES['img3']){
		

	$foton3 			= $_FILES['img3'];
	$nombre_foton3 		= $foton3['name'];
	$typefoton3			= $foton3['type'];
	$url_tempfoton3		= $foton3['tmp_name'];


	if($nombre_foton3 != '' || $nombre_foton3 != null){
		$destino = 'includes/img/uploads/';
		$imgfoton3_nombre = 'img_'.md5(date('YdjisLoBis'));
		$imgfoton3_new = $imgfoton3_nombre.'.jpg';
		$src = $destino.$imgfoton3_new;
	}else{
		$imgfoton3_new = $img3;
	}

	$query_insertfoton3 = mysqli_query($conection, "UPDATE `fotoschoose` SET `nameimage` = '$imgfoton3_new' WHERE idimagen = 3");

	if ($query_insertfoton3) {

			if($nombre_foton3 != ''){

				move_uploaded_file($url_tempfoton3, $src);
			}
	}

} 

	


	if($_POST['tachoose1']){

		$tachoose1 = $_POST['tachoose1'];

		$query_inserttxtfoton1 = mysqli_query($conection, "UPDATE `fotoschoose` SET `txtfoton` = '$tachoose1' WHERE idimagen = 1");
	} 


	if($_POST['tachoose2']){

		$tachoose2 = $_POST['tachoose2'];

		$query_inserttxtfoton2 = mysqli_query($conection, "UPDATE `fotoschoose` SET `txtfoton` = '$tachoose2' WHERE idimagen = 2");
	} 

	if($_POST['tachoose3']){

		$tachoose3 = $_POST['tachoose3'];

		$query_inserttxtfoton3 = mysqli_query($conection, "UPDATE `fotoschoose` SET `txtfoton` = '$tachoose3' WHERE idimagen = 3");
	} 

	if($_POST['tachoose4']){

		$tachoose4 = $_POST['tachoose4'];

		$query_inserttxtfoton4 = mysqli_query($conection, "UPDATE `fotoschoose` SET `txtfoton` = '$tachoose4' WHERE idimagen = 4");
	} 
 

 ?>