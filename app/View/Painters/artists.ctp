 <H1 align="center"> Pintores </H1>
<br><br>
<div class="container">
   <?php 
     $cont;
     $cont=0;
       foreach($painters as $painter){
        $cont++;
          if($cont==1){
            echo "<div class='row'>";
          }
           echo "<div class='col-lg-4'>";
           echo "<H2>".$painter['Painter']['painter_name']."</H2>";
           echo "<p>Fecha de nacimiento: ".$painter['Painter']['painter_birthday']."</p>";
           echo "<p>País Natal: ".$painter['Painter']['painter_countryofbirth']."</p>";
           echo $this->Html->link('Ver más »', array('controller' => 'Painters','action' => 'painter','id' => $painter['Painter']['id_painter']), array('class' => 'btn btn-primary', 'role' => 'button'));
           echo"</div>";
   if($cont==3){
     echo"</div>";
     $cont=0;
   }
 }//Fin for
    
   ?>
  </div>
