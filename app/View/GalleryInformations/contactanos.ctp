<?php

  App::import('Vendor', 'correos');

  $green = false;

/*  $contador = 0;

  if(isset($_COOKIE['contador']))
  {

    setcookie('contador', $_COOKIE['contador'] + 1, time() + 24 * 60 * 60);
    $contador = $_COOKIE['contador'];

  }

  else

  {

    setcookie('contador', 0, time() + 24 * 60 * 60);

  }*/

  $mensaje = "";

  if(isset($_POST['mail']))

  {

    if(!isset($_POST['asunto']) || !isset($_POST['mail']) || !isset($_POST['comentario']))

    {

      $mensaje = "Ocurrió un error y el formulario no ha sido enviado.";

      die();

    }

    else

    {

      /*if($contador < 5)

      {*/

        $correos = new correos("beito_xp@me.com", $_POST['mail'], $_POST['asunto'], $_POST['comentario']);

        $mensaje = $correos->envio();

        if($mensaje == "¡Tu mensaje ha sido enviado con éxito!")

        {

          $green = true;

        }

      /*}

      else

      {

        $mensaje = "No se permiten más envios, por hoy.";

      }*/

    }

  }

  $contacto = $gallery[0];
  $contacto = $contacto['GalleryInformation'];

  $nombreGaleria = $contacto['gallery_name'];
  //$nombreGaleria = $Variable->BaseDatos();

  $dominio = $contacto['url'];
  //$dominio = $Variable->BaseDatos();

  $direccion = $contacto['gallery_address'];
  //$numero = $Variable->BaseDatos();

  $numero = $contacto['gallery_phonenumber1'];
  //$numero = $Variable->BaseDatos();

  $correo = $contacto['gallery_email'];
  //$correo = $Variable->BaseDatos();

  $redireccionar = $this->Html->url(array('controller' => 'GalleryInformations', 'action' => 'contactanos'));

?>

<div id="centro">

  <div class="titulo">

    <p class="elTitulo">Contactanos</p>

  </div>

  <div id="izquierda">

    <div id="informacion">
      <p class="elTitulo">Información</p>
      <p class="parrafos"><b>Nombre: </b><?php echo $nombreGaleria; ?></p>
      <p class="parrafos"><b>Dominio: </b><?php echo $dominio; ?></p>
      <p class="parrafos"><b>Dirección: </b><?php echo $direccion; ?></p>
      <p class="parrafos"><b>Número: </b><?php echo $numero; ?></p>
      <p class="parrafos"><b>Correo: </b><?php echo $correo; ?></p>
    </div>

    <div id="redesSociales">
      <div class="fb-like-box" data-href="https://www.facebook.com/amazonas.galeria" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
    </div>

  </div>

  <div id="derecha">

    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <div id="map"></div>
    <script>

      var mapOptions =

      {

        center: new google.maps.LatLng(14.0880735,-87.1832608),
        zoom: 18,
        mapTypeId: google.maps.MapTypeId.ROADMAP

      };

      var map = new google.maps.Map(document.getElementById('map'), mapOptions);

      var markerOptions =

      {

        position: new google.maps.LatLng(14.0880735, -87.1832608),
        title: "Hello World!"

      };

      var marker = new google.maps.Marker(markerOptions);

      marker.setMap(map);

      var infoWindowOptions =

      {

        content: '<IMG BORDER="0" name="slide" ALIGN="Left" SRC="amazonas.png">'

      };

      var infoWindow = new google.maps.InfoWindow(infoWindowOptions);

      google.maps.event.addListener(marker,'click',function(e)

      {

        infoWindow.open(map, marker);

      });

    </script>

    <div id="divFormulario">
      <?php echo '<form id="envios" name="correo" method="post" action="'.$redireccionar.'">'; ?>
        <span id="sprytextfield1"><input class="elemento" type="text" name="asunto" maxlength="50" placeholder="Ingresa el asunto"><span class="textfieldRequiredMsg">Debes ingresar un Asunto.</span></span>
        <span id="sprytextfield3"><input class="elemento" type="text" name="mail" maxlength="50" placeholder="Ingresa tu correo"><span class="textfieldRequiredMsg">Debes ingresar tu correo.</span><span class="textfieldInvalidFormatMsg">El correo que ingresaste no dispone del formato adecuado.</span></span>
        <span id="sprytextfield2"><textarea id="dimension" class="elemento" name="comentario" maxlength="500"></textarea><span class="textfieldRequiredMsg">Debes ingresar un mensaje.</span></span>
        <input class="elemento" type="submit" value="Enviar">
      </form>
    </div>

  </div>

  <div class="clear"></div>

  <?php

    if($green)

    {

      echo '<div id="error"><p class="elErrorV"><b>'.$mensaje.'</b></p></div>';

    }

    else

    {

      echo '<div id="error"><p class="elErrorR"><b>'.$mensaje.'</b></p></div>';

    }

  ?>

</div>
