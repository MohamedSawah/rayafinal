@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Currencies</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left " href="{{ route('brands.index') }}"> Back</a>
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
    <form class="form-horizontal" action="{{ route('brands.update',$brand->id) }}" method="post"  enctype="multipart/form-data">
       {{csrf_field()}}
       @method('PUT')
       <div class="col-lg-12 col-md-12">

<!-- //`name_en`, `name_ar`, `category_id`, `img`, `order`, `status`, -->
                          <div class="form-group">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name English ') }}</label>

                          <div class="">
                              <input id="name_en " type="text" class="form-control" name="name_en" value="{{$brand->name_en}}" required autofocus>
                             
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name Arabic') }}</label>

                              <input id="name_ar" type="text" class="form-control" name="name_ar" value="{{$brand->name_ar}}" required autofocus>

                          </div>

                          <div class="form-group ">
                            <label for="name" class=" col-form-label text-md-right">{{ __('order') }}</label>

                              <input id="order"  min="1" type="text" class="form-control" name="order" value="{{$brand->order}}" required autofocus>
                             
                          </div>
                         
                          <div class="row">
                          <div class="form-group col-md-6">
                          <label for="name" class=" col-form-label text-md-right" required></label>
                          <select name="category_id" class="form-control">
                              @if ($categories->count())

                              @foreach($categories as $category)
                               <option value="{{ $category->id }}" {{ $category->id ==  $brand->category_id ? ' selected="selected"' : '' }}>{{ $category->name_en}}</option>    
                                @endforeach
                               @endif
                              </select>
                         </div>
                         <div class="form-group col-md-6">
                           <label for="status" class=" col-form-label text-md-right">{{ __('status') }}</label>
                           <select name="status" class="form-control">
                           <option value="1" {{ $brand->status == 1? ' selected="selected"' : ''}} >Active</option>    
                           <option value="0" {{ $brand->status == 0? ' selected="selected"' : ''}}>Inactive</option>   
                           </select>
                         </div>
                         </div>
                          <div class="form-group ">
                          <img width="100px"  height="100px"class="img-circle" src="{{asset('upload/brand/'.$brand->img)}}">
                            </br>
                            <label for="img" class="col-form-label text-md-right">Upload image </label>
                            <input id="img" type="file" accept="image/png, image/jpeg, image/gif" name="img" value="$brand->img"/>
                          
                          </div>
 </div>
 <div class="box-footer">
 <button type="submit" class="btn btn-primary">update</button>
</div>
</form>
</div>


@endsection