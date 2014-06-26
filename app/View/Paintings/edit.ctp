<?php


  if(!empty($paintings))

  {

    $id = $paintings['id_painter'];
    $nombre = $paintings['painting_name'];
    $alto = $paintings['painting_high'];
    $ancho = $paintings['painting_width'];
    $vendida = $paintings['painting_sold'];
    $imagen = $paintings['painting_picture'];
    $anio = $paintings['painting_year'];
    $precio = $paintings['painting_price'];
    $tecnica = $paintings['id_technique'];
    $tipo = $paintings['id_type'];
    $pintor = $paintings['id_painter'];

  }

?>

<div class="col-md-6 col-md-offset-3" style="padding-top:70px">
  <h1>Editando la Pintura: <?php echo $nombre; ?></h1>
  <br>
  <?php echo $this->Form->create('Painting', array('class' => 'form-horizontal', 'type' => 'file')); ?>
  <?php echo $this->Form->input('painting_name', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'placeholder' => 'Nombre de la pintura', 'default'=>$nombre, 'label' => false)); ?>
  <?php echo $this->Form->input('painting_high', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'placeholder' => 'Alto (en cm)', 'default'=>$alto, 'label' => false)); ?>
  <?php echo $this->Form->input('painting_width', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'placeholder' => 'Ancho (en cm)', 'default'=>$ancho, 'label' => false)); ?>
  <?php echo $this->Form->input('id_technique', array('options' => $techniques, 'class' => 'form-control', 'div' => 'form-group', 'default'=>$tecnica, 'label' => false)); ?>
  <?php echo $this->Form->input('id_type', array('options' => $types, 'class' => 'form-control', 'div' => 'form-group', 'default'=>$tipo, 'label' => false)); ?>
  <?php echo $this->Form->input('id_painter', array('options' => $painters, 'class' => 'form-control', 'div' => 'form-group', 'default'=>$pintor, 'label' => false)); ?>
  <?php echo $this->Form->input('painting_sold', array('options' => array(1 => 'Vendida', 0 => 'No vendida'), 'class' => 'form-control', 'div' => 'form-group', 'default'=>$vendida, 'label' => false)); ?>
  <?php echo $this->Form->input('painting_year', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'label' => false, 'type' => 'text', 'placeholder' => 'Año', 'default'=>$anio)); ?>
  <?php echo $this->Form->input('painting_price', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'placeholder' => 'Precio de venta', 'default'=>$precio, 'label' => false)); ?>
  <div class="form-group">
  <?php echo $this->Form->input('painting_picture', array('type' => 'file', 'id'=>'ingreso', 'label' => false)); ?>
  </div>
  <div id="imagen"><?php echo $this->Html->image($imagen, array('id'=>'list', 'style' => 'height:150px; width:auto;')); ?></div>
  <br>
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
