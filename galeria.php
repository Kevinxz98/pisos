<?php   

session_start(); 

    include "login/conexion.php";

    $querycontacto = mysqli_query($conection, "SELECT * FROM `contacto`");

      while ($datacontacto = mysqli_fetch_array($querycontacto)) {
          $nombre = $datacontacto['nombre'];
          $cel = $datacontacto['cel'];
          $correo = $datacontacto['correo'];
          $ciudad = $datacontacto['ciudad'];
          $direccion = $datacontacto['direccion'];
      }

    $querygallery = mysqli_query($conection, "SELECT * FROM `fotosgallery`");
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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria de colección | Pulida de pisos</title>

</head>
<body > 

    <style type="text/css">
        
        
    </style>

    <?php include 'includes/header.php' ?>

    <h1 class="titgallery">Gallería Pisos Y Maderas Carvajal</h1>

    <div class="galleria" id="galleria">

        <?php while ($datagallery = mysqli_fetch_array($querygallery)) { 

            $imagen = 'login/includes/img/uploads/'.$datagallery['nameimage'];

        ?>

        <div class="gallery-item">
            <div class="content"><img src="<?php echo $imagen ?>" alt=""></div>
            
        </div>

        <?php } ?>

    </div>

    <?php  include 'includes/footer.php' ?>

<script src="js/gsapp3.8.0.js"></script>
<script src="js/ScrollTrigger.min.js"></script>
<script src="js/jqueryv3.6.0.js"></script>
<script type="text/javascript" src="js/sweetalert.js"></script>
<script src="js/jQueryv2.2.0.js" type="text/javascript"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">

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

    

    var gallery = document.querySelector('#galleria');
    var getVal = function (elem, style) { return parseInt(window.getComputedStyle(elem).getPropertyValue(style)); };
    var getHeight = function (item) { return item.querySelector('.content').getBoundingClientRect().height; };
    var resizeAll = function () {
        var altura = getVal(gallery, 'grid-auto-rows');
        var gap = getVal(gallery, 'grid-row-gap');
        gallery.querySelectorAll('.gallery-item').forEach(function (item) {
            var el = item;
            el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
        });
    };

    window.addEventListener('resize', resizeAll);
    gallery.querySelectorAll('.gallery-item').forEach(function (item) {
        item.addEventListener('click', function () {        
            item.classList.toggle('full');        
        });
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