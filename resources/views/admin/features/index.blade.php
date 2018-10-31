@extends('layouts.master')

@section('content')


<div class="panel panel-primary">
  <div class="panel-heading">
  <div class="pull-left"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;">
<h3 class="panel-title">All Features</h3>
    </div>
    
    <div class="pull-right"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;">
                <a class="btn btn-success	fa fa-plus" href="{{ route('features.create') }}"> Create New</a>
    </div>
  </div>
  <div class="panel-body">
  <!-- 'title_en', 'title_ar',
    'img', 'link','status', -->

   <!-- table -->
   <!-- //`code`, `product_id`, `multiUse`, `status`, -->
   <table class="table table-striped  table-bordered table-hover dataTable">
    <thead>
    <tr>     
    <th>#</th>
    <th>Name in English</th>
    <th>Name in Arabic</th>

    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <td style="display:none">{{$x=1 }}</td>

<!-- `name_en`, `name_ar`, `category_id`, `img`, `order`, `status` -->
   @foreach($features as $feature)
   <tr>
   <td>{{$x++}} </td>
  <td>{{$feature->name_en}}</td>
  @if(!empty($feature->name_ar))
  <td>{{$feature->name_ar }}</td>
  @else
  <td></td>
  @endif
 
  <td> 
  <form class="delete" action="{{ route('features.destroy',$feature->id) }}" method="POST">
  <!-- <a class="btn btn-info" href="{{ route('features.show',$feature->id) }}">Show</a> -->
  <a class="fa fa-edit "  style="font-size:16px" href="{{ route('features.edit',$feature->id) }}"></a>
   <!-- @csrf
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
 {{$features->render()}}

  </div>
</div>


@endsection