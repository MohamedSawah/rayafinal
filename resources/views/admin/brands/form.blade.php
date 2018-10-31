<div class="col-lg-12 col-md-12">

<!-- //`name_en`, `name_ar`, `category_id`, `img`, `order`, `status`, -->
                          <div class="form-group">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name English ') }}</label>

                          <div class="">
                              <input id="name_en " type="text" class="form-control" name="name_en" required autofocus>
                             
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name Arabic') }}</label>

                              <input id="name_ar" type="text" class="form-control" name="name_ar" value=" " required autofocus>

                          </div>

                          <div class="form-group ">
                            <label for="name" class=" col-form-label text-md-right">{{ __('order') }}</label>

                              <input id="order" type="number" min="1" class="form-control" name="order"  required autofocus>

                          </div>
                         <div class="row">
                           <div class="form-group col-md-6">
                            <label for="name" class=" col-form-label text-md-right" >{{ __('category') }}</label>
                             <select name="category_id" class="form-control" required>
                               @if ($categories->count())

                               @foreach($categories as $category)
                                <option value="{{ $category->id }}" >{{ $category->name_en}}</option>    
                                 @endforeach
                                @endif
                               </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="status" class=" col-form-label text-md-right">{{ __('status') }}</label>
                            <select name="status" class="form-control" required>
                              <option value="1" >Active</option>    
                              <option value="0" >Inactive</option>    
                            </select>
                          </div>
                          </div>
                          <div class="form-group ">
                            </br>
                            <label for="img" class="col-form-label text-md-right">Upload image </label>
                            <input id="img" type="file" accept="image/png, image/jpeg, image/gif" name="img" required />
                           
                          </div>
 </div>