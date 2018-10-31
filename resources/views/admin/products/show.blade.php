@extends('layouts.master')

@section('content')
<div class="row" style="padding-bottom: 10px;">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
</div>

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



  

<div class="row">
<div class="col-md-11">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
              <li class="active"><a href="#timeline" data-toggle="tab" aria-expanded="true">Product  Detailes</a></li>
              
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="timeline">

                <ul class="timeline timeline-inverse">
     
                  <li class="time-label">
                        <span class="bg-red">
                          {{$product->created_at->format('m/d/Y')}}
                        </span>
                  </li>
    <!-- 'price','price_after', 'otherData', 'quantity', 
        //  'img_main', 'slug', 'order', 'status', 'category_id', -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>
                     <div class="timeline-item">
                       <h3 class="timeline-header"><a href="#">Code </a> {{$product->code}}</h3>   
                     </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Name In Arabic</a> {{$product->name_ar}}</h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-yellow"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Name In English</a> {{$product->name_en}}</h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Introduction In English</a> {{$product->info_en}}</h3>
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Introduction In Arabic</a> {{$product->info_ar}}</h3>

                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Description In English</a></h3>

                      <div class="timeline-body">
                       {!!$product->description_en!!}
                      </div>
                    </div>
                  </li>
                   <li>
                    <i class="fa fa-comments bg-green"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Description In Arabic</a></h3>

                      <div class="timeline-body">
                       {!!$product->description_ar!!}
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                   <!-- timeline item -->
                  <li>
                    <i class="fa fa-money bg-aqua"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Price</a> {{$product->price}}</h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                   <!-- timeline item -->
                  <li>
                    <i class="fa fa-money bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Price After Discount</a> {{$product->price_after}}</h3>
                    </div>
                  </li>
                  <!-- END timeline item --> <!-- timeline item -->
                  <li>
                    <i class="fa fa-info bg-yellow"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Notes</a> {{$product->otherData}}</h3>
                    </div>
                  </li>
                  <!-- END timeline item --> <!-- timeline item -->
                  <li>
                    <i class="fa fa-reddit-square bg-red"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Quantity</a> {{$product->quantity}}</h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                           <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Category</a> {{$product->category->name_ar}}</h3>
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Main photos</a> </h3>

                      <div class="timeline-body">
                      
                        <img width="70px"  height="70px" class="img-circle" src="{!!asset('upload/product/'.$product->img_main)!!}" class="margin">

                      </div>
                       <h3 class="timeline-header"><a href="#">product photos</a> </h3>

                      <div class="timeline-body">
                      @foreach($product->images as $image)
                        <img width="70px"  height="70px" class="img-circle" src="{!!asset('upload/product/other/'.$image->img_name)!!}" class="margin">
                     @endforeach
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        </div>

@endsection
