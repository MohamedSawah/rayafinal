@extends('layouts.master')

@section('content')
<div class="panel panel-primary">
<div class="panel-heading">
             <h3 class="panel-title">All pages</h3>
     </div>
     <div class="panel-body"> 
     <div class="pull-right"style=" padding-top: 0px;padding-bottom: 20px;margin-top: 20px;">
                <a class="btn btn-success 	fa fa-plus" href="{{ route('pages.create') }}"> Create New </a>
          </div>
          <table class="table table-striped  table-bordered table-hover dataTable">
    <thead>
    <tr>        
    <th>#</th>
    <th>English Title</th>
    <th>Arabic Title </th>
    <th>English Name</th>
    <th>Arabic Name</th>
    <th>image</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>

   @foreach($pages as $page)
   <tr>
  <td>{{$x++}} </td>
  <td>{{$page->title_en}}</td>
  <td>{{$page->title_ar}}</td>
  <td>{!! \Illuminate\Support\Str::words($page->name_en, 5,'....')  !!}</td>
  <td>{!! \Illuminate\Support\Str::words($page->name_ar, 5,'....')  !!}</td>
  <td><img width="70px"  height="70px" class="img-circle" src="{!!asset('upload/page/'.$page->image)!!}"></td>
  


  <td> 

<form class="delete" action="{{ route('pages.destroy',$page->id) }}" method="POST">
  <a class="fa fa-tv"  style="font-size:20px" href="{{ route('pages.show',$page->id) }}"></a>
   <a class="fa fa-edit "  style="font-size:20px" href="{{ route('pages.edit',$page->id) }}"></a>
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <button type="submit " class="fa fa-close"  style="font-size:14px;color:red " value="Delete"> </button>
       
   </form>
        </td>
   </tr>
   @endforeach
  </tbody>
  </table>
 {{$pages->render()}}

     </div>

</div>

@endsection
