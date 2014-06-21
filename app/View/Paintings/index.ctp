<div class="col-md-8 col-md-offset-2" style="padding-top:70px">
  <h1>Pinturas</h1>
  <br>
  <div class="col-md-4 col-md-offset-4" style="margin-bottom:20px">
  <?php echo $this->Html->link('Agregar una nueva pintura', array('action' => 'add'), array('class' => 'btn btn-success btn-lg')); ?>
  </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($paintings as $painting): ?>
    <tr>
      <td><?php echo $painting['Painting']['painting_name']; ?></td>
      <td><?php echo $this->Html->image($painting['Painting']['painting_picture'], array('style' => 'height:100px;width:auto;')); ?></td>
      <td><?php echo $this->Html->link('Editar', '', array('class' => 'btn btn-info btn-sm')); ?></td>
    </tr>   
  <?php endforeach; ?>
    </tbody>
  </table>
</div>