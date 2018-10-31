@extends('layouts.master')

@section('content')


<div class="panel panel-primary">
  <div class="panel-heading">
  <div class="pull-left"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;">
<h3 class="panel-title">All Coupons</h3>
    </div>
    
    <div class="pull-right"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;">
                <a class="btn btn-success	fa fa-plus" href="{{ route('coupons.create') }}"> Create New</a>
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
    <th>code</th>
    <th>product Name</th>
    <th>multiple Use</th>
    <th>status</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <td style="display:none">{{$x=1 }}</td>

<!-- `name_en`, `name_ar`, `category_id`, `img`, `order`, `status` -->
   @foreach($coupons as $coupon)
   <tr>
   <td>{{$x++}} </td>
  <td>{{$coupon->code}}</td>
  @if(!empty($coupon->product->name_en))
  <td>{{$coupon->product->name_en}}</td>
  @else
  <td></td>
  @endif
  @if($coupon->status==1)
    <td>Active</td>
  @else
     <td>inactive </td>
  @endif
  @if($coupon->multiUse==1)
    <td>Yes</td>
  @else
     <td>No</td>
  @endif
  <td> 
  <form class="delete" action="{{ route('coupons.destroy',$coupon->id) }}" method="POST">
  <!-- <a class="btn btn-info" href="{{ route('coupons.show',$coupon->id) }}">Show</a> -->
  <a class="fa fa-edit "  style="font-size:16px" href="{{ route('coupons.edit',$coupon->id) }}"></a>
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
 {{$coupons->render()}}

  </div>
</div>


@endsection