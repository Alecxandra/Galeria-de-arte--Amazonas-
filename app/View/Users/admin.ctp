<?php
$usuario = $this->Session->read('Auth.User.username');

?>


<div class="jumbotron">

  <div class="container">

    <div class="col-md-8 col-md-offset-2" style="padding-top:70px">

      <h1><?php echo "Bienvenido: ".$usuario; ?></h1>

      <br>

      <div class="col-md-4 col-md-offset-4" style="margin-bottom:20px">

        <?php echo $this->Html->link('Agregar un nuevo usuario', array('action' => 'add'), array('class' => 'btn btn-success btn-lg')); ?>

      </div>

      <table class="table table-hover">
        <thead>
          <tr>
            <th>Usuario</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $user): ?>
        <tr>
          <td><?php echo $user['User']['username']; ?></td>
        </tr>
      <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>

</div>
