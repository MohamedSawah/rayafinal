@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Currencies</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('coupons.index') }}"> Back</a>
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
    <form class="form-horizontal"  action="{{ route('coupons.update',$coupon->id)}}" method="post">
       {{csrf_field()}}
       @method('PUT')
       <div class="col-lg-12 col-md-12">

       <!-- //`code`, `product_id`, `multiUse`, `status`, -->
       <div class="form-group">
                                 <label for="name" class=" col-form-label text-md-right">{{ __('Code ') }}</label>
       
                                 <div class="">
                                     <input id="code " type="number" min="0" class="form-control" name="code" value="{{$coupon->code}}" required>
                                    
                                 </div>
                             </div>
                                
                                  <div class="form-group">
                                   <label for="name" class=" col-form-label text-md-right" >{{ __('Product') }}</label>
                                    <select name="product_id" class="form-control" required>
                                    <option > No Product</option>
                                      @if ($products->count())
       
                                      @foreach($products as $product)
                                       <option value="{{ $product->id }}" >{{ $product->name_en}}</option>    
                                        @endforeach
                                       @endif
                                      </select>
                                 </div>
                                 <div class="row">
                                 <div class="form-group col-md-6">
                                   <label for="multiUse" class=" col-form-label text-md-right">{{ __('multiple Use') }}</label>
                                   <select name="multiUse" class="form-control">
                                     <option value="1" >Yes</option>    
                                     <option value="0" >No</option>    
                                   </select>
                                 </div>
                                 <div class="form-group col-md-6">
                                   <label for="status" class=" col-form-label text-md-right">{{ __('status') }}</label>
                                   <select name="status" class="form-control">
                                   <option value="1" {{ $coupon->status == 1? ' selected="selected"' : ''}} >Active</option>    
                                   <option value="0" {{ $coupon->status == 0? ' selected="selected"' : ''}}>Inactive</option>   
                                  
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