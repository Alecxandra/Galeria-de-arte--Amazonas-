<div class="col-md-8 col-md-offset-2" style="padding-top:70px">
  <h1>Tipos de Arte</h1>
  <br>
  <div class="col-md-4 col-md-offset-4" style="margin-bottom:20px">
  <?php echo $this->Html->link('Agregar un Tipo de Arte nuevo', array('action' => 'add'), array('class' => 'btn btn-success btn-lg')); ?>
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
      <?php foreach ($types as $type): ?>
    <tr>
      <td><?php echo $type['Type']['type_name']; ?></td>
      <td><?php echo $this->Html->link('Editar', array('controller'=>'types', 'action' => 'edit', 'id'=> $type['Type']['id_type'])); ?></td>
    </tr>
  <?php endforeach; ?>
    </tbody>
  </table>
</div>
