@extends('layouts.master')

@section('content')
<div class="row" style="padding-bottom: 10px;">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
             
            </div>
            <div class="pull-right">
                <a class="btn btn-primary " href="{{ route('opinions.index') }}"> <span class="fa fa-arrow-left"></span>Back</a>
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

<h3 class="box-title">Edit opinion</h3>
 </div>
<form class="form-horizontal" action="{{ route('opinions.update',$opinion->id) }}" method="post"  enctype="multipart/form-data">
       {{csrf_field()}}
       @method('PUT')
      
 <div class="col-lg-12 col-md-12">

        <!-- // 'title_ar', 'title_en', 'name_ar', 'name_en', 'position_ar', 'position_en', 'image', -->

                       <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('English Opinion') }}</label>

                          <textarea id="title_en"  class="form-control" name="title_en">{{$opinion->title_en}}</textarea>

                         
                        </div>
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Opinion') }}</label>

                          <textarea id="title_ar"  class="form-control" name="title_ar">{{$opinion->title_ar}}</textarea>

                        </div>
                        </div>
                           <div class="row">
                         <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('English Name') }}</label>

                            <input id="info_en" type="text" class="form-control" name="name_en" value="{{$opinion->name_en}}"  autofocus>

                        </div>
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Name') }}</label>

                            <input id="info_ar" type="text" class="form-control" name="name_ar"  value="{{$opinion->name_ar}}"  autofocus>

                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __(' English Position') }}</label>

                            <input id="position_en" type="text" class="form-control" name="position_en"  value="{{$opinion->position_en}}"  autofocus>
        
                  
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Position') }}</label>
                            <input id="position_ar" type="text" class="form-control" name="position_ar"  value="{{$opinion->position_ar}}"  autofocus>
                      
                  
                        </div>
                        </div>


                    <div class="row">
                 
                     <div class="form-group col-md-6">
                           
                   
                            <label for="image" class="col-form-label text-md-right">Upload image </label>
                            <input id="image" type="file" accept="image/png, image/jpeg, image/gif" name="image"  autofocus/>
                    </div>
                       <div class="form-group col-md-6">
                            <label for="image" class="col-form-label text-md-right">Current image </label>
                           
                            <img width="70px"  height="70px" class="img-circle" src="{!!asset('upload/opinion/'.$opinion->image)!!}">
                           <div>
                          
                    </div>

 </div>
   <div class="box-footer">
        <button type="submit" class="btn btn-primary">Update</button>
   </div>
</form>
</div>

@endsection
 <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
 <script>
 tinymce.init({
    selector: 'textarea',
  });
 </script>