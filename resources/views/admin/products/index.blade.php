@extends('layouts.master')

@section('content')


<div class="panel panel-primary">
  <div class="panel-heading">
  <div class="pull-left"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;
">
<h3 class="panel-title">All Product</h3>
    </div>
    
    <div class="pull-right"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;
">
                <a class="btn btn-success 	fa fa-plus" href="{{ route('products.create') }}">Create New </a>
    </div>
  </div>
  <div class="panel-body">
     <!-- //   'code', 'name_en', 'name_ar', 'info_en', 'info_ar', 'description_en', 
        //  'description_ar', 'price','price_after', 'otherData', 'quantity', 
        //  'img_main', 'slug', 'order', 'status', 'category_id', -->
   <!-- table -->
   <table class="table table-striped  table-bordered table-hover dataTable ">
    <thead>
    <tr> 
      <th>#</th>    
    <th>code</th>
    <th>English Name</th>
    <th>English Intro</th>
    <th>Price After</th>
    <th>Image</th>
    <th>status</th>
    <th>Category</th>
    <th>quantity</th>
    <th>slug</th>
   
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
  <!--`Description_en`, `name_ar`, `description_en`, `description_ar`, 
  `price_before`, `price_after`, `otherData`, `img_main`, `isOffer`, 
  `order`, `status`, `category_id`, `code`, `cost`, `quantity`,
   `free_shipping`, `supplier_id`,  -->
   @foreach($products as $product)
   <tr>
     <td>{!!$x++!!}</td>
  <td>{!!$product->code!!} </td>
  <td>{!!$product->name_en!!}</td>
  <td>{!!$product->info_en!!}</td>
  <td>{!!$product->price_after!!}</td>
  <!-- <td>{!!$product->otherData!!}</td> -->
  <td><img width="70px"  height="70px" class="img-circle" src="{!!asset('upload/product/'.$product->img_main)!!}"></td>
  @if($product->status==1)
    <td>Active</td>
  @else
     <td>inactive </td>
  @endif
  <td>{!!$product->category->name_en!!}</td>
  <!-- <td>{!!$product->cost!!}</td> -->
  <td>{!!$product->quantity!!}</td>
  <td>{!!$product->slug!!}</td>


  <td> 
  <form class="delete" action="{{ route('products.destroy',$product->id) }}" method="POST">
  <a class="fa fa-tv"  style="font-size:20px" href="{{ route('products.show',$product->id) }}"></a>
  <a class="fa fa-edit "  style="font-size:16px" href="{{ route('products.edit',$product->id) }}"></a>
   <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button type="submit " class="fa fa-close"  style="font-size:14px;color:red " value="Delete"> </button>
        </form>
        </td>
   </tr>
   @endforeach
  </tbody>
  </table>

 {{$products->render()}}

  </div>
</div>


@endsection