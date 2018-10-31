<div class="col-lg-12 col-md-12">

                       <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('English name') }}</label>

                            <input id="name_en" type="text" class="form-control" name="name_en"   autofocus>

                        </div>
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Name') }}</label>

                            <input id="name_ar" type="text" class="form-control" name="name_ar"   autofocus>

                        </div>
                        </div>
                        <div class="row">
                         <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('English Intro') }}</label>

                            <input id="info_en" type="text" class="form-control" name="info_en"   autofocus>

                        </div>
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Intro') }}</label>

                            <input id="info_ar" type="text" class="form-control" name="info_ar"   autofocus>

                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __(' English Description') }}</label>

                        <textarea id="description_en "  class="form-control" name="description_en"></textarea>
                  
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Description') }}</label>
                        <textarea id="description_ar "  class="form-control" name="description_ar"  ></textarea>
                  
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Code') }}</label>

                            <input id="code" min="0" type="number" class="form-control" name="code"   autofocus>

                        </div>
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Other Data') }}</label>

                            <input id="otherData" type="text" class="form-control" name="otherData"  >

                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">

                        <label for="name" class=" col-form-label text-md-right">{{ __(' Price') }}</label>

                        <div class="">
                            <input id="price " step="0.01" min="0" type="number" class="form-control" name="price" >

                           
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Price After Discount') }}</label>

                            <input id="price_after" step="0.01" min="0" type="number" class="form-control" name="price_after" >

                        </div>
                       </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Quantity') }}</label>

                        <div class="">

                            <input id="quantity "  min="1" type="number" class="form-control" name="quantity"  autofocus >
                           
                        </div>
                       </div>
                 <div class="form-group col-md-6">   
                     <label for="name" class=" col-form-label text-md-right" >{{ __('category') }}</label>
                             <select name="category_id" class="form-control">
                               @if ($categories->count())

                               @foreach($categories as $category)
                                <option value="{{ $category->id }}" >{{ $category->name_en}}</option>    
                                 @endforeach
                                @endif
                               </select>

                        </div>
                     </div>
  
                    <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('order') }}</label>

                        <div class="">
                            <input id="order "  min="1" type="number" class="form-control" name="order" >
                           
                        </div>
                    </div>
                    <div class="form-group col-md-6">   
                    <label for="status" class=" col-form-label text-md-right">{{ __('status') }}</label>
                    <select name="status"  class="form-control ">
                      <option value="1" >Active</option>    
                      <option value="0" >Inactive</option>    
                     </select>  
                        </div>
                     </div>

                     <div class="row">
                  @foreach ($features as $feature)
                                                         <div class="col-md-3 col-sm-6">
                                                         <input type="checkbox" name="features[]" value="{{$feature->id}}" class="cb" id="check1">
                                                         <label> {{$feature->name_en}}</label><hr></br>
                                                         </div>
                 @endforeach

                     </div>

                
            

        <!-- //, `img_main`, `image_id`, -->
                       <div class="row">
                          <div class="form-group col-md-6">
                            <label for="img_main" class="col-form-label text-md-right">Upload Main image </label>

                            <input id="img_main" type="file" accept="image/png, image/jpeg, image/gif" name="img_main"  autofocus/>

                          
                          </div>
                          <div class="form-group col-md-6">
                            <label for="img" class="col-form-label text-md-right">Upload Other image </label>
                            <input id="image" type="file" accept="image/png, image/jpeg, image/gif" name="image[]" multiple/>
                          </div>
                        </div>
 </div>

 <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
 <script>
 tinymce.init({
    selector: 'textarea',
  });
 </script>