<div class="col-md-6 col-md-offset-3" style="padding-top:70px">

  <h1>Agregar una pintura</h1>

  <br>
  <?php echo $this->Form->create('Painting', array('class' => 'form-horizontal', 'type' => 'file')); ?>

  <?php echo "<span id='sprytextfield1'>".$this->Form->input('painting_name', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group',
  'placeholder' => 'Nombre de la pintura', 'label' => false))."<span class='textfieldRequiredMsg'>Debes ingresar el nombre de la Pintura.</span></span>"; ?>

  <?php echo "<span id='sprytextfield4'>".$this->Form->input('painting_high', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group',
  'placeholder' => 'Alto (en cm)', 'label' => false))."<span class='textfieldRequiredMsg'>Debes ingresar la altua.</span><span class='textfieldInvalidFormatMsg'>La altura debe ser un número.</span></span>"; ?>

  <?php echo "<span id='sprytextfield6'>".$this->Form->input('painting_width', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group',
  'placeholder' => 'Ancho (en cm)', 'label' => false))."<span class='textfieldRequiredMsg'>Debes ingresar la anchura.</span><span class='textfieldInvalidFormatMsg'>La anchura debe ser un número.</span></span>"; ?>

  <?php echo $this->Form->input('id_technique', array('options' => $techniques, 'class' => 'form-control', 'div' => 'form-group',
  'label' => false)); ?>

  <?php echo $this->Form->input('id_type', array('options' => $types, 'class' => 'form-control', 'div' => 'form-group',
  'label' => false)); ?>

  <?php echo $this->Form->input('id_painter', array('options' => $painters, 'class' => 'form-control', 'div' => 'form-group',
  'label' => false)); ?>

  <?php echo $this->Form->input('painting_sold', array('options' => array(1 => 'Vendida', 0 => 'No vendida'), 'class' => 'form-control', 'div' => 'form-group',
  'label' => false)); ?>

  <?php echo "<span id='sprytextfield7'>".$this->Form->input('painting_year', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'label' => false, 'type' => 'text',
  'minYear' => date('Y') - 104, 'maxYear' => date('Y') - 0, 'placeholder' => 'Año'))."<span class='textfieldRequiredMsg'>Debes ingresar el año.</span><span class='textfieldInvalidFormatMsg'>El año debe ser un número de cuatro dígitos.</span></span>"; ?>

  <?php echo "<span id='sprytextfield8'>".$this->Form->input('painting_price', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group',
  'placeholder' => 'Precio de venta', 'label' => false))."<span class='textfieldRequiredMsg'>Debes ingresar un precio.</span><span class='textfieldInvalidFormatMsg'>El precio debe ser un número.</span></span>"; ?>

  <div class="form-group">
  <?php echo $this->Form->input('painting_picture', array('type' => 'file', 'id'=>'ingreso', 'label' => false)); ?>
  </div>

  <div id="imagen"></div>
  <?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-primary', 'div' => 'row')); ?>

  <br><br>
  <?php echo $this->Form->end(); ?>

</div>

<script>
  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var divisor = document.getElementById('imagen');
          divisor.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list').insertBefore(divisor, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }

  }

  document.getElementById('ingreso').addEventListener('change', handleFileSelect, false);
</script>
