<div class="col-md-6 col-md-offset-3" style="padding-top:70px">
  <h1>Agregar un tipo de arte</h1>
  <br>
  <?php echo $this->Form->create('Type', array('class' => 'form-horizontal')); ?>
  <?php echo $this->Form->input('type_name', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'placeholder' => 'Tipo de Arte', 'label' => false)); ?>
  <?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-primary', 'div' => 'row')); ?>
  <br><br>
  <?php echo $this->Form->end(); ?>
</div>
