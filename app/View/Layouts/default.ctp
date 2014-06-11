<!doctype html>
<html>
<head>
	<title><?php echo $title_for_layout ?></title>
	<?php 
		echo $this->Html->charset('utf-8');
		echo $this->Html->css(array(
        'bootstrap.min',
        'styles',
			));
	?>
</head>
<body>
     <!-- Barra principal-->

  <!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav nav-justified">
          <li><?php echo $this->Html->link('Home', array('controller' => 'Home', 'action' => 'index'));?></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Galeria<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Pinturas', array('controller' => 'Paintings', 'action' => 'gallery'));?></li>
                 <li class="divider"></li>
                <li><?php echo $this->Html->link('Pintores', array('controller' => 'Painters', 'action' => 'artists'));?></li>
            </ul>
          </li>
           <li><a href="#section2">Quienes somos</a></li>
          <li><a href="#section4">Contactanos</a></li>
          <li><a href="#section5">Login</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
  
	<main>
    <?php echo $this->Session->flash('flash', array('element' => 'failure')); ?>
    <?php echo $this->Session->flash('flash', array('element' => 'success')); ?>
		<?php echo $this->fetch('content'); ?>
	</main>

	<!-- Scripts -->
	<?php echo $this->Html->script(array(
			'http://code.jquery.com/jquery-2.1.1.js',
    'bootstrap.min',
       'main',
       'scripts',
		)); 
	?>
 
</body>
</html>