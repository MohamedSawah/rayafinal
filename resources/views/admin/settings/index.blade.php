@extends('layouts.master')

@section('content')


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



 @foreach($settings as $setting)
  <div class="row" style="padding-bottom: 10px;">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary fa fa-edit" href="{{ route('settings.edit',$setting->id) }}"> Edit</a>
            </div>
        </div>
  </div>

<div class="row">
<div class="col-md-11">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
              <li class="active"><a href="#timeline" data-toggle="tab" aria-expanded="true">setting  Detailes</a></li>
              
            </ul>
            <div class="tab-content">
              
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          {{$setting->created_at}}
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <!--           // // 'phone', 'mobile2', 'mobile', 'email', 'supportEmail', 
        // 'facebook', 'instagram', 'twitter', 'youtube', 'linkedin', 'worktime' -->

                      <h3 class="timeline-header"><a href="#">Phone</a> {{$setting->phone}}</h3>
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Phone 2</a> {{$setting->mobile2}}</h3>

                    </div>
                  </li>
                  <!-- END timeline item -->
                             <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Phone 3</a> {{$setting->mobile}}</h3>
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Email</a> {{$setting->email}}</h3>
                       <div class="timeline-body">
                       {!!$setting->email!!}
                       </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Support Email</a></h3>

                      <div class="timeline-body">
                       {!!$setting->supportEmail!!}
                      </div>
                    </div>
                  </li>
                   <li>
                    <i class="fa fa-facebook bg-green"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Facebook</a></h3>

                      <div class="timeline-body">
                       {!!$setting->facebook!!}
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li>
                    <i class="fa fa-twitter bg-purple"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Twitter</a> </h3>

                      <div class="timeline-body">
                           {!!$setting->twitter!!}
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                   <!-- timeline time label -->
                  <li>
                    <i class="fa fa-instagram bg-purple"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Instagram</a> </h3>

                      <div class="timeline-body">
                            {!!$setting->instagram!!}
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                   <!-- timeline time label -->
                  <li>
                    <i class="fa fa-linkedin bg-purple"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Linkedin</a> </h3>

                      <div class="timeline-body">
                           {!!$setting->linkedin!!}
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                   <!-- timeline time label -->
                  <li>
                    <i class="fa fa-youtube bg-purple"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">youtube</a> </h3>

                      <div class="timeline-body">
                                 {!!$setting->youtube!!}
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                   <!-- timeline time label -->
                  <li>
                    <i class="fa fa-clock-o  bg-purple"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">worktime</a> </h3>

                      <div class="timeline-body">
                                 {!!$setting->worktime!!}

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

