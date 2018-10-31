@extends('layouts.FrontLayout.master')
@section('content')
@foreach($pages as $page)
<!-- breadcrumbs start -->
    <div class="breadcrumbs-area breadcrumb-bg ptb-100" style="background:rgba(0, 0, 0, 0) url({!! asset('upload/page/'.$page->image) !!}) repeat scroll center center / cover;">
        <div class="container">
            <div class="breadcrumbs text-center">
                @if(App::isLocale('en'))
                <h2 class="breadcrumb-title">{{$page->name_en}}</h2>
                @else
                <h2 class="breadcrumb-title">{{$page->name_ar}}</h2>
                @endif            
                    <ul>
                    <li>
                        <a class="active" href="{{route('home')}}">{{trans('messages.home')}}</a>
                    </li>
                     @if(App::isLocale('en'))
                    <li>{{$page->name_en}}</li>
                    @else
                    <li>{{$page->name_ar}}</li>
                    @endif            
                    
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
@if($page->id == '4')
    <!-- about start -->
    <div class="about-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="skill-area">
                     @if(App::isLocale('en'))
                    
                        <h2>{{$page->title_en}}</h2>
                        <p>{!!$page->details_en!!} </p>
                        @else
                          <h2>{{$page->title_ar}}</h2>
                        <p>{!!$page->details_ar!!} </p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img">
                        <img alt="" src="{{asset('assets/img/banner/8.jpg')}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area start  -->
    <div class="choose-us-skill-area ptb-100 gray-bg">
        <div class="container">
            <div class="section-title text-center mb-70">
                <h2>
                     @if(App::isLocale('en'))                
                    {{$choose->title_en}}

                    <i class="fa fa-star"></i>
                </h2>
                <p> {!!$choose->details_en!!}</p>
                @else
                  {{$choose->title_ar}}

                    <i class="fa fa-star"></i>
                </h2>
                <p> {!!$choose->details_ar!!}</p>
                  @endif
            </div>
         
        </div>
    </div>
 
    <!-- about end -->
    @else()
        <div class="choose-us-skill-area ptb-100 gray-bg">
        <div class="container">
            <div class="section-title text-center mb-70">
               @if(App::islocale('en'))
                <h2>
                   {{$page->title_en}}
                    <i class="fa fa-star"></i>
                </h2>
                <p>{!!$page->details_en!!}</p>
                @else
                 <h2>
                   {{$page->title_ar}}
                    <i class="fa fa-star"></i>
                </h2>
                <p>{!!$page->details_ar!!}</p>
                @endif
            </div>
         
        </div>
    </div>
    @endif
    
    @endforeach
@endsection