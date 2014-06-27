<div class="col-md-6 col-md-offset-3" style="padding-top:70px">
  <h1>Agregar un pintor</h1>
  <br>
  <?php echo $this->Form->create('Painter', array('class' => 'form-horizontal')); ?>

  <?php echo "<span id='sprytextfield1'>".$this->Form->input('painter_name', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group',
  'placeholder' => 'Nombre del pintor(a)', 'label' => false))."<span class='textfieldRequiredMsg'>Debes ingresar el nombre del Artista.</span></span>"; ?>

  <?php echo $this->Form->input('painter_birthday', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group',
  'label' => false, 'minYear' => date('Y') - 64, 'maxYear' => date('Y') - 4)); ?>

  <?php echo "<span id='sprytextfield2'>".$this->Form->input('painter_cityofbirth', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group',
  'placeholder' => 'Ciudad de nacimiento', 'label' => false))."<span class='textfieldRequiredMsg'>Debes ingresar la ciudad del Artista.</span></span>"; ?>

  <?php echo "<span id='sprytextfield5'>".$this->Form->input('painter_countryofbirth', array('empty' => false, 'class' => 'form-control',
  'div' => 'form-group', 'label' => false, 'placeholder' => 'País de nacimiento'))."<span class='textfieldRequiredMsg'>Debes ingresar la nación del Artista.</span></span>"; ?>

  <?php echo $this->Form->input('biography', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'label' => false, 'placeholder' => 'Biografía', 'type' => 'textarea')); ?>

  <?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-primary', 'div' => 'row')); ?>

  <br><br>

  <?php echo $this->Form->end(); ?>

</div>
