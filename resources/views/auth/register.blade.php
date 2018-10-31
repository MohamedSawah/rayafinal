@extends('layouts.FrontLayout.master')
@section('content')
   <!-- breadcrumbs start -->
    <div class="breadcrumbs-area breadcrumb-bg ptb-100">
        <div class="container">
            <div class="breadcrumbs text-center">
                <h2 class="breadcrumb-title">register page</h2>
                <ul>
                    <li>
                        <a class="active" href="index.html">Home</a>
                    </li>
                    <li>register</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <div class="login-area ptb-100">
     <div class="container">
       <!-- <div class="row justify-content-center"> -->
       <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-content">
                <div class="login-title">
                   <h4>Register</h4>
                   <p>Please sign up using account detail bellow.</p>
                </div>

                <div class="login-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                      <div class="form-group">
                            <label for="name" class=" col-form-label text-md-right">{{ __('firstName') }}</label>

                            <div class="">
                                <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>
                               
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
                                <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required autofocus>

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
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                         <div class="form-group col-md-6 ">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                             </div>
                           
                         <div class="form-group col-md-6">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class=" ">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                 
                 
                         </div>
                    <!-- address 1,city1 -->
                 
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="address" class=" col-form-label text-md-right">Address_1 </label>

                            <div class="">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="" required autofocus>

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
                                <input id="city1" type="text" class="form-control{{ $errors->has('city1') ? ' is-invalid' : '' }}" name="city1" value=" " required autofocus>

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
                                <input id="address2" type="text" class="form-control{{ $errors->has('address2') ? ' is-invalid' : '' }}" name="address2" value="" >

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
                                <input id="city2" type="text" class="form-control{{ $errors->has('city2') ? ' is-invalid' : '' }}" name="city2" value=" " >

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
                                <input id="Phonenumber" type="text" class="form-control{{ $errors->has('mobile1') ? ' is-invalid' : '' }}" name="mobile1" value="{{ old('mobile1') }}" placeholder="01221292137">
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
                                <input id="Phonenumber1" type="text" class="form-control{{ $errors->has('mobile2') ? ' is-invalid' : '' }}" name="mobile2" value="{{ old('mobile2') }}" >

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
                                <input id="landline" type="text" class="form-control{{ $errors->has('landline') ? ' is-invalid' : '' }}" name="landline" value="" >
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
                    </div>










                        <!-- <div class="form-group col-md-6">
                            <label for="country_id" class=" col-form-label text-md-right"> Country</label>

                            <div class="">
                               
                            
                            @foreach ($Countries as $Country)                                                         <div class="col-md-3 col-sm-6">
                                                       
                            
                             
                                   <option value="volvo">{{$Country->name_en}}</option> 

                                
                             @endforeach
                               
                            </div>
                        </div>
                    </div> -->

           <!-- end form of user -->
      


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="login-btn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     </div>
  </div>
</div>
@endsection
