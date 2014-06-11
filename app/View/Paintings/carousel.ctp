<br><br>
<div align="center" style="background-color:#4A4940">
	<div id="CarouselP" class="carousel slide" data-ride="carousel" data-interval="false" style="height: 600px; width:1050px;" >
	<div class="carousel-inner" style="height: 600px; width:1050px;">
	<?php 
	 $cont=0;
	 foreach($paintings as $painting){
	  if($painting['Painting']['id_painting']==$this->request->named['id']){
	    echo "<div class='item active' style='height: 600px; width:1050px;'>". $this->Html->image($painting['Painting']['painting_picture'],array('style' => 'height: 600px;width:1050px;'));
      echo"<div class='carousel-caption'>";
      echo "<h1>".$painting['Painting']['painting_name']."</h1>";
      echo "<p>Pintor: ".$painting['Painter']['painter_name']."</p>";
      echo "<p> Tamaño: ".$painting['Painting']['painting_high']."x".$painting['Painting']['painting_width']."</p>";
      echo "<p> Técnica: ".$painting['Type']['type_name']."</p>";
            echo "</div>";
        echo "</div>";
	  }else{
	    echo "<div class='item' style='height: 600px; width:1050px;'>".$this->Html->image($painting['Painting']['painting_picture'],array('style' => 'height: 900px;          width:1050px;'));
      echo"<div class='carousel-caption'>";
      echo "<h1>".$painting['Painting']['painting_name']."</h1>";
      echo "<p>Pintor: ".$painting['Painter']['painter_name']."</p>";
      echo "<p> Tamaño: ".$painting['Painting']['painting_high']."x".$painting['Painting']['painting_width']."</p>";
      echo "<p> Técnica: ".$painting['Type']['type_name']."</p>";
            echo "</div>";
        echo "</div>";
	  } 
	 }//fin foreach
	?>
	</div> 
	<a class="left carousel-control" href="#CarouselP" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#CarouselP" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
  </divS>