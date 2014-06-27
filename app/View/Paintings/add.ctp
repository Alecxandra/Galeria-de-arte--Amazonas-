<div class="col-md-6 col-md-offset-3" style="padding-top:70px">
  <h1>Agregar una pintura</h1>
  <br>
  <?php echo $this->Form->create('Painting', array('class' => 'form-horizontal', 'type' => 'file')); ?>
  <?php echo $this->Form->input('painting_name', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'placeholder' => 'Nombre de la pintura', 'label' => false)); ?>
  <?php echo $this->Form->input('painting_high', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'placeholder' => 'Alto (en cm)', 'label' => false)); ?>
  <?php echo $this->Form->input('painting_width', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'placeholder' => 'Ancho (en cm)', 'label' => false)); ?>
  <?php echo $this->Form->input('id_technique', array('options' => $techniques, 'class' => 'form-control', 'div' => 'form-group', 'label' => false)); ?>
  <?php echo $this->Form->input('id_type', array('options' => $types, 'class' => 'form-control', 'div' => 'form-group', 'label' => false)); ?>
  <?php echo $this->Form->input('id_painter', array('options' => $painters, 'class' => 'form-control', 'div' => 'form-group', 'label' => false)); ?>
  <?php echo $this->Form->input('painting_sold', array('options' => array(1 => 'Vendida', 0 => 'No vendida'), 'class' => 'form-control', 'div' => 'form-group', 'label' => false)); ?>
  <?php echo $this->Form->input('painting_year', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'label' => false, 'type' => 'text', 'placeholder' => 'Año')); ?>
  <?php echo $this->Form->input('painting_price', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'placeholder' => 'Precio de venta', 'label' => false)); ?>
  <div class="form-group">
  <?php echo $this->Form->input('painting_picture', array('type' => 'file', 'id'=>'ingreso', 'label' => false)); ?>
  </div>
  <div id="imagen"></div>
  <?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-primary', 'div' => 'row')); ?>
  <br><br>
  <?php echo $this->Form->end(); ?>
</div>

