@extends('layouts.master')

@section('content')
<div class="row" style="padding-bottom: 10px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
               
            </div>
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('offers.index') }}"> Back</a>
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
    
    <h3 class="box-title">Edit Offer</h3>
     </div>
    <form class="form-horizontal" action="{{ route('offers.update',$offer->id) }}" method="post" enctype="multipart/form-data">
       {{csrf_field()}}
       @method('PUT')
       <div class="col-lg-12 col-md-12">
<!-- 'title_en', 'title_ar',
    'img', 'link','status', -->
  <!-- form of user -->

                          <!-- {{csrf_field()}} -->
                          <div class="form-group">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Title English ') }}</label>

                          <div class="">
                              <input id="title_en " type="text" class="form-control" name="title_en" value="{{$offer->title_en}}" required autofocus>
                             
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Title Arabic') }}</label>

                              <input id="title_ar" type="text" class="form-control" name="title_ar" value="{{$offer->title_ar}}" required autofocus>

                          </div>

                          <div class="form-group ">
                            <label for="name" class=" col-form-label text-md-right">{{ __('Link') }}</label>

                              <input id="link" type="text" class="form-control" name="link" value="{{$offer->link}}" required autofocus>

                          </div>
                          <div class="form-group ">
                            <label for="status" class=" col-form-label text-md-right">{{ __('status') }}</label>
                            <select name="status" class="form-control ">
                            <option value="1" {{ $offer->status == 1? ' selected="selected"' : ''}} >Active</option>    
                            <option value="0" {{ $offer->status == 0? ' selected="selected"' : ''}}>Inactive</option>   
                              
                            </select>
                          </div>
                          <div class="form-group ">
                            <img width="100px" height="100px" class="img-circle" src="{{asset('upload/offer/'.$offer->img)}}">
                            </br>
                            <label for="img" class="col-form-label text-md-right">Upload image </label>
                            <input id="img" type="file" accept="image/png, image/jpeg, image/gif" name="img" value=""/>
                          </div>
 </div>
 <div class="box-footer">
 <button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
</div>


@endsection