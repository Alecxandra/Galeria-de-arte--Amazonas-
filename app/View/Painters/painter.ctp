
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

 <div class="container">
   <?php       
   $cont;
          $cont=0;
             foreach($painters as $painter ) {
                  foreach( $painter[ 'Painting' ] as $painting ) {
                    $cont++;
                     if($cont==1){
                           echo "<div class='row' style= 'padding: 0 170px;padding-bottom:8px;'>";
                      }      
                    echo "<div class='col-md-3'>";echo $this->Html->image($painting['painting_picture'], array(
        'url' => array('controller' => 'Paintings','action' => 'carousel', 'id' => $painting['id_painting']),
    )); echo"</div>";
                     if($cont==4){
                         echo"</div>";
                        $cont=0;
                        }
                  }
 
               }
?>
                 </div>