<?php 	

	session_start(); 

	include "login/conexion.php";
	


	$queryimages = mysqli_query($conection, "SELECT f.nameimage,f.txtfoton
                                         FROM fotoshead f
                                          ");
  $querycotice = mysqli_query($conection, "SELECT * FROM `cotice`");

  while($datacotice = mysqli_fetch_array($querycotice)){
    $tithec = $datacotice['tithec'];
    $txtc = $datacotice['txtc'];
  }




  $queryimagc1 = mysqli_query($conection, "SELECT f.nameimage,f.txtfoton
                       FROM fotoschoose f
                        WHERE idimagen = 1");

  $queryimagc2 = mysqli_query($conection, "SELECT f.nameimage,f.txtfoton
                         FROM fotoschoose f
                          WHERE idimagen = 2");

  $queryimagc3 = mysqli_query($conection, "SELECT f.nameimage,f.txtfoton
                         FROM fotoschoose f
                          WHERE idimagen = 3");

  $queryimagc4 = mysqli_query($conection, "SELECT f.nameimage,f.txtfoton
                         FROM fotoschoose f
                          WHERE idimagen = 4");

  $queryasi = mysqli_query($conection, "SELECT * FROM `asi`");



$querycard1 = mysqli_query($conection, "SELECT * FROM `cards` WHERE id = 1");
$querycard2 = mysqli_query($conection, "SELECT * FROM `cards` WHERE id = 2");
$querycard3 = mysqli_query($conection, "SELECT * FROM `cards` WHERE id = 3");


  $querycontacto = mysqli_query($conection, "SELECT * FROM `contacto`");

  while ($datacontacto = mysqli_fetch_array($querycontacto)) {
      $nombre = $datacontacto['nombre'];
      $cel = $datacontacto['cel'];
      $correo = $datacontacto['correo'];
      $ciudad = $datacontacto['ciudad'];
      $direccion = $datacontacto['direccion'];
  }


while ($datacard1 = mysqli_fetch_array($querycard1)) {
  $txtcard1 = $datacard1['cardtxt'];
}

while ($datacard2 = mysqli_fetch_array($querycard2)) {
  $txtcard2 = $datacard2['cardtxt'];
}

while ($datacard3 = mysqli_fetch_array($querycard3)) {
  $txtcard3 = $datacard3['cardtxt'];
}


  while($dataasi = mysqli_fetch_array($queryasi)){

    $asitxt = $dataasi['asitxt'];
    $taasi = $dataasi['taasi'];

  }


  while ($dataimg1 = mysqli_fetch_array($queryimagc1)) {

  $txtfoto1 = $dataimg1['txtfoton'];

    if($dataimg1['nameimage'] != null){
      $img1 = $dataimg1['nameimage'];
        $foto1 = 'login/includes/img/uploads/'.$dataimg1['nameimage'];
      } else {
        $foto1 = '';
      }
    }

    while ($dataimg2 = mysqli_fetch_array($queryimagc2)) {

      $txtfoto2 = $dataimg2['txtfoton'];

    if($dataimg2['nameimage'] != null){
      $img2 = $dataimg2['nameimage'];
        $foto2 = 'login/includes/img/uploads/'.$dataimg2['nameimage'];
      } else {
        $foto2 = '';
      }
    }

    while ($dataimg3 = mysqli_fetch_array($queryimagc3)) {

      $txtfoto3 = $dataimg3['txtfoton'];

    if($dataimg3['nameimage'] != null){
      $img3 = $dataimg3['nameimage'];
        $foto3 = 'login/includes/img/uploads/'.$dataimg3['nameimage'];
      } else {
        $foto3 = '';
      }
    }

     while ($dataimg4 = mysqli_fetch_array($queryimagc4)) {

      $txtfoto4 = $dataimg4['txtfoton'];

    }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<html lang="es">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  
   <meta name="keywords" content="pulida de pisos en madera, pisos carvajal, pisos de madera, madera maciza, pisos laminados, pisos en madera natural, deck, teka, sps, escaleras en madera, mantenimiento de pisos, reparacion de pisos, acondicionamiento de pisos, pisos carvajal, pisos y maderas carvajal, pulida de pisos de madera">
    <meta name="description" content="pisos y maderas carvajal es una empresa destinada a procesar, instalar, comercializar y darle mantenimiento a los pisos de madera">
    <meta name="author" content="Kaica Soluciones Tecnológicas">
    <meta name="robots" content="index">
    <link rel="icon" type="image/x-icon" href="img/logoSolo2.png" />
  
  <title>Pulida de pisos en madera</title>
</head>
<body class="body">

	<?php include 'includes/header.php' ?>

  <div class="btnwha">
    <a target="_blank" href="https://api.whatsapp.com/send?phone=573174775074"><img src="img/whatsapp.png"></a>
    
  </div>
	
	<section class="regular slider">
   	<?php while ($datafhead = mysqli_fetch_array($queryimages)) { 

   		if($datafhead['nameimage'] != null){
		    		
		    		$foto = 'login/includes/img/uploads/'.$datafhead['nameimage'];

		    	} else {
		    		$foto = 'img/'.$datafhead['nameimage'];
		    	}?>

			<div>
      <img src="<?php echo $foto ?>">
      <p class="txtslider"><?php echo $datafhead['txtfoton'] ?></p>
    </div>
		<?php } ?>
  </section>

  <section class="cotize">

    <div class="hec">
      <img src="img/mascota.png">
      <h2 class="tithec"><?php echo $tithec ?></h2>
    </div>

    <div class="asc">
      <p class="txtc"><?php echo $txtc ?></p>
    </div>

    <div class="buttc">
      <button id="cotizar"><img class="btnc" src="img/btnc.png"></button>
    </div>

  </section>

  <section class="service">
  	
  <h1 class="titaside">Por que siempre nos eligen?</h1>

  <div class="content-container">
    <div class="left-content">
      <img id="img1" class="imageToShow" src="<?php echo $foto1 ?>" >
      <img id="img2" class="imageToShow" src="<?php echo $foto2 ?>">
      <img id="img3" class="imageToShow" src="<?php echo $foto3 ?>">
    </div>
  
  <div class="right-content">
    <p class="contentMarker choose1" data-marker-content="img1"><?php echo $txtfoto1 ?></p>
    
    
    
    <p class="contentMarker choose2" data-marker-content="img2"><?php echo $txtfoto2 ?></p>

    <p class="contentMarker choose3" data-marker-content="img3"><?php echo $txtfoto3 ?></p>
    
    <p class="text1"><?php echo $txtfoto4 ?></p>

      </div>
    </div>
  </section>

  <section class="aside2">
    <img src="img/floorm.png">
    <div class="conteta2">
      <h2><?php echo $asitxt ?></h2>
      <p><?php echo $taasi ?></p>
    </div>
  </section>
<h2 class="titcard">Algunos De Nuestros Servicios</h2>
  <section class="cards">

    <div class="containercards">

      <div class="card">
        <div class="imgBx">
          <img src="img/pulidora.png">
          <h3>Pulida</h3>
        </div>
        <div class="contentcard">
          <?php echo $txtcard1 ?>
        </div>
      </div>

      <div class="card">
        <div class="imgBx">
          <img src="img/brocha.png">
          <h3>Sellada</h3>
        </div>
        <div class="contentcard">
          <?php echo $txtcard2 ?> 
        </div>
      </div>

      <div class="card">
        <div class="imgBx">
          <img src="img/lacada.png">
          <h3>Lacada</h3>
        </div>
        <div class="contentcard">
          <?php echo $txtcard3 ?>
        </div>
      </div>
    </div>
  </section>

  <?php  include 'includes/footer.php' ?>


<script src="js/gsapp3.8.0.js"></script>
<script src="js/ScrollTrigger.min.js"></script>
<script src="js/jqueryv3.6.0.js"></script>
<script type="text/javascript" src="js/sweetalert.js"></script>
<script src="js/jQueryv2.2.0.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
      });
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });

    ScrollTrigger.create({
	  start: 'top 70',
	  end: 99999,
	  toggleClass: {className: 'logo--scrolled', targets: '.logo'}
	});

	ScrollTrigger.create({
	  start: 'top 70',
	  end: 99999,
	  toggleClass: {className: 'burger-menu--scrolled', targets: '.burger-menu'},
	});



gsap.defaults({overwrite: 'auto'});

gsap.set(".left-content > *", {xPercent: -50, yPercent: -50});

// Set up our scroll trigger
const ST = ScrollTrigger.create({
  trigger: ".content-container",
  start: "top top",
  end: "bottom bottom",
  onUpdate: getCurrentSection,
  pin: ".left-content",
});

const contentMarkers = gsap.utils.toArray(".contentMarker");

// Set up our content behaviors
contentMarkers.forEach(marker => {
  marker.content = document.querySelector(`#${marker.dataset.markerContent}`);
  
  if(marker.content.tagName === "IMG") {
    gsap.set(marker.content, {transformOrigin: "center"});
    
    marker.content.enter = function() {
      gsap.fromTo(marker.content, {autoAlpha: 0, rotateY: -30}, {duration: 0.3, autoAlpha: 1, rotateY: 0});
    }
  } else if(marker.content.tagName === "BLOCKQUOTE") {
    gsap.set(marker.content, {transformOrigin: "left center"});
    
    marker.content.enter = function() {
      gsap.fromTo(marker.content, {autoAlpha: 0, rotateY: 50}, {duration: 0.3, autoAlpha: 1, rotateY: 0});
    }
  }
  
  marker.content.leave = function() {
    gsap.to(marker.content, {duration: 0.1, autoAlpha: 0});
  }
  
});

// Handle the updated position
let lastContent;
function getCurrentSection() {
  let newContent;
  const currScroll = scrollY;
  
  // Find the current section
  contentMarkers.forEach(marker => {
    if(currScroll > marker.offsetTop) {
      newContent = marker.content;
    }
  });
  
  // If the current section is different than that last, animate in
  if(newContent
  && (lastContent == null 
     || !newContent.isSameNode(lastContent))) {
    // Fade out last section
    if(lastContent) {
      lastContent.leave();
    }
    
    // Animate in new section
    newContent.enter();
    
    lastContent = newContent;
  }
  
}

const media = window.matchMedia("screen and (max-width: 600px)");
ScrollTrigger.addEventListener("refreshInit", checkSTState);
checkSTState();

function checkSTState() {
  if(media.matches) {
    ST.disable();
  } else {
    ST.enable();
  }
}


  ScrollTrigger.create({
    trigger: ".choose1",
    start: "top top",
    endTrigger: ".choose2",
    end: "bottom bottom",
    toggleClass: {className: 'body--scrolled', targets: '.body'},
});

  ScrollTrigger.create({
    trigger: ".choose1",
    start: "top top",
    endTrigger: ".choose2",
    end: "bottom bottom",
    toggleClass: {className: 'choose1--scrolled', targets: '.choose1'},
});

  ScrollTrigger.create({
    trigger: ".choose1",
    start: "top top",
    endTrigger: ".choose2",
    end: "bottom bottom",
    toggleClass: {className: 'logo--scrolled2', targets: '.logo'},
});


$(document).ready(function(){
    $('#btnsend').click(function(){ 

        swal({
          title: "Mensaje Enviado!",
          text: "Tu solicitud ha sido enviada en las proximas horas un asesor se contactará contigo!",
          icon: "success",
          button: "Aceptar",
        });



        var f = $(this);
        var formData = new FormData(document.getElementById("formcontacto"));
        formData.append("dato", "valor");
        //formData.append(f.attr("name"), $(this)[0].files[0]);
        $.ajax({
            url: "login/insertcontacto.php",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        })
        return false;

    });
});


      

</script>


</body>
</html>