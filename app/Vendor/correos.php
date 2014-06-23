<?php

require_once("validacion.php");

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

?>