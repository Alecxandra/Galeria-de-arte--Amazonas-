<br><br><br>
<H1 align="center"> Pintores </H1>
<br><br>
<div class="bg-4">
<div class="container" style='padding-bottom:40px'>
   <?php 
     $cont;
     $cont=0;
       foreach($painters as $painter){
        $cont++;
          if($cont==1){
            echo "<div class='row'>";
          }
           echo "<div class='col-lg-4' style='padding-top:60px'>";
            foreach( $painter['Painting' ] as $painting ) {
              echo "<div align='center'>";
              echo $this->Html->image($painting['painting_picture'],array('style' => 'height: 140px;width:140px;','class'=>'img-circle'));
              echo"</div>";
              break;
            }
           echo "<div style='text-align: center;'>";
           echo "<H2>".$painter['Painter']['painter_name']."</H2>";
           echo "<p>Fecha de nacimiento: ".$painter['Painter']['painter_birthday']."</p>";
           echo "<p>País Natal: ".$painter['Painter']['painter_countryofbirth']."</p>";
           
           echo $this->Html->link('Ver más »', array('controller' => 'Painters','action' => 'painter','id' => $painter['Painter']['id_painter']), array('class' => 'btn btn-primary', 'role' => 'button'));
         echo "</div>";
           echo"</div>";
   if($cont==3){
     echo"</div>";
     $cont=0;
   }
 }//Fin for
    
   ?>
  </div>
</div>
