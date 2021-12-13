
 <?php 

  $alert = '';
 
 

  if(($_POST)){
      
   
    if($_POST['correo'] == '' || $_POST['clave'] == ''){
        $alert = 'escriba el correo o la clave';
    } else{
        
      require_once "./conexion.php";
      $correo = mysqli_real_escape_string($conection,$_POST['correo']);
      $pass = md5 (mysqli_real_escape_string($conection,$_POST['clave']));
      
      $query = mysqli_query($conection,"SELECT * FROM usuarios WHERE  correo = '$correo' AND clave = '$pass'");
      
      $result = mysqli_num_rows($query);
      
      if($result > 0){
            
        while($data = mysqli_fetch_array($query)){
            SESSION_START();
            $_SESSION['active']       = true;
            $_SESSION['id']           = $data['id'];
            $_SESSION['nombres']      = $data['nombres'];
            $_SESSION['apellidos']    = $data['apellidos'];
            $_SESSION['genero']       = $data['genero'];
            $_SESSION['documento']    = $data['documento'];
            $_SESSION['correo']       = $data['correo'];
            $_SESSION['celular']      = $data['celular'];
            
            header("Location:./index.php");
            

        }
         
      } 
    }
      
    /*if(($_POST['correo']  == '') || ($_POST['clave'] == '') ){
      $alert = "Ingrese su usuario y la clave";
    } else {
      require_once "login/conexion.php";
      $correo = mysqli_real_escape_string($conection,$_POST['correo']);
      $pass = md5 (mysqli_real_escape_string($conection,$_POST['clave']));

      $query = mysqli_query($conection,"SELECT * FROM usuarios WHERE  correo = '$correo' AND clave = '$pass'");
      mysqli_close($conection); 
      $result = mysqli_num_rows($query);

      if($result > 0){
        $data = mysqli_fetch_array($query);

        
        $_SESSION['active']       = true;
        $_SESSION['id']           = $data['id'];
        $_SESSION['nombres']      = $data['nombres'];
        $_SESSION['apellidos']    = $data['apellidos'];
        $_SESSION['genero']       = $data['genero'];
        $_SESSION['documento']    = $data['documento'];
        $_SESSION['correo']       = $data['correo'];
        $_SESSION['celular']      = $data['celular'];

        
        
        header("Location: login/index.php");
        $alert = "El usuario";
         
      } else{
        $alert = "El usuario o la clave son incorrectas".$result;
        
      }
    }
  }

*/

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" type="text/css" href="../slick/slick.css">
  <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css">

	<title>Login | Pisos Carvajal</title>
</head>
<body>


<?php include '../includes/header.php' ?>
  <body>

<section class="formlogin">
  <div class="wrapper">
        <div class="title">Inicia Sesión</div>
        <p class="alertlogin"><?php echo $alert ?></p>
        <form action="" method="POST">

        <div class="field">
          <input type="text" name="correo" >
          <label>Correo</label>
        </div>
        <div class="field">
            <input type="password" name="clave" >
            <label>Contraseña</label>
        </div>
        <div class="content">
          <div class="pass-link">
            <a href="#">¿Olvidó su contraseña?</a>
          </div>
        </div>
        <div class="field">
            <input type="submit" value="INGRESAR">
        </div>
        <div class="signup-link">
          No eres miembro? <a href="#">Registrate</a>
        </div>
      </form>
    </div>
    
</section>

<script> 
<!--

//-->
</script>

</body>
</html>