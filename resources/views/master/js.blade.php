
  {{-- <script src="{{URL::asset('assets/js/jquery-1.12.4.js')}}"></script> --}}
 
  {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/popper.min.js"></script>--}}
  
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{URL::asset('assets/js/jquery-ui.js')}}"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="{{URL::asset('stellar/js/off-canvas.js')}}"></script>
  <script src="{{URL::asset('stellar/js/misc.js')}}"></script>
  <script src="{{URL::asset('stellar/js/dashboard.js')}}"></script>
  <script src="{{URL::asset('stellar/js/alerts.js')}}"></script>
  <script src="{{URL::asset('stellar/js/calendar.js')}}"></script>
  <script src="{{URL::asset('stellar/js/paginate.js')}}"></script>
  <script src="{{URL::asset('custom/nepuzz-table.js')}}"></script>
    <script src="{{URL::asset('custom/foundation-datepicker.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script> 
<script>
$(function(){
  $('.fdatepickerbutton').click(function(){
    $('#fdatepicker').fdatepicker().focus();
  })
  $('#fdatepicker').fdatepicker({
    //initialDate: new Date(),
    format: 'yyyy-mm-dd',
    disableDblClickSelection: true,
    leftArrow:'<<',
    rightArrow:'>>',
    closeIcon:'X',
    closeButton: true
  });
});
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAlYH1BCtePpyRlZ5tWJBYmHzI35v8byw&callback=initMap"
async defer></script>

<script>
    function initMap() {
      var marker = new google.maps.Marker();
      var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var labelIndex = 0;
      var map;
      var infowindow;
      // var contentString = '<div id="content">'+
      //   '<div id="siteNotice">'+
      //   '</div>'+
      //   '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
      //   '<div id="bodyContent">'+
      //   '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
      //   'sandstone rock formation in the southern part of the '+
      //   'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
      //   'south west of the nearest large town, Alice Springs; 450&#160;km '+
      //   '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
      //   'features of the Uluru - Kata Tjuta National Park. Uluru is '+
      //   'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
      //   'Aboriginal people of the area. It has many springs, waterholes, '+
      //   'rock caves and ancient paintings. Uluru is listed as a World '+
      //   'Heritage Site.</p>'+
      //   '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
      //   'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
      //   '(last visited June 22, 2009).</p>'+
      //   '</div>'+
      //   '</div>';
      var markers = [];
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
      });
      google.maps.event.addListener(map, 'click', function(event) {
        addMarker(event, map);
      });
      function addMarker(location, map) {
          markers.push(location);
          showMarkers(markers);
          showMarkerForm(markers);
      }
      function showMarkers(markers){
        markers.forEach(function(m){
          var a = new google.maps.Marker({
            position: m.latLng,
            map: map
          });
          // var i = new google.maps.InfoWindow({
          //   content: contentString
          // });
          // a.addListener('click',function(){
          //   //i.open(map,a);
          // });
        });
      }
      function showMarkerForm(markers){
        var temp = "<br/>";
        markers.forEach(function(mar){
          temp += '<fieldset><a class="pull-right"><i class="fa fa-chevron-down"></i></a></fieldset>';
          temp += '<h4>'+JSON.stringify(mar)+'</h4>';
        })
        document.getElementById('spotsForm').innerHTML = temp;
        //d.innerHTML(temp);
      }

    }
  </script>