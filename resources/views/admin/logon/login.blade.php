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
      <img src="{{asset('img/logo/logo_ddd_100.png')}}" alt="DDD">
      <img src="{{asset('img/logo/logo-namu-plus_100.jpg')}}" alt="NAMU">
      <h2>Application Form</h2>
      <form class="login-form" method="POST" action="{{ route('login_act_admin') }}">
        {{ csrf_field() }}
        <input type="text" name="username" placeholder="Username" required/>
        <input type="password" name="password" placeholder="Password" required/>
        <input type="checkbox" name="remember" id="rm" style="width:auto" {{ old('remember') ? 'checked' : '' }}><label for='rm'> Remember Me</label>
        <button type="submit" title="Login to manage" class="animated pulse" style="animation-delay:2s"><b>Login</b></button>
        @foreach ($errors->all() as $value)
          <p class="message animated bounceIn" style="animation-delay:1s">{{$value}}</p>
        @endforeach
      </form>
    </div>
  </div>
</body>
</html>
