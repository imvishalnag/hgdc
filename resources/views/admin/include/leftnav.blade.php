<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="{{route('admin.dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>HGDC</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="{{asset('admin/production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
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
          <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i> Home </a>
            </li>
            <li><a><i class="fa fa-edit"></i> Student <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{route('student.list')}}">Student List</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-users"></i> Members <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="#">Member List</a></li>
                <li><a href="#">Commision History</a></li>
                <li><a href="#">Member Wallet List</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-shopping-cart"></i> Shopping <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="#">Slider List</a></li>
                <li><a href="#">Product List</a></li>
                <li><a href="#">Category List</a></li>
              </ul>
            </li>
            <li>
                <a href="#">
                  <i class="fa fa-bell"></i> Important Notice
                </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /sidebar menu -->

    </div>
  </div>