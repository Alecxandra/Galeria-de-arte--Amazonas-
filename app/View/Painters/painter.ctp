<br><br><br>
  <!-- Jumbotron -->
<br><br>      
<div class="jumbotron">
        <?php 
      
           foreach($painters as $painter){
             echo "<h1 align='center'>".$painter['Painter']['painter_name']."</h1>";
             echo "<br><br>";
             echo "<p class='lead'>";
             echo "Fecha de nacimiento: ".$painter['Painter']['painter_birthday']."<br>";
             echo "País Natal: ".$painter['Painter']['painter_countryofbirth']."<br>";
             echo "Ciudad Natal: ".$painter['Painter']['painter_cityofbirth']."<br><br><br>";
             echo $painter['Painter']['painters_biography'];
             echo "</p>";
          }

      ?>
     </div>

 <div class="divider" id="section3"></div>
 <div class="bg-4">
     <div class="container">
   <?php       
   $cont;
   $cont=0;
   $id_painter;
             foreach($painters as $painter ) {
                      $id_painter=$painter['Painter']['id_painter'];  
                  foreach( $painter[ 'Painting' ] as $painting ) {
                    $cont++;
                     if($cont==1){
                           echo "<div class='row' style= 'padding: 0 0;padding-bottom:20px;'>";
                      }      
                    echo "<div class='col-md-3'>";echo $this->Html->image($painting['painting_picture'], array('style'=>'height:200px;
  width:200px;',
        'url' => array('action' => 'paintings_painter', 'id' => $painting['id_painting'],'id_painter'=>$id_painter),
    )); echo"</div>";
                     if($cont==4){
                         echo"</div>";
                        $cont=0;
                        }
                  }
 
               }
?>
                 </div></div>