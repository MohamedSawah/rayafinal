@extends('layouts.master')

@section('content')


<div class="panel panel-primary">
  <div class="panel-heading">
  <div class="pull-left"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;">
<h3 class="panel-title">All Branches</h3>
    </div>
    
    <div class="pull-right"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;">
                <a class="btn btn-success fa fa-plus" href="{{ route('branches.create') }}"> Create New</a>
    </div>
  </div>
  <div class="panel-body">
   <!-- table -->
   <table class="table table-striped  table-bordered table-hover dataTable">
    <thead>
    <tr>     
    <th>#</th>
    <th>Name English</th>
    <th>country</th>
    <th>address</th>
    <th>phone</th>
    <th>email</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <td style="display:none">{{$x=1 }}</td>

   @foreach($branches as $branch)
   <tr>
   <td>{{$x++}} </td>
  <td>{{$branch->name_en}}</td>
  @if(!empty($branch->country->name_en))
  <td>{{ $branch->country->name_en }}</td>
  @else
  <td></td>
  @endif
  @if(!empty($branch->address_en))
  <td> {{ $branch->address_en }}</td>
  @else
 <td> </td>
  @endif
  @if(!empty($branch->phone))
    <td>{{ $branch->phone }}</td>
  @else
     <td></td>
  @endif

  @if(!empty($branch->email))
  <td>{{ $branch->email }}</td>
@else
   <td></td>
@endif
  <!-- -->

  <td> 
  <form class="delete" action="{{ route('branches.destroy',$branch->id) }}" method="POST">
   <a class="fa fa-eye" href="{{ route('branches.show',$branch->id) }}"></a> 
  <a class="fa fa-edit "  style="font-size:16px" href="{{ route('branches.edit',$branch->id) }}"></a>
   <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button type="submit " class="fa fa-close"  style="font-size:14px;color:red " value="Delete"> </button>
       
   </form>
        </td>
   </tr>
   @endforeach
  </tbody>
  </table>
  {{$branches->render()}}

  </div>
</div>


@endsection