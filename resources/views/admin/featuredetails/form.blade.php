<div class="col-lg-12 col-md-12">
        <div class="row">

    <div class="form-group col-md-6">
        <label for="name" class=" col-form-label text-md-right">{{ __('Feature') }}</label>

           <select class="form-control" name="feature_id">
           <option value=" " >  </option>    
        @php 
      $features  = App\Feature::all();
       @endphp
          @if ($features->count())

            @foreach($features as $features)
             <option value="{{ $features->id }}" >{{ $features->name_en}}</option>    
            @endforeach
           @endif
          </select>
      </div> 
        </div>
      <div class="row">
      <div class="form-group col-md-6">

                          <label for="name" class=" col-form-label text-md-right">{{ __('Name En ') }}</label>

                          <div class="">
                              <input id="name_en" type="text" class="form-control" name="name_en" required>
                          </div>
                      </div>

                      <div class="form-group col-md-6">

                        <label for="name" class=" col-form-label text-md-right">{{ __('Name Ar') }}</label>

                        <div class="">
                            <input id="name_ar"  type="text" class="form-control" name="name_ar" required>
                        </div>
                    </div>
      </div>
            
                   
      
      <div class="row">
            <div class="form-group col-md-6">
      
                                <label for="name" class=" col-form-label text-md-right">{{ __('Details En ') }}</label>
      
                                <div class="">
                                    <textarea id="details_en" type="text" class="form-control" name="details_en" required></textarea>
                                </div>
                            </div>
      
                            <div class="form-group col-md-6">
      
                              <label for="details_ar" class=" col-form-label text-md-right">{{ __('Details Ar') }}</label>
      
                              <div class="">
                                  <textarea id="details_ar"  type="text" class="form-control" name="details_ar" required></textarea>
                              </div>
                          </div>
            </div>
                          
 </div> 
 
