@extends('layouts.master')

@section('content')


<div class="panel panel-primary">
  <div class="panel-heading">
  <div class="pull-left"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;">
<h3 class="panel-title">All Brands</h3>
    </div>
    
    <div class="pull-right"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;">
                <a class="btn btn-success  fa fa-plus" href="{{ route('brands.create') }}"> Create New</a>
    </div>
  </div>
  <div class="panel-body">
  <!-- 'title_en', 'title_ar',
    'img', 'link','status', -->

   <!-- table -->
   <table class="table table-striped  table-bordered table-hover dataTable">
    <thead>
    <tr>     
    <th>#</th>
    <th>Name English</th>
    <th>image</th>
    <th>Order</th>
    <th>status</th>
    <th>Category</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
<!-- `name_en`, `name_ar`, `category_id`, `img`, `order`, `status` -->
  
<td style="display:none">{{$x=1 }}</td>
@foreach($brands as $brand)
   <tr>
   <td>{{$x++}} </td>

  <td>{{$brand->name_en}}</td>
  <td><img width="70px"  height="70px" class="img-circle" src="{{asset('upload/brand/'.$brand->img)}}"></td>
  <td>{{$brand->order}}</td>
  @if($brand->status==1)
    <td>Active</td>
  @else
     <td>inactive </td>
  @endif
  <td>{{$brand->category->name_en}}</td>

  <td> 
  
  <form class="delete" action="{{ route('brands.destroy',$brand->id) }}" method="POST">
  <!-- <a class="btn btn-info" href="{{ route('brands.show',$brand->id) }}">Show</a> -->
 <a class="fa fa-edit "  style="font-size:20px" href="{{ route('brands.edit',$brand->id) }}"></a>
      <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button type="submit " class="fa fa-close"  style="font-size:14px;color:red " value="Delete"> </button>
       
   </form>
        </td>
   </tr>
   @endforeach
  </tbody>
  </table>
 {{$brands->render()}}

  </div>
</div>


@endsection