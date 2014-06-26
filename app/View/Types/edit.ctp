<?php

  if(!empty($types))

  {

    $id = $types['id_type'];
    $nombre = $types['type_name'];

  }

?>

<div class="col-md-6 col-md-offset-3" style="padding-top:70px">
  <h1>Editando el Tipo de Arte: <?php echo $nombre; ?></h1>
  <br>
  <?php echo $this->Form->create('Type', array('class' => 'form-horizontal')); ?>
  <?php echo $this->Form->input('type_name', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'placeholder' => 'La Técnica', 'default'=>$nombre, 'placeholder' => 'Tipo de Arte', 'label' => false)); ?>
  <?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-primary', 'div' => 'row')); ?>
  <br><br>
  <?php echo $this->Form->end(); ?>
</div>
