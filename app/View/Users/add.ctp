<br><br>
<H1 align="center">Agrega un usuario</H1><br><br>

<div class="jumbotron">

  <div class="container">

    <div class="users form" style="margin: 0px auto; width: 400px;">

      <?php echo $this->Form->create('User'); ?>
      <fieldset>
        <legend><?php echo __('Nuevo usuario'); ?></legend>
        <?php echo $this->Form->input('username');?>
        </br>
        <?php echo $this->Form->input('password');?>
      </br>
      </fieldset>
      <?php echo $this->Form->end(__('Submit')); ?>

    </div>

  </div>

</div>
