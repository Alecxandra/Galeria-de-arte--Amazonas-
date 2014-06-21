<?php

  if(!empty($painters))

  {

    $id = $painters['id_painter'];
    $nombre = $painters['painter_name'];
    $nacimiento = $painters['painter_birthday'];
    $ciudad = $painters['painter_cityofbirth'];
    $pais = $painters['painter_countryofbirth'];
    $biografia = $painters['painter_biography'];

  }

?>

<div class="col-md-6 col-md-offset-3" style="padding-top:70px">
  <h1>Editando a <?php echo $nombre; ?></h1>
  <br>
  <?php echo $this->Form->create('Painter', array('class' => 'form-horizontal')); ?>
  <?php echo $this->Form->input('painter_name', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'default'=>$nombre, 'label' => false)); ?>
  <?php echo $this->Form->input('painter_birthday', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'default'=>$nacimiento, 'label' => false)); ?>
  <?php echo $this->Form->input('painter_cityofbirth', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'default'=>$ciudad, 'label' => false)); ?>
  <?php echo $this->Form->input('painter_countryofbirth', array('class' => 'form-control', 'div' => 'form-group', 'default'=>$pais, 'label' => false)); ?>
  <?php echo $this->Form->input('biography', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'label' => false, 'type' => 'text', 'default'=>$biografia, 'type' => 'textarea')); ?>
  <?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-primary', 'div' => 'row')); ?>
  <br><br>
  <?php echo $this->Form->end(); ?>
</div>
