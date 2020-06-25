<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="{{route('admin.dashboard')}}" class="site_title"><img src="{{asset('web/images/logo/logo.png')}}" style="width:100%"></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_info text-center" style="width: 100%">
          <h2><span>Welcome,</span> {{Auth::user()->name}}</h2>
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
            <li><a><i class="fa fa-users"></i> Gallery <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{route('admin.add_gallery_form')}}">Upload Gallery Image</a></li>
                <li><a href="{{route('admin.gallery_list')}}">Gallery Image List</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-shopping-cart"></i> Notifications <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{route('admin.add_notification_form')}}">Add New Notification</a></li>
                <li><a href="{{route('admin.notification_list')}}">Notification List</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- /sidebar menu -->
    </div>
  </div>