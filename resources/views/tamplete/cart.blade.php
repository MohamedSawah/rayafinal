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

  <section class="ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="cart-item-table commun-table">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Sub Total</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a href="{{route('product_page')}}">
                        <div class="product-image">
                          <img alt="Stylexpo" src="{{url('/')}}/public/assets/images/1.jpg">
                        </div>
                      </a>
                    </td>
                    <td>
                      <div class="product-title"> 
                        <a href="{{route('product_page')}}">Cross Colours Camo Print Tank half mengo</a> 
                      </div>
                    </td>
                    <td>
                      <ul>
                        <li>
                          <div class="base-price price-box"> 
                            <span class="price">$80.00</span> 
                          </div>
                        </li>
                      </ul>
                    </td>
                    <td>
                      <div class="input-box select-dropdown">
                        <fieldset>
                          <select data-id="100" class="quantity_cart option-drop" name="quantity_cart" id="ui-id-5" style="display: none;">
                            <option selected="" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="ui-id-5-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-5-menu" aria-haspopup="true" style="width: 100px;"><span class="ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">1</span></span>
                        </fieldset>
                      </div>
                    </td>
                    <td>
                      <div class="total-price price-box"> 
                        <span class="price">$80.00</span> 
                      </div>
                    </td>
                    <td>
                      <i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="{{route('product_page')}}">
                        <div class="product-image">
                          <img alt="Stylexpo" src="{{url('/')}}/public/assets/images/2.jpg">
                        </div>
                      </a>
                    </td>
                    <td>
                      <div class="product-title"> 
                        <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> 
                      </div>
                    </td>
                    <td>
                      <ul>
                        <li>
                          <div class="base-price price-box"> 
                            <span class="price">$80.00</span> 
                          </div>
                        </li>
                      </ul>
                    </td>
                    <td>
                      <div class="input-box select-dropdown">
                        <fieldset>
                          <select data-id="100" class="quantity_cart option-drop" name="quantity_cart" id="ui-id-6" style="display: none;">
                            <option selected="" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="ui-id-6-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-6-menu" aria-haspopup="true" style="width: 100px;"><span class="ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">1</span></span>
                        </fieldset>
                      </div>
                    </td>
                    <td>
                      <div class="total-price price-box"> 
                        <span class="price">$80.00</span> 
                      </div>
                    </td>
                    <td>
                      <i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-30">
        <div class="row">
          <div class="col-md-6">
            <div class="mt-30"> 
              <a href="{{route('shop')}}" class="btn btn-color">
                <span><i class="fa fa-angle-left"></i></span>
                Continue Shopping
              </a> 
            </div>
          </div>
          <div class="col-md-6">
            <div class="mt-30 right-side float-none-xs"> 
              <a class="btn btn-color">Update Cart</a> 
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="mtb-30">
        <div class="row">
          <div class="col-md-6 mb-xs-40">
            <div class="estimate">
              <div class="heading-part mb-20">
                <h3 class="sub-heading">Estimate shipping and tax</h3>
              </div>
              <form class="full">
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-box select-dropdown mb-20">
                      <fieldset>
                        <select id="country_id" class="option-drop" style="display: none;">
                          <option selected="" value="">Select Country</option>
                          <option value="1">India</option>
                          <option value="2">China</option>
                          <option value="3">Pakistan</option>
                        </select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="country_id-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="country_id-menu" aria-haspopup="true" style="width: 570px;"><span class="ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Select Country</span></span>
                      </fieldset>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-box select-dropdown mb-20">
                      <fieldset>
                        <select id="state_id" class="option-drop" style="display: none;">
                          <option selected="" value="1">Select State/Province</option>
                          <option value="2">---</option>
                        </select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="state_id-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="state_id-menu" aria-haspopup="true" style="width: 270px;"><span class="ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Select State/Province</span></span>
                      </fieldset>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-box select-dropdown mb-20">
                      <fieldset>
                        <select id="city_id" class="option-drop" style="display: none;">
                          <option selected="" value="1">Select City</option>
                          <option value="2">---</option>
                        </select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="city_id-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="city_id-menu" aria-haspopup="true" style="width: 270px;"><span class="ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Select City</span></span>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="cart-total-table commun-table">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="2">Cart Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Item(s) Subtotal</td>
                      <td>
                        <div class="price-box"> 
                          <span class="price">$160.00</span> 
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Shipping</td>
                      <td>
                        <div class="price-box"> 
                          <span class="price">$0.00</span> 
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Amount Payable</b></td>
                      <td>
                        <div class="price-box"> 
                          <span class="price"><b>$160.00</b></span> 
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="mt-30">
        <div class="row">
          <div class="col-12">
            <div class="right-side float-none-xs"> 
          <a href="{{route('checkout')}}" class="btn btn-color">Proceed to checkout
                <span><i class="fa fa-angle-right"></i></span>
              </a> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  @include('tamplete.partains.footer')
