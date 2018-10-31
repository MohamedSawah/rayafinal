@extends('layouts.master')

@section('content')
<div class="row" style="padding-bottom: 10px;">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
             
            </div>
            <div class="pull-right">
                <a class="btn btn-primary " href="{{ route('settings.index') }}"> <span class="fa fa-arrow-left"></span>Back</a>
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

<h3 class="box-title">Edit setting</h3>
 </div>
<form class="form-horizontal" action="{{ route('settings.update',$setting->id) }}" method="post"  enctype="multipart/form-data">
       {{csrf_field()}}
       @method('PUT')
      
 <div class="col-lg-12 col-md-12">

<!--           // // 'phone', 'mobile2', 'mobile', 'email', 'supportEmail', 
        // 'facebook', 'instagram', 'twitter', 'youtube', 'linkedin', 'worktime' -->
                         <div class="row">
                        <div class="form-group col-md-6">
                        <label for="phone" class=" col-form-label text-md-right">{{ __('Phone 1') }}</label>

                            <input id="phone" type="text" class="form-control" name="phone"  value="{{$setting->phone}}"   autofocus>

                        </div>
                        <div class="form-group col-md-6">
                        <label for="mobile2" class=" col-form-label text-md-right">{{ __('Phone 2 ') }}</label>

                            <input id="mobile2" type="text" class="form-control" name="mobile2" value="{{$setting->mobile2}}"  autofocus>

                        </div>
                        </div>
                           <div class="row">
                         <div class="form-group col-md-6">
                        <label for="mobile" class=" col-form-label text-md-right">{{ __('Phone 3') }}</label>

                            <input id="mobile" type="text" class="form-control" name="mobile" value="{{$setting->mobile}}"  autofocus>

                        </div>
                        <div class="form-group col-md-6">
                        <label for="email" class=" col-form-label text-md-right">{{ __('Email') }}</label>

                            <input id="email" type="text" class="form-control" name="email"  value="{{$setting->email}}"  autofocus>

                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                        <label for="supportEmail" class=" col-form-label text-md-right">{{ __('Support Email') }}</label>

                            <input id="supportEmail" type="text" class="form-control" name="supportEmail"  value="{{$setting->supportEmail}}"  autofocus>
                  
                         </div>
                         <div class="form-group col-md-6">
                         <label for="facebook" class=" col-form-label text-md-right">{{ __('Facebook') }}</label>
                         <input id="facebook" type="text" class="form-control" name="facebook"  value="{{$setting->facebook}}"  autofocus>

                        </div>

                        <div class="form-group col-md-6">
                                <label for="address_ar" class=" col-form-label text-md-right">{{ __('address_ar') }}</label>
                                <input id="address_ar" type="text" class="form-control" name="address_ar"  value="{{$setting->address_ar}}"  autofocus>
       
                               </div>

                               <div class="form-group col-md-6">
                                    <label for="address_en" class=" col-form-label text-md-right">{{ __('address_en') }}</label>
                                    <input id="address_en" type="text" class="form-control" name="address_en"  value="{{$setting->address_en}}"  autofocus>
           
                                   </div>

                        </div>


                    <div class="row">
                       <div class="form-group col-md-6">
                           <label for="twitter" class="col-form-label text-md-right">Twitter </label>
                           <input id="twitter" type="text" class="form-control" name="twitter"  value="{{$setting->twitter}}"  autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="instagram" class="col-form-label text-md-right">Instagram </label> 
                            <input id="instagram" type="text" class="form-control" name="instagram"  value="{{$setting->instagram}}"  autofocus>
                        <div>   
                    </div>

                    <div class="row">
                       <div class="form-group col-md-6">
                           <label for="linkedin" class=" col-form-label text-md-right">{{ __('Linkedin') }}</label>
                           <input id="linkedin" type="text" class="form-control" name="linkedin"  value="{{$setting->linkedin}}"  autofocus>
                       </div>
                       <div class="form-group col-md-6">
                          <label for="youtube" class=" col-form-label text-md-right">{{ __('Youtube') }}</label>
                          <input id="youtube" type="text" class="form-control" name="youtube"  value="{{$setting->youtube}}"  autofocus>
                        <div>       
                    </div>
                    


 </div>
   <div class="box-footer">
        <button type="submit" class="btn btn-primary">Update</button>
   </div>
</form>
</div>

@endsection