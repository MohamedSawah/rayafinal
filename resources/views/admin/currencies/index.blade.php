@extends('layouts.master')

@section('content')


<div class="panel panel-primary">
  <div class="panel-heading">
  <div class="pull-left"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;">
<h3 class="panel-title">All Currencies</h3>
    </div>
    
    <div class="pull-right"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;">
                <a class="btn btn-success	fa fa-plus" href="{{ route('currencies.create') }}">Create New </a>
    </div>
  </div>
  <div class="panel-body">
   <!-- table -->
   <table class="table table-striped  table-bordered table-hover dataTable">
    <thead>
    <tr>     
    <th>#</th>
    <th>Name Arabic</th>
    <th>Name English</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <td style="display:none">{{$x=1 }}</td>

   @foreach($currencies as $currency)
   <tr>
   <td>{{$x++}} </td>
  <td>{{$currency->name_ar}}</td>
  <td>{{$currency->name_en}}</td>

  <td> 
  <form class="delete" action="{{ route('currencies.destroy',$currency->id) }}" method="POST">
  <!-- <a class="btn btn-info" href="{{ route('currencies.show',$currency->id) }}">Show</a> -->
  <a class="fa fa-edit "  style="font-size:16px" href="{{ route('currencies.edit',$currency->id) }}"></a>
  <!--  @csrf
   @method('DELETE')
   <button type="submit " class="fa fa-close"  style="font-size:16px;color:red "> </button> -->
   <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button type="submit " class="fa fa-close"  style="font-size:14px;color:red " value="Delete"> </button>
       
   </form>
        </td>
   </tr>
   @endforeach
  </tbody>
  </table>
  {{$currencies->render()}}

  </div>
</div>


@endsection