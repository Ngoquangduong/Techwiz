<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/CSS/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/CSS/Auth.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="position-relative">

    
  <div class="login-box mx-auto position-absolute ">
    <div class="lb-header">
      <a href="#" class="active " id="login-box-link">Login</a>
      <a href="#" class=""id="signup-box-link">Sign Up</a>
    </div>
    {{-- <div class="social-login">
      <a href="#">
        <i class="fa fa-facebook fa-lg"></i>
        Login in with facebook
      </a>
      <a href="#">
        <i class="fa fa-google-plus fa-lg"></i>
        log in with Google
      </a>
    </div> --}}
    {{-- -------Login--------------------------------------------------------------------------------------------------------------------------------- --}}
    <form class="email-login" action="" method="POST" enctype='multipart/form-data'>
      @csrf
      <div class="u-form-group">
        <input type="email" name="email" placeholder="Email"/>
      </div>
      <div class="u-form-group">
        <input type="password" name="password"  placeholder="Password"/>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
      </div>
      <div class="remember">
        <label for="" class="d-flex-between d-flex-left" >
          <input type="checkbox" name="" id=""  {{ old('remember') ? 'checked' : '' }}/>
          <span> {{ __('Remember Me') }}</span>
        </label>
      </div>
      <div class="u-form-group">
        <button>Log in</button>
      </div>
      <div class="u-form-group">
        <a href="#" class="forgot-password">Forgot password?</a>
      </div>
    </form>
{{-- -Register form-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------    --}}
    <form class="email-signup" action="" method="POST" enctype='multipart/form-data'>
      @csrf
      <div class="u-form-group">
        <input type="name" placeholder="User Name" name="name" class="name-input"/>
        <span class="text-danger">@error('name') {{$message}} @enderror</span>
      </div>

      <div class="u-form-group">
        <input type="email" name = "email"placeholder="Email"/>
        <span class="text-danger">@error('email') {{$message}} @enderror</span>
      </div>

      <div class="u-form-group">
        <input type="password" name="password" placeholder="Password"/>
        <span class="text-danger">@error('password') {{$message}} @enderror</span>
      </div>
      <div class="u-form-group">
        <input type="password" placeholder="Confirm Password"/>
      </div>
      <div class="u-form-group">
        <button>Sign Up</button>
      </div>
    </form>
  </div>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(".email-signup").hide();
$("#signup-box-link").click(function(){
  $(".email-login").fadeOut(100);
  $(".email-signup").delay(100).fadeIn(100);
  $("#login-box-link").removeClass("active");
  $("#signup-box-link").addClass("active");
});
$("#login-box-link").click(function(){
  $(".email-login").delay(100).fadeIn(100);;
  $(".email-signup").fadeOut(100);
  $("#login-box-link").addClass("active");
  $("#signup-box-link").removeClass("active");
});
  </script>
</body>
</html>
