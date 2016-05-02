<!DOCTYPE html>
<html>
  <head>
    <style>
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }
    </style>
    <style>
      #menu{
        position: fixed;
        top:0px;
        width:100%;
        height: 25px;
        background-color:#848484;
        color:#FFFFFF;
        font-size: 15px;
        font-family: "Arial";
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script type="text/javascript">
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 0, lng: 0},
          zoom: 2
        });
      }
    </script>    
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_a9axoXhhoAMauw-LYQQl4jNQsz0kGa0&callback=initMap&library=drawing">
    </script>
    <fieldset id="menu">      
      <form id="forml" action="" method="post">
        <div>
          <label for="id">Enfermedad:</label>
          <select id="nombreEnfermedad">
            <option value="1">Antrax</option>
            <option value="2">Ebola</option>
            <option value="3">Virus Marburgo</option>
            <option value="4">Colera</option>
            <option value="5">Salmonela Typhi</option>
            <option value="6">Malaria</option>
            <option value="7">Triquionisis</option>
            <option value="8">Coronavirus</option>
          </select>
          <input type="button" name="search" value="Buscar" onclick="propiedades()" />
        </div>
      </form>
    </fieldset>

    <script type="text/javascript">

      function propiedades(){
        $lat = 0; $lng = 0;
        if(document.getElementById("nombreEnfermedad").value == 1){
          $lat = 41.878; $lng = -87.629;
        }else if(document.getElementById("nombreEnfermedad").value == 2){
          $lat = 37.880; $lng = -4.790;
        }else if(document.getElementById("nombreEnfermedad").value == 3){
          $lat = 36.195; $lng = -115.139;
        }else if(document.getElementById("nombreEnfermedad").value == 4){
          $lat = 3.519; $lng = 13.670;
        }else if(document.getElementById("nombreEnfermedad").value == 5){
          $lat = 29.782; $lng = 28.671;
        }else if(document.getElementById("nombreEnfermedad").value == 6){
          $lat = 35.828; $lng = 101.451;
        }else if(document.getElementById("nombreEnfermedad").value == 7){
          $lat = 39.492; $lng = 141.074;
        }else if(document.getElementById("nombreEnfermedad").value == 8){
          $lat = 57.223; $lng = 122.441;
        }
        var cityCircle = new google.maps.Circle({
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35,
          map: map,
          center: {lat: $lat, lng: $lng},
          radius: Math.sqrt(2714856) * 100
        });
      };       
    </script>

  </body>
</html>