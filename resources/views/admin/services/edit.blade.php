@extends('layouts.master')

@section('content')
<div class="row" style="padding-bottom: 10px;">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
             
            </div>
            <div class="pull-right">
                <a class="btn btn-primary " href="{{ route('services.index') }}"> <span class="fa fa-arrow-left"></span>Back</a>
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

<h3 class="box-title">Edit service</h3>
 </div>
<form class="form-horizontal" action="{{ route('services.update',$service->id) }}" method="post"  enctype="multipart/form-data">
       {{csrf_field()}}
       @method('PUT')
      
 <div class="col-lg-12 col-md-12">

<!-- 'title_en', 'title_ar', 'intro_ar', 'intro_en', 'details_en', 'details_ar', 'slug', 'image', -->
                         <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('English Title') }}</label>

                            <input id="title_en" type="text" class="form-control" name="title_en"  value="{{$service->title_en}}"   autofocus>

                        </div>
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Title') }}</label>

                            <input id="title_ar" type="text" class="form-control" name="title_ar" value="{{$service->title_ar}}"  autofocus>

                        </div>
                        </div>
                           <div class="row">
                         <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('English Intro') }}</label>

                            <input id="info_en" type="text" class="form-control" name="intro_en" value="{{$service->intro_en}}"  autofocus>

                        </div>
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Intro') }}</label>

                            <input id="info_ar" type="text" class="form-control" name="intro_ar"  value="{{$service->intro_ar}}"  autofocus>

                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __(' English Description') }}</label>

                        <textarea id="description_en "  class="form-control" name="details_en">{{$service->details_en}}</textarea>
                  
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Description') }}</label>
                        <textarea id="description_ar "  class="form-control" name="details_ar"  >{{$service->details_ar}}</textarea>
                  
                        </div>
                        </div>


                    <div class="row">
                 
                     <div class="form-group col-md-6">
                           
                   
                            <label for="image" class="col-form-label text-md-right">Upload image </label>
                            <input id="image" type="file" accept="image/png, image/jpeg, image/gif" name="image"  autofocus/>
                    </div>
                       <div class="form-group col-md-6">
                            <label for="image" class="col-form-label text-md-right">Current image </label>
                           
                            <img width="70px"  height="70px" class="img-circle" src="{!!asset('upload/service/'.$service->image)!!}">
                           <div>
                          
                    </div>

 </div>
   <div class="box-footer">
        <button type="submit" class="btn btn-primary">Update</button>
   </div>
</form>
</div>
 <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>
        tinymce.init({
           selector: 'textarea',
         });
</script> 
@endsection