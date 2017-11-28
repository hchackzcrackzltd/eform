<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{config('app.name')}} | Application Form Login</title>
  <link rel="stylesheet" href="{{asset('css/login.min.css')}}">
</head>
<body>
  <div class="login-page">
    <div class="form animated zoomIn">
      <a href="{{route('login_admin')}}"><img src="{{asset('img/logo/logo_ddd_100.png')}}" alt="DDD"></a>
      <img src="{{asset('img/logo/logo-namu-plus_100.jpg')}}" alt="NAMU">
      <h2>Application Form</h2>
      <form class="login-form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <input type="text" name="username" placeholder="ID Card" data-inputmask="'mask':'9-9999-99999-99-9'" required/>
        <input type="password" name="password" placeholder="Password" style="display:none" readonly required/>
        <button type="submit" title="Login" class="animated pulse logck" style="animation-delay:2s"><b>Login</b></button>
        <a href="{{route('register')}}" title="Register" class="animated pulse rsgck" style="animation-delay:2s"><b>Register</b></a>
        @foreach ($errors->all() as $value)
          <p class="message animated bounceIn" style="animation-delay:1s">{{$value}}</p>
        @endforeach
      </form>
    </div>
  </div>
  <script src="{{asset('js/login.min.js')}}"></script>
  <script>
    $(function() {
      $('input').inputmask();
      $('input[name=username]').on('focusout keypress', function(event) {
        $('input[name=password]').val(this.value);
      });
    });
  </script>
</body>
</html>
