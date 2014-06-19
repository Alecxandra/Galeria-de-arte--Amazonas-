<!doctype html>
<html>
<head>
	<title><?php echo $title_for_layout ?></title>
	<?php
		echo $this->Html->charset('utf-8');
		echo $this->Html->css(array(
        'bootstrap.min',
        'styles','SpryValidationTextField','estilos',
			));
	?>
</head>
<body>
     <!-- Barra principal-->
  <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '{your-app-id}',
          xfbml      : true,
          version    : 'v2.0'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=771688632852651&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
           <li><a href="#section2"><?php echo $this->Html->link('Quienes Somos', array('controller' => 'quienes', 'action' => 'quienesomos'));?></</a></li>
          <li><a href="#section4"><?php echo $this->Html->link('Contactanos', array('controller' => 'GalleryInformations', 'action' => 'contactanos'));?></a></li>
					<li><a href="#section5"><?php echo $this->Html->link('Ingresa', array('controller' => 'users', 'action' => 'admin'));?></a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
</br>
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
       'scripts','SpryValidationTextField',
		));
	?>
<script type="text/javascript">
      var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
      var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
			var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
</script>
</body>
</html>
