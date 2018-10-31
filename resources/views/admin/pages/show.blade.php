@extends('layouts.master')

@section('content')
<div class="row" style="padding-bottom: 10px;">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('pages.index') }}"> Back</a>
            </div>
        </div>
</div>

<div class="row">
<div class="col-md-11">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
              <li class="active"><a href="#timeline" data-toggle="tab" aria-expanded="true">page  Detailes</a></li>
              
            </ul>
            <div class="tab-content">
              
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          {{$pages->created_at}}
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-blue"></i>

                    <div class="timeline-item">
                      <!--   'title_en', 'title_ar', 'name_ar', 'name_en', 'details_en', 'details_ar', 'slug', 'image', -->

                      <h3 class="timeline-header"><a href="#">Title In English</a> {{$pages->title_en}}</h3>
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-aqua"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Title In Arabic</a> {{$pages->title_ar}}</h3>

                    </div>
                  </li>
                  <!-- END timeline item -->
                             <!-- timeline item -->
                  <li>
                    <i class="fa  bg-blue"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Name In English</a> {{$pages->name_ar}}</h3>
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-aqua"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Name In Arabic</a> {{$pages->name_ar}}</h3>

                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa  bg-yellow"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Description In English</a></h3>

                      <div class="timeline-body">
                       {!!$pages->details_en!!}
                      </div>
                    </div>
                  </li>
                   <li>
                    <i class="fa bg-green"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Description In Arabic</a></h3>

                      <div class="timeline-body">
                       {!!$pages->details_ar!!}
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li>
                    <i class="fa  bg-purple"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">page photos</a> </h3>

                      <div class="timeline-body">
                        <img width="70px"  height="70px" class="img-circle" src="{!!asset('upload/page/'.$pages->image)!!}" class="margin">

                      </div>
                    </div>
                  </li>
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
