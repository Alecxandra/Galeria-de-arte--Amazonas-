<!doctype html>
<html>
<head>
	<title><?php echo $title_for_layout ?></title>
	<?php 
		echo $this->Html->charset('utf-8');
		echo $this->Html->css(array(
				'carousel',
        'bootstrap.min',
        'style'
        
			));
	?>
</head>
<body>
     <!-- Barra principal-->
  <div class="masthead">
        <ul class="nav nav-justified">
          <li class="active"><a href="#">Home</a></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Galeria<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Pinturas', array('controller' => 'Paintings', 'action' => 'gallery'));?></li>
                 <li class="divider"></li>
                <li><?php echo $this->Html->link('Pintores', array('controller' => 'Painters', 'action' => 'artists'));?></li>
            </ul>
          </li>
          <li><a href="#">Quienes somos</a></li>
          <li><a href="#">Contactanos</a></li>
          <li><a href="#">Login</a></li>
          </ul>
      </div>
	<main class="col-sm-10 col-sm-offset-1">
    <?php echo $this->Session->flash('flash', array('element' => 'failure')); ?>
    <?php echo $this->Session->flash('flash', array('element' => 'success')); ?>
		<?php echo $this->fetch('content'); ?>
	</main>

	<!-- Scripts -->
	<?php echo $this->Html->script(array(
			'http://code.jquery.com/jquery-2.1.1.js',
			'bootstrap.min',
       'main',
		)); 
	?>
 
</body>
</html>