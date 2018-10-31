<div class="col-lg-12 col-md-12">

<!-- //`name_en`, `name_ar`, `category_id`, `img`, `order`, `status`, -->
                          <div class="form-group">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Code') }}</label>

                          <div class="">
                              <input id="code " min="0"type="number" class="form-control" name="code" value="" required autofocus>
                             
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name ') }}</label>

                              <input id="name" type="text" class="form-control" name="name"  required autofocus>

                          </div>
<!--  `code`, `name`, `phone`, `adress`, `note` -->
                          <div class="form-group ">
                            <label for="adress" class=" col-form-label text-md-right">{{ __('Address') }}</label>

                              <input id="address" type="text" class="form-control" name="adress"  >

                          </div>
                           <div class="form-group ">
                            <label for="phone" class=" col-form-label text-md-right" required>{{ __('phone') }}</label>
                              <input id="phone" type="tel" class="form-control" name="phone"  required autofocus>
                   
                          </div>
                          <div class="form-group ">
                            <label for="status" class=" col-form-label text-md-right">{{ __('Note') }}</label>
                            <!-- <textarea name="note" rows="10" cols="30"> </textarea> -->
     <textarea class="textarea" name="note" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border:
 1px solid rgb(221, 221, 221); padding: 10px;" placeholder="Place some text here"></textarea> </div>

                       
 </div>