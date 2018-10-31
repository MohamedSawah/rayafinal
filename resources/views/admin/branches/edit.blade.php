@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Bracnh</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('branches.index') }}"> Back</a>
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

    <div class="box box-info" style="padding-top: 10px;">
    <div class="box-header with-border">

     </div>
    <form class="form-horizontal" action="{{ route('branches.update',$branch->id) }}" method="post">
        {{csrf_field()}}
        @method('PUT')
  <div class="col-lg-12 col-md-12">
  
  <!-- form of user -->  
                      
                          <div class="form-group">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name English ') }}</label>

                          <div class="">
                              <input id="name_en " type="text" class="form-control" name="name_en" value="{{$branch->name_en}}" required autofocus>
                             
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name Arabic') }}</label>

                            <div class="">
                              <input id="name_ar" type="text" class="form-control" name="name_ar" value=" {{$branch->name_ar}} " required autofocus>

                            </div>
                        </div>
                     
                        <div class="form-group">
                            <label for="name" class=" col-form-label text-md-right">{{ __('Address English ') }}</label>
  
                            <div class="">
                                <input id="address_en " type="text" class="form-control" name="address_en" value="{{$branch->address_en}}" required autofocus>
                               
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address_ar" class=" col-form-label text-md-right">{{ __('Address Ar') }}</label>
  
                              <div class="">
                                <input id="address_ar" type="text" class="form-control" name="address_ar" value=" {{$branch->address_ar}} " required autofocus>
                              </div>
                          </div>


                          <div class="form-group ">
                            <label for="phone" class=" col-form-label text-md-right">{{ __('phone') }}</label>
  
                              <div class="">
                                <input id="phone" type="text" class="form-control" name="phone" value=" {{$branch->phone}} " required autofocus >
                              </div>
                          </div>

                          <div class="form-group ">
                            <label for="email" class=" col-form-label text-md-right">{{ __('email') }}</label>
  
                              <div class="">
                                <input id="address_ar" type="email" class="form-control" name="email" value=" {{$branch->email}} "  required autofocus >
                              </div>
                          </div>


                        <div class="form-group ">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Country') }}</label>

                          <div class="">
                           
                          <select name="country_id" class="form-control" >
                            @if ($countries->count())

                              @foreach($countries as $country)
                               <option value="{{ $country->id }}" >{{ $country->name_en}}</option>    
                              @endforeach
                             @endif
                            </select>
                          </div>
                      </div>
                  

 </div>
 <div class="box-footer">
 <button type="submit" class="btn btn-primary">update</button>
</div>
</form>
</div>


@endsection