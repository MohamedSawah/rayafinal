@extends('layouts.FrontLayout.master')
@section('content')

<!-- breadcrumbs start -->
<div class="breadcrumbs-area breadcrumb-bg ptb-100">
    <div class="container">
        <div class="breadcrumbs text-center">
            <h2 class="breadcrumb-title">{{trans('messages.contact us')}}</h2>
            <ul>
                <li>
                    <a class="active" href="{{route('home')}}">{{trans('messages.home')}}</a>
                </li>
                <li>{{trans('messages.contact')}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->

<div id="contact-area" class="contact-area ptb-120 gray-bg">
    <div class="container">
        <div class="section-title text-center mb-70">
            <h2>{{trans('messages.GET IN TOUCH')}} <i class="fa fa-phone"></i></h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel volutpat felis, eu condimentum
                massa. Pellentesque mollis eros vel mattis tempor.</p> -->
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-offset-2 col-lg-8 col-sm-12">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-5">
                        <div class="contact-info-area">
                            <ul>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="contact-address">
                                        <h5>{{trans('messages.Phone')}}</h5>
                                        <span>{{ $settings->mobile }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="contact-address">
                                        <h5>{{trans('messages.Email')}}</h5>
                                        <span><a href="#">{{ $settings->email }}</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="contact-address">
                                        <h5>{{trans('messages.Our Location')}}</h5>
                                        <span>{{ $settings->address_en }}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- -->
                    <div class="col-md-7 col-lg-7 col-sm-7">
                            @if (isset($errors))
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                               @endforeach
                               @endif
                        <div class="sent-message">
                            <form class="contact_form" action="{{route('contact-us')}}" method="post">
                               @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-input mb-10">
                                            <input id="contact_name" name="username" placeholder="{{trans('messages.Name')}}*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="main-input mb-10">
                                            <input id="contact_mobile" name="mobile" placeholder="{{trans('messages.Phone')}}" type="text">
                                        </div>
                                    </div>
                                       <div class="col-md-12">
                                        <div class="main-input mb-10">
                                            <input id="contact_subject" name="subject" placeholder="{{trans('messages.Subject')}}*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="main-input mrg-eml mrg-contact mb-10">
                                            <input id="contact_email" name="email" type="email" placeholder="{{trans('messages.Email')}}*">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-leave2 mb-20">
                                            <textarea name="message" id="contact_message" placeholder="{{trans('messages.Type Your Massage.......')}}"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="submit ripple-btn" type="submit" name="submit" >{{trans('messages.Send_Massage')}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-area-all">
    <div id="Chaffer"></div>
</div>


@endsection