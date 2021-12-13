document.getElementById("img1").onchange = function(e) {
      // Creamos el objeto de la clase FileReader
      let reader = new FileReader();

      // Leemos el archivo subido y se lo pasamos a nuestro fileReader
      reader.readAsDataURL(e.target.files[0]);

      // Le decimos que cuando este listo ejecute el código interno
      reader.onload = function(){
        let preview = document.getElementById('previewimg1'),
                image = document.createElement('img');

        image.src = reader.result;

        preview.innerHTML = '';
        preview.append(image);
      };
    }



    document.getElementById("img2").onchange = function(e) {
      // Creamos el objeto de la clase FileReader
      let reader = new FileReader();

      // Leemos el archivo subido y se lo pasamos a nuestro fileReader
      reader.readAsDataURL(e.target.files[0]);

      // Le decimos que cuando este listo ejecute el código interno
      reader.onload = function(){
        let preview = document.getElementById('previewimg2'),
                image = document.createElement('img');

        image.src = reader.result;

        preview.innerHTML = '';
        preview.append(image);
      };
    }


    document.getElementById("img3").onchange = function(e) {
      // Creamos el objeto de la clase FileReader
      let reader = new FileReader();

      // Leemos el archivo subido y se lo pasamos a nuestro fileReader
      reader.readAsDataURL(e.target.files[0]);

      // Le decimos que cuando este listo ejecute el código interno
      reader.onload = function(){
        let preview = document.getElementById('previewimg3'),
                image = document.createElement('img');

        image.src = reader.result;

        preview.innerHTML = '';
        preview.append(image);
      };
    }


    document.getElementById("img4").onchange = function(e) {
      // Creamos el objeto de la clase FileReader
      let reader = new FileReader();

      // Leemos el archivo subido y se lo pasamos a nuestro fileReader
      reader.readAsDataURL(e.target.files[0]);

      // Le decimos que cuando este listo ejecute el código interno
      reader.onload = function(){
        let preview = document.getElementById('previewimg4'),
                image = document.createElement('img');

        image.src = reader.result;

        preview.innerHTML = '';
        preview.append(image);
      };
    }

    document.getElementById("img5").onchange = function(e) {
      // Creamos el objeto de la clase FileReader
      let reader = new FileReader();

      // Leemos el archivo subido y se lo pasamos a nuestro fileReader
      reader.readAsDataURL(e.target.files[0]);

      // Le decimos que cuando este listo ejecute el código interno
      reader.onload = function(){
        let preview = document.getElementById('previewimg5'),
                image = document.createElement('img');

        image.src = reader.result;

        preview.innerHTML = '';
        preview.append(image);
      };
    }


    $(document).ready(function(){
    $('#btnfoton').click(function(){ 

        swal({
          title: "Cambios realizados!",
          text: "Tus cambios se han realizado exitosamente!",
          icon: "success",
          button: "Aceptar",
        });



        var f = $(this);
        var formData = new FormData(document.getElementById("formfoton"));
        formData.append("dato", "valor");
        //formData.append(f.attr("name"), $(this)[0].files[0]);
        $.ajax({
            url: "../../insertfhead.php",
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


    $(document).ready(function(){
    $('#btncotice').click(function(){ 

        swal({
          title: "Cambios realizados!",
          text: "Tus cambios se han realizado exitosamente!",
          icon: "success",
          button: "Aceptar",
        });



        var f = $(this);
        var formData = new FormData(document.getElementById("formcotice"));
        formData.append("dato", "valor");
        //formData.append(f.attr("name"), $(this)[0].files[0]);
        $.ajax({
            url: "../../insertcotice.php",
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


    


