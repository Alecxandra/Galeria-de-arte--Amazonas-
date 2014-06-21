<div class="col-md-8 col-md-offset-2" style="padding-top:70px">
  <h1>Pintores</h1>
  <br>
  <div class="col-md-4 col-md-offset-4" style="margin-bottom:20px">
  <?php echo $this->Html->link('Agregar un pintor', array('action' => 'add'), array('class' => 'btn btn-success btn-lg')); ?>
  </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($painters as $painter): ?>
    <tr>
      <td><?php echo $painter['Painter']['painter_name']; ?></td>
      <td><?php echo $this->Html->link('Editar', array('controller'=>'painters', 'action' => 'edit', 'id'=> $painter['Painter']['id_painter'])); ?></td>
    </tr>
  <?php endforeach; ?>
    </tbody>
  </table>
</div>
