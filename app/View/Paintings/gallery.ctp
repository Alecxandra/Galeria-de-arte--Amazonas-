<!-- File: /app/View/Posts/index.ctp -->
<BR><BR><BR>
<h1 align="center">Pinturas</h1> 

<div class="divider" id="section3"></div>
 <div class="bg-4" >
     <div class="container">
       <?php 
  $cont;
$cont=0;
 foreach($paintings as $painting){
   $cont++;
   if($cont==1){
     echo "<div class='col-sm-4 col-xs-6'>";
   }
   echo $this->Html->useTag('tagstart', 'a', array('href' => $this->Html->url(array('action' => 'carousel', 'id' => $painting['Painting']['id_painting']))));
   echo "<div class='panel panel-default'>";
   echo "<div class='panel-thumbnail'>".$this->Html->image($painting['Painting']['painting_picture'], array('class'=>'img-responsive',)); echo"</div>";
    echo "<div class='panel-body'><p>".$painting['Painting']['painting_name']."</p><p></p></div></div>";
   echo $this->Html->useTag('tagend', 'a');
   if($cont==3){
     echo"</div>";
     $cont=0;
   }
 }//Fin for
 ?>  
     </div>
   </div>


