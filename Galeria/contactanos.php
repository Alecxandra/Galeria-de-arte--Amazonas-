<?php

if(isset($_POST['mail']))

{

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "beito_xp@me.com";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['asunto']) || !isset($_POST['mail']) || !isset($_POST['comentario']))
{

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Asunto: " . $_POST['asunto'] . "\n";
$email_message .= "Tu Correo: " . $_POST['mail'] . "\n";
$email_message .= "Comentarios: " . $_POST['comentario'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: no-reply@oldlaser.com' . "\n\n" . 'Reply-To: '.$_POST['mail'];



mail($email_to, $_POST['mail'], $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>

<html>

  <head xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

    <meta charset="UTF-8"/>
    <link href="estilos.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
      var image1 = new Image()
      image1.src="amazonas.png"
      var image2=new Image()
      image2.src="rajoy.png"
    </script>
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

          var elString ='<div id="content">'+
  '<div id="siteNotice">'+
  '</div>'+
  '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
  '<div id="bodyContent">'+
  '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
  'sandstone rock formation in the southern part of the '+
  'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
  'south west of the nearest large town, Alice Springs; 450&#160;km '+
  '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
  'features of the Uluru - Kata Tjuta National Park. Uluru is '+
  'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
  'Aboriginal people of the area. It has many springs, waterholes, '+
  'rock caves and ancient paintings. Uluru is listed as a World '+
  'Heritage Site.</p>'+
  '<p>Attribution: Uluru, <a href="http://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
  'http://en.wikipedia.org/w/index.php?title=Uluru</a> '+
  '(last visited June 22, 2009).</p>'+
  '</div>'+
  '</div>';


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
        <script>

//variable that will increment through the images
          var step=1

          function slideit()

          {
//if browser does not support the image object, exit.
            if (!document.images){
              return}

            document.images.slide.src = eval("image"+step+".src")

            if (step<2){
              step++}

            else{
              step=1}

//call function "slideit()" every 2.5 seconds
            setTimeout("slideit()",2500)
          }

          slideit()

        </script>
        <div id="divFormulario">
          <form id="envios" name="correo" method="post" action="contactanos.php">
            <input class="elemento" type="text" name="asunto" maxlength="50">
            <input class="elemento" type="text" name="mail" maxlength="50">
            <textarea id="dimension" class="elemento" name="comentario" maxlength="500"></textarea>
            <input class="elemento" type="submit" value="Enviar">
          </form>
        </div>
      </div>
      <div class="clear"></div>
    </div>

  </body>

</html>
