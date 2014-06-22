<?php
  class validacion
     {

    private $campo;

    private function Inyeccion($campo)

    {

      if (PHP_VERSION < 6)

      {

          return get_magic_quotes_gpc() ? stripslashes($campo) : $campo;

      }

      return function_exists("mysql_real_escape_string") ? mysql_real_escape_string($campo) : mysql_escape_string($campo);

    }

    function setCampo($campo)

    {

      $this->campo = $this->Inyeccion($campo);

    }

    function Texto()

    {

      if($this->campo != "")

  		{

  			$soloAlfa = str_replace(' ', 'a', $this->campo);

  			if (ctype_alpha($soloAlfa))

  			{

  				return $this->campo;

      	}

      	else

  			{

    			return "INVALIDO";

      	}

      }

    	else

  		{

  			return "NULO";

  		}

    }

  function Correo()

  {

    if($this->campo != "")

		{

			if(filter_var($this->campo, FILTER_VALIDATE_EMAIL))

			{

				return $this->campo;

			}

			else

			{

    		return "INVALIDO";

			}

		}

		else

		{

			return "NULO";

		}

  }

  function Fecha()

  {



  }

  function Entero()

  {

    if($this->campo != "")

	  {

		  if (is_numeric($this->campo))

			{

				return intval($this->campo);

			}

			else

			{

		    return "INVALIDO";

			}

		}

		else

		{

			return "NULO";

		}

  }

  function PuntoFlotante()

  {

    if($this->campo != "")

		{

			if (is_numeric($this->campo))

			{

			   return doubleval($this->campo);

			}

			else

			{

			  return "INVALIDO";

			}

		}

		else

		{

			return "NULO";

		}

  }

  function Celular()

  {

    if($this->campo != "")

		{

			$test_arr = explode('-', $this->campo);

			if ((strlen($test_arr[0]) === 4)&&(strlen($test_arr[1]) === 4))

			{

			  return $this->campo;

			}

			else

			{

				return "INVALIDO";

			}

		}

		else

		{

			return "NULO";

		}

  }

}


  class correos

{

  private $destinatario;

  private $remitente;

  private $asunto;

  private $mensaje;

  private $validacion;

  function __construct($destinatario, $remitente, $asunto, $mensaje)

  {

    $this->validacion = new validacion();

    $this->destinatario = $destinatario;
    $this->remitente = $remitente;
    $this->asunto = $asunto;
    $this->mensaje = $mensaje;

  }

  public function setContenido($destinatario, $remitente, $asunto, $mensaje)

  {

    $this->destinatario = $destinatario;
    $this->remitente = $remitente;
    $this->asunto = $asunto;
    $this->mensaje = $mensaje;

  }

  public function envio()

  {

    $this->validacion->setCampo($this->remitente);
    $this->remitente = $this->validacion->Correo();

    if($this->remitente != "NULO")

    {

      if($this->remitente != "INVALIDO")

      {

        $headers = 'From: no-reply@oldlaser.com'."\n\n".'Reply-To: '.$this->remitente;

        $email_message = "Galería de Arte Amazonas:\n\n";
        $email_message .= "Asunto: " .$this->asunto."\n\n";
        $email_message .= "Tu Correo: ".$this->remitente."\n\n";
        $email_message .= $this->mensaje."\n\n";

        if(mail($this->destinatario, $this->remitente, $email_message, $headers))

        {

          $email_message = "Confirma tu mensaje. Este fué el correo que nos enviaste.\n\n".$email_message;

          mail($this->remitente, $this->destinatario, $email_message, $headers);

          return "¡Tu mensaje ha sido enviado con éxito!";

        }

        else

        {

          return "Hubo un problema al enviar el mensaje. ¡Intenta de nuevo!";

        }

      }

      else

      {

        return 'El correo que ingresaste en el campo "Tu Correo" no dispone del formato adecuado';

      }

    }

    else

    {

      return "Debes ingresar tu correo electrónico";

    }

  }

}

  $green = false;


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

     
        $correos = new correos("alecxandra.cruz@unitec.edu", $_POST['mail'], $_POST['asunto'], $_POST['comentario']);

        $mensaje = $correos->envio();

        if($mensaje == "¡Tu mensaje ha sido enviado con éxito!")

        {

          $green = true;

        }

      

    }

  }


  $redireccionar = $this->Html->url(array('controller' => 'gallery_informations', 'action' => 'contactanos'));

?>
<br><br><br>
<H1 align="center">Contactenos</H1><br><br>
<div class="jumbotron">
  <div class="container">
       
    <table align="center">
    <tr>
      <td >
        <?php echo $this->Html->image("Local/amazonas.png",array('style' => 'height: 360px;width:360px; margin-right: 70px;'));?>
      </td>
      <td>
       <H1 align="center">Información</H1><br><br>
                   <p ><b>Dominio: </b>www.AmazonasGallery.com</p><br>
                   <p ><b>Dirección: </b> Mall Multiplaza, Tegucigalpa.</p><br>
             <p ><b>Correo: </b>jempeza@hotmail.com</p><br>  
                   <p ><b>Número: </b>(504) 2231-2024</p>
      </td>
    </tr>  
    </table><br><br>
    
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

content: '<IMG BORDER="0" name="slide" width=350"" height="200" he ALIGN="Left" SRC="/cakephp-cake/img/Local/local1.png">'

      };

      var infoWindow = new google.maps.InfoWindow(infoWindowOptions);

      google.maps.event.addListener(marker,'click',function(e)

      {

        infoWindow.open(map, marker);

      });

    </script>
        <br><br>
        <table align="center">
         <tr>
          <td>
           <div class="fb-like-box" data-href="https://www.facebook.com/amazonas.galeria" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
           </td>
           <td>
            <div class="users form" style="padding: 20px">
                      <?php echo $this->Session->flash('auth'); ?>
                      <?php echo $this->Form->create('User', array('controller' => 'user', 'action' => 'login', 'class' => 'form-horizontal')); ?>
                          <fieldset>
                              <?php 
                                    echo $this->Form->input('username', array('div' => 'form-group', 'class' => 'form-control', 'label' => false, 'placeholder' => 'Usuario'));
                                    echo $this->Form->input('password', array('div' => 'form-group', 'class' => 'form-control', 'label' => false, 'placeholder' => 'Contraseña'));
                              ?>
                          </fieldset>
                      <?php echo $this->Form->submit('Entrar', array('class' => 'btn btn-info btn-sm')); ?>
                      <?php echo $this->Form->end(); ?>
                  </div> 
           
           </td>
          </tr> 
       </table>  
  
    </div>
  </div>  


