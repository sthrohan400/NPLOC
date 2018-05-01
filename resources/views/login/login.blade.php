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
	<div class="content clearfix {{Session::has('error') ? 'errorClass': ''}}">
		<form action="{{route('postLogin')}}" method="post">
			{{csrf_field()}}
			<h1>Member Login</h1>	
			
			<div class="login-fields">
				<p>Please provide your details</p>
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field {{$errors->has('username') ? ' errorClass' : ''}} " />
					@if($errors->has('username'))
					<span class="help-block">
						<p class="errorText">{{$errors->first('username')}}</p>
					</span>
					@endif
				</div> <!-- /field -->
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field {{$errors->has('password') ? ' errorClass' : ''}}"/>
					@if($errors->has('password'))
					<span class="help-block">
						<p class="errorText">{{$errors->first('password')}}</p>
					</span>
					@endif
				</div> <!-- /password -->
				@if(Session::has('error'))
				<div class="help-block ">
					<p class="errorText">{{Session::get('error')}}</p>
				</div>
			@endif	
			</div> <!-- /login-fields -->
			<div class="login-actions">
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in</label>
				</span>					
				<button class="button btn btn-success btn-large">Sign In</button>
			</div> <!-- .actions -->
		</form>
	</div> <!-- /content -->

</div> <!-- /account-container -->



<div class="login-extra">
	<a href="{{url('/go/reset/password')}}">Reset Password</a>
</div> <!-- /login-extra -->


@include('master.js')

</body>

</html>
