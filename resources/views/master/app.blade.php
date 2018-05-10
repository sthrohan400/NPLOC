<!DOCTYPE html>
<html lang="en">
<head>
@include('master.meta')
@include('master.css')
</head>
<div class="container-scroller">

@include('master.headermenu')

<div class="container-fluid page-body-wrapper">
  <div class="row row-offcanvas row-offcanvas-right">

@include('master.navbar')  

@yield('content'); 
@include('master.footer')
</div>
</div>
</div>
    
<body>
@include('master.js')	
</body>
<script>
//  $(document).ready(function() {
//     $('#datepicker').datepicker();
//   })
  $(function () {
    $('#datepicker').datepicker();
});

  </script>
</html>