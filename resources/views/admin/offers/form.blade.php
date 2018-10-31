<div class="col-lg-12 col-md-12">
<!-- 'title_en', 'title_ar',
    'img', 'link','status', -->


                          <!-- {{csrf_field()}} -->
                          <div class="form-group">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Title English ') }}</label>

                          <div class="">
                              <input id="title_en " type="text" class="form-control" name="title_en"  required>
                             
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Title Arabic') }}</label>

                              <input id="title_ar" type="text" class="form-control" name="title_ar"  required autofocus>

                          </div>

                          <div class="form-group ">
                            <label for="name" class=" col-form-label text-md-right">{{ __('Link') }}</label>

                              <input id="link" type="text" class="form-control" name="link"  required>

                          </div>
                          <div class="form-group ">
                            <label for="status" class=" col-form-label text-md-right" >{{ __('status') }}</label>
                            <select name="status" class="form-control" required>
                              <option value="1" >Active</option>    
                              <option value="0" >Inactive</option>    
                            </select>
                          </div>
                          <div class="form-group ">
                            <label for="img" class="col-form-label text-md-right">Upload image </label>
                            <input id="img" type="file" accept="image/png, image/jpeg, image/gif" name="img" required/>
                          </div>
 </div>