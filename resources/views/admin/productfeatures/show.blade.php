@extends('layouts.master')

@section('content')
<div class="row" style="padding-bottom: 10px;">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
             
            </div>
            <div class="pull-right">
                <a class="btn btn-primary " href="{{ route('suppliers.index') }}"> <span class="fa fa-arrow-left"></span>Back</a>
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

<h3 class="box-title">Edit Supplier</h3>
 </div>
<form class="form-horizontal" action="{{ route('suppliers.update',$supplier->id) }}" method="post"  enctype="multipart/form-data">
       {{csrf_field()}}
       @method('PUT')
       <div class="col-lg-12 col-md-12">

<!-- //`name_en`, `name_ar`, `category_id`, `img`, `order`, `status`, -->
                         <div class="col-lg-12 col-md-12">

<!-- //`name_en`, `name_ar`, `category_id`, `img`, `order`, `status`, -->
                          <div class="form-group">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Code') }}</label>

                          <div class="">
                            <input id="code " min="0"type="number" class="form-control" name="code" value="{{$supplier->code}}" required autofocus>
                             
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name ') }}</label>

                              <input id="name" type="text" class="form-control" name="name" value="{{$supplier->name}}" required autofocus>

                          </div>
<!--  `code`, `name`, `phone`, `adress`, `note` -->
                          <div class="form-group ">
                            <label for="adress" class=" col-form-label text-md-right">{{ __('Address') }}</label>

                              <input id="adress" type="text" class="form-control" name="adress" value="{{$supplier->adress}} " >

                          </div>
                           <div class="form-group ">
                            <label for="phone" class=" col-form-label text-md-right" required>{{ __('phone') }}</label>
                              <input id="phone" type="tel" class="form-control" name="phone" value="{{$supplier->phone}} " required autofocus>
                   
                          </div>
                          <div class="form-group ">
                            <label for="status" class=" col-form-label text-md-right">{{ __('Note') }}</label>
                            <textarea class="textarea" name="note" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border:
 1px solid rgb(221, 221, 221); padding: 10px;"  value="{{$supplier->note}}">{{$supplier->note}}</textarea>

                          </div>

                       
 </div>
                        
 </div>
 <div class="box-footer">
        <button type="submit" class="btn btn-primary">Update</button>
</div>
    </form>
    </div>

@endsection