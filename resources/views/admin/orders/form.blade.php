<div class="col-lg-12 col-md-12">

<div class="row">

                        <div class="form-group col-md-6">
                        <label for="invoiceID" class=" col-form-label text-md-right">{{ __('Invoice Number') }}</label>

                            <input id="invoiceID" type="number" class="form-control" name="invoiceID"  required autofocus>

                        </div>
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('User') }}</label>
                               <input id="user_id" type="text" class="form-control" name="user_id" value="{{Auth::user()->firstName}}" disabled="">

                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Category') }}</label>

                        <select  id="category_id" name="category_id" class="form-control dynamic" data-dependent="product_id">
                        <option value="0" disable="true" selected="true">Select Product</option>

                        @if ($categories->count())

                        @foreach($categories as $category)
                         <option value="{{ $category->id }}" >{{$category->name_en}}</option>    
                          @endforeach
                         @endif
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="name" class=" col-form-label text-md-right">{{ __(' Product') }}</label>

                    <select  id="product" name="product_id" class="form-control dynamic">
                    <option value="">Select Product</option>
                    <!-- @if ($products->count())

                    @foreach($products as $product)
                     <option value="{{ $product->id }}" >{{$product->name_en}}</option>    
                      @endforeach
                     @endif -->
                     
                    </select>
                    {{csrf_field()}}
                  </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('amount') }}</label>

                            <input id="code" min="1" type="number" class="form-control" name="code"  required autofocus>

                        </div>
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __(' Price ') }}</label>

                        <div class="">
                            <input id="price " step="0.01" min="0" type="number" class="form-control" name="price" >
                           
                        </div>
                        </div>
                        </div>
                     
                        <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Coupon') }}</label>

                        <div class="">
                            <input id="cost "  min="0" type="number" class="form-control" name="coupon" >
                           
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __(' Shipping Cost ') }}</label>

                        <div class="">
                            <input id="shipping" step="0.01" min="0" type="number" class="form-control" name="shipping" >
                           
                        </div>
                        </div>
                     </div>
  
                    <div class="row">
                    <div class="form-group col-md-6">   
                        <label for="shipping_status" class=" col-form-label text-md-right">{{ __('shipping Status') }}</label>
                        <select class="form-control"name="shipping_status">
                         <option value="0" >No</option> 
                         <option value="1" >Yes</option>     
                         <option value="2" >pandding</option>     
                         <option value="3" >Ended</option>     
                        </select>

                        </div>
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Payment Method') }}</label>

                        <div class="">
                            <input id="paymentMethod "  type="text" class="form-control" name="paymentMethod" >
                           
                        </div>
                    </div>
                    
                     </div>
                     <div class="row">
                     <div class="form-group col-md-6">   
                    <label for="status" class=" col-form-label text-md-right">{{ __('Checkout Id') }}</label>

                    <input id="Checkout Id "  type="text" class="form-control" name="Checkout Id" >
 
                        </div>
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('shippingMethod') }}</label>

                        <div class="">
                      <input id="shippingMethod"  type="text" class="form-control" name="shippingMethod" >

                        </div>
                    </div>
                     </div>
               <!-- //
        //   `invoiceID`, `user_id`, `product_id`, `amount`, 
// `price`, `shipping`, `paymentMethod`, `checkoutId`,
//  `shippingMethod`, `coupon`, `archive`, shipping_status-->
             <div class="row">
                <div class="form-group col-md-6">   
                     <label for="shipping_status" class=" col-form-label text-md-right">{{ __('Archive') }}</label>
                     <select class="form-control"name="archive">
                      <option value="0" >No</option> 
                      <option value="1" >Yes</option>     
                     </select>
                </div>
             </div>
 
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">

 $('#category_id').on('change',function(e){
   
   console.log(e);
   var category_id = e.target.value;
   $.get('/fetch?category_id='+category_id,function(data){
   console.log(data);
   $('#product_id').empty();
    $('#product_id').append('<option value="0" disable="true" selected="true">=== Select product ===</option>');

       
   });

   });
</script>
 <script>
 tinymce.init({
    selector: 'textarea',
  });
 </script>