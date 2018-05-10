
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