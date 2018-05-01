<!DOCTYPE html>
<html lang="en"> 
<head>
<meta charset="utf-8">
<title></title>
@include('master.meta')   
@include('master.css')
<link href="{{URL::asset('vamp/css/pages/signin.css')}}" rel="stylesheet" type="text/css">
</head>
<body>

<div class="account-container">
	<div class="content clearfix">
		<form action="#" method="post">
			<h1> Password Reset </h1>		
			<div class="login-fields">
				<p>Please provide your details</p>
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" />
				</div> <!-- /email -->
				
			</div> <!-- /login-fields -->
			<div class="login-actions">			
				<button class="button btn btn-success btn-large">Sign In</button>
			</div> <!-- .actions -->
		</form>
	</div> <!-- /content -->

</div> <!-- /account-container -->



<div class="login-extra">
	<a href="{{url('/go/login')}}">Go To Login</a>
</div> <!-- /login-extra -->


@include('master.js')

</body>

</html>
