@extends('layouts.master')

@section('content')
<div class="row" style="padding-bottom: 10px;">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('services.index') }}"> Back</a>
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



 @foreach($services_show as $service)
  

<div class="row">
<div class="col-md-11">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
              <li class="active"><a href="#timeline" data-toggle="tab" aria-expanded="true">service  Detailes</a></li>
              
            </ul>
            <div class="tab-content">
              
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          {{$service->created_at}}
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <!--   'title_en', 'title_ar', 'intro_ar', 'intro_en', 'details_en', 'details_ar', 'slug', 'image', -->

                      <h3 class="timeline-header"><a href="#">Title In English</a> {{$service->title_en}}</h3>
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Title In Arabic</a> {{$service->title_ar}}</h3>

                    </div>
                  </li>
                  <!-- END timeline item -->
                             <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Introduction In English</a> {{$service->intro_ar}}</h3>
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Introduction In Arabic</a> {{$service->intro_ar}}</h3>

                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Description In English</a></h3>

                      <div class="timeline-body">
                       {!!$service->details_en!!}
                      </div>
                    </div>
                  </li>
                   <li>
                    <i class="fa fa-comments bg-green"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Description In Arabic</a></h3>

                      <div class="timeline-body">
                       {!!$service->details_ar!!}
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">service photos</a> </h3>

                      <div class="timeline-body">
                        <img width="70px"  height="70px" class="img-circle" src="{!!asset('upload/service/'.$service->image)!!}" class="margin">

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
        @endforeach 
@endsection
