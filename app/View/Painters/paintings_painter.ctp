<br><br>
<div align="center" style="background-color:#4A4940">
	<div id="CarouselPainter" class="carousel slide" data-ride="carousel" data-interval="false" style="height: 600px; width:1050px;">
	<div class="carousel-inner" style="height: 600px; width:1050px;">
	<?php 
	 $cont=0;

       foreach($painters as $painter ) {
          foreach( $painter[ 'Painting' ] as $painting ) {
                if($painting['id_painting']==$this->request->named['id']){
	    echo "<div class='item active' style='height: 600px; width:1050px;'>". $this->Html->image($painting['painting_picture'],array('style' => 'height: 600px;width:1050px;'));
      echo"<div class='carousel-caption'>";
      echo "<h1>".$painting['painting_name']."</h1>";
      echo "<p> Tamaño: ".$painting['painting_high']."x".$painting['painting_width']."</p>";
      echo "<p> Técnica: ".$painting['Technique']['technique_name']."</p>";
     
      if($painting['painting_sold']==0){
        echo "<p>Vendida: No</p>";
      }else{
        echo "<p>Vendida: Si</p>";
      }
                 
                  
            echo "</div>";
        echo "</div>";
	  }else{
	    echo "<div class='item' style='height: 600px; width:1050px;'>".$this->Html->image($painting['painting_picture'],array('style' => 'height: 600px;          width:1050px;'));
      echo"<div class='carousel-caption'>";
      echo "<h1>".$painting['painting_name']."</h1>";
      echo "<p> Tamaño: ".$painting['painting_high']."x".$painting['painting_width']."</p>";
       echo "<p> Técnica: ".$painting['Technique']['technique_name']."</p>";
     
      if($painting['painting_sold']==0){
        echo "<p>Vendida: No</p>";
      }else{
        echo "<p>Vendida: Si</p>";
      }
            echo "</div>";
        echo "</div>";
	  }            
          }
       }
	 
	?>
	</div> 
	<a class="left carousel-control" href="#CarouselPainter" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#CarouselPainter" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div></div>