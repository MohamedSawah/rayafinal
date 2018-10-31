@include('tamplete.partains.header')

<section class="ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-lg-3 mb-sm-30 col-lgmd-20per">
          <div class="sidebar-block">
            <div class="sidebar-box listing-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Categories</span></h3>
              </div>
              <div class="sidebar-contant">
                <ul>
                  <li><a href="#">Clothing <span>(21)</span></a></li>
                  <li><a href="#">Shoes <span>(05)</span></a></li>
                  <li><a href="#">Jewellery <span>(10)</span></a></li>
                  <li><a href="#">Furniture <span>(12)</span></a></li>
                  <li><a href="#">Bags <span>(18)</span></a></li>
                  <li><a href="#">Accessories <span>(70)</span></a></li>
                </ul>
              </div>
            </div>
            <div class="sidebar-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Shop by</span></h3> 
              </div>
              <div class="sidebar-contant">
                <div class="price-range mb-30">
                  <div class="inner-title">Price range</div>
                  <input class="price-txt" type="text" id="amount">
                  <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 9.375%; width: 53.125%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 9.375%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 62.5%;"></span></div>
                </div>
                <div class="size mb-20">
                  <div class="inner-title">Size</div>
                  <ul>
                    <li><a href="#">S (10)</a></li>
                    <li><a href="#">M (05)</a></li>
                    <li><a href="#">L (10)</a></li>
                    <li><a href="#">XL (08)</a></li>
                    <li><a href="#">XXL (05)</a></li>
                  </ul>
                </div>
                <div class="mb-20">
                  <div class="inner-title">Color</div>
                  <ul>
                    <li><a href="#">Black <span>(0)</span></a></li>
                    <li><a href="#">Blue <span>(05)</span></a></li>
                    <li><a href="#">Brown <span>(10)</span></a></li>
                  </ul>
                </div>
                <div class="mb-20">
                  <div class="inner-title">Manufacture</div>
                  <ul>
                    <li><a href="#">Augue congue <span>(0)</span></a></li>
                    <li><a href="#">Eu magna <span>(05)</span></a></li>
                    <li><a href="#">Ipsum sit <span>(10)</span></a></li>
                  </ul>
                </div>
                <a href="#" class="btn btn-color">Refine</a> </div>
            </div>
            <div class="sidebar-box mb-40 d-none d-lg-block"> 
              <a href="#"> 
                <img src="{{url('/')}}/public/assets/images/left-banner.jpg" alt="rovanna"> 
              </a> 
            </div>
            <div class="sidebar-box sidebar-item"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Best Selle</span>r</h3> 
              </div>
              <div class="sidebar-contant">
                <ul>
                  <li>
                    <div class="pro-media"> <a href="#"><img alt="T-shirt" src="{{url('/')}}/public/assets/images/1.jpg"></a> </div>
                    <div class="pro-detail-info"> <a href="#">Black African Print</a>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                      </div>
                      <div class="price-box"> <span class="price">$80.00</span> </div>
                      <div class="cart-link">
                        <form>
                          <button title="Add to Cart">Add To Cart</button>
                        </form>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a href="#"><img alt="T-shirt" src="{{url('/')}}/public/assets/images/1.jpg"></a> </div>
                    <div class="pro-detail-info"> <a href="#">Black African Print</a>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                      </div>
                      <div class="price-box"> <span class="price">$80.00</span> </div>
                      <div class="cart-link">
                        <form>
                          <button title="Add to Cart">Add To Cart</button>
                        </form>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a href="#"><img alt="T-shirt" src="{{url('/')}}/public/assets/images/1.jpg"></a> </div>
                    <div class="pro-detail-info"> <a href="#">Black African Print</a>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                      </div>
                      <div class="price-box"> <span class="price">$80.00</span> </div>
                      <div class="cart-link">
                        <form>
                          <button title="Add to Cart">Add To Cart</button>
                        </form>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-10 col-lg-9 col-lgmd-80per"> 
          <div class="shorting mb-30">
            <div class="row">
              <div class="col-lg-6">
                <div class="view">
                  <div class="list-types grid active "> <a href="shop.html">
                    <div class="grid-icon list-types-icon"></div>
                    </a> 
                  </div>
                  <div class="list-types list"> <a href="shop-list.html">
                    <div class="list-icon list-types-icon"></div>
                    </a> 
                  </div>
                </div>
                <div class="short-by float-right-sm"> <span>Sort By :</span>
                  <div class="select-item select-dropdown">
                    <fieldset>
                      <select name="speed" id="sort-price" class="option-drop" style="display: none;">
                        <option value="" selected="selected">Name (A to Z)</option>
                        <option value="">Name(Z - A)</option>
                        <option value="">price(low&gt;high)</option>
                        <option value="">price(high &gt; low)</option>
                        <option value="">rating(highest)</option>
                        <option value="">rating(lowest)</option>
                      </select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="sort-price-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="sort-price-menu" aria-haspopup="true" style="width: 135px;"><span class="ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Name (A to Z)</span></span>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="show-item right-side float-left-sm"> <span>Show :</span>
                  <div class="select-item select-dropdown">
                    <fieldset>
                      <select name="speed" id="show-item" class="option-drop" style="display: none;">
                        <option value="" selected="selected">24</option>
                        <option value="">12</option>
                        <option value="">6</option>
                      </select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="show-item-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="show-item-menu" aria-haspopup="true" style="width: 47px;"><span class="ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">24</span></span>
                    </fieldset>
                  </div>
                  <span>Per Page</span>
                  <div class="compare float-right-sm"> <a href="#" class="btn btn-color">Compare (0)</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-listing">
            <div class="inner-listing">
              <div class="row">
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/1.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/2.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/3.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/4.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/5.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/6.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/7.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/8.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/9.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/10.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/11.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/12.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/13.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/14.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/15.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                 <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/1.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/2.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/16.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/4.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="{{url('/')}}/public/assets/images/5.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="pagination-bar">
                    <ul>
                      <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('tamplete.partains.footer')
