
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Laravel') }}</title>

<!-- Styles -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  
  <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
 
  <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Google Font -->
  <style>
    aside{
      padding-top:10px!important;
    }
  /* .main-sidebar {
  position:fixed !important;} */
  td ,th {
    height: 50px;
    vertical-align: center;
     text-align: center;
}
.skin-blue .sidebar-form .btn, .skin-blue .sidebar-form input[type=text] {

    border: 0px !important;;

}
body {
  font-family: "tahoma";

  background-color: #fff;
}
  </style>
 </head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <!-- <a href="index2.html" class="logo"> -->
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <!-- <span class="logo-lg"><b>Dashboard</span> -->
    <!-- </a> -->

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
         -->
      </div>

     </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" >

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('images/user.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->firstName}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
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

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Dashboard</li>
        <!-- Optionally, you can add icons to the links -->
        <!-- <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li> -->
        <li ><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        
        <li ><a href="{{url('admin/currencies')}}"><i class="fa fa-usd"></i> <span>Currencies</span></a></li>
        <li><a href="{{url('admin/countries')}}"><i class="fa fa-codiepie"></i> <span>Countries</span></a></li>
        <li class=" treeview" >
        <a href="#">
            <i class="fa fa-list-alt"></i><span>products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
          <li><a href="{{url('admin/products')}}"><i class="fa fa-product-hunt"></i> <span>products</span></a></li> 
          <li><a href="{{url('admin/categories')}}"><i class="fa fa-link"></i> <span>Categories</span></a></li>
          <li><a href="{{url('admin/brands')}}"><i class="fa fa-angellist"></i> <span>Brands</span></a></li>
          <li><a href="{{url('admin/labels')}}"><i class="fa fa-get-pocket"></i> <span>Labels</span></a></li>

          </ul>
        
        </li>
        <li><a href="{{url('admin/suppliers')}}"><i class="fa fa-user-circle"></i> <span>Supplier</span></a></li>        
        <li><a href="{{url('admin/offers')}}"><i class="fa fa-bullhorn"></i> <span>Offers</span></a></li>
        <li><a href="{{url('admin/coupons')}}"><i class="	fa fa-vcard"></i> <span>Coupon</span></a></li>  
        <li class=" treeview" >
        <a href="#">
            <i class="fa fa-list-alt"></i><span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
          <li><a href="{{url('admin/slideshows')}}"><i class="fa fa-slideshare"></i> <span>slideshow</span></a></li>
          </ul>
        
        </li>
      
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

 <!-- header content -->
   <section class="content-header">
      <h1>
        ChartJS
        <small>Preview sample</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
<section class="content">
       @yield('content')
 </section>

  </div>
  <!-- /.content-wrapper -->
</div>
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!-- <div class="pull-right hidden-xs">
      Anything you want
    </div> -->
    <!-- Default to the left -->
    <center>
    <strong>Copyright &copy; 2018 <a href="#">Bluesoftec</a>.</strong> All rights reserved.
   </center>
  </footer>

  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
<!-- </div> -->
<script src="{{asset('js/app.js')}}"></script>
<script>
/** add active class and stay opened when selected */
var url = window.location;
// for sidebar menu entirely but not cover treeview
$('ul.sidebar-menu a').filter(function() {
	 return this.href == url;
}).parent().addClass('active');

// for treeview
$('ul.treeview-menu a').filter(function() {
	 return this.href == url;
.parentsUntil( $( "ul.level-1" ) ).addClass('active');
</script>
<script>
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
</script>
</body>
</html>