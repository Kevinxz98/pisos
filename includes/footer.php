  <footer>
    <div class="background">
    <div class="container">
      <div class="screen">
        <div class="screen-header">
          <div class="screen-header-left">
            <div class="screen-header-button close"></div>
            <div class="screen-header-button maximize"></div>
            <div class="screen-header-button minimize"></div>
          </div>
          <div class="screen-header-right">
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
          </div>
        </div>
      <form id="formcontacto" class="formcontacto" action="" method="POST" enctype="multipart/form-data">
        <div class="screen-body">
          <div class="screen-body-item left">
            <div class="app-title">
              <span>CONTACTENOS</span>
            </div>
            <div class="imgcon">
              <img src="img/contacf.png">
            </div>
          </div>
            <div class="screen-body-item">
              <div class="app-form">
                <div class="app-form-group">
                  <input type="text" name="nombre" class="app-form-control" placeholder="Nombre" required >
                </div>
                <div class="app-form-group">
                  <input type="text" name="correo" class="app-form-control" placeholder="Correo" required >
                </div>
                <div class="app-form-group">
                  <input type="text" maxlength="10" name="cel" class="app-form-control" placeholder="Teléfono de contacto"  required>
                </div>
                <div class="app-form-group message">
                  <textarea class="app-form-control" name="mensaje" placeholder="Mensaje" required></textarea>
                
                </div>
                <div class="app-form-group buttons">
                  <button id="btnsend" class="app-form-button">Enviar</button>
                </div>
              </div>
            </div>
          </div>
      </form> 
    </div>
  </div>


  <div class="contact">
     <div class="screen-header">
       <div class="screen-header-left">
            <div class="screen-header-button close"></div>
            <div class="screen-header-button maximize"></div>
            <div class="screen-header-button minimize"></div>
          </div>
          <div class="screen-header-right">
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
          </div>
     </div>

     <div class="dcontact">
       <p class="nomc"><?php echo $nombre ?></p>
       <p class="numc"><?php echo $cel ?></p>
       <p class="corrc"><?php echo $correo ?></p>
       <p class="cityc"><?php echo $ciudad ?></p>
       <p class="direcc"><?php echo $direccion ?></p>
     </div>

     <div class="redesc">
      <h2>Siguenos tambien en</h2>
        <div class="imgrc">
         <img src="img/whatsapp.png">
         <img src="img/facebook.png">
         <img src="img/instagram.png">
         <img src="img/phone.png">
       </div>
     </div>
  </div>

</div>
    <div class="copyright">
      <span>Copyright © 2021. Kaica Tecnology | <a href="https://kaica.com.co">Kaica Soluciones Tecnológicas</a> | All rights reserved.</span>
    </div>
  </footer>