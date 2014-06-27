<br><br>
<div align="center" style="background-color:#4A4940">
	<div id="CarouselP" class="carousel slide" data-ride="carousel" data-interval="false" style="height: 750px; width:1150px;" >
	<div class="carousel-inner" style="height: 750px; width:1150px;">
    <br>
    <h1 style = 'color:white;'>Modificar pintura</h1>
    <?php 
	 $cont=0;
	 foreach($paintings as $painting){
	  if($painting['Painting']['id_painting']==$this->request->named['id']){
	    echo "<div class='item active' style='height: 570px; width:750px;'>". $this->Html->image($painting['Painting']['painting_picture'],array('style' => 'height: 600px;width:1050px;'));
      echo"<div class='carousel-caption'>";
      echo $this->Form->create('Painting', array('class' => 'form-horizontal'));
      echo "<p>Nombre:</p>".$this->Form->input('painting_name', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'value' => $painting['Painting']['painting_name'], 'label' => false));
      echo "<p>Pintor:</p>".$this->Form->input('painter_name', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'value' => $painting['Painter']['painter_name'], 'label' => false));
      echo "<p>Alto:</p>".$this->Form->input('painting_high', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'value' => $painting['Painting']['painting_high'], 'label' => false));
      echo "<p>Ancho:</p>".$this->Form->input('painting_width', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'value' => $painting['Painting']['painting_width'], 'label' => false));
      echo "<p>Técnica:</p>".$this->Form->input('technique_name', array('empty' => false, 'class' => 'form-control', 'div' => 'form-group', 'value' => $painting['Technique']['technique_name'], 'label' => false));
      if($painting['Painting']['painting_sold']==0){
        echo "<p>Vendida: No</p>";
      }else{
        echo "<p>Vendida: Si</p>";
      }
      echo "<br>";
      echo $this->Form->submit('Modificar', array('class' => 'btn btn-primary', 'div' => 'row'));
      echo $this->Form->end();  
      echo "</div>";
      echo "</div>";
      
	  }else{
	    echo "<div class='item' style='height: 600px; width:1050px;'>".$this->Html->image($painting['Painting']['painting_picture'],array('style' =>'height:600px;width:1050px;'));
      echo"<div class='carousel-caption'>";
      echo "<h1>".$painting['Painting']['painting_name']."</h1>";
      echo "<p>Pintor: ".$painting['Painter']['painter_name']."</p>";
      echo "<p> Tamaño: ".$painting['Painting']['painting_high']."x".$painting['Painting']['painting_width']."</p>";
      echo "<p> Técnica: ".$painting['Technique']['technique_name']."</p>";
     
       if($painting['Painting']['painting_sold']==0){
        echo "<p>Vendida: No</p>";
      }else{
        echo "<p>Vendida: Si</p>";
      }
            echo "</div>";
        echo "</div>";
	  } 
	 }//fin foreach
	?>
	</div> 
	</div>
  </div>