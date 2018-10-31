@extends('layouts.master')

@section('content')


<div class="panel panel-primary">
  <div class="panel-heading">
  <div class="pull-left"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;
">
<h3 class="panel-title">All slideshow</h3>
    </div>
    
    <div class="pull-right"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;
">
                <a class="btn btn-success	fa fa-plus" href="{{ route('slideshows.create') }}"> Create New </a>
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
    <th>introduction English</th>
    <th>details English</th>
    <th>image</th>
    <th>link</th>
    <th>status</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
<!-- 'title_en', 'title_ar',
    'img', 'link','status', -->
   @foreach($slideshows as $slideshow)
   <tr>
  <td>{{$x++}} </td>
  <td>{{$slideshow->title_en}}</td>
  <td>{{$slideshow->intro_en}}</td>
  <td>{{$slideshow->intro_ar}}</td>
  <td><img width="70px"  height="70px" class="img-circle" src="{{asset('upload/slideshow/'.$slideshow->img)}}"></td>
  <td>{{$slideshow->link}}</td>
  @if($slideshow->status==1)
    <td>Active</td>
  @else
     <td>inactive </td>
  @endif

  <td> 
  <form class="delete" action="{{ route('slideshows.destroy',$slideshow->id) }}" method="POST">
  <!-- <a class="btn btn-info" href="{{ route('slideshows.show',$slideshow->id) }}">Show</a> -->
  <a class="fa fa-edit "  style="font-size:16px" href="{{ route('slideshows.edit',$slideshow->id) }}"></a>
   <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button type="submit " class="fa fa-close"  style="font-size:14px;color:red " value="Delete"> </button>
        </form>
        </td>
   </tr>
   @endforeach
  </tbody>
  </table>
 {{$slideshows->render()}}

  </div>
</div>


@endsection