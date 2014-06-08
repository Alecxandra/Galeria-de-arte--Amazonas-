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