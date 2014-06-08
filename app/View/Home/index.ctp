  <!-- Barra principal-->
  <div class="masthead">
        <ul class="nav nav-justified">
          <li class="active"><a href="#">Home</a></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Galeria<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Pinturas', array('controller' => 'Paintings', 'action' => 'gallery'));?></li>
                 <li class="divider"></li>
                <li><a href="#">Pintores</a></li>
            </ul>
          </li>
          <li><a href="#">Quienes somos</a></li>
          <li><a href="#">Contactanos</a></li>
          <li><a href="#">Login</a></li>
          </ul>
      </div>
    <br><br><br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <?php echo $this->Html->image("im1.jpg"); ?>
          
        </div>
        <div class="item">
          <?php echo $this->Html->image("im2.jpg"); ?>
          <div class="container">
            
          </div>
        </div>
        <div class="item">
          <?php echo $this->Html->image("im3.jpg"); ?>
          <div class="container">
            
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    
    <!-- Informacion galeria-->
      <br><br><br>
           <div align="center">
          Informacion
           </div>
    
   <br><br><br>
    <div>
    <table align ="center">
       <!----carousel imagenes pinturas-->
      <tr>
      <td style="height: 300px; width:400px;">
      <div id="Carouselp" class="carousel slide" data-ride="carousel" style="height: 200px; width:300px;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#Carouselp" data-slide-to="0" class="active"></li>
        <li data-target="#Carouselp" data-slide-to="1"></li>
        <li data-target="#Carouselp" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" style="height: 200px; width:300px;">
        <div class="item active" style="height: 200px; width:300px;">
          <img src="im1.jpg" alt="First slide">
          <div class="container">
            
          </div>
        </div>
        <div class="item" style="height: 200px; width:300px;">
          <img src="im2.jpg" alt="Second slide">
          <div class="container">
            
          </div>
        </div>
        <div class="item" style="height: 200px; width:300px;">
          <img src="im3.jpg" alt="Third slide">
          <div class="container">
            
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#Carouselp" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#Carouselp" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
     </td>
       <td style="height: 300px; width:400px;">
      <div id="Carousela" class="carousel slide" data-ride="carousel" style="height: 200px; width:300px;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#Carousela" data-slide-to="0" class="active"></li>
        <li data-target="#Carousela" data-slide-to="1"></li>
        <li data-target="#Carousela" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" style="height: 200px; width:300px;">
        <div class="item active" style="height: 200px; width:300px;">
          <img src="im1.jpg" alt="First slide">
          <div class="container">
            
          </div>
        </div>
        <div class="item" style="height: 200px; width:300px;">
          <img src="im2.jpg" alt="Second slide">
          <div class="container">
            
          </div>
        </div>
        <div class="item" style="height: 200px; width:300px;">
          <img src="im3.jpg" alt="Third slide">
          <div class="container">
            
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#Carousela" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#Carousela" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    
      
      
      </td>
      </tr>
    
    </table>
    </div>