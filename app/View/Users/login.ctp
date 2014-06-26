<br><br>
<H1 align="center">Debes Autenticarte</H1><br><br>

<div class="jumbotron">

  <div class="container">

    <div class="users form" style="margin: 0px auto; width: 400px;">

      <?php $this->Session->flash('auth'); ?>
      <?php echo $this->Form->create('User'); ?>
      <fieldset style="margin: 0px auto">
        <legend class="logTitulo">
            <?php echo __('Ingresa tu cuenta y tu contraseña.'); ?>
        </legend>
        <?php echo $this->Form->input('username');?>
        </br></br>
        <?php echo $this->Form->input('password');?>
      </br>
      </fieldset>
      <input type="submit" class="elemento" value="Login">

    </div>

  </div>

</div>
