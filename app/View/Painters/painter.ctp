<br><br><br>
  <!-- Jumbotron -->
<br><br>      
<div class="jumbotron">
        <?php 
      
           foreach($painters as $painter){
             echo "<h1 align='center'>".$painter['Painter']['painter_name']."</h1>";
             echo "<br><br>";
             echo "<p class='lead'>";
             echo "<B>Fecha de nacimiento: </B>".$painter['Painter']['painter_birthday']."<br>";
             echo "<B>País Natal: </B>".$painter['Painter']['painter_countryofbirth']."<br>";
             echo "<B>Ciudad Natal: </B>".$painter['Painter']['painter_cityofbirth']."<br><br><br>";
             echo $painter['Painter']['painter_biography'];
             echo "</p>";
          }

      ?>
     </div>


<!-- File: /app/View/Posts/index.ctp -->
<BR><BR>


<div class="divider" id="section3"></div>
 <div class="bg-4" >
     <div class="container">
       <?php 
  $cont;
$cont=0;
$id_painter;
 foreach($painters as $painter){
    $id_painter=$painter['Painter']['id_painter'];  
      foreach( $painter[ 'Painting' ] as $painting ) {
   $cont++;
   if($cont==1){
     echo "<div class='row'>";
   }
        echo "<div class='col-sm-4 col-xs-6'>";
   echo $this->Html->useTag('tagstart', 'a', array('href' => $this->Html->url(array('action' => 'paintings_painter', 'id' => $painting['id_painting'],'id_painter'=>$id_painter))));
   echo "<div class='panel panel-default'>";
   echo "<div class='panel-thumbnail'>".$this->Html->image($painting['painting_picture'], array('class'=>'img-responsive',)); echo"</div>";
    echo "<div class='panel-body'><p>".$painting['painting_name']."</p><p></p></div></div>";
   echo $this->Html->useTag('tagend', 'a');
         echo"</div>";
   if($cont==3){
    echo "</div>";
     $cont=0;
   }
      }//fin for
 }//Fin for
 ?>  
     </div>
   </div>


