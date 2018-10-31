@extends('layouts.master')
@section('content')

    
                  
          <div class="card-header">Add Today</div>

                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success">
                              {{ session('status') }}
                          </div>
                      @endif
    
                    <div class="row">
                    
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="info-box">
                           <span class="info-box-icon bg-aqua"><i class="fa fa-cog"></i></span>

                           <div class="info-box-content">
                             <span class="info-box-text">Product Added </span>
                             <span class="info-box-number">{{$prodct_today->count()}}<small></small></span>
                           </div>
                           <!-- /.info-box-content -->
                         </div>
                         <!-- /.info-box -->
                       </div>
                       <!-- /.col -->
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="info-box">
                           <span class="info-box-icon bg-red"><i class="fa fa-shopping-cart"></i></span>

                           <div class="info-box-content">
                             <span class="info-box-text">Order</span>
                             <span class="info-box-number">{{$order_today->count()}}</span>
                           </div>
                           <!-- /.info-box-content -->
                         </div>
                         <!-- /.info-box -->
                       </div>
                       <!-- /.col -->

                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="info-box">
                           <span class="info-box-icon bg-yellow"><i class="fa fa-group"></i></span>

                           <div class="info-box-content">
                             <span class="info-box-text">New Members</span>
                             <span class="info-box-number">{{$user_today->count()}}</span>
                           </div>
                           <!-- /.info-box-content -->
                         </div>
                         <!-- /.info-box -->
                       </div>
                       <!-- /.col -->
                     </div>
                     </div>
              <!-- week ago -->
              <div class="card-header">Added throw Week </div>
              <div class="card-body">
              <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$order_week->count()}}</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$prodct_week->count()}}<sup style="font-size: 20px"></sup></h3>

              <p>New product</p>
            </div>
            <div class="icon">
              <i class="ion fa fa-pie-chart"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$user_week->count()}}</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-plus"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
            </div>
              </div>
             
           
           <!-- End of week -->
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Members</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">{{$user_week->count()}} New Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                  @foreach($user_week as $user)
                    <li>
                      <img src="{{asset('images/1.png')}}" hieght="50px" width="50px"alt="User Image">
                      <a class="users-list-name" href="#">{{$user->firstName }}</a>
                      <span class="users-list-date">{{$user->created_at->diffForHumans()}}</span>
                    </li>
                   @endforeach
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="/admin/users/" class="uppercase">View All Users</a>
                </div>
                <!--box-footer -->
              </div>
              <!--box-->
           
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Added Products</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
              @foreach($prodct_week as $product)
                <li class="item">
                  <div class="product-img">
                    <img src="{{asset('images/1.png')}}" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="/admin/products/" class="product-title">{{$product->name_en}}
                      <span class="label label-warning pull-right">${{$product->cost}}</span></a>
                    <span class="product-description">
                         {!!$product->description_en!!}
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                @endforeach
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="/admin/products" >View All Products</a>
            </div>
            <!-- /.box-footer -->
         
@endsection
