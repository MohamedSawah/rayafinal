@extends('layouts.master')

@section('content')


<div class="panel panel-primary">
  <div class="panel-heading">
  <div class="pull-left"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;
">
<h3 class="panel-title">All Feature of product</h3>
    </div>
    
    <div class="pull-right"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;
">
<!-- 'feature_id', 'feature_deatils_id', 'product_id','price' -->
                <a class="btn btn-success 	fa fa-plus" href="{{ route('productfeature.create') }}"> Create New </a>
    </div>
  </div>
  <div class="panel-body">
  <!-- 'title_en', 'title_ar',
    'img', 'link','status', -->

   <!-- table -->
   <table class="table table-striped table-bordered table-hover dataTable">
    <thead>
    <tr>     
    <th>#</th>
    <th>Feature</th>
    <th>Feature Details</th>
    <th>Product</th>
    <th>Price</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
<!-- `name_en`, `name_ar`, `category_id`, `img`, `order`, `status` -->
   @foreach($productFeatures as $detail)
   <tr>
  <td>{{$x++}} </td>
  <td>{{$detail->feature->name_en}}</td>
<td>@if(isset($detail->featuredetails->name_en)) {{$detail->featuredetails->name_en}} @endif</td>
<td> @if(isset($detail->product->name_en))  {{$detail->product->name_en}} @endif </td>
<td>{{$detail->price}}</td>
  <td> 
  <form class="delete" action="{{ route('productfeatures.destroy',$detail->id) }}" method="POST">
  <a class="fa fa-edit "  style="font-size:16px"  href="{{ route('productfeatures.edit',$detail->id) }}"></a>
   <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button type="submit " class="fa fa-close"  style="font-size:14px;color:red " value="Delete"> </button>
        </form>
        </td>
   </tr>
   @endforeach
  </tbody>
  </table>
 {{$productFeatures->render()}}

  </div>
</div>


@endsection