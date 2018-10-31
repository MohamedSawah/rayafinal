@extends('layouts.master')

@section('content')

<div class="panel panel-primary">
  <div class="panel-heading">
  <div class="pull-left"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;">
<h3 class="panel-title">All Categories</h3>
    </div>
    
    <div class="pull-right"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;">
                <a class="btn btn-success fa fa-plus" href="{{ route('categories.create') }}"> Create New</a>
    </div>
  </div>
  <div class="panel-body">
   <!-- table -->
   <table class="table table-striped  table-bordered table-hover dataTable">
    <thead>
    <tr>     
    <th>#</th>
    <th>Name English</th>
    <th>Parent Category</th>
    <th>order</th>
    <th>statues</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <td style="display:none">{{$x=1 }}</td>

   @foreach($categories as $category)
   <tr>
   <td>{{$x++}} </td>
  <td>{{$category->name_en}}</td>
 
  @if(!empty($category->subcategory->name_en))
  <td>{{ $category->subcategory->name_en }} </td>
  @else
 <td> </td>
  @endif
  <td>{{$category->order}}</td>
  @if($category->status==1)
    <td>Active</td>
  @else
     <td>inactive </td>
  @endif

  <!-- -->

  <td> 
  <form class="delete" action="{{ route('categories.destroy',$category->id) }}" method="POST">
   <a class="fa fa-tv" href="{{ route('categories.show',$category->id) }}"></a> 
  <a class="fa fa-edit "  style="font-size:16px" href="{{ route('categories.edit',$category->id) }}"></a>
   <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button type="submit " class="fa fa-close"  style="font-size:14px;color:red " value="Delete"> </button>
       
   </form>
        </td>
   </tr>
   @endforeach
  </tbody>
  </table>
  {{$categories->render()}}

  </div>
</div>


@endsection