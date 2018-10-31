@include('tamplete.partains.header')

<section class="ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-12 ">
          <div class="cart-item-table commun-table">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Descriotion</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Stock Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a href="{{route('product_page')}}">
                      <div class="product-image"><img alt="Stylexpo" src="{{url('/')}}/public/assets/images/1.jpg"></div>
                      </a>
                    </td>
                    <td>
                      <div class="product-title"> 
                        <a href="{{route('product_page')}}">Cross Colours Camo Print Tank half mengo</a>
                        <div class="size-text">SIZE:large  <br> <span>PRODUCT ID:0088746</span></div> 
                      </div>
                    </td>
                    <td>
                      <ul>
                        <li>
                          <div class="base-price price-box"> <span class="price">$80.00</span> </div>
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
                        <span class="price">In Stock</span> 
                      </div>
                    </td>
                    <td>
                      <a href="cart.html">
                        <i title="Shopping Cart" class="fa fa-shopping-cart" aria-hidden="true"></i>
                      </a> 
                      <i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="{{route('product_page')}}">
                        <div class="product-image"><img alt="Stylexpo" src="{{url('/')}}/public/assets/images/2.jpg"></div>
                      </a>
                    </td>
                    <td>
                     <div class="product-title"> 
                        <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a>
                        <div class="size-text">SIZE:large  <br> <span>PRODUCT ID:0088746</span></div> 
                      </div>
                    </td>
                    <td>
                      <ul>
                        <li>
                          <div class="base-price price-box"> <span class="price">$80.00</span> </div>
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
                        <span class="price">In Stock</span> 
                      </div>
                    </td>
                    <td>
                      <a href="cart.html">
                        <i title="Shopping Cart" class="fa fa-shopping-cart" aria-hidden="true"></i>
                      </a>  
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
              <a href="shop.html" class="btn btn-color">
                <span><i class="fa fa-angle-left"></i></span>Continue Shopping
              </a> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('tamplete.partains.footer')
