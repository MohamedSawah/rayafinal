@extends('layouts.master')

@section('content')


<div class="panel panel-primary">
  <div class="panel-heading">
  <div class="pull-left"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;
">
<h3 class="panel-title">All supplier</h3>
    </div>
    
    <div class="pull-right"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;
">
<!-- <i class="fa fa-angellist"></i> -->
                <a class="btn btn-success 	fa fa-plus" href="{{ route('suppliers.create') }}"> Create New </a>
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
    <th>code</th>
    <th>Name</th>
    <th>phone</th>
    <th>address</th>
    <th>notes</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
<!-- `name_en`, `name_ar`, `category_id`, `img`, `order`, `status` -->
   @foreach($suppliers as $supplier)
   <tr>
  <td>{{$x++}} </td>
  <td>{{$supplier->code}}</td>
  <td>{{$supplier->name}}</td>
  <td>{{$supplier->phone}}</td>
  <td>{{$supplier->adress}}</td>
  <td>{!! \Illuminate\Support\Str::words($supplier->note, 5,'....')  !!}</td>
  


  <td> 
  <form class="delete" action="{{ route('suppliers.destroy',$supplier->id) }}" method="POST">
  <!-- <a class="btn btn-info" href="{{ route('suppliers.show',$supplier->id) }}">Show</a> -->
  <a class="fa fa-edit "  style="font-size:16px"  href="{{ route('suppliers.edit',$supplier->id) }}"></a>
   <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button type="submit " class="fa fa-close"  style="font-size:14px;color:red " value="Delete"> </button>
        </form>
        </td>
   </tr>
   @endforeach
  </tbody>
  </table>
 {{$suppliers->render()}}

  </div>
</div>


@endsection