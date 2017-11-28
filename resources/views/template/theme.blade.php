<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<meta name="preview" content="{{route('preview')}}">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>{{config('app.name')}} | Application Form</title>
    <meta name="keywords" content="{{env('keyword','ใบสมัครออนไลน์ บริษัท ดู เดย์ ดรีม จำกัด (มหาชน)')}}">
	<meta name="description" content="{{env('keyword','ใบสมัครออนไลน์ บริษัท ดู เดย์ ดรีม จำกัด (มหาชน)')}}">
    <meta name="author" content="{{env('author','บริษัท ดู เดย์ ดรีม จำกัด (มหาชน)')}}">
	<link rel="stylesheet" href="{{asset('css/all.min.css')}}">
</head>
<body style="font-family:tahoma; background-color: #fff;">
	<nav class="navbar navbar-default" style="background-color:#9bba3c;border-radius:0px;">
  <div class="container-fluid">
		<form action="{{route('logout')}}" id="logout-form" method="post">
			{{csrf_field()}}
		</form>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('index')}}">{{config('app.name')}}</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sign-out"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--<body style="font-family:tahoma; background-image:url('images/online_application_form.jpg'); background-size:cover;">-->
<!--Title <div style="height:50px; " class="visible-md visible-lg"> </div>-->
<div  style=" background-image: url('{{asset('img/Intranet_h_R.jpg')}}'); background-size:15%;  background-position: 100% 0%;  background-repeat: no-repeat;background-attachment: fixed; ">
<div style=" background-image: url('{{asset('img/Intranet_h_L.jpg')}}'); background-size:15%;  background-position:  0%  0%;  background-repeat: no-repeat;background-attachment: fixed; ">
<div   class="visible-md visible-lg visible-sm"  align="center"   style="padding:10px;">
  <img src="{{asset('img/Intranet_h_c.jpg')}}" style="width:50%;"><br />
</div>
<div   class="visible-xs"  align="center"   style="paddingp:20px;">
	<img src="{{asset('img/Intranet_h_c.jpg')}}" style="width:80%;">
</div>

	<div class="container" style="font-family: Tahoma;  " >
		@yield('content')
	</div>
	 <!-- /.site-footer -->
 </div><!-- end url('images/Intranet_h_R.jpg') -->
 </div><!-- end url('images/Intranet_h_R.jpg') -->
<div style="height:50px;">

</div>
<br />
<footer style="position: absolute;
 right: 0;
 bottom: 0;
 left: 0;
 padding: 1rem;
 background-color: #e6e6e6;
 text-align: center;">
   <span style="font-size:10px; font-weight:600;">
      © 2017 DO DAY DREAM PUBLIC COMPANY LIMITED
    </div>
</footer>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
  <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
<script src="{{asset('js/all.min.js')}}"></script>
@yield('script')
</body>
</html>
