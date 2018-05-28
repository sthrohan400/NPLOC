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
  <script type="text/javascript">
    function openKCFinder(obj) {
      window.KCFinder = {
          callBack: function(url) {
              window.KCFinder = null;
              var img = new Image();
              img.src = url;
             $(obj).parent().parent().find('input[type=text]').val(img.src);
              img.onload = function() {
              }
          }
      };
      window.open('/kcfinder/browse.php?type=images&dir=images/public',
          'kcfinder_image', 'status=0, toolbar=0, location=0, menubar=0, ' +
          'directories=0, resizable=1, scrollbars=0, width=800, height=600'
      );
  }
  </script>
</html>