<section id="contact-us" class="eight_sec_plx_contact_section section">
  <div class="map">
    <div id="map"></div>
    <div class="map-c">
      <h1>Solar Home</h1>
      <div class="det"><i class="fa fa-map-marker"></i> House# 16, Road# 13 </br>
        Niketon,Gulshan -1 </br>
        Dhaka,1212,Bangladesh
      </div>
      <div class="det"><i class="fa fa-phone"></i> +8801672993247</div>
      <div class="det"><i class="fa fa-globe"></i> www.solarhome-bd.com</div>
    </div>
  </div>
</section>
<script>
//23.7726881,90.4065121
var myCenter = {lat: 23.7726881, lng: 90.4065121};

      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: myCenter,
          zoom:15,
        });
        var marker = new google.maps.Marker({
          position: myCenter,
        });
        marker.setMap(map);
      }
      google.maps.event.addDomListener(window, 'load', initMap);


</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBS9BiCHZWWtxinCx1GbGt6H1-c3oJghro&callback=initMap"></script>
