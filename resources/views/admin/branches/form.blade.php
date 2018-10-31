<div class="col-lg-12 col-md-12">
  
  <!-- form of user -->
<!-- //'name_en', 'name_ar','country_id','parent_id', -->
  
                           {{csrf_field()}} 

                           <div class="form-group ">
                            <label for="name" class=" col-form-label text-md-right">{{ __('Country') }}</label>
                        
                                <select  class="form-control" name="country_id" >
                                @if ($countries->count())
    
                                  @foreach($countries as $country)
                                   <option value="{{ $country->id }}" >{{ $country->name_en}}</option>    
                                  @endforeach
                                 @endif
                                </select>
                          </div>

                          <div class="form-group">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name English ') }}</label>

                          <div class="">
                              <input id="name_en" type="text" class="form-control" name="name_en" required autofocus>
                             
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name Arabic') }}</label>

                            <div class="">
                              <input id="name_ar" type="text" class="form-control" name="name_ar"  required autofocus>

                            </div>
                        </div>

                        <div class="form-group ">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Address En') }}</label>

                            <div class="">
                              <input id="address_en" type="text" class="form-control" name="address_en"  required autofocus>

                            </div>
                        </div>
 
                        <div class="form-group ">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Address Ar') }}</label>

                            <div class="">
                              <input id="address_ar" type="text" class="form-control" name="address_ar"  required autofocus>

                            </div>
                        </div>
                 
                        
                        <div class="form-group ">
                          <label for="phone" class=" col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="">
                              <input id="phone" type="text" class="form-control" name="phone"  required autofocus>

                            </div>
                        </div>

                        <div class="form-group ">
                          <label for="email" class=" col-form-label text-md-right">{{ __('email') }}</label>

                            <div class="">
                              <input id="email" type="text" class="form-control" name="email"  required autofocus>

                            </div>
                        </div>

                 
            
 </div>