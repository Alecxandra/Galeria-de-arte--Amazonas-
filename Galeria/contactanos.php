<?php

  require_once("correos.php");

  $mensaje = "sss";

  if(isset($_POST['mail']))

  {

    if(!isset($_POST['asunto']) || !isset($_POST['mail']) || !isset($_POST['comentario']))

    {

      echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
      echo "Por favor, vuelva atrás y verifique la información ingresada<br />";

      die();

    }

    else

    {

      $correos = new correos("beito_xp@me.com", $_POST['mail'], $_POST['asunto'], $_POST['comentario']);

      $mensaje = $correos->envio();

    }

  }

?>

<html>

  <head xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

    <meta charset="UTF-8"/>
    <link href="estilos.css" rel="stylesheet" type="text/css"/>
    <link href="SpryValidationTextField.css" rel="stylesheet" type="text/css">
		<script src="SpryValidationTextField.js" type="text/javascript"></script>
  </head>

  <body>

    <div id="centro">
      <div class="titulo">

        <p id="elTitulo">
          Contactanos
        </p>

      </div>
      <div id="izquierda">
        <div id="informacion"></div>
        <div id="redesSociales"></div>
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
          <form id="envios" name="correo" method="post" action="contactanos.php">
            <span id="sprytextfield1"><input class="elemento" type="text" name="asunto" maxlength="50"><span class="textfieldRequiredMsg">Debes ingresar un Asunto.</span></span>
            <span id="sprytextfield3"><input class="elemento" type="text" name="mail" maxlength="50"><span class="textfieldRequiredMsg">Debes ingresar tu correo.</span><span class="textfieldInvalidFormatMsg">El correo que ingresaste no dispone del formato adecuado.</span></span>
            <span id="sprytextfield2"><textarea id="dimension" class="elemento" name="comentario" maxlength="500"></textarea><span class="textfieldRequiredMsg">Debes ingresar un mensaje.</span></span>
            <input class="elemento" type="submit" value="Enviar">
          </form>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <script type="text/javascript">
      var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
      var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
			var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
		</script>
  </body>

</html>
