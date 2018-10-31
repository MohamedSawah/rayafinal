@extends('layouts.master')

@section('content')
<div class="row" style="padding-bottom: 10px;">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('featuredetails.index') }}"> Back</a>
            </div>
        </div>
</div>


  

<div class="row">
<div class="col-md-11">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
              <li class="active"><a href="#timeline" data-toggle="tab" aria-expanded="true">Feature  Details</a></li>
              
            </ul>
            <div class="tab-content">
              
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          {{$feature->created_at}}
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-blue"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Name In English</a> {{$feature->name_en}}</h3>
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-aqua"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Name In Arabic</a> {{$feature->name_ar}}</h3>

                    </div>
                  </li>
                  <!-- END timeline item -->
                             <!-- timeline item -->
                  <li>
                    <i class="fa  bg-blue"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Details In English</a>{!! $feature->details_en !!}</h3>
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa  bg-blue"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Details In English</a>{!! $feature->details_ar !!}</h3>
                      
                    </div>
                  </li>
                  

                  <li>
                    <i class="fa  bg-blue"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Parent feature</a>@if(isset($feature->feature->name_en)){{ $feature->feature->name_en }} @endif</h3>
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa  bg-gray"></i>
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