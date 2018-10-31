
<!DOCTYPE html>
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
  
  
  </style>
 </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"> <img src="{{asset('images/logo.png')}}" class="img-circle2" alt="User Image"></span>
      <!-- <span class="logo-mini"><b>A</b>LT</span> -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> Dashboard</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">ر</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
           <!-- User Account: style can be found in dropdown.less -->
           <li class="dropdown user user-menu open">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
           <img src="{{asset('images/user.png')}}" class="img-circle1" alt="User Image" >
             <span class="hidden-xs">{{ucfirst(Auth::user()->firstName).' '.ucfirst(Auth::user()->lastName)}} </span>
           </a>
           <ul class="dropdown-menu">
             <!-- User image -->
             <li class="user-header">
             <img src="{{asset('images/user.png')}}" class="img-circle1" alt="User Image">

               <p>
             
                            {{ucfirst(Auth::user()->firstName).' '.ucfirst(Auth::user()->lastName)}} 
                 <small>Member since {{Carbon\Carbon::parse(Auth::user()->created_at)->format('m/d/Y')}}</small>
               </p>
             </li>
             <!-- Menu Footer-->
             <li class="user-footer">
               
               <div class="pull-right">
             
                 <a href="#" class="btn btn-default btn-flat">
                        @guest
                           <li ><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                           <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                       @else
                                   <form class="logout-form"id="logout-form" action="{{ route('logout') }}" method="POST">
                                       @csrf
                                       <button type="submit " class=""  style=" font-size: 17px; color: black; padding:5px 15px;background:#f4f4f4;border:0 none;" value="Logout"> {{ __('Logout') }}</button>

                                   </form>
                               <!-- </div> -->
                         
                       @endguest
                       </a>
               </div>
             </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
       <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('images/user.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ucfirst(Auth::user()->firstName).' '.ucfirst(Auth::user()->lastName)}}</p>
          <!-- Status -->
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
        <li class="header">Dashboard</li>
  
        <li ><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        
        <li ><a href="{{url('admin/currencies')}}"><i class="fa fa-usd"></i> <span>Currencies</span></a></li>
        <li><a href="{{url('admin/countries')}}"><i class="fa fa-codiepie"></i> <span>Countries</span></a></li>
        <li><a href="{{url('admin/services')}}"><i class="fa fa-codiepie"></i> <span>Services</span></a></li>
        <li><a href="{{url('admin/branches')}}"><i class="fa fa-codiepie"></i> <span>Branches</span></a></li>
        <li><a href="{{url('admin/opinions')}}"><i class="fa fa-codiepie"></i> <span>Opinion</span></a></li>
        <li><a href="{{url('admin/pages')}}"><i class="fa fa-codiepie"></i> <span>Pages</span></a></li>
        <li class=" treeview" >
        <a href="#">
            <i class="fa fa-list-alt"></i><span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
          <li class="level"><a href="{{url('admin/products')}}"><i class="fa fa-product-hunt"></i> <span>Products</span></a></li> 
          <li><a href="{{url('admin/categories')}}"><i class="fa fa-link"></i> <span>Categories</span></a></li>
                  <li><a href="{{url('admin/features')}}"><i class="fa fa-angellist"></i> <span> Features</span></a></li>
                  <li><a href="{{url('admin/featuredetails')}}"><i class="fa fa-angellist"></i> <span> Features details</span></a></li>
                  {{--  <li><a href="{{ url }}('admin/productfeature')}}"><i class="fa fa-angellist"></i> <span> Product Feature</span></a></li>  --}}

          <li><a href="{{url('admin/orders')}}"><i class="fa fa-get-pocket"></i> <span>Order</span></a></li>

          </ul>
        
        </li>
        <li><a href="{{url('admin/users')}}"><i class="fa fa-user-circle"></i> <span>User</span></a></li>                
        <!-- <li><a href="{{url('admin/suppliers')}}"><i class="fa fa-user-circle"></i> <span>Supplier</span></a></li>         -->
        <!-- <li><a href="{{url('admin/offers')}}"><i class="fa fa-bullhorn"></i> <span>Offers</span></a></li> -->
        <!-- <li><a href="{{url('admin/orders')}}"><i class="fa fa-cart-plus"></i> <span>Orders</span></a></li> -->
        <li><a href="{{url('admin/coupons')}}"><i class=" fa fa-vcard"></i> <span>Coupon</span></a></li>  
        <li class=" treeview" >
        <a href="#">
            <i class="fa fa-list-alt"></i><span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
          <li><a href="{{url('admin/slideshows')}}"><i class="fa fa-slideshare"></i> <span>Slideshow</span></a></li>
        <li><a href="{{url('admin/settings')}}"><i class="fa fa-codiepie"></i> <span>Settings</span></a></li>
          
          </ul>
        
        </li>
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

      @yield('content')
     </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <footer class="main-footer">
   
    <center>
    <strong>Copyright &copy; 2018 <a href="#">UABL</a>.</strong> All rights reserved.
   </center>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">

                  <a href="#" class="btn btn-default btn-flat">Sign out</a>

  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- script -->
<script src="{{ asset('js/app.js') }}"></script>


<script>
/** add active class and stay opened when selected */
var url = window.location;
// for sidebar menu entirely but not cover treeview
$('ul.sidebar-menu a').filter(function() {
   return this.href == url;
}).parent().addClass('active');

// for treeview
// $('ul.treeview-menu a').filter(function() {
//    return this.href == url;
// .parentsUntil( $( "ul" ) ).addClass('active');
</script>
<script>
//   $('.navbar-custom-menu').on('click',function(){
 
//            var cls =  $('body').hasClass('sidebar-collapse');
//            if(cls == true){
//                 $('body').removeClass('sidebar-collapse');
//            } else {
//                 $('body').addClass('sidebar-collapse');
//            }
 
// });
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
</script>
</body>
</html>
