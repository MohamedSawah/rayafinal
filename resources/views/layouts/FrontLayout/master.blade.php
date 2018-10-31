<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Raya ADS</title>
     <meta name="theme-color" content="#9f1f63">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}"> -->

    <!-- all css here -->
    <?php if (App::isLocale('en')) { ?>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/css/nivo-slider.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/lib/css/preview.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bundle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/style-ar.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.rtl.full.min.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
   <?php } else { ?>
        
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/css/nivo-slider.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/lib/css/preview.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bundle.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.full.min.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style-ar.css')}}">
     <?php }  ?> 
    <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
    
</head>

<body>
    <!-- header start -->
    <header class="header-area home-style-2">
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3 col-xs-6">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{asset('assets/img/logo/222222.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-9 col-xs-6">
                        <div class="cart-menu">
                            <div class="search-style-2 f-right">
                                <a class="icon-search-2" href="#">
                                    <i class="pe-7s-search"></i>
                                </a>
                                <div class="search2-content">
                                    <form action="{{route('search')}}" method="POST" role="search">
                                    {{ csrf_field() }}
                                        <div class="search-input-button2">
                                            <input  name="search" placeholder="{{ trans('messages.Search') }}" type="search">
                                            <button class="search-button2" type="submit">
                                                <i class="pe-7s-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="user user-style-3 f-right">
                                <a href="#">
                                    <i class="pe-7s-add-user"></i>
                                </a>
                                <div class="currence-user-page">
                                    <div class="user-page">
                                        <ul>
                                        
                                             @guest
                                            <li><a href="{{ route('login') }}"><i class="pe-7s-next-2"></i> {{ trans('messages.signin') }}</a></li>
                                            <li><a href="{{ route('register') }}"><i class="pe-7s-add-user"></i> {{ trans('messages.create_an_account') }}</a></li>
                                            @else
                                             <form class="logout-form" id="logout-form" action="{{ route('logout') }}" method="POST">
                                               @csrf
                                              <button type="submit " class=""  style=" font-size: 17px; color: black; padding:5px 15px;background:#f4f4f4;border:0 none;" value="Logout"> {{ __('Logout') }}</button>
                                            </form>
                                            @endguest
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="user user-style-3 f-right hidden-xs">
                                <a href="#">
                                    <i class="pe-7s-global"></i>
                                </a>
                                <div class="currence-user-page">
                                    <div class="user-page">
                                        <ul>
                                                <?php if (App::isLocale('en')) { ?>
                                            <li><a href="{{URL::to('setlang/ar')}}"><i class="pe-7s-flag"></i> عربي</a></li>
                                            <?php } else { ?>
                                                <li><a href="{{URL::to('setlang/en')}}"><i class="pe-7s-flag"></i> English</a></li>

                                            <?php }  ?>
                                            <!--   <li><a href="#"><i class="pe-7s-credit"></i> Currency</a></li>   -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shopping-cart f-right" id='msg'>
                               <a class="top-cart" href="{{route('cart')}}"><i class="pe-7s-cart"></i></a>
                                <span> {{ Cart::count() }} </span>
                                <ul >
                                        <?php foreach(Cart::content() as $row) :  
                                        $product = App\Product::find($row->id);
                                        ?>

                                    <li>
                                        <div class="cart-img-price">
                                            <div class="cart-img">
                                                <a href="#"><img src="{!!asset('upload/product/'.$product->img_main)!!}" alt="" height="50px" width="50px"/></a>
                                            </div>
                                            <div class="cart-content">
                                                <h3><a href="#">{{ $row->name }}</a> </h3>
                                                <span class="cart-price">{{ $row->price *$row->qty }}</span>
                                            </div>
                                            <div class="cart-del">
                                                <input type="hidden" value="{{ $row->rowId }}" id="productId{{ $row->rowId }}">
                                                <input type="hidden" value="{{ $row->rowId }}" id="rowIdVal{{ $row->rowId }}">
                                                <i class="pe-7s-close-circle delproduct" data-id="{{ $row->rowId }}" id="rowId{{ $row->rowId }}"></i>
                                            </div>
                                        </div>
                                    </li>
                                      <?php endforeach ?>
                                  

                                    <li>
                                        <p class="total">
                                            Subtotal:
                                            <span>{{ Cart::subtotal() }}</span>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="buttons">
                                        
                                            <a class="my-cart" href="{{route('cart')}}">View Cart</a>
                                            <a class="checkout" href="{{ route('order') }}">Checkout</a>
                                        </p>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="main-menu f-right">
                                <nav>
                                    <ul>
                                        <li><a href="{{ route('home') }}">{{ trans('messages.home') }}</a>
                                          
                                        </li>
                                        @php 
                                          $categories = App\Category::where(['parent_id'=>0])->get();
                                          
                                        @endphp 
                                        @foreach ($categories as $category )
                                            @php 
                                            $flag=0;
                                                $subcategories = App\Category::where(['parent_id'=>$category->id])->get();
                                            @endphp
                                        <li class="mega-position"><a href="#">{{ $category->name_en }} </a>
                                            <div class="mega-menu mega-4-colm">
                                               
                                                
                                                    @foreach ($subcategories as $sub)  
                                                    <?php if($flag==0) echo '<ul>' ; ?>              
                                                   <li><a href="{{route('product_category',$sub->id)}}">{{ $sub->name_en }}</a></li>
                                                    <?php if($flag==2) echo '</ul>' ; $flag++; if($flag==3) $flag=0; ?> 

                                                    @endforeach
                                                                                                                                    
                                            </div>
                                        </li>
  
                                        @endforeach

                                        @php
                                         $about=\App\Page::find('4');
                                        @endphp
                                       
                                        <li><a href="{{route('page.by.slug', $about->slug)}}">{{ trans('messages.aboutus') }}</a></li>
                                         <li><a href="{{route('contact')}}">{{ trans('messages.contact') }}</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a class="active1" href="{{ route('home') }}">{{ trans('messages.home') }}</a>
                
                                </li>
                                <li class="active1"><a class="active1" href="#">Pages</a>
                                    <ul>
                                        <li><a href="about-us.html">about us </a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="{{ route('login') }}">login</a></li>
                                        <li><a href="{{ route('register') }}">register</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="shop-page.html">shop page</a></li>
                                        <li><a href="shop-list.html">shop list</a></li>
                                        <li><a href="single-product.html">single product</a></li>
                                        <li><a href="404.html">404 page</a></li>
                                    </ul>
                                </li>
                                <li class="active1"><a class="active1" href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-page.html">blog-page</a></li>
                                        <li><a href="blog-sidebar.html">blog left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">blog right sidebar </a></li>
                                        <li><a href="blog-details.html">blog-details </a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">about us</a></li>
                                <li><a href="contact.html">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->

    <!-- Main -->
    <section class="content">

      @yield('content')
     </section>
    <!-- end Main -->



    <!-- subscribe area start -->
    <div class="subscribe-area gray-bg">
      
        <div class="container" id="newsletter">
            <div class="subscribe-bg ptb-80">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 ">
                        <div class="subscribe-from text-center">
                            <h3>subscribe to our newsletter</h3>
                            @php use Illuminate\Support\Facades\Session;  @endphp
                            @if (Session::has('success'))
                            <p class="success">{!! session('success') !!}</p>
                            @endif
                            @if (isset($errors))
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                               @endforeach
                               @endif 
                            <form action="{{ route('newsletter') }}">
                                    @csrf
                                <input name="email" placeholder="Enter your Email address" type="email" required>
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe area end -->
    
      <!-- footer area start -->
    <footer class="footer-area">
        <div class="container">
            <div class="footer-top pt-60 pb-30">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-widget mb-30">
                            <div class="footer-logo">
                                <a href="index.html">
                                        <img src="{{asset('assets/img/logo/222222.png')}}" alt="">
                                    </a>
                            </div>
                            <div class="widget-info">
                                <p>
                                    <i class="pe-7s-map-marker"> </i>
                                           <span>
                                               @php 
                                               $settings = App\Setting::find(1);
                                             echo $settings->address_en;
                                               @endphp   

                                           </span>
                                </p>
                                <p>
                                    <i class="pe-7s-mail"></i>
                                    <span>
                                            <a href="mailto:contact@company.com">contact@company.com</a>
                                        </span>
                                </p>
                                <p>
                                    <i class="pe-7s-call"></i>
                                    <span>{{ $settings->mobile  }} </span>
                                </p>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="{{ $settings->facebook  }}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{ $settings->twitter  }}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{ $settings->google  }}"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="{{ $settings->instagram  }}"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="{{ $settings->linkedin  }}"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 hidden-sm">
                        <div class="footer-widget mb-30">
                            <div class="footer-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="widget-text">
                                <ul>
                                    @php 
                                    $categories = App\Category::where('parent_id','!=',0)->orderBy('id', 'desc')->take(5)->get();
                                    @endphp
                                    @foreach ($categories as $category )
                                        
                                   
                               
                                    <li><a href="#"> {{ $category->name_en }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="footer-widget mb-30">
                            <div class="footer-title">
                                <h3>services</h3>
                            </div>
                            <div class="widget-text">
                                <ul>
                                   <li><a href="{{url('services')}}">Services</a></li> 
                                    <!-- <li><a href="#">Returns </a></li>
                                    <li><a href="#">Shipping </a></li>
                                    <li><a href="#">Track Orders </a></li>
                                    <li><a href="#">Contact Us  </a></li>
                                    <li><a href="#">Returns </a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <div class="footer-widget mb-30">
                            <div class="footer-title">
                                <h3>Quick Links</h3>
                            </div>
                            <div class="widget-text">
                                <ul>
                                    @guest
                                    <li><a href="{{ route('login')  }}">{{ trans('messages.Login') }} </a></li>
                                    <li><a href="{{ route('register')  }}">register </a></li>
                                    @endguest
                                    <li><a href="{{route('page.by.slug' , $about->slug)}}">About Us </a></li>                                      
                                    <li><a href="{{route('contact')}}">Contact Us </a></li> 
                                    <li><a href="{{route('cart')}}">My Cart</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-3 col-sm-3">
                        <div class="footer-widget mb-30">
                            <div class="footer-title">
                                <h3>Company</h3>
                            </div>
                            <div class="widget-text">
                                @php
                                $privacy=\App\Page::find(3);
                                $term=\App\Page::find(2);
                                $about=\App\Page::find(4);
                                @endphp
                                <ul>

                                    <li><a href="{{route('page.by.slug' , $about->slug)}}">About Us </a></li>                                    
                                    <li><a href="{{route('page.by.slug' , $privacy->slug)}}">Privacy Policy </a></li>
                                    <li><a href="{{route('page.by.slug' , $term->slug)}}">Term And Condition </a></li>
                                    
                                    
                                    <!-- <li><a href="#">Forum</a></li>
                                    <li><a href="#">Order Tracking </a></li>
                                    <li><a href="#">Privacy Policy </a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom ptb-20">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="copyright">
                            <p>
                                Copyright © 2018
                                <a href="#">Inc-House</a> . All Rights Reserved.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="payment f-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    @php 
      $products = App\Product::where('status',1)->get();
    @endphp
@foreach($products as $product)
    <!-- quick view start -->
    <div class="quick-view modal fade in" id="quick-view{{$product->id}}">
        <div class="container">
            <div class="row">
                <div id="view-gallery">
                    <div class="col-xs-12">
                        <div class="d-table">
                            <div class="d-tablecell">
                                <div class="modal-dialog">
                                    <div class="main-view modal-content">
                                        <div class="modal-footer" data-dismiss="modal">
                                            <span>x</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <div class="quick-image">
                                                    <div class="single-quick-image tab-content text-center">
                                                         
                                                     <div class="tab-pane  fade in active" id="{{$product->id}}">
                                                     <img src="{{asset('upload/product/'.$product->img_main)}}" alt="" />
                                                     </div>

                                                        @php
                                                        $images =App\Image::where('product_id',$product->id)->get();
                                                         $flag = 0; 
                                                        @endphp
                                                        @foreach($images as $image)
                                                        @php
                                                        $imagePath = 'upload/product/other/'.$image->img_name ;
                                                         @endphp
                                                         
                                                        <div class="tab-pane  fade in " id="{{$image->id}}">
                                                            <img src="{{asset($imagePath)}}" alt="" />
                                                        </div>
                                                        @php
                                                        $flag++; 
                                                        @endphp
                                                        @endforeach
                                                    </div>
                                                    <div class="quick-thumb">
                                                        <div class="nav nav-tabs">
                                                            <ul>
                                                            <li><a data-toggle="tab" href="#{{$product->id}}"> <img src="{{asset('upload/product/'.$product->img_main)}}" alt="quick view" height="50px" width="50px"/> </a></li>

                                                         @foreach($images as $image)
                                                         @php
                                                         $imagePath = 'upload/product/other/'.$image->img_name ;
                                                         @endphp
                                                                <li><a data-toggle="tab" href="#{{$image->id}}"> <img src="{{asset($imagePath)}}" alt="quick view" height="50px" width="50px"/> </a></li>
                                                         @endforeach

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="quick-right">
                                                    <div class="quick-right-text">
                                                        <h3><strong>{{$product->name_en}}</strong></h3>
                                                     <!--   <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <a href="#">06 Review</a>
                                                            <a href="#">Add review</a>
                                                        </div> -->
                                                        <div class="amount">
                                                            <h4>{{$product->price }}</h4>
                                                        </div>
                                                        <p>
                                                           {{ $product->info_en }}
                                                        </p>
                                                        <div class="row m-p-b">
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="por-dse responsive-strok clearfix">
                                                                    <ul>
                                                                        <li><span>Availability</span><strong>:</strong> @if($product->quantity>0) In stock @else Not In stock  @endif</li>
                                                                     <!--   <li><span>Condition</span><strong>:</strong> New product</li> -->
                                                                        <li><span>Category</span><strong>:</strong> <a href="#">{{ $product->category->name_en }}</a>                                                                          
                                                                            </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="por-dse color">
                                                                    <ul>
                                                                    <li><span>Feature</span><strong>:</strong>
                                                                      @if($product->features()->count()>0)
                                                                      @foreach($product->features as $feature)
                                                                     <a href="#">{{$feature->name_en}}</a>  
                                                                     @endforeach
                                                                     @else     
                                                                         <a href="#">There No Feature</a>
                                                                      @endif                                                                    
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="dse-btn">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="por-dse clearfix">
                                                                        <ul>
                                                                          <form id="form1" name="contact_form" class="default-form" action="{{ url('addtocart')}}"
                                                                                method="POST">
                                                                              {{ csrf_field() }}
                                                                            <li class="share-btn clearfix"><span>quantity</span>
                                                                                <input class="input-text qty" name='quantity' maxlength="12"  value="1"  type="number" >
                                                                            </li>

                                                                            <input type="hidden" value="{{ $product->id }}" name='id' >
                                                                            <input type="hidden" value="{{ $product->price }}" name='price' >
                                                                            <input type="hidden" value="{{ $product->name_en }}" name='name' >

                                                                        </ul>
                                                                        <div class="por-dse add-to">
                                                                                {{--  <a href="#" onclick="document.getElementById('form1').submit();">add to cart</a>  --}}
                                                                                <button  class="hvr-shutter-out-horizontal" type="submit">add to cart </button>
                                                                         </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="pro-shared">
                                                                            <?php  echo Share::page('http://jorenvanhocht.be',$product->name_en)
                                                                            ->facebook()
                                                                            ->twitter()
                                                                            ->googlePlus()
                                                                            ->linkedin();; ?>
                                                                            </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6">
                                                                   <!-- <div class="por-dse clearfix responsive-othre">
                                                                        <ul class="other-btn">
                                                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                                                        </ul>
                                                                    </div> -->
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- quick view end -->
@endforeach

    <!-- all js here -->
    <script src="{{asset('assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/lib/js/jquery.nivo.slider.js')}}"></script>
    <script src="{{asset('assets/lib/home.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <?php if (App::isLocale('en')) { ?>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <?php  } else { ?>
        <script src="{{asset('assets/js/main-ar.js')}}"></script> 
        <?php }  ?>
    <!-- share script -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
     <script src="{{ asset('js/share.js') }}"></script>
     <script src="http://code.jquery.com/jquery-3.3.1.min.js"
     integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
     crossorigin="anonymous">
     </script>
     
          

     <script>
            jQuery(document).ready(function(){
               jQuery('.delproduct').click(function(e){
                  e.preventDefault();
                  var thisId =$(this).attr('data-id');
                          var thisrow = $(this).parent().parent().parent();
                  $.ajaxSetup({
                     headers: {
                         'X-CSRF-TOKEN': '<?php echo csrf_token() ?>'
                     }
                 });

                  jQuery.ajax({
                     url: "{{ url('/removefromcart') }}",
                     method: 'post',
                     data: {
                        productId: jQuery('#productId'+thisId).val(),
                     },
                     success: function(result){
                         thisrow.remove();
                         
                        //  location.reload();
                      //  $(this).parent().parent().parent().remove();
                       // $( "#msg2").load(window.location.href + " #msg2");
                        $( "#msg").load(window.location.href + " #msg");
                        $( "#msg3").load(window.location.href + " #msg3");
                        
                     }});
                  });
               });
    </script>

<script>
    $(document).ready(function () {

        var categories = [];
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '<?php echo csrf_token() ?>'
            }
        });

        // Listen for 'change' event, so this triggers when the user clicks on the checkboxes labels
        $('input[name="cat[]"]').on("change", function (e) {
           
            e.preventDefault();
            categories = []; // reset 
    
            $('input[name="cat[]"]:checked').each(function()
            {
                categories.push($(this).val());
            });
    
            $.post("{{ url('/searchcat') }}", {categories: categories}, function(data)
            {
                
             $('#search-result').html(data);

            });  
        });
    
    });
  $(document).ready(function () {

        var categories = [];
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '<?php echo csrf_token() ?>'
            }
        });

        // Listen for 'change' event, so this triggers when the user clicks on the checkboxes labels
        $('input[name="cat[]"]').on("change", function (e) {
            e.preventDefault();
            categories = []; // reset 
    
            $('input[name="cat[]"]:checked').each(function()
            {
                categories.push($(this).val());
            });
    
            $.post("{{ url('/searchcat2') }}", {categories: categories}, function(data)
            {
                
             $('#search-result2').html(data);

            });  
        });
    
    });

</script>
<script>

$(".ui-corner-all").on("click", function() {
    // alert('done')
    var price = $('#amount').val();
    var arr = price.split("-");
    var price1 = arr[0];
    var price2 = arr[1];
    price1 = price1.replace('$','');
    price2 = price2.replace('$','');
    $.post("{{ url('/searchcat3') }}", {price1: price1,price2:price2}, function(data)
    {
     $('#search-result').html(data);
    });
 });

 $(".ui-corner-all").on("click", function() {
    // alert('done')
    var price = $('#amount').val();
    var arr = price.split("-");
    var price1 = arr[0];
    var price2 = arr[1];
    price1 = price1.replace('$','');
    price2 = price2.replace('$','');
    $.post("{{ url('/searchcat4') }}", {price1: price1,price2:price2}, function(data)
    {
     $('#search-result2').html(data);
    });
 });

</script>
 
</body>

</html>