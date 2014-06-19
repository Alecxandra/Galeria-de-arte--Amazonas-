</br>
</br>
<div id="centro">
<div class="users form">
  <div class="nada" style="margin: 0px auto">
<?php $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset style="margin: 0px auto">
        <legend class="logTitulo">
            <?php echo __('Ingresa tu cuenta y tu contraseña.'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        ?>
    </fieldset>
    <input type="submit" class="elemento" value="Login">
  </div>
</div>
</div>
