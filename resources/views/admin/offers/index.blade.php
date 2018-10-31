@extends('layouts.master')

@section('content')


<div class="panel panel-primary">
  <div class="panel-heading">
  <div class="pull-left"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;
">
<h3 class="panel-title">All Offer</h3>
    </div>
    
    <div class="pull-right"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;
">
                <a class="btn btn-success 	fa fa-plus" href="{{ route('offers.create') }}"> Create New </a>
    </div>
  </div>
  <div class="panel-body">
  <!-- 'title_en', 'title_ar',
    'img', 'link','status', -->

   <!-- table -->
   <table class="table table-bordered table-hover dataTable table-striped">
    <thead>
    <tr>     
    <th>#</th>
    <th>Title English</th>
    <th>image</th>
    <th>link</th>
    <th>status</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
<!-- 'title_en', 'title_ar',
    'img', 'link','status', -->
    <td style="display:none">{{$x=1 }}</td>
   @foreach($offers as $Offer)
   <tr>
   
  <td>{{$x++}} </td>
  <td>{{$Offer->title_en}}</td>
  <!-- <td>{{$Offer->title_ar}}</td> -->
  <td><img width="70px"  height="70px"  class="img-circle" src="{{asset('upload/offer/'.$Offer->img)}}"></td>
  <td>{{$Offer->link}}</td>
  @if($Offer->status==1)
    <td>Active</td>
  @else
     <td>inactive </td>
  @endif

  <td> <!-- 
  <form action="{{ route('offers.destroy',$Offer->id) }}" method="POST"> -->
  <!-- <a class="btn btn-info" href="{{ route('offers.show',$Offer->id) }}">Show</a> -->
<!--   <a class="fa fa-edit "  style="font-size:16px" href="{{ route('offers.edit',$Offer->id) }}"></a>
   @csrf
   @method('DELETE')
   <button type="submit " class="fa fa-close"  style="font-size:16px;color:red "> </button>
   </form>
        </td>
   </tr> -->
  <a class="fa fa-edit "  style="font-size:20px" href="{{ route('offers.edit',$Offer->id) }}"></a>
  
    <form class="delete" id="logout-delete" action="{{ route('offers.destroy',$Offer->id) }}" method="POST" > 

   <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button type="submit " class="fa fa-close"  style="font-size:14px;color:red " value="Delete"> </button>
       
   </form>
        </td>
   </tr>
   @endforeach
  </tbody>
  </table>
 {{$offers->render()}}

  </div>
</div>


@endsection