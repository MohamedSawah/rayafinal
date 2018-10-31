@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit category</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('categories.index') }}"> Back</a>
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
    <form class="form-horizontal" action="{{ route('categories.update',$category->id) }}" method="post">
       {{csrf_field()}}
       @method('PUT')
  <div class="col-lg-12 col-md-12">
  
  <!-- form of user -->
<!-- //'name_en', 'name_ar','country_id','parent_id', -->
  
                          <!-- {{csrf_field()}} -->
                          <div class="form-group">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name English ') }}</label>

                          <div class="">
                              <input id="name_en " type="text" class="form-control" name="name_en" value="{{$category->name_en}}" required autofocus>
                             
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name Arabic') }}</label>

                            <div class="">
                              <input id="name_ar" type="text" class="form-control" name="name_ar" value=" {{$category->name_ar}} " required autofocus>

                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                         <label for="name" class=" col-form-label text-md-right">{{ __('Parent Category') }}</label>

                            <select class="form-control" name="parent_id">
                            <option value="" >  </option>    

                           @if ($categories->count())

                             @foreach($categories as $category)
                              <option value="{{$category->id }}" {{ $category->id == $category->category_id ? ' selected="selected"' : '' }} >{{ $category->name_en}}</option>    
                             @endforeach
                            @endif
                           </select>
                       </div>
                       <div class="form-group col-md-6">
                           <label for="status" class=" col-form-label text-md-right">{{ __('status') }}</label>
                           <select name="status" class="form-control">
                           <option value="1" {{ $category->status == 1? ' selected="selected"' : ''}} >Active</option>    
                           <option value="0" {{ $category->status == 0? ' selected="selected"' : ''}}>Inactive</option>   
                             
                           </select>
                         </div>
                         </div>
                       
                      <div class="form-group ">
                            <label for="name" class=" col-form-label text-md-right">{{ __('order') }}</label>

                              <input id="order" type="number"  min="1" class="form-control" name="order" value="{{$category->order}}" required autofocus>

                        </div>

 </div>
 <div class="box-footer">
 <button type="submit" class="btn btn-primary">update</button>
</div>
</form>
</div>


@endsection