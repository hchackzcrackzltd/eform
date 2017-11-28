<div class="col-md-3 left_col menu_fixed">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{route('candidate_admin')}}" class="site_title"><i class="fa fa-users"></i> <span>Form Online</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile">
      <div class="profile_pic">
        <img src="{{asset('img/Profile.jpg')}}" alt="User" class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{Auth::user()->name}}</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-dashboard"></i> Candidate <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="{{route('candidate_admin')}}"><i class="fa fa-list"></i> Candidate List</a></li>
            <li><a href="{{route('candidate_add_admin')}}"><i class="fa fa-plus"></i> Add New Candidate</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-user"></i> User Manage <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="{{route('member.index')}}"><i class="fa fa-list"></i> User List</a></li>
            <li><a href="{{route('member.create')}}"><i class="fa fa-plus"></i> Add New User</a></li>
            </ul>
          </li>
          <li><a href="{{route('candidate_export')}}"><i class="fa fa-share"></i> Export</a></li>
          <li><a><i class="fa fa-cog"></i> Setting <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="{{route('email.index')}}"><i class="fa fa-envelope"></i> E-Mail Notifiation</a></li>
            <li><a><i class="fa fa-archive"></i> Masterdata <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
              <li><a href="{{route('position.index')}}"><i class="fa fa-archive"></i> Position</a></li>
              <li><a href="{{route('education.index')}}"><i class="fa fa-archive"></i> Education</a></li>
              <li><a href="{{route('lang.index')}}"><i class="fa fa-archive"></i> Language</a></li>
              <li><a href="{{route('relig.index')}}"><i class="fa fa-archive"></i> Religion</a></li>
              <li><a href="{{route('race.index')}}"><i class="fa fa-archive"></i> Race</a></li>
              <li><a href="{{route('provin.index')}}"><i class="fa fa-archive"></i> Province</a></li>
              <li><a href="{{route('nation.index')}}"><i class="fa fa-archive"></i> Nationality</a></li>
              </ul>
            </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->
    <!-- /menu footer buttons -->
    <!-- /menu footer buttons -->
  </div>
</div>
