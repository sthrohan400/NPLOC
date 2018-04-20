<!DOCTYPE html>
<html lang="en">
<head>
@include('master.meta')
@include('master.css')
</head>
@include('master.message')
@include('master.navbar')
@include('master.headermenu')
@yield('content');
<body>
@include('master.footer')	
@include('master.js')	
</body>
</html>