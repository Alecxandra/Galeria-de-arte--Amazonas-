<?php
$sandia=$this->Session->read('Auth.User.username');

?>

<div><?php print_r($sandia); ?></div>

<div id="centro">

  <div class="titulo">

    <p class="elTitulo">Administración:</p>
    <p class="subTitulo"><?php echo "Bienvenido: ".$sandia; ?></p>

  </div>

  <div>

  </div>

  <div class="clear"></div>

</div>
