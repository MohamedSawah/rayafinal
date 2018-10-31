@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit user</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"><span class="fa fa-arrow-left"></span> Back</a>
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
<form class="form-horizontal" action="{{ route('users.update',$user->id) }}" method="post">
       {{csrf_field()}}
       @method('PUT')
     

       <div class="col-lg-12 col-md-12">
  
     
       <div class="form-group">
                            <label for="name" class=" col-form-label text-md-right">{{ __('firstName') }}</label>

                            <div class="">
                                <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ $user->firstName}}" required autofocus>
                               
                                @if ($errors->has('firstName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="name" class=" col-form-label text-md-right">{{ __('lastName') }}</label>

                            <div >
                                <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ $user->lastName }}" required autofocus>

                                @if ($errors->has('lastName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{$user->password}}" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                             </div>

                    <!-- address 1,city1 -->
                 
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="address" class=" col-form-label text-md-right">Address_1 </label>

                            <div class="">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{$user->address}}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="city1" class=" col-form-label text-md-right">City</label>

                            <div class="">
                                <input id="city1" type="text" class="form-control{{ $errors->has('city1') ? ' is-invalid' : '' }}" name="city1" value=" {{$user->city1}}" required autofocus>

                                @if ($errors->has('city1'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- address 2,city2 -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="address2" class=" col-form-label text-md-right">Address_2 </label>

                            <div class="">
                                <input id="address2" type="text" class="form-control{{ $errors->has('address2') ? ' is-invalid' : '' }}" name="address2" value="{{$user->address2}}" >

                                @if ($errors->has('address2'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="city2" class=" col-form-label text-md-right">City</label>

                            <div class="">
                                <input id="city2" type="text" class="form-control{{ $errors->has('city2') ? ' is-invalid' : '' }}" name="city2" value="{{$user->city2}} " >

                                @if ($errors->has('city2'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <!-- phone 1,2 -->
                     <div class="row">  
                        <div class="form-group col-md-6">
                            <label for="mobile1" class="col-form-label text-md-right">Phone</label>

                            <div class="">
                                <input id="Phonenumber" type="text" class="form-control{{ $errors->has('mobile1') ? ' is-invalid' : '' }}" name="mobile1" value="{{ $user->mobile1}}" placeholder="01221292137">
                                @if ($errors->has('mobile1'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mobile1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="mobile2" class=" col-form-label text-md-right"> Another Phone </label>

                            <div class="">
                                <input id="Phonenumber1" type="text" class="form-control{{ $errors->has('mobile2') ? ' is-invalid' : '' }}" name="mobile2" value="{{ $user->mobile2}}" >

                                @if ($errors->has('mobile2'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mobile2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- lindline,country -->
                    <div class="row">  
                        <div class="form-group col-md-6">
                            <label for="landline" class="col-form-label text-md-right">landline</label>

                            <div class="">
                                <input id="landline" type="text" class="form-control{{ $errors->has('landline') ? ' is-invalid' : '' }}" name="landline" value="{{$user->landline}}" >
                                @if ($errors->has('landline'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('landline') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="country_id" class=" col-form-label text-md-right"> Country</label>

                            <div class="">
                            <select class="form-control" name="country_id">
                            @if ($Countries->count())

                              @foreach($Countries as $Country)
                               <option value="{{ $Country->id }}" >{{ $Country->name_en }}</option>    
                              @endforeach
                             @endif
                            </select>
                            @if ($errors->has('country_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="status" class=" col-form-label text-md-right">{{ __('status') }}</label>
                        <select name="status" class="form-control">
                        <option value="0" {{ $user->status == 0? ' selected="selected"' : ''}}>User</option>                          
                        <option value="1" {{ $user->status == 1? ' selected="selected"' : ''}}>Admin</option> 
                        <option value="2" {{ $user->status == 2? ' selected="selected"' : ''}}>Editer</option>                                
                        </select>
                      </div>
     </div>
<div class="box-footer">
<button type="submit" class="btn btn-primary">update</button>
</div>
</form>



@endsection