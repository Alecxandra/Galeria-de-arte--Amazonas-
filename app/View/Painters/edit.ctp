<div class="col-md-6 col-md-offset-3" style="padding-top:70px">
  <h1>Actualizar un pintor</h1>
  <br>
  <?php echo $this->Form->create('Painter', array('class' => 'form-horizontal')); ?>
  <?php echo $this->Form->input('id_painter', array('hiddenField' => true)); ?>
  <?php echo $this->Form->input('painter_name', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'placeholder' => 'Nombre del pintor(a)', 'label' => false)); ?>
  <?php echo $this->Form->input('painter_birthday', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group','label' => false)); ?>
  <?php echo $this->Form->input('painter_cityofbirth', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'placeholder' => 'Ciudad de nacimiento', 'label' => false)); ?>
  <?php echo $this->Form->input('painter_countryofbirth', array('class' => 'form-control', 'div' => 'form-group', 'label' => false, 'placeholder' => 'País de nacimiento')); ?>
  <?php echo $this->Form->input('painter_biography', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'label' => false, 'type' => 'text', 'placeholder' => 'Biografía', 'type' => 'textarea')); ?> 
  <?php echo $this->Form->submit('Actualizar', array('class' => 'btn btn-primary', 'div' => 'row')); ?>
  <br><br>
  <?php echo $this->Form->end(); ?>
</div>