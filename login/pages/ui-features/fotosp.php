
<?php 

  session_start();

  include "../../conexion.php";
  
  if(empty($_SESSION['active'])){
    header('location: ../');
  }
  

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

  $querycotice = mysqli_query($conection, "SELECT * FROM `cotice`");

  while($datacotice = mysqli_fetch_array($querycotice)){
    $tithec = $datacotice['tithec'];
    $txtc = $datacotice['txtc'];
  }

  while ($dataimg1 = mysqli_fetch_array($queryimag1)) {

    $txtfoto1 = $dataimg1['txtfoton'];

        if($dataimg1['nameimage'] != null){
            $img1 = $dataimg1['nameimage'];
            $foto1 = '../../includes/img/uploads/'.$dataimg1['nameimage'];
        } else {
            $foto1 = '';
        }
    }

    while ($dataimg2 = mysqli_fetch_array($queryimag2)) {

        $txtfoto2 = $dataimg2['txtfoton'];

        if($dataimg2['nameimage'] != null){
            $img2 = $dataimg2['nameimage'];
            $foto2 = '../../includes/img/uploads/'.$dataimg2['nameimage'];
        } else {
            $foto2 = '';
        }
    }

    while ($dataimg3 = mysqli_fetch_array($queryimag3)) {

        $txtfoto3 = $dataimg3['txtfoton'];

        if($dataimg3['nameimage'] != null){
            $img3 = $dataimg3['nameimage'];
            $foto3 = '../../includes/img/uploads/'.$dataimg3['nameimage'];
        } else {
            $foto3 = '';
        }
    }

     while ($dataimg4 = mysqli_fetch_array($queryimag4)) {

        $txtfoto4 = $dataimg4['txtfoton'];

        if($dataimg4['nameimage'] != null){
            $img4 = $dataimg4['nameimage'];
            $foto4 = '../../includes/img/uploads/'.$dataimg4['nameimage'];
        } else {
            $foto4 = '';
        }
    }

    while ($dataimg5 = mysqli_fetch_array($queryimag5)) {

        $txtfoto5 = $dataimg5['txtfoton'];

        if($dataimg5['nameimage'] != null){
            $img5 = $dataimg5['nameimage'];
            $foto5 = '../../includes/img/uploads/'.$dataimg5['nameimage'];
        } else {
            $foto5 = '';
        }
    }


 ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">




        <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="../../index.php"><img src="../../images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../../images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="../../logout.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->



    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>

      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Modificaciones</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/fotosp.php">Fotos principales</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/choose.php">Choose</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/datos.php">Contacto</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Galeria</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/gallery.php">Subir imagenes</a></li>
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/editga.php">Editar Galeria</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">          
        <div class="content-wrapper">


          <div class="row">
            
            
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="row">



                  <div class="col-md-12">
                    <div class="card-body">
                    <h4 class="card-title">Cambio de fotos principales</h4>
                    <p class="card-description">Cambia aca todas las fotos o solo una foto de la ventana principal y su respectivo mensaje.</p>

                    <div class="table-responsive">
                    <form id="formfoton" class="formfoton" action="" method="POST" enctype="multipart/form-data">
                                
                    <div  class="input-box">
                        <p class="txt-add-photo-princi">Foto 1</p>
                        <label class="lblimg1" for="img1"></label>
                        <input type="file" id="img1" name="img1">
                        
                        <div id="previewimg1">
                            <img src="<?php echo $foto1 ?>">
                        </div>
                        <input class="inputtxtfoton"  type="text" name="txtfoton1" placeholder="<?php echo $txtfoto1 ?>">
                        <label class="btnselect" for="img1">Seleccionar imagen</label>

                    </div>

                    <div  class="input-box">
                        <p class="txt-add-photo-princi">Foto 2</p>
                        <label class="lblimg2" for="img2"></label>
                        <input type="file" id="img2" name="img2">
                        
                        <div id="previewimg2">
                            <img src="<?php echo $foto2 ?>">
                        </div>
                        <input class="inputtxtfoton"  type="text" name="txtfoton2" placeholder="<?php echo $txtfoto2 ?>">
                        <label class="btnselect" for="img2">Seleccionar imagen</label>
                    </div>

                    <div  class="input-box">
                        <p class="txt-add-photo-princi">Foto 3</p>
                        <label class="lblimg3" for="img3"></label>
                        <input type="file" id="img3" name="img3">
                        
                        <div id="previewimg3">
                            <img src="<?php echo $foto3 ?>">
                        </div>
                        <input class="inputtxtfoton"  type="text" name="txtfoton3" placeholder="<?php echo $txtfoto3 ?>">
                        <label class="btnselect" for="img3">Seleccionar imagen</label>
                    </div>

                    <div  class="input-box">
                        <p class="txt-add-photo-princi">Foto 4</p>
                        <label class="lblimg4" for="img4"></label>
                        <input type="file" id="img4" name="img4">
                        
                        <div id="previewimg4">
                            <img src="<?php echo $foto4 ?>">
                        </div>
                        <input class="inputtxtfoton"  type="text" name="txtfoton4" placeholder="<?php echo $txtfoto4 ?>">
                        <label class="btnselect" for="img4">Seleccionar imagen</label>
                    </div>

                    <div  class="input-box">
                        <p class="txt-add-photo-princi">Foto 5</p>
                        <label class="lblimg5" for="img5"></label>
                        <input type="file" id="img5" name="img5">
                        
                        <div id="previewimg5">
                            <img src="<?php echo $foto5 ?>">
                        </div>
                        <input class="inputtxtfoton" type="text" name="txtfoton5" placeholder="<?php echo $txtfoto5 ?>">
                        <label class="btnselect" for="img5">Seleccionar imagen</label>
                    </div>

                    <div class="btnsfoton">
                      <button id="btnfoton" type="submit" name="submit">Guardar Cambios</button>
                    </div>
                
                    </form>
                    </div>
                   </div>
                  </div> 
                </div>
              </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card-body">
                      <h4 class="card-title">Cambie aqui la informacion de la carta de cotización</h4>
                    <p class="card-description">Cambia aca la informacion de la tarjeta de cotización principal.</p>

                     <form id="formcotice" class="formcotice" action="" method="POST" enctype="multipart/form-data">
                      <input class="incotice" type="text" name="tithec" placeholder="<?php echo $tithec ?>">
                      <textarea rows="5" class="tacotice" name="txtc" placeholder="<?php echo $txtc ?>"></textarea>

                      <div class="btnscotice">
                        <button id="btncotice" type="submit" name="submit">Guardar Cambios</button>
                      </div>
                    </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          

          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Kaica Tecnology | All rights reserved.</span>
            
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <script type="text/javascript" src="../../js/sweetalert.js"></script>
  <script type="text/javascript" src="../../js/custom.js"></script>
  <!-- endinject -->
</body>

</html>
