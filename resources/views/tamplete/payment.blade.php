@include('tamplete.partains.header')

<div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Shopping Cart</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="{{route('home')}}">Home</a>/</li>
            <li><span>Shopping Cart</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>

  <section class="checkout-section ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="checkout-step mb-40">
            <ul>
              <li> 
                <a href="{{route('checkout')}}">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">1</div>
                  </div>
                  <span>Shipping</span> 
                </a> 
              </li>
              <li> 
                <a href="{{route('order_overview')}}">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">2</div>
                  </div>
                  <span>Order Overview</span> 
                </a> 
              </li>
              <li class="active"> 
                <a href="{{route('payment')}}">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">3</div>
                  </div>
                  <span>Payment</span> 
                </a> 
              </li>
              <li> 
                <a href="{{route('order_complete')}}">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">4</div>
                  </div>
                  <span>Order Complete</span> 
                </a> 
              </li>
              <li>
                <div class="step">
                  <div class="line"></div>
                </div>
              </li>
            </ul>
            <hr>
          </div>
          <div class="checkout-content">
            <div class="row">
              <div class="col-12">
                <div class="heading-part align-center">
                  <h2 class="heading">Select a payment method</h2>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-8 col-md-8 ">
                <div class="payment-option-box mb-30">
                  <div class="payment-option-box-inner gray-bg">
                    <div class="payment-top-box">
                      <div class="radio-box left-side"> <span>
                        <input type="radio" id="paypal" value="paypal" name="payment_type">
                        </span>
                        <label for="paypal">PayPal</label>
                      </div>
                      <div class="paypal-box">
                        <div class="paypal-top"> <img src="{{url('/')}}/public/assets/images/paypal-img.png" alt="Stylexpo"> </div>
                        <div class="paypal-img"> <img src="{{url('/')}}/public/assets/images/payment-method.png" alt="Stylexpo"> </div>
                      </div>
                    </div>
                    <p>If you Don't have CCAvenue Account, it doesn,t matter. You can also pay via CCAvenue with you credit card or bank debit card</p>
                    <p>Payment can be submitted in any currency.</p>
                  </div>
                </div>
                <div class="payment-option-box mb-30">
                  <div class="payment-option-box-inner gray-bg">
                    <div class="payment-top-box">
                      <div class="radio-box left-side"> <span>
                        <input type="radio" id="cash" value="cash" name="payment_type">
                        </span>
                        <label for="cash">Would you like to pay by Cash on Delivery?</label>
                      </div>
                    </div>
                    <p>Vestibulum semper accumsan nisi, at blandit tortor maxi'mus in phasellus malesuada sodales odio, at dapibus libero malesuada quis.</p>
                  </div>
                </div>
                <div class="right-side float-none-xs"> <a class="btn btn-color" href="{{route('order_complete')}}">Place Order<span><i class="fa fa-angle-right"></i></span></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('tamplete.partains.footer')
