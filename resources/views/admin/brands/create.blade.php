@extends('layouts.master')

@section('content')
<div class="row" style="padding-bottom: 10px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Brand</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('brands.index') }}"> Back</a>
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
    <div class="box-header with-border">

     </div>
    <form class="form-horizontal" action="{{route('brands.store')}}" method="post" enctype="multipart/form-data">
        @csrf

               @include('admin.brands.form')
               <div class="box-footer">
       <button type="submit" class="btn btn-primary">Save</button>
</div>
   </form>
   </div>



@endsection