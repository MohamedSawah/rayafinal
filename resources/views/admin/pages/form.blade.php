<div class="col-lg-12 col-md-12">

<!-- 'title_en', 'title_ar', 'name_ar', 'name_en', 'details_en', 'details_ar', 'slug', 'image', -->
                         <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('English Title') }}</label>

                            <input id="title_en" type="text" class="form-control" name="title_en"   autofocus>

                        </div>
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Title') }}</label>

                            <input id="title_ar" type="text" class="form-control" name="title_ar"   autofocus>

                        </div>
                        </div>
                           <div class="row">
                         <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('English Name') }}</label>

                            <input id="name_en" type="text" class="form-control" name="name_en"   autofocus>

                        </div>
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Name') }}</label>

                            <input id="name_ar" type="text" class="form-control" name="name_ar"   autofocus>

                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __(' English Description') }}</label>

                        <textarea id="description_en "  class="form-control" name="details_en"></textarea>
                  
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Description') }}</label>
                        <textarea id="description_ar "  class="form-control" name="details_ar"  ></textarea>
                  
                        </div>
                        </div>


                    <div class="row">
                    
                            <label for="image" class="col-form-label text-md-right">Upload image </label>

                            <input id="image" type="file" accept="image/png, image/jpeg, image/gif" name="image"  autofocus/>

                          
                    </div>

 </div>

 <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
 <script>
 tinymce.init({
    selector: 'textarea',
  });
 </script>                        