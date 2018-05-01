<!DOCTYPE html>
<html lang="en">
<head>
@include('master.meta')
@include('master.css')
</head>

@include('master.navbar')
@include('master.headermenu')
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row"> 
        @include('master.message')    
        @yield('content');
      </div>
</div>
</div>
</div>  
    
<body>
@include('master.footer')	
@include('master.js')	
</body>
</html>