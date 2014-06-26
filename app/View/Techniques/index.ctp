<div class="col-md-8 col-md-offset-2" style="padding-top:70px">
  <h1>Técnicas</h1>
  <br>
  <div class="col-md-4 col-md-offset-4" style="margin-bottom:20px">
  <?php echo $this->Html->link('Agregar una Técnica nueva', array('action' => 'add'), array('class' => 'btn btn-success btn-lg')); ?>
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
      <?php foreach ($techniques as $technique): ?>
    <tr>
      <td><?php echo $technique['Technique']['technique_name']; ?></td>
      <td><?php echo $this->Html->link('Editar', array('controller'=>'techniques', 'action' => 'edit', 'id'=> $technique['Technique']['id_technique'])); ?></td>
    </tr>
  <?php endforeach; ?>
    </tbody>
  </table>
</div>
