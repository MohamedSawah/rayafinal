<div class="col-lg-12 col-md-12">

        <!-- // 'title_ar', 'title_en', 'name_ar', 'name_en', 'position_ar', 'position_en', 'image', -->

                         <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('English Opinion') }}</label>

                          <textarea id="title_en"  class="form-control" name="title_en"></textarea>

                         
                        </div>
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Opinion') }}</label>

                          <textarea id="title_ar"  class="form-control" name="title_ar"></textarea>

                        </div>
                        </div>
                           <div class="row">
                         <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('English Name') }}</label>

                            <input id="info_en" type="text" class="form-control" name="name_en"  autofocus>

                        </div>
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Name') }}</label>

                            <input id="info_ar" type="text" class="form-control" name="name_ar"   autofocus>

                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __(' English Position') }}</label>

                            <input id="position_en" type="text" class="form-control" name="position_en"  autofocus>
        
                  
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Position') }}</label>
                            <input id="position_ar" type="text" class="form-control" name="position_ar"   autofocus>
                      
                  
                        </div>
                        </div>


                    <div class="row">
                 
                     <div class="form-group col-md-6">
                           
                   
                            <label for="image" class="col-form-label text-md-right">Upload image </label>
                            <input id="image" type="file" accept="image/png, image/jpeg, image/gif" name="image"  autofocus/>
                      </div>
                      
                    </div>

 </div>
  <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
 <script>
 tinymce.init({
    selector: 'textarea',
  });
 </script>