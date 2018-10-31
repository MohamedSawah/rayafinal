<div class="col-lg-12 col-md-12">
  

                          <div class="form-group">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name English ') }}</label>

                          <div class="">
                              <input id="name_en " type="text" class="form-control" name="name_en" required autofocus>
                             
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name Arabic') }}</label>

                            <div class="">
                              <input id="name_ar" type="text" class="form-control" name="name_ar"  required autofocus>

                            </div>
                        </div>
                        <div class="row">
                         <div class="form-group col-md-6">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Parent Category') }}</label>

                             <select class="form-control" name="parent_id">
                             <option value="" >  </option>    
                            @if ($categories->count())

                              @foreach($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name_en}}</option>    
                              @endforeach
                             @endif
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
                          <div class="row">
                          <div class="form-group col-md-6">
                            <label for="name" class=" col-form-label text-md-right">{{ __('English Details') }}</label>
    
                            <textarea id="details_en "  class="form-control" name="details_en"  ></textarea>
    
                            </div>

                            <div class="form-group col-md-6">
                              <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Details') }}</label>
      
                              <textarea id="details_ar "  class="form-control" name="details_ar"  ></textarea>
      
                              </div>
                          </div>

                      
                      <div class="form-group ">
                            <label for="name" class=" col-form-label text-md-right">{{ __('order') }}</label>

                              <input id="order" type="number"  min="1" class="form-control" name="order" value=" " required autofocus>

                        </div>

 </div>

 <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
 <script>
 tinymce.init({
    selector: 'textarea',
  });
 </script>
