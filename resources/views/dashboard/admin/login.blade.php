<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V20</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('admin-login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin-login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin-login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin-login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('admin-login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin-login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin-login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('admin-login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin-login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin-login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
		
			<div class="wrap-login100 p-b-160 p-t-50">
				<form  action="{{ route('admin.check')}}"  method="POST" class="login100-form validate-form">
				
                @csrf
                <span class="login100-form-title p-b-43">
						Account Login
					</span>
					
					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
						<input class="input100" type="email" name="email" value="{{old ('email')}}" placeholder="Email">
						
 
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" value="{{old ('password')}}" placeholder="Password">

					</div>
					<div>

					</div>


					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Sign in
						</button>
					</div>
					
					<div class="text-center w-full p-t-23">
						
						<h6 style="color: white;" >@error('email'){{$message}}  @enderror  </h6>

					</div>
					<div class="text-center w-full p-t-23">
					<h6 style="color: white;" >@error('password'){{$message}} @enderror</h6>

					</div>
			
				</form>
				@if(Session::get('fail')) 
			<div class="alart alart-danger" style="color: white;">
			
			{{Session::get('fail')}}
			@endif
			</div>

				
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="{{asset('admin-login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('admin-login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('admin-login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('admin-login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('admin-login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('admin-login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('admin-login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('admin-login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('admin-login/js/main.js')}}"></script>

</body>
</html>