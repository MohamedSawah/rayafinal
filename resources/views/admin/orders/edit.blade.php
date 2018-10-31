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
       <!-- `name_en`, `name_ar` -->
                               <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __('English name') }}</label>
       
                                   <input id="name_en" type="text" class="form-control" name="name_en" value="{{$product->name_en}}" required autofocus>
       
                               </div>
                               <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __('Arabic Name') }}</label>
       
                                   <input id="name_ar" type="text" class="form-control" name="name_ar" value="{{$product->name_ar}}" required autofocus>
       
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
       
                                   <input id="code" type="number" class="form-control" name="code" value="{{$product->code}}" required autofocus>
       
                               </div>
                               <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __('Other Data') }}</label>
       
                                   <input id="otherData" type="text" class="form-control" name="otherData" value="{{$product->otherData}}" >
       
                               </div>
                               </div>
                               <div class="row">
                               <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __(' Price before Discount') }}</label>
       
                               <div class="">
                                   <input id="price_before " step="0.01" min="0" type="number" class="form-control" name="price_before" value="{{$product->price_before}}">
                                  
                               </div>
                           </div>
                           <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __('Price After Discount') }}</label>
       
                                   <input id="price_after" step="0.01" min="0" type="number" class="form-control" name="price_after" value="{{$product->price_after}}" >
       
                               </div>
                              </div>
                               <div class="row">
                               <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __('Cost') }}</label>
       
                               <div class="">
                                   <input id="cost " step="0.01" min="0" type="number" class="form-control" name="cost" value="{{$product->cost}}" required >
                                  
                               </div>
                           </div>
                           <div class="form-group col-md-6">   
                               <label for="status" class=" col-form-label text-md-right">{{ __('isOffer') }}</label>
                               <select class="form-control"name="isOffer">
                                <option value="0" >No</option> 
                                <option value="1" >Yes</option>     
                               </select>
       
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
                             <option value="1" >Active</option>    
                             <option value="0" >Inactive</option>    
                            </select>  
                               </div>
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right">{{ __('Quantity') }}</label>
       
                               <div class="">
                                   <input id="quantity " min="1" type="number" class="form-control" name="quantity" value="{{$product->quantity}}">
                                  
                               </div>
                           </div>
                           <div class="form-group col-md-6">   
                           <label for="free_shipping" class=" col-form-label text-md-right">{{ __('free_shipping') }}</label>
                           <select name="free_shipping"  class="form-control ">
                             <option value="0" >No</option> 
                             <option value="1" >Yes</option> 
                            </select>  
                               </div>
                            </div>
       
                            <div class="row">
                               <div class="form-group col-md-6">
                               <label for="name" class=" col-form-label text-md-right" required>{{ __('category') }}</label>
                                    <select name="category_id" class="form-control">
                                      @if ($categories->count())
       
                                      @foreach($categories as $category)
                                       <option value="{{ $category->id }}" >{{ $category->name_en}}</option>    
                                        @endforeach
                                       @endif
                                      </select>
                                </div>
                           <div class="form-group col-md-6">   
                            <label for="name" class=" col-form-label text-md-right" >{{ __('Supplier') }}</label>
                                    <select name="supplier_id" class="form-control">
                                    <option value=" " > No Supplier</option>
                                      @if ($suppliers->count())
                                      @foreach($suppliers as $supplier)
                                       <option value="{{ $supplier->id }}" >{{ $supplier->name}}</option>    
                                        @endforeach
                                       @endif
                                      </select>  
                               </div>
                            </div>
               <!-- //, `img_main`, `image_id{{$product->quantity}}`, -->
                              <div class="row">
                                 <div class="form-group col-md-6">
                                 <img width="100px"  height="70px" class="img-circle" src="{{asset('upload/product/'.$product->img_main)}}">
                                 </br>
                                   <label for="img_main" class="col-form-label text-md-right">Upload Main image </label>
                                   <input id="img_main" type="file" accept="image/png, image/jpeg, image/gif" name="img_main"/>
                                 </div>
                                 <div class="form-group col-md-6">
                                 @if ($images->count())
       
                                 @foreach($images as $image)
                                  <img width="100px"  height="70px" class="img-circle" src="{{asset('upload/product/other/'.$image->img_name)}}">
                                    @endforeach
                                     @endif
                                 
                                   <label for="img" class="col-form-label text-md-right">Upload Other image </label>
                                   <input id="image_id" type="file" accept="image/png, image/jpeg, image/gif" name="image[]" multiple/>
                                 </div>
                               </div>
        </div>
        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
        </div>
<!-- <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>
        tinymce.init({
           selector: 'textarea',
         });
</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>

 <script type="text/javascript">
        $("#image_id").fileinput({
          theme: 'fa',
          uploadUrl: "/rovanna",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            overwriteInitial: false,
            maxFileSize:2000,
            maxFilesNum: 10,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
    </script> -->
@endsection