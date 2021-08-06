<!DOCTYPE html>
<html lang="en">
<head>
	<title>Doctor </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('doctorlogin/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('doctorlogin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('doctorlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('doctorlogin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('doctorlogin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('doctorlogin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('doctorlogin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('doctorlogin/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('doctorlogin/images/Tosca Blue Online Doctor Consultation Instagram Post.png')}}" alt="IMG">
				</div>

				<form action="{{route('doctor.create')}}" method="post"  class="login100-form validate-form">
					<span class="login100-form-title">
						Doctor  Register Form
					</span>
					@csrf
			@if(Session::get('success'))
			<span class="text-success">{{Session::get('success')}} @endif</span>
				
			@if(Session::get('fail'))
			<span class="text-success">{{Session::get('fail')}} @endif</span>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="name" placeholder="Doctor Name" value="{{old('name')}}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						
						</span>
						<span class="text-danger ">@error('name'){{$message}} @enderror</span>
					</div>
				
				
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="hospital" placeholder="enter the hospital name" value="{{old('hospital')}}" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
					
						</span>
						<span class="text-danger">@error('hospital'){{$message}} @enderror	</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder=" entre the Email " value="{{old('email')}}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>

						<span class="text-danger">@error('email'){{$message}}@enderror</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="tel" name="phone" placeholder=" entre the phone " value="{{old('phone')}}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
						<span class="text-danger">@error('phone'){{$message}}@enderror</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="password" name="password" placeholder="password" value="{{old('password')}}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						
						</span>
						<span class="text-danger">@error('password'){{$message}} @enderror</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="cpassword" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
		
						</span>
						<span class="text-danger">@error('cpassword'){{$message}} @enderror</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit " name="submit" class="login100-form-btn">
							Login
						</button>

						
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{asset('dcotorlogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('dcotorlogin/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('dcotorlogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('dcotorlogin/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('dcotorlogin/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>