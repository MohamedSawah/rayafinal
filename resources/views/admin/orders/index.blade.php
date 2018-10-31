@extends('layouts.master')

@section('content')


<div class="panel panel-primary">
  <div class="panel-heading">
  <div class="pull-left"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;
">
<h3 class="panel-title">All Order Details</h3>
    </div>
    
    <div class="pull-right"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;
">
<!-- <i class="fa fa-angellist"></i> -->
    </div>
  </div>
  <div class="panel-body">
  <!-- 'title_en', 'title_ar',
    'img', 'link','status', -->

   <!-- table'name_en', 'name_ar', -->
   <table class="table table-striped table-bordered table-hover dataTable">
    <thead>
    <tr>     
    <th>#</th>
    <th>invoiceID</th>
    <th>User Name</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Statue</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
<!-- `name_en`, `name_ar`, `category_id`, `img`, `order`, `status` -->
   @foreach($order as $orderDetail)
   <tr>
  <td>{{$x++}} </td>
  <td>{{$orderDetail->invoiceID}}</td>
  <td>{{$orderDetail->user->firstName." ".$orderDetail->user->lastName}}</td>
  <td>{{$orderDetail->quantity}}</td>
  <td>{{$orderDetail->total_price}}</td>
  <td>{{$orderDetail->statue}}</td>
  


  <td> 
  
  <a class="fa fa-tv "  style="font-size:16px"  href="{{ route('orders.show',$orderDetail->id) }}"></a>
  
        </td>
   </tr>
   @endforeach
  </tbody>
  </table>
 {{$order->render()}}

  </div>
</div>


@endsection