<?php 

include "./conexion.php";

$queryimag1 = mysqli_query($conection, "SELECT f.nameimage,f.txtfoton
											 FROM fotoshead f
											  WHERE idimagen = 1");

$queryimag2 = mysqli_query($conection, "SELECT f.nameimage,f.txtfoton
											 FROM fotoshead f
											  WHERE idimagen = 2");

$queryimag3 = mysqli_query($conection, "SELECT f.nameimage,f.txtfoton
											 FROM fotoshead f
											  WHERE idimagen = 3");

$queryimag4 = mysqli_query($conection, "SELECT f.nameimage,f.txtfoton
											 FROM fotoshead f
											  WHERE idimagen = 4");

$queryimag5 = mysqli_query($conection, "SELECT f.nameimage,f.txtfoton
											 FROM fotoshead f
											  WHERE idimagen = 5");


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

    while ($dataimg5 = mysqli_fetch_array($queryimag5)) {

    	$txtfoto5 = $dataimg5['txtfoton'];

		if($dataimg5['nameimage'] != null){
			$img5 = $dataimg5['nameimage'];
    		$foto5 = 'includes/img/uploads/'.$dataimg5['nameimage'];
    	} else {
    		$foto5 = '';
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

	$query_insertfoton1 = mysqli_query($conection, "UPDATE `fotoshead` SET `nameimage` = '$imgfoton1_new' WHERE idimagen = 1");


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


	$query_insertfoton2 = mysqli_query($conection, "UPDATE `fotoshead` SET `nameimage` = '$imgfoton2_new' WHERE idimagen = 2");

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

	$query_insertfoton3 = mysqli_query($conection, "UPDATE `fotoshead` SET `nameimage` = '$imgfoton3_new' WHERE idimagen = 3");

	if ($query_insertfoton3) {

			if($nombre_foton3 != ''){

				move_uploaded_file($url_tempfoton3, $src);
			}
	}

} 


	if($_FILES['img4']){
		
	$foton4 			= $_FILES['img4'];
	$nombre_foton4 		= $foton4['name'];
	$typefoton4			= $foton4['type'];
	$url_tempfoton4		= $foton4['tmp_name'];


	if($nombre_foton4 != '' || $nombre_foton4 != null){
		$destino = 'includes/img/uploads/';
		$imgfoton4_nombre = 'img_'.md5(date('YBisLoBis'));
		$imgfoton4_new = $imgfoton4_nombre.'.jpg';
		$src = $destino.$imgfoton4_new;
	}else{
		$imgfoton4_new = $img4;
	}

	$query_insertfoton4 = mysqli_query($conection, "UPDATE `fotoshead` SET `nameimage` = '$imgfoton4_new' WHERE idimagen = 4");

	if ($query_insertfoton4) {

			if($nombre_foton4 != ''){

				move_uploaded_file($url_tempfoton4, $src);
			}
	}
} 



	if($_FILES['img5']){


	$foton5 			= $_FILES['img5'];
	$nombre_foton5 		= $foton5['name'];
	$typefoton5			= $foton5['type'];
	$url_tempfoton5		= $foton5['tmp_name'];


	if($nombre_foton5 != '' || $nombre_foton5 != null){
		$destino = 'includes/img/uploads/';
		$imgfoton5_nombre = 'img_'.md5(date('YdjNBisis'));
		$imgfoton5_new = $imgfoton5_nombre.'.jpg';
		$src = $destino.$imgfoton5_new;
	}else{
		$imgfoton5_new = $img5;
	}

	$query_insertfoton5 = mysqli_query($conection, "UPDATE `fotoshead` SET `nameimage` = '$imgfoton5_new' WHERE idimagen = 5");

	if ($query_insertfoton5) {

			if($nombre_foton5 != ''){

				move_uploaded_file($url_tempfoton5, $src);
			}
	}


}	


	if($_POST['txtfoton1']){

		$txtfoton1 = $_POST['txtfoton1'];

		$query_inserttxtfoton1 = mysqli_query($conection, "UPDATE `fotoshead` SET `txtfoton` = '$txtfoton1' WHERE idimagen = 1");
	} 


	if($_POST['txtfoton2']){

		$txtfoton2 = $_POST['txtfoton2'];

		$query_inserttxtfoton2 = mysqli_query($conection, "UPDATE `fotoshead` SET `txtfoton` = '$txtfoton2' WHERE idimagen = 2");
	} 

	if($_POST['txtfoton3']){

		$txtfoton3 = $_POST['txtfoton3'];

		$query_inserttxtfoton3 = mysqli_query($conection, "UPDATE `fotoshead` SET `txtfoton` = '$txtfoton3' WHERE idimagen = 3");
	} 

	if($_POST['txtfoton4']){

		$txtfoton4 = $_POST['txtfoton4'];

		$query_inserttxtfoton4 = mysqli_query($conection, "UPDATE `fotoshead` SET `txtfoton` = '$txtfoton4' WHERE idimagen = 4");
	} 

	if($_POST['txtfoton5']){

		$txtfoton5 = $_POST['txtfoton5'];

		$query_inserttxtfoton5 = mysqli_query($conection, "UPDATE `fotoshead` SET `txtfoton` = '$txtfoton5' WHERE idimagen = 5");
	} 

 ?>