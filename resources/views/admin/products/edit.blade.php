@extends('layouts.master')

@section('content')
<div class="row" style="padding-bottom: 10px;">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
               
            </div>
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('products.index') }}"> Back</a>
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
    
    <h3 class="box-title">Edit product</h3>
     </div>
    <form class="form-horizontal" action="{{ route('products.update',$product->id) }}" method="post" enctype="multipart/form-data">
       {{csrf_field()}}
       @method('PUT')
       <div class="col-lg-12 col-md-12">

       <div class="row">

                               <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __('English name') }}</label>
       
                                   <input id="name_en" type="text" class="form-control" name="name_en" value="{{$product->name_en}}"  autofocus>
       
                               </div>
                               <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Name') }}</label>
       
                                   <input id="name_ar" type="text" class="form-control" name="name_ar" value="{{$product->name_ar}}"  autofocus>
       
                               </div>
                                    </div>
                             <div class="row">
                               <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __(' English Intro') }}</label>
       
                                   <input id="name_ar" type="text" class="form-control" name="info_en" value="{{$product->info_en}}"  autofocus>
                              
                         
                           </div>
                           <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Intro') }}</label>
                                   <input id="name_ar" type="text" class="form-control" name="info_ar" value="{{$product->info_ar}}"  autofocus>                             
                         
                               </div>
                               </div>
                               <div class="row">
                               <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __(' English Description') }}</label>
       
                               <textarea id="description_en "  class="form-control" name="description_en" value="{{$product->description_en}}">{{$product->description_en}}</textarea>
                         
                           </div>
                           <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Description') }}</label>
                               <textarea id="description_ar "  class="form-control" name="description_ar" value=" {{$product->description_ar}}">{{$product->description_ar}}</textarea>
                         
                               </div>
                               </div>
                               <div class="row">
                               <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __('Code') }}</label>
       
                                   <input id="code" type="number" class="form-control" name="code" value="{{$product->code}}"  autofocus>
       
                               </div>
                               <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __('Other Data') }}</label>
       
                                   <input id="otherData" type="text" class="form-control" name="otherData" value="{{$product->otherData}}" >
       
                               </div>
                               </div>
                               <div class="row">
                               <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __(' Price') }}</label>
       
                               <div class="">
                                   <input id="price" step="0.01" min="0" type="number" class="form-control" name="price" value="{{$product->price}}">
                                  
                               </div>
                           </div>
                           <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __('Price After Discount') }}</label>
       
                                   <input id="price_after" step="0.01" min="0" type="number" class="form-control" name="price_after" value="{{$product->price_after}}" >
       
                               </div>
                              </div>
                               <div class="row">
                                <div class="form-group col-md-6">  
                                  <label for="name" class=" col-form-label text-md-right" >{{ __('category') }}</label>
                                    <select name="category_id" class="form-control">
                                      @if ($categories->count())
       
                                      @foreach($categories as $category)
                                       <option value="{{ $category->id }}" {{ $category->id ==  $product->category_id ? ' selected="selected"' : '' }}>{{ $category->name_en}}</option>    
                                        @endforeach
                                       @endif
                                      </select>
                                       </div>
                                                          <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __('Quantity') }}</label>
       
                               <div class="">
                                   <input id="quantity " min="1" type="number" class="form-control" name="quantity" value="{{$product->quantity}}">
                                  
                               </div>
                           </div>
                            </div>
         
                           <div class="row">
                               <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __('order') }}</label>
       
                               <div class="">
                                   <input id="order "  min="1" type="text" class="form-control" name="order" value="{{$product->order}} ">
                                  
                               </div>
                           </div>
                           <div class="form-group col-md-6">   
                           <label for="status" class=" col-form-label text-md-right">{{ __('status') }}</label>
                           <select name="status"  class="form-control ">
                           <option value="1" {{ $product->status == 1? ' selected="selected"' : ''}} >Active</option>    
                           <option value="0" {{ $product->status == 0? ' selected="selected"' : ''}}>Inactive</option>   
                           
                            </select>  
                               </div>
                            </div>

                   
                     <div class="row">
                          @foreach ($features as $feature)
                           <div class="col-md-3 col-sm-6">
                           <input type="checkbox" name="features[]" value="{{$feature->id}}" @if($product->features->contains($feature->id)) checked=checked @endif >
                           <label> {{$feature->name_en}}</label><hr></br>
                           </div>
                          @endforeach

                     </div>
                            
                              <div class="row">
                                 <div class="form-group col-md-6">
                                 <img width="100px"  height="70px" class="img-circle" src="{{asset('upload/product/'.$product->img_main)}}">
                                 </br>
                                   <label for="img_main" class="col-form-label text-md-right">Upload Main image </label>
                                   <input id="img_main" type="file" accept="image/png, image/jpeg, image/gif" name="img_main" value="{{$product->img_main}}"/>
                                 </div>
                                 <div class="form-group col-md-6">
                                   <label for="img" class="col-form-label text-md-right">Upload Other image </label>
                                   <input id="image_id" type="file" accept="image/png, image/jpeg, image/gif" name="image[]" multiple/>
                                 </div>
                               </div>
        </div>
        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
        <div class="row x">
@if ($images->count())
           @foreach($images as $image)
           <div class="show-image">
           <div class="">
              <form class="deletead" action="{!! route('image.destroy',$image->id) !!}" method="POST">
                 @csrf
                 @method('DELETE')
                 <img width="100px"  height="70px" class="img-circle" src="{{asset('upload/product/other/'.$image->img_name)}}">
                 <button type="submit " class="btn delete" aria-label="Close"  style="font-size:14px;color:#000; border:0 none;cursor: move;-webkit-border-radius: 5px;">
                 <i class="fa fa-close"></i>
                  </button>
                </form>
                </div>
    </div>
      @endforeach
@endif
</div>
        </div>
 <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>
        tinymce.init({
           selector: 'textarea',
         });
</script> 

@endsection