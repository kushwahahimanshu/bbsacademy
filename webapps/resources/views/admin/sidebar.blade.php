
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>BBS ADMIN</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="{{url('admin')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin')}}"><i class="fa fa-circle-o"></i>Dashboard</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Home Page</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">6</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('home_slider')}}"><i class="fa fa-circle-o"></i>Home Slider</a></li>
            <li><a href="{{url('user_details')}}"><i class="fa fa-circle-o"></i>User_update</a></li>
            <li><a href="{{url('testimonial')}}"><i class="fa fa-circle-o"></i> Testimonial</a></li>
            <li><a href="{{url('topper')}}"><i class="fa fa-circle-o"></i>Topper-Form</a></li>
            <li><a href="{{url('news')}}"><i class="fa fa-circle-o"></i>News Part</a></li>
            <li><a href="{{url('imp_notice')}}"><i class="fa fa-circle-o"></i>Latest Job Alert</a></li>
            <li><a href="{{url('batch')}}"><i class="fa fa-circle-o"></i>Upcoming Batch</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>About</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('page_edit')}}"><i class="fa fa-circle-o"></i>Page Update</a></li>
            <li><a href="{{url('add_event')}}"><i class="fa fa-circle-o"></i> Add Media $ events</a></li>
            <li><a href="{{url('our_team')}}"><i class="fa fa-circle-o"></i>Team Editing</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Franchisee</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('franchise_form')}}"><i class="fa fa-circle-o"></i>Franchise page Content</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Career</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('add_post')}}"><i class="fa fa-circle-o"></i>Add_post</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Center Locater</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('center_locator')}}"><i class="fa fa-circle-o"></i>Centor_Locator</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Manage Course</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('course-category')}}"><i class="fa fa-circle-o"></i>Add Course Category</a></li>
            <li><a href="{{url('course-name')}}"><i class="fa fa-circle-o"></i>Add Course</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('contact_form')}}"><i class="fa fa-circle-o"></i>Contact form</a></li>
            <li><a href="{{url('upload_file')}}"><i class="fa fa-circle-o"></i>Upload_Download_file</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage E-Books</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('manage-ebook-category')}}"><i class="fa fa-circle-o"></i>Manage E-Book Category</a></li>
            <li><a href="{{url('manage-ebook')}}"><i class="fa fa-circle-o"></i>Manage E-Book</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage Video Course</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('manage-video-courses')}}"><i class="fa fa-circle-o"></i>Manage Video Course Category</a></li>
            <li><a href="{{url('manage-courses-video')}}"><i class="fa fa-circle-o"></i>Manage Video Course</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Create New Page</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('create-new-page')}}"><i class="fa fa-circle-o"></i>New Page</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>