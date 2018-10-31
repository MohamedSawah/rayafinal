<div class="col-lg-12 col-md-12">

<!-- //`code`, `product_id`, `multiUse`, `status`, -->
<div class="form-group">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Code ') }}</label>

                          <div class="">
                              <input id="code" min="0" type="number" class="form-control" name="code" required>
                             
                          </div>
                      </div>
                         
                           <div class="form-group ">
                            <label for="name" class=" col-form-label text-md-right" >{{ __('Product') }}</label>
                             <select name="product_id" class="form-control">
                             <option > No Product</option>
                               @if ($products->count())

                               @foreach($products as $product)
                                <option value="{{ $product->id }}" >{{ $product->name_en}}</option>    
                                 @endforeach
                                @endif
                               </select>
                          </div>
                          <div class="row">
                          <div class="form-group col-md-6">
                            <label for="multiUse" class=" col-form-label text-md-right">{{ __('multiple Use') }}</label>
                            <select name="multiUse" class="form-control">
                              <option value="1" >Yes</option>    
                              <option value="0" >No</option>    
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="status" class=" col-form-label text-md-right">{{ __('status') }}</label>
                            <select name="status" class="form-control">
                              <option value="1" >Active</option>    
                              <option value="0" >Inactive</option>    
                            </select>
                          </div>
                          </div>
                          
 </div>