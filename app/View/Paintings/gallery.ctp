<!-- File: /app/View/Posts/index.ctp -->
<h1 align="center">Pinturas</h1> 

<div class="container">
<?php 
  $cont;
$cont=0;
 foreach($paintings as $painting){
   $cont++;
   if($cont==1){
     echo "<div class='row' style= 'padding: 0 170px;padding-bottom:8px;'>";
   }
    echo "<div class='col-md-3'>";echo $this->Html->image($painting['Painting']['painting_picture'], array(
        'url' => array('action' => 'carousel', 'id' => $painting['Painting']['id_painting']),
    )); echo"</div>";
   if($cont==4){
     echo"</div>";
     $cont=0;
   }
 }//Fin for
 ?>  
</div>
