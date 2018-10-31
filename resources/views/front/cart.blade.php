@extends('layouts.FrontLayout.master')
@section('content')

<!-- breadcrumbs start -->
<div class="breadcrumbs-area breadcrumb-bg ptb-100">
    <div class="container">
        <div class="breadcrumbs text-center">
            <h2 class="breadcrumb-title">{{trans('messages.shopping cart')}}</h2>
            <ul>
                <li>
                    <a class="active" href="{{ route('home') }}">{{trans('messages.home')}}</a>
                </li>
                <li>{{trans('messages.cart')}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->

<!-- shopping-cart-area start -->
    <div class="cart-area ptb-100" >
        <div class="container">
            <div class="row">
        @if(Cart::count()==0)
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-price">{{trans('messages.images')}}</th>
                                        <th class="product-name">{{trans('messages.Product')}}</th>
                                        <th class="product-price">{{trans('messages.Price')}}</th>
                                        <th class="product-quantity">{{trans('messages.Quantity')}}</th>
                                        <th class="product-subtotal">{{trans('messages.Total')}}</th>
                                        <th class="product-name">{{trans('messages.remove')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <tr >   <td colspan="6"><center>{{trans('messages.There is No Product At Cart')}}</center></td> </tr >
                                 </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            @else
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table id='msg2'>
                                <thead>
                                    <tr>
                                        <th class="product-price">{{trans('messages.images')}}</th>
                                        <th class="product-name">{{trans('messages.Product')}}</th>
                                        <th class="product-price">{{trans('messages.Price')}}</th>
                                        <th class="product-quantity">{{trans('messages.Quantity')}}</th>
                                        <th class="product-subtotal">{{trans('messages.Total')}}</th>
                                        <th class="product-name">{{trans('messages.remove')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach(Cart::content() as $row)
                                 @php 
                                 $product = App\Product::find($row->id);
                                 @endphp
                                  
                                    <tr >
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="{!!asset('upload/product/'.$product->img_main)!!}" style="height: 50px !important; width: 50px !important;"></a>
                                        </td>
                                        <td class="product-name"><a href="#">
                                        @if(App::isLocale('en'))
                                        {{ $product->name_en }}
                                        @else
                                        {{$product->name_ar}}
                                        @endif</a></td>
                                        <td class="product-price"><span class="amount">{{ $row->price }}</span></td>
                                        <td class="product-quantity">
                                            <input value="{{ $row->qty }}" type="number">
                                        </td>
                                        <td class="product-subtotal">{{ $row->price *$row->qty }}</td>
                                        <input type="hidden" value="{{ $row->rowId }}" id="productId{{ $row->rowId }}">
                                        <input type="hidden" value="{{ $row->rowId }}" id="rowIdVal{{ $row->rowId }}">

                                        <td class="product-remove" ><a href="#" ><i  class="fa fa-times delproduct"  data-id="{{ $row->rowId }}"  id="rowId{{ $row->rowId }}" ></i></a></td>
                                    </tr>
                                    @endforeach
                                  @if(Cart::count()==0)
                                   <tr>   <td colspan="6"><center>{{trans('messages.There is No Product At Cart')}}</center></td> </tr >
                                   @endif

                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-50" id="msg3">
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <!-- <div class="tax-coupon-all">
                        <div class="tax-coupon">
                            <ul role="tablist">
                                <li class="active"><a href="#tax" data-toggle="tab">Estimate Shipping & Taxe</a></li>
                                <li><a href="#coupon" data-toggle="tab">Discount Coupon </a></li>
                            </ul>
                        </div>
                        <div class="tax-coupon-details tab-content">
                            <div id="tax" class="shipping-dec tab-pane active">
                                <p>Enter your destination to get a shipping estimate.</p>
                                <div class="shipping-form">
                                    <div class="single-shipping-form">
                                        <label class="required get">
                                            country
                                            <em>*</em>
                                        </label>
                                        <select class="email s-email">
                                            <option value="">United States</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Åland Islands</option>
                                            <option value="AL">Albania</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VA">Vatican City</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <div class="single-shipping-form">
                                        <label class="required get">
                                            State/Province
                                            <em>*</em>
                                        </label>
                                        <select class="email s-email">
                                            <option value="">Please select region</option>
                                            <option value="1">Alabama</option>
                                            <option value="61">Virginia</option>
                                            <option value="62">Washington</option>
                                            <option value="63">West Virginia</option>
                                            <option value="64">Wisconsin</option>
                                            <option value="65">Wyoming</option>
                                        </select>
                                    </div>
                                    <div class="single-shipping-form">
                                        <label class="required get">
                                            Zip/Postal Code
                                            <em>*</em>
                                        </label>
                                        <input placeholder="1234567" type="text" required="">
                                    </div>
                                    <div class="single-shipping-botton">
                                        <button type="submit">
                                            <span>Get a Quote</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="coupon" class="coupon-dec tab-pane">
                                <p>Enter your coupon code if you have one.</p>
                                <label class="required get">
                                    coupon
                                    <em>*</em>
                                </label>
                                <input placeholder="coupon code" required="" type="text">
                                <button class="coupon-btn" type="submit">
                                    Apply Coupon
                                </button>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="cart-total">
                        <ul>
                            <li>{{trans('messages.Subtotal')}}<span>{{ cart::subtotal() }}</span></li>
                            <li class="cart-black">{{trans('messages.Total')}}<span>{{ cart::subtotal() }}</span></li>
                        </ul>
                        <div class="cart-total-btn">
                            {{--  <div class="cart-total-btn1 f-left">
                                <a href="#">Proceed to checkout</a>
                            </div>  --}}
                            <div class="cart-total-btn2 f-right">
                                <a href="{{ route('order') }}">{{trans('messages.Confirm Order')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <!-- shopping-cart-area end -->
    @endsection