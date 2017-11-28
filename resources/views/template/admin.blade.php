<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}} | @yield('title')</title>

    <link href="{{asset('css/admin_all.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('template.menu.admin_menu')
        @include('template.menu.admin_top')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                @yield('titlepage')
              </div>
            </div>
            <div class="clearfix"></div>
            @yield('content')
          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            DO DAY DREAM PUBLIC COMPANY LIMITED
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <script src="{{asset('js/admin_all.min.js')}}"></script>
    @yield('script')
  </body>
</html>
