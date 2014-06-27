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

  //$redireccionar = $this->Html->url(array('controller' => 'GalleryInformations', 'action' => 'contactanos'));

?>
<br><br><br>

<H1 align="center">Contáctenos</H1><br><br>

<div class="jumbotron">
  <div class="container">

    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <div id="map"></div>

    <script>

      var mapOptions =

      {

        center: new google.maps.LatLng(14.0880735,-87.1832608),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP

      };

      var map = new google.maps.Map(document.getElementById('map'), mapOptions);

      var markerOptions =

      {

        position: new google.maps.LatLng(14.0880735, -87.1832608),
        title: "Galeria Amazonas"

      };

      var marker = new google.maps.Marker(markerOptions);

      marker.setMap(map);

      var infoWindowOptions =

      {

        content: '<IMG BORDER="0" name="slide" width=350"" height="200" he ALIGN="Left" SRC="../img/Local/local1.png">'

      };

      var infoWindow = new google.maps.InfoWindow(infoWindowOptions);

      google.maps.event.addListener(marker,'click',function(e)

      {

        infoWindow.open(map, marker);

      });

    </script>

    <br><br>

    <div class="divider" style="background-color:#130202;height:2px"></div>

    <br><br><br>

    <table align="center">

    <tr>

      <td>
        <?php echo $this->Html->image("Local/amazonas.png",array('style' => 'height: 360px;width:360px; margin-right: 70px;'));?>
      </td>

      <td>

      <H1 align="center">Información</H1>

      <br><br>

      <p><b>Dominio: </b><?php echo $dominio; ?></p><br>
      <p><b>Dirección: </b><?php echo $direccion; ?></p><br>
      <p><b>Correo: </b><?php echo $correo;?></p><br>
      <p><b>Número: </b><?php echo $numero;?></p>

      </td>
    </tr>

    </table>

    <br><br>

    <div class="divider" style="background-color:#130202;height:2px"></div>

    <br><br><br>

    <div class="row">

      <div class="col-sm-6 col-lg-6">

        <div class="fb-like-box" data-href="https://www.facebook.com/amazonas.galeria" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>

      </div>

    <div class="col-sm-6 col-lg-6" style="background-image:url('../img/Local/sobre1.jpg');background-repeat: no-repeat;background-size: 550px 400px;">

      <h2>¡Envíanos un correo!</h2>

      <div class="users form" style="padding: 20px;" align="center">

        <?php

        echo $this->Form->create('contactanos', array('class' => 'form-horizontal'))?>

        <fieldset>

        <?php

          echo "<span id='sprytextfield3'>".$this->Form->input('mail', array('div' => 'form-group', 'name'=>'mail', 'class' => 'form-control', 'label' => false, 'placeholder' => 'Ingresa tu correo','style'=>'width:350px'))."<span class='textfieldRequiredMsg'>Debes ingresar tu correo.</span><span class='textfieldInvalidFormatMsg'>El correo que ingresaste no dispone del formato adecuado.</span></span>";
          echo "<span id='sprytextfield1'>".$this->Form->input( 'asunto',array('div' => 'form-group','name'=>'asunto' , 'class' => 'form-control', 'label' => false, 'placeholder' => 'Asunto','style'=>'width:350px'))."<span class='textfieldRequiredMsg'>Debes ingresar un Asunto.</span></span>";
          echo "<span id='sprytextfield2'>".$this->Form->input('comentario',array('name'=>'comentario','type'=>'textarea','div' => 'form-group', 'class' => 'form-control', 'label' => false, 'placeholder' => 'Ingresa un mensaje','style'=>'width:350px'))."<span class='textfieldRequiredMsg'>Debes ingresar un mensaje.</span></span>";

        ?>

        </fieldset>

        <?php echo $this->Form->submit('Enviar', array('class' => 'btn btn-info btn-sm')); ?>
        <?php echo $this->Form->end(); ?>

      </div>

      <br><br>

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

    </div>

  </div>

</div>
