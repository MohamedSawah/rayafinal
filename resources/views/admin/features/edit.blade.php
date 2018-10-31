@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Currencies</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('features.index') }}"> Back</a>
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
    <form class="form-horizontal"  action="{{ route('features.update',$feature->id)}}" method="post">
       {{csrf_field()}}
       @method('PUT')
       <div class="col-lg-12 col-md-12">

        <!-- //`code`, `product_id`, `multiUse`, `status`, -->
                            <div class="form-group">
                                 <label for="name" class=" col-form-label text-md-right">{{ __('Name en ') }}</label>
       
                                 <div class="">
                                     <input id="name_en " type="text"  class="form-control" name="name_en" value="{{$feature->code}}" required>
                                    
                                 </div>
                             </div>
                             <div class="form-group">
                                <label for="name" class=" col-form-label text-md-right">{{ __('Name ar ') }}</label>
      
                                <div class="">
                                    <input id="name_ar " type="text"  class="form-control" name="name_ar" value="{{$feature->code}}" required>
                                   
                                </div>
                            </div>   

                                 
        </div>
        <div class="box-footer">
        <button type="submit" class="btn btn-primary">update</button>
 </div>
    </form>
    </div>
 

@endsection