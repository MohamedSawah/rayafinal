
@extends('layouts.master')

@section('content')
    <div class="row" style="padding-bottom: 10px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
           
            </div>
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('featuredetails.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="box box-info">
<div class="box-header with-border">

<h3 class="box-title">New Feature</h3>
 </div>
 <form class="form-horizontal" action="{{  route('featuredetails.update' , $feature->id ) }}" method="post" >
        {{csrf_field()}}
        @method('PUT')
 <div class="col-lg-12 col-md-12">
        <div class="row">

    <div class="form-group col-md-6">
        <label for="name" class=" col-form-label text-md-right">{{ __('Feature') }}</label>

           <select class="form-control" name="feature_id">
           <option value=" " >  </option>    
        @php 
      $features  = App\Feature::all();
      $feature2=  App\Feature::find($feature->feature_id);
       @endphp
          @if ($features->count())
            @foreach($features as $feature1)
            
             <option value="{{ $feature1->id }}" <?php if( $feature1->id == $feature2->id ) echo 'selected' ; ?>>{{ $feature1->name_en}}</option>    
            @endforeach
           @endif
          </select>
      </div> 
        </div>
      <div class="row">
      <div class="form-group col-md-6">

                          <label for="name" class=" col-form-label text-md-right">{{ __('Name En ') }}</label>
                          <div class="">
                              <input id="name_en" type="text" class="form-control" name="name_en" required value="{{ $feature->name_en }}">
                          </div>
                      </div>
                      <div class="form-group col-md-6">

                        <label for="name" class=" col-form-label text-md-right">{{ __('Name Ar') }}</label>

                        <div class="">
                            <input id="name_ar"  type="text" class="form-control" name="name_ar" required value="{{ $feature->name_ar }}">
                        </div>
                    </div>
      </div>
            
                   
      
      <div class="row">
            <div class="form-group col-md-6">
      
                                <label for="name" class=" col-form-label text-md-right">{{ __('Details En ') }}</label>
    
                                <div class="">
                                    <textarea id="details_en" type="text" class="form-control" name="details_en" required >{{  $feature->details_en }}</textarea>
                                </div>
                            </div>
      
                            <div class="form-group col-md-6">
      
                              <label for="details_ar" class=" col-form-label text-md-right">{{ __('Details Ar') }}</label>
      
                              <div class="">
                                  <textarea id="details_ar"  type="text" class="form-control" name="details_ar" required >{{ $feature->details_ar }}</textarea>
                              </div>
                          </div>
            </div>
                          
 </div> 

 <div class="box-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        </div>
</form>
</div>

@endsection
