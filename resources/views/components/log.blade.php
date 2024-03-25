<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hai</title>
    <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>
    <form action="{{ url('login') }}" method="POST">
        @csrf
  
        <div class="center">
            <h1>Login</h1>

              <div class="txt_field">
                <input type="text"  name="email" id="email" value="{{ old('email') }}">
                <span id="emailError" class="message"></span>
                <label>Email id</label>
              </div>
              <div class="txt_field">
                <input type="password" id="password" name="password">

                <label>Password </label>
                <span id="passwordError"></span>
            </div>

              <div class="pass"><a href="{{url('email')}}">Forgot Password?</a></div>
              <div class="col-md-2">
                @if(session('message'))
                <div id="flash-message" class="message" >
                    {{ session('message') }}
                </div>

                <script>
                    setTimeout(function() {
                        document.getElementById('flash-message').style.display = 'none';
                    }, 5000);
                </script>
            @endif
        </div>

              <input type="submit" value="Login">
              <div class="signup_link">
              </div>

            </div>

    </form>
    {{-- <script src="{{asset('assets/js/eye.js')}}"></script>
<script src={{asset("assets/js/login_validation.js")}}></script> --}}

</body>
</html>

