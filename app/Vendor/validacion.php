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

?>