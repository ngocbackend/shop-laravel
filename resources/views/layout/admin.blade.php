<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('/')}}/public/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/css/AdminLTE.css">
  <link rel="stylesheet" href="{{url('/')}}/public/css/_all-skins.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/css/jquery-ui.css">
  <link rel="stylesheet" href="{{url('/')}}/public/css/style.css" />
 <!--  <script src="{{url('/')}}/public/js/angular.min.js"></script>
  <script src="{{url('/')}}/public/js/app.js"></script> -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
           <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="user-image glyphicon glyphicon-user" ></span>
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

                <p>
                  {{Auth::user()->name}}
                  <small> {{Auth::user()->email}}-{{Auth::user()->phone}}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#modal-id" class="btn btn-default btn-flat"  data-toggle="modal" >Đổi mật khẩu</a>
                </div>
                <div class="pull-right">
                  <a href="{{route('logout')}}" class="btn btn-default btn-flat">Đăng xuất</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        
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
         <li>
          <a href="{{route('admin')}}">
            <i class="fa fa-home"></i> <span>Trang chủ</span>
          </a>
        </li>
        
      @if(Auth::user()->group_name == 'nhanvien')
         <li>
          <a href="{{route('category-add')}}">
            <i class="fa fa-th"></i> <span>Danh mục</span>
          </a>
        </li>
        <li>
          <a href="{{route('list_admin')}}">
            <i class="fa fa-users"></i> <span>Danh sách nhân viên</span>
          </a>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Sản phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('product-list')}}"><i class="fa fa-circle-o"></i> Danh sách sản phẩm</a></li>
            <li><a href="{{route('product-add')}}"><i class="fa fa-circle-o"></i> Thêm sản phẩm</a></li>
          </ul>
        </li>
         <li>
          <a href="{{route('list_customer')}}">
            <i class="glyphicon glyphicon-user"></i> <span>QL Khách hàng</span>
          </a>
        </li>
         <li>
          <a href="{{route('order')}}">
            <i class="glyphicon glyphicon-file"></i> <span>QL Đơn hàng</span>
          </a>
        </li>
      @endif
       @if(Auth::user()->group_name == 'giamdoc')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>QL Nhân Viên</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('register')}}"><i class="fa fa-circle-o"></i> Thêm nhân viên</a></li>
            <li><a href="{{route('list_admin')}}"><i class="fa fa-circle-o"></i> Danh sách nhân viên</a></li>
          </ul>
        </li>
       @endif

       
        
       
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header " style="overflow: hidden">
      <h1 class="pull-left">
          @yield('title')
      </h1>
      <form action="" method="GET" class="form-inline pull-right">
          <div class="form-group">
            <input  class="form-control" name="search" placeholder="Nhập tên tìm kiếm">
          </div>
        
        
          <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="modal" id="modal-id">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title text-center">Đổi mật khẩu</h4>
            </div>
            <div class="modal-body">
              <form action="{{route('change')}}" method="POST" role="form">

    <div class="form-group @if($errors->has('old_pass')) has-error @endif">
      <div class="text-center">
        <label for="">Mật khẩu cũ</label>
      </div>
      <input type="password" class="form-control " name="old_pass" placeholder="Nhập mật khẩu cũ">
    </div>
    @if($errors->has('old_pass'))
    <p style="color: red">{{$errors->first('old_pass')}}</p>
    @endif
    <div class="form-group @if($errors->has('new_pass')) has-error @endif">
      <div class="text-center">
        <label for="">Mật khẩu mới</label>
      </div>
      <input type="password" class="form-control " name="new_pass" placeholder="Nhập mật khẩu mới">
    </div>
    @if($errors->has('new_pass'))
    <p style="color: red">{{$errors->first('new_pass')}}</p>
    @endif
    <div class="form-group @if($errors->has('confirm_pass')) has-error @endif">
     <div class="text-center">
        <label for="">Nhập lại mật khẩu</label>
     </div>
      <input type="password" class="form-control " name="confirm_pass" placeholder="Nhập lại mật khẩu mới">
    </div>
     @if($errors->has('confirm_pass'))
    <p style="color: red">{{$errors->first('confirm_pass')}}</p>
    @endif
  <div class="text-center">
    <button type="submit" class="btn btn-primary">SAVE</button>
  </div>


  @csrf
</form>
            </div>
            <div class="modal-footer">
              
            </div>
          </div>
        </div>
      </div>
      <!-- Default box -->
      <div class="box">
        
        <div class="box-body">
          @if(Session::has('success'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           {{Session::get('success')}}
          </div>
          @endif

          @if(Session::has('error'))
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('error')}}
          </div>
          @endif
          @yield('main')
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
         
        

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="{{url('/')}}/public/js/jquery.min.js"></script>
<script src="{{url('/')}}/public/js/jquery-ui.js"></script>
<script src="{{url('/')}}/public/js/bootstrap.min.js"></script>
<script src="{{url('/')}}/public/js/adminlte.min.js"></script>
<script src="{{url('/')}}/public/js/dashboard.js"></script>
<script src="{{url('/')}}/public/tinymce/tinymce.min.js"></script>
<script src="{{url('/')}}/public/tinymce/config.js"></script>
<script src="{{url('/')}}/public/js/function.js"></script>
</body>
</html>
