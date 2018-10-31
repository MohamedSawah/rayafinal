@extends('layouts.master')

@section('content')
<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Order Details .
            <small class="pull-right"> Date {{ $date}}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          User
          <address>
            <strong>{{$order->user->firstName." ".$order->user->lastName}}</strong><br>
           {{$order->user->address}}<br>
            City : {{$order->user->city1}}<br>
            Phone: {{$order->user->mobile1}}<br>
            Email: {{$order->user->email}}
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <!-- To
          <address>
            <strong>John Doe</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (555) 539-1037<br>
            Email: john.doe@example.com
          </address> -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>{{$order->invoiceID}}</b><br>
          <br>
          <b>Order ID:</b> {{$order->id}}<br>
          <b>Order Due:</b> {{$date}}<br>
          <b>Payment Method :</b>{{$order->paymentMethod}}
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Product</th>
              <th>Image</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order_details as $order_detail)
            <tr>
              <td>{{$order_detail->quantity}}</td>
              <td>{{$order_detail->product->name_en}}</td>
              <td><img width="70px"  height="70px" class="img-circle" src="{!!asset('upload/product/'.$order_detail->product->img_main)!!}"></td>
              <td>{{$order_detail->quantity * $order_detail->product->price }}</td>
            </tr>
            @endforeach
            <!-- <tr>
              <td>1</td>
              <td>Need for Speed IV</td>
              <td>247-925-726</td>
              <td>Wes Anderson umami biodiesel</td>
              <td>$50.00</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Monsters DVD</td>
              <td>735-845-642</td>
              <td>Terry Richardson helvetica tousled street art master</td>
              <td>$10.70</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Grown Ups Blue Ray</td>
              <td>422-568-642</td>
              <td>Tousled lomo letterpress</td>
              <td>$25.99</td>
            </tr> -->
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <!-- <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <img src="{{asset('images/credit/visa.png')}}" alt="Visa">
          <img src="{{asset('images/credit/mastercard.png')}}" alt="Mastercard">
          <img src="{{asset('images/credit/american-express.png')}}" alt="American Express">
          <img src="{{asset('images/credit/paypal2.png')}}" alt="Paypal">

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p>
        </div> -->
        <!-- /.col -->
        <div class="col-xs-6 table-responsive">
          <p class="lead">Amount Due 2/22/2014</p>

          <div class="table-responsive">
            <table class="table">
              <tbody><tr>
                <th style="width:20%">Subtotal:</th>
                <td>{{$order->total_price}}</td>
              </tr>
              <tr>
                <th>Shipping:</th>
                <td>{{$order->shipping_cost}}</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>{{$order->total_price + $order->shipping_cost }}</td>
              </tr>
            </tbody></table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection
