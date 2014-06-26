<div class="col-md-6 col-md-offset-3" style="padding-top:70px">
  <h1>Agregar una técnica</h1>
  <br>
  <?php echo $this->Form->create('Technique', array('class' => 'form-horizontal')); ?>
  <?php echo $this->Form->input('technique_name', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'placeholder' => 'La Técnica', 'label' => false)); ?>
  <?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-primary', 'div' => 'row')); ?>
  <br><br>
  <?php echo $this->Form->end(); ?>
</div>
