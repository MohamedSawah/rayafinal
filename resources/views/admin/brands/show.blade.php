@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Currency</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('currencies.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name English:</strong>
                {{ $currency->name_en }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Name Arabic:</strong>
                {{ $currency->name_ar}}
            </div>
        </div>
    </div>
@endsection