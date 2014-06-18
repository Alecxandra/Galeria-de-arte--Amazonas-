<br>
<H1 align="center"> Contactanos</H1>
<br><br>
<div class="jumbotron">
  <div class ="container">
    <div id="map"></div>
    <script>
          var mapOptions =

          {

            center: new google.maps.LatLng(14.0880735,-87.1832608),
            zoom: 18,
            mapTypeId: google.maps.MapTypeId.ROADMAP

          };

          var map = new google.maps.Map(document.getElementById('map'), mapOptions);

          var markerOptions =

          {

            position: new google.maps.LatLng(14.0880735, -87.1832608),
            title: "Hello World!"

          };

          var marker = new google.maps.Marker(markerOptions);

          marker.setMap(map);

          var infoWindowOptions =

          {

            content: '<IMG BORDER="0" name="slide" ALIGN="Left" SRC="amazonas.png">'

          };

          var infoWindow = new google.maps.InfoWindow(infoWindowOptions);

          google.maps.event.addListener(marker,'click',function(e)

          {

            infoWindow.open(map, marker);

          });
        </script>
    
     <div class="col-md-10 col-md-offset-1">
  
  <div class="col-md-6">
  <!-- Aqui va a la informacion -->
    <img src="/cakephp-cake/img/Local/amazonas.png" style="width: 200px;height: 200px;">
    <p ><b>Dominio: </b>oldlaser.com/Galeria</p>
    <p ><b>Dirección: </b>Mall Multiplaza, Tegucigalpa</p>
    <p ><b>Número: </b>(504) 2231-2024</p>
    <p ><b>Correo: </b>jempeza@hotmail.com</p>
   
    
    </div>
  <div class="col-md-6">
  <!-- Aqui va el mapa -->
  
 
    </div>
 </div>
  </div> 
</div>  
  
  