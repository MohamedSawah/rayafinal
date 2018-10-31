<div class="col-lg-12 col-md-12">
  
  <!-- form of user -->

                          <!-- {{csrf_field()}} -->
                          <div class="form-group">
                          <label for="name" class=" col-form-label text-md-right">{{ __('English Name ') }}</label>

                          <div class="">
                              <input id="name_en " type="text" class="form-control" name="name_en" required autofocus>
                             
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="name" class=" col-form-label text-md-right">{{ __(' Arabic Name') }}</label>

                            <div class="">
                              <input id="name_ar" type="text" class="form-control" name="name_ar"  required autofocus>

                            </div>
                        </div>
                        <div class="form-group ">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Currency') }}</label>

                          <div class="">
                           
                            <select name="currency_id" class="form-control" required >
                            @if ($Currencies->count())

                              @foreach($Currencies as $Currency)
                               <option value="{{ $Currency->id }}" >{{ $Currency->name_en}}</option>    
                              @endforeach
                             @endif
                            </select>
                          </div>
                      </div>

 </div>