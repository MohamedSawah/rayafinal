@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New opinion</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('opinions.index') }}"> Back</a>
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

    <div class="box box-info" style="padding-top: 10px;">
  
    <form class="form-horizontal" action="{{route('opinions.store')}}" method="post" enctype="multipart/form-data">
        @csrf

               @include('admin.opinions.form')
               <div class="box-footer">
               <button type="submit" class="btn btn-primary">Save</button>
               </div>
       </form>
       </div>


@endsection