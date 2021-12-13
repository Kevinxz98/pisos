<?php 	

 session_start();

  include "./conexion.php";

  $id = $_GET['id'];

  if ($id == '' || $id == null) {
  	header('location: pages/forms/editga.php');
  }

  $querydelfg = mysqli_query($conection, "DELETE FROM `fotosgallery` WHERE id = $id");

  if ($querydelfg) {
  	header('location: pages/forms/editga.php');
  }

 ?>