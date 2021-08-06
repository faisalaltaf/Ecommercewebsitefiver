
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('assets_login/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('assets_login/css/style.css')}}">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
    
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        

                        <form method="POST" action="{{route('user.create')}}" class="register-form" id="register-form" autocomplete="off">

                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old ('name')}}"/>
                           <span style="color: red;" class="text-danger">@error('name'){{ $message }} @enderror</span>

                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" value="{{old('email')}}"/>
                         
                           @error('email')
                                    <span style="color: red;" class="invalid-feedback" role="alert">
                                {{ $message }}
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="number"><i class="zmdi zmdi-email"></i></label>
                                <input type="number" name="mobile" id="mobile" placeholder="Your mobile" value="{{old('mobile')}}" />
                         
                           @error('mobile')
                                    <span style="color: red;" class="invalid-feedback" role="alert">
                                {{ $message }}
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="address" id="address" placeholder="Your address" value="{{old('address')}}"/>
                         
                           @error('address')
                                    <span style="color: red;" class="invalid-feedback" role="alert">
                                {{ $message }}
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="file enter"><i class="zmdi zmdi-email"></i></label>
                                <input type="file" name="file" id="file" placeholder="Your file image" value="{{old('file')}}"/>
                         
                           @error('file')
                                    <span style="color: red;" class="invalid-feedback" role="alert">
                                {{ $message }}
                                    </span>
                                @enderror

                            </div>
                           
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" value="{{old('password')}}"/>
                           <span style="color: red;" class="text-danger">@error('password'){{$message}} @enderror</span>

                            </div>
                            <div class="form-group" style="color: red;">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="cpassword" id="re_pass" placeholder="Repeat your password" value="{{old('cpassword')}}"/>
                           <span class="text-danger ">@error('cpassword'){{$message}} @enderror</span>

                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                           
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit"  id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                        @if(Session::get('success'))
                            <div style="color: green;">
                            {{Session::get('success')}}
                            @endif
                            </div>

                            @if(Session::get('fail'))
                            <div style="color:red;">
                            {{Session::get('fail')}}
                            </div>
                            @endif
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('assets_login/images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="{{route('user.login')}}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

       
    </div>
    <!-- JS -->
    <script src="{{asset('assets_login/vendor/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('assets_login/js/main.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>