@extends('layouts.master')

@section('content')


<div class="panel panel-primary">
  <div class="panel-heading">
  <div class="pull-left"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;">
<h3 class="panel-title">All opinions</h3>
    </div>
    
    <div class="pull-right"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;">
                <a class="btn btn-success	fa fa-plus" href="{{ route('opinions.create') }}"> Create New </a>
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
    <th>Title English</th>
    <th>Name English</th>
    <th>Position English</th>
    <th>Image</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <td style="display:none">{{$x=1 }}</td>

        <!-- // 'title_ar', 'title_en', 'name_ar', 'name_en', 'position_ar', 'position_en', 'image', -->

   @foreach($opinions as $opinion)
   <tr>
  <td>{{$x++}} </td>
  <td>{!!$opinion->title_en!!}</td>
  <td>{{$opinion->name_en}}</td>
  <td>{{$opinion->position_en}}</td>
  <td><img width="70px"  height="70px" class="img-circle" src="{!!asset('upload/opinion/'.$opinion->image)!!}" class="margin"></td>

  <td> 
  <form class="delete" action="{{ route('opinions.destroy',$opinion->id) }}" method="POST">
  <!-- <a class="btn btn-info" href="{{ route('opinions.show',$opinion->id) }}">Show</a> -->
  <a class="fa fa-edit "  style="font-size:16px" href="{{ route('opinions.edit',$opinion->id) }}"></a>
  <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button type="submit " class="fa fa-close"  style="font-size:14px;color:red " value="Delete"> </button>
        </form>
        </td>
   </tr>
   @endforeach
  </tbody>
  </table>
 {{$opinions->render()}}

  </div>
</div>


@endsection