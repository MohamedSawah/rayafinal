@extends('layouts.master')

@section('content')
<div class="row" style="padding-bottom: 10px;">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('branches.index') }}"> Back</a>
            </div>
        </div>
</div>


  

<div class="row">
<div class="col-md-11">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
              <li class="active"><a href="#timeline" data-toggle="tab" aria-expanded="true">Branch  Detailes</a></li>
              
            </ul>
            <div class="tab-content">
              
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          {{$category->created_at}}
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-blue"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Name In English</a> {{$branch->name_en}}</h3>
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-aqua"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Name In Arabic</a> {{$branch->name_ar}}</h3>

                    </div>
                  </li>
                  <!-- END timeline item -->
                             <!-- timeline item -->
                  <li>
                    <i class="fa  bg-blue"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Address In English</a> {{$branch->address_en}}</h3>
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-aqua"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Address In Arabic</a> {{$branch->address_ar}}</h3>

                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa  bg-yellow"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Email</a></h3>

                      <div class="timeline-body">
                      {{ $branch->email }}
                      </div>
                    </div>
                  </li>
                   <li>
                    <i class="fa bg-green"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Phone</a></h3>

                      <div class="timeline-body">
                       {{ $branch->phone }}
                      </div>
                    </div>
                  </li>

                  <li>
                    <i class="fa bg-green"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Country</a></h3>

                      <div class="timeline-body">
                       {{ $branch->Country->name_en }}
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  
                  <!-- END timeline item -->
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